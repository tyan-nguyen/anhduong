console.log('CART LOAD');
function openPopupCart() {
    jQuery.fancybox.open({
        src: '.ppcart-holder',
        type: 'inline',
        opts: {
            afterShow: function (instance, current) {
                console.log('done!');
            }
        }
    });
}


/* -------------------------------------------------------------------------- */
function callPopupClose() {
    localStorage.ppcart = 1;
    jQuery.fancybox.close();
    
}

/* -------------------------------------------------------------------------- */
function initParam() {
    if (!localStorage.isupload) localStorage.isupload = 0;
    if (!localStorage.products) localStorage.products = [];

}

/* -------------------------------------------------------------------------- */
function loadCartContent(pStep) {
    var lenPro = !localStorage.products ? 0 : localStorage.getObj('products').length;
    var haveUpload = !localStorage.isupload ? 0 : localStorage.isupload;
    var fileName = !localStorage.fileupload ? '' : localStorage.fileupload;
    var proIds = lenPro == 0 ? '' : localStorage.getObj('products');
    
    var currLangue = current_language;

    data = {
        action: 'get_cart',
        pa_nonce: pa_vars.pa_nonce,
        wpml_lang: currLangue,
        step: pStep,
        isUpload: haveUpload,
        fileUpload: fileName,
        quantity: lenPro,
        proIds: proIds
    };

    jQuery('#cart_content').empty();

    var loadingHolder = jQuery('<div>', { 'class': 'docs-content__item-loadding' });
    var loadingDom = jQuery('<img>', { 'src': theme_url + '/assets/images/loading.svg' });
    loadingHolder.append(loadingDom);
    jQuery('#cart_content').append(loadingHolder);

    // Get response and populate area select field
    jQuery.post(my_ajax_object.ajax_url, data, function (response) {

        jQuery('#cart_content').empty();
        if (response) {
            // console.log('response ', response);
            jQuery('#cart_content').fadeIn('fast');
            jQuery('#cart_content').html(response);

            thisFileUpload();
            hideError();

            if (jQuery(".selectbox").length > 0) {
                jQuery(".selectbox").each(function (index, value) {
                    jQuery(this).SumoSelect({ placeholder: 'This is a placeholder' });
                });
            }

            if(jQuery('#cart_content .wpcf7-form').length > 0){
                console.log("INIT CART FORM");
                $form = jQuery('#cart_content .wpcf7-form').eq(0);
                // register all the necessary events on the Contact Form 7 form
                wpcf7.init($form[0]);     
                              
            }

            // scroll when goto form CF7
            if(pStep == 2){
                var objScroll = document.getElementById('breadcrumbs');
                objScroll.scrollIntoView({
                    behavior: 'smooth'
                }); 
               
            }
        };
    });
}

/* -------------------------------------------------------------------------- */
function loadCartThanks(pStep) {

    // reset localstorage
    var keysToRemove = ["fileupload", "isupload", "products"];
    for (var key of keysToRemove) {
        localStorage.removeItem(key);
    }
    
    data = {
        action: 'get_cart',
        pa_nonce: pa_vars.pa_nonce,
        step: pStep,          
    };

    jQuery('#cart_content').empty();

    var loadingHolder = jQuery('<div>', { 'class': 'docs-content__item-loadding' });
    var loadingDom = jQuery('<img>', { 'src': theme_url + '/assets/images/loading.svg' });
    loadingHolder.append(loadingDom);
    jQuery('#cart_content').append(loadingHolder);

    // Get response and populate area select field
    jQuery.post(my_ajax_object.ajax_url, data, function (response) {
       
        if (response) {
            // console.log('response ', response);
            jQuery('#cart_content').fadeIn('fast');
            jQuery('#cart_content').html(response);

            var objScroll = document.getElementById('breadcrumbs');
            objScroll.scrollIntoView({
                behavior: 'smooth'
            }); 
        };
    });
}

/* -------------------------------------------------------------------------- */
function thisFileUpload() {
    console.log('add event btn');

    jQuery("#uploadCart").click(function () {
        // open file upload
        document.getElementById("file").click();     
        
    });

    jQuery("#file").change(function () {
        // disable btn upload
        jQuery('#uploadCart').attr("disabled", true);        
        jQuery("#uploadCart").addClass('disable');
        jQuery('.uploadcart-loading').show();
        jQuery('.cart-holder-inner__item-error').html('');

        // hide text upload in screen cart have product
        if(jQuery('.text-upload').length > 0){
            jQuery('.text-upload').hide();
        }

        var form_data = new FormData();
        var files = jQuery('#file')[0].files;
        
        // Check file selected or not
        if (files.length > 0) {            

            form_data.append('file', files[0]);
            form_data.append('action', 'upload_cart'); 

            // add data of list product in page cart-product
            saveCartProduct(0);  
            
            jQuery.ajax({
                url: my_ajax_object.ajax_url,
                type: 'post',
                contentType: false,
                processData: false,
                data: form_data,
                success: function (response) {
                    console.log('upload success');
                    
                    console.log(response);
                    console.log(typeof(response));

                    var resultResponse = JSON.parse(response) 
                    console.log(typeof(resultResponse));
                    console.log(resultResponse);
                    // enable btn upload
                    jQuery('#uploadCart').attr("disabled", false);        
                    jQuery("#uploadCart").removeClass('disable');
                    jQuery('.uploadcart-loading').hide();

                    // hide text upload in screen cart have product
                    // if(jQuery('.text-upload').length > 0){
                    //     jQuery('.text-upload').show();
                    // }

                    if(resultResponse.status == 200){
                        localStorage.isupload = 1;
                        localStorage.fileupload = resultResponse.filename;
                        
                        // load content cart
                        loadCartContent(1);
                    }
                    else if(resultResponse.status == '101'){
                        jQuery('.cart-holder-inner__item-error').html(resultResponse.error);
                    }
                },  
                error: function (response) {
                    console.log('error');
                }
            });
           
        } else {
            alert("Please select a file.");
        }
    });
};

/* -------------------------------------------------------------------------- */
Storage.prototype.setObj = function(key, obj) {
    return this.setItem(key, JSON.stringify(obj))
}
Storage.prototype.getObj = function(key) {
    return JSON.parse(this.getItem(key))
}

/* -------------------------------------------------------------------------- */
function addProduct(obj){
    console.log('ADD PRO');
    var proId = jQuery(obj).attr('data-proid');
    saveDataToLocalStorage(proId);

    // effect when add cart
    var stickyCart = jQuery('.sticky-cart');
    stickyCart.addClass('shake');   
    
    // add class to know product was add
    checkProductHasAdd();

    setTimeout(function(){
       // set number in sticky
        setNumberProForSticky();
    }, 300)

    setTimeout(function(){
        stickyCart.removeClass('shake');
    }, 500)
    
    console.log(localStorage.getObj('products'));
}

/* -------------------------------------------------------------------------- */
function removeProduct(proId){
    jQuery('div[data-id="' + proId + '"]').remove();

    // remove in localstorage
    var storeProId = localStorage.getObj('products');
    storeProId = storeProId.map(i=>Number(i));

    const index = storeProId.indexOf(proId);
    console.log('find ', index);
    if (index > -1) {
        storeProId.splice(index, 1);
        localStorage.setItem('products', JSON.stringify(storeProId));
        
        // set number in sticky
        setNumberProForSticky()

        if(localStorage.getObj('products').length == 0)
            loadCartContent(1);

        // remover form session if have
        removeFormSession(proId);
    }
}

/* -------------------------------------------------------------------------- */
function removeFormSession(proId){
    data = {
        action: 'remove_cart',
        pa_nonce: pa_vars.pa_nonce,
        proId: proId,          
    };

    // Get response and populate area select field
    jQuery.post(my_ajax_object.ajax_url, data, function (response) {       
        if (response) {
          console.log('remove sec ok');
        };
    });
}

/* -------------------------------------------------------------------------- */
function removeFile(){
    localStorage.isupload = 0;
    localStorage.fileupload = '';
    saveCartProduct(1)
    // loadCartContent(1);
}

/* -------------------------------------------------------------------------- */
function setNumberProForSticky(){
    if(localStorage.products.length == 0) return;   
    var numberPro = localStorage.getObj('products').length;
    jQuery('.sticky-cart__info-number').html(numberPro)
}

/* -------------------------------------------------------------------------- */
function saveDataToLocalStorage(data)
{
    var a = [];
    a = localStorage.products == '' ? [] :  JSON.parse(localStorage.getItem('products'));

    if(!a.includes(data))
        a.push(data);  
  
    localStorage.setItem('products', JSON.stringify(a));
}


/* -------------------------------------------------------------------------- */
function checkValidateCart(){

    var valid = 1;
    // check all form valid
    if(localStorage.products.length == 0) return valid;

    var frmLen = localStorage.getObj('products').length;

    for(var i = 0; i < frmLen; i++){
        var dataFrm = jQuery('form[name="cart_' + i + '"]').serializeArray();
        jQuery.each( dataFrm, function( index, ele ) {
            // console.log(i, val);
            if(ele.name == 'dimension1' && ele.value == ''){           
                jQuery('form[name="cart_' + i + '"]').find('div[for="dimension1"]').show();
                valid = 0;
            }
            if(ele.name == 'quantity' && ele.value == ''){                
                jQuery('form[name="cart_' + i + '"]').find('div[for="quantity"]').show();
                valid = 0;
            }                
        });
    }

    return  valid;
}

/* -------------------------------------------------------------------------- */
function callFormCF(){
    var valid = checkValidateCart();
    var data = {};
    var frmLen = 0;
    
    if(valid){
        // build json data for server
        if(localStorage.products.length > 0) 
            frmLen = localStorage.getObj('products').length;

        data = {
            action: 'save_cart',
            pa_nonce: pa_vars.pa_nonce,
            isupload: localStorage.isupload       
        };

        data.fileupload = localStorage.isupload == 1 ?  localStorage.fileupload : '';
        data.products = [];

        data.comment = jQuery('textarea[name="comment"]').length > 0 ? jQuery('textarea[name="comment"]').val() : '';

        if(frmLen > 0){
            jQuery('form.frm-cart').each(function(){
                var dataFrm = jQuery(this).serializeArray();
                var proData = {};
                jQuery.each( dataFrm, function( index, ele ) {
                    proData[ele.name] = ele.value;              
                });
    
                data.products.push(proData);                
            });
           /*  for(var i = 0; i < frmLen; i++){
                var dataFrm = jQuery('form[name="cart_' + i + '"]').serializeArray();
                var proData = {};
                jQuery.each( dataFrm, function( index, ele ) {
                    proData[ele.name] = ele.value;              
                });
    
                data.products.push(proData);
            } */
        }
       

        // console.log('data ', data);
        
        // send ajax to server    
        // Get response and populate area select field
        jQuery('#cart_content').empty();

        var loadingHolder = jQuery('<div>', { 'class': 'docs-content__item-loadding' });
        var loadingDom = jQuery('<img>', { 'src': theme_url + '/assets/images/loading.svg' });
        loadingHolder.append(loadingDom);
        jQuery('#cart_content').append(loadingHolder);

        jQuery.post(my_ajax_object.ajax_url, data, function (response) {
            if (response) {
                loadCartContent(2);
            };
        });
    }
    else{
        // scroll up        
        // var objScroll = document.querySelectorAll('.bloc-cart-inner')[0];
        var objScroll = document.getElementById('breadcrumbs');
        objScroll.scrollIntoView({
            behavior: 'smooth'
        });       
    }
}

/* -------------------------------------------------------------------------- */
// Event after send email success in CF7
function callCartThanks() {

    document.addEventListener('wpcf7mailsent', function (event) {        
        
        jQuery.fancybox.close();

        setTimeout(function () {            
            var frmId = event.detail.contactFormId;
            if (parseInt(frmId) == parseInt(CF7_ID[current_language].cart)){
                loadCartThanks(3);
            }

            /* var msg = event.detail.apiResponse.message;
            jQuery.fancybox.open(
                '<div class="message">' + msg + '</div>',
                {
                    smallBtn: true,
                    toolbar: false
                }
            );

            setTimeout(function(){
                jQuery.fancybox.close();

                // load content cart page thanks
                loadCartThanks(3);
            }, 3000) */
        }, 100);

    }, false);
}

/* -------------------------------------------------------------------------- */
function hideError(){
    if(jQuery( '.input-require' ).length == 0) return;

    jQuery( '.input-require' ).keyup(function() {
        if(jQuery(this).val() != ''){
            jQuery(this).parent().find('.error').hide();
        }
    });
}

/* -------------------------------------------------------------------------- */
function checkProductHasAdd(){
    var aProID = [];
    if(localStorage.products.length > 0) {
        aProID = localStorage.getObj('products');
        aProID = aProID.map(Number);

        jQuery('button.add-cart').each(function(){
            var dataProID = jQuery(this).attr('data-proid');
            console.log('dataProID ', dataProID, aProID, aProID.includes(dataProID));
            for(var i = 0; i < aProID.length; i++){
                if(aProID[i] == dataProID){
                    console.log(i , aProID[i], dataProID, 'IN array');
                    jQuery(this).addClass('add');
                    break;
                }
                else{
                    console.log('F ', i , aProID[i], dataProID, 'IN array');
                }
            }            
        })
        
    }
}

/* -------------------------------------------------------------------------- */
function saveCartProduct(loadContent = 0){
    if(jQuery('form.frm-cart').length > 0){
        var data = {};
        data = {
            action: 'save_cart',
            pa_nonce: pa_vars.pa_nonce,
        };

        data.products = [];
        data.comment = jQuery('textarea[name="comment"]').length > 0 ? jQuery('textarea[name="comment"]').val() : '';

        jQuery('form.frm-cart').each(function(){
            var dataFrm = jQuery(this).serializeArray();
            var proData = {};
            jQuery.each( dataFrm, function( index, ele ) {
                proData[ele.name] = ele.value;              
            });

            data.products.push(proData);                   
        });

        jQuery.post(my_ajax_object.ajax_url, data, function (response) {
            if (response) {
                console.log('response ', response);   
                if(loadContent == 1)
                    loadCartContent(1);                 
            };
        });           
    }
}


/* -------------------------------------------------------------------------- */
function clearCartLocal(){
    // reset localstorage
    var keysToRemove = ["fileupload", "isupload", "products"];
    for (var key of keysToRemove) {
        localStorage.removeItem(key);
    }
}



/* -------------------------------------------------------------------------- */
jQuery(document).ready(function ($) {
    if (jQuery('.ppcart-holder').length > 0 && (!localStorage.ppcart || localStorage.ppcart == 0)){
        setTimeout(function(){
            openPopupCart();
        }, 5000);
    }      

    initParam();
    loadCartContent(1);
    setNumberProForSticky();
    callCartThanks();
    
});