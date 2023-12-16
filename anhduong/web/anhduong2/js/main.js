/* ----------------------------- DEFINE VARIABLE ---------------------------- */
var NEWS_SLIDER = ".news";
var NEWS_FLOW = ".newsflow";
var BUSINESS_SLIDER = ".business-cases";
var CONTAINER_W = 1140;
var CONTAINER = ".corp-container";
var CF7_ID = {
    "en": {
        'download': 350,
        'request': 303,
        'newsletter': 333,
        'contact': 5,
        'alloyreport' : 1069,
        'cart' : 28336,
        'pp_newsletter': 29650,
        'pp_mailto': 47224,
    },
    "fr": {
        'download': 350,
        'request': 303,
        'newsletter': 333,
        'contact': 5,
        'alloyreport' : 1069,
        'cart' : 28336,
        'pp_newsletter': 29650,
        'pp_mailto': 47224,
    },
    "de": {
        'download': 26436,
        'request': 303,
        'newsletter': 26438,
        'contact': 26434,
        'alloyreport' : 26432,
        'cart' : 28343,
        'pp_newsletter': 29793,
        'pp_mailto': 47224,
    },
    "pt-br": {
        'download': 26437,
        'request': 303,
        'newsletter': 26439,
        'contact': 26435,
        'alloyreport' : 26433,
        'cart' : 28344,
        'pp_newsletter': 51221,
        'pp_mailto': 47224,
    },
    "it": {
        'download': 47420,
        'request': 303,
        'newsletter': 47421,
        'contact': 47419,
        'alloyreport' : 47417,
        'cart' : 47418,
        'pp_newsletter': 47423,
        'pp_mailto': 47422,
    },
    "es": {
        'download': 51216,
        'request': 303,
        'newsletter': 51217,
        'contact': 50166,
        'alloyreport' : 51222,
        'cart' : 51215,
        'pp_newsletter': 51219,
        'pp_mailto': 51218,
    },

}
var TEXT_LANG = {
    'fr': {
        'txt_AjaxLoading': 'Processing...',
        'txt_MsgDownloadSuccess': 'Merci de votre intérêt pour notre guide, vous allez recevoir un lien de téléchargement par email dans quelques secondes.',
        'txt_MsgRequestSuccess': 'Merci de votre intérêt pour notre guide...',
        'txt_MsgNewsletterSuccess': 'Merci de votre intérêt pour notre newsletter.',
        'txt_MsgContactSuccess': 'Merci de votre intérêt pour notre guide...',
        'txt_MsgMailtoSuccess': 'Merci de votre intérêt pour aperam.<br/>Votre demande a été reçue.',
        'txt_Selected': 'Choisi(s)',
        'txt_SelectAll': 'tous sélectionnés!',
        'text_Search': 'Chercher...',
        'text_Select_Country': 'Choisissez le pays',
        'text_Select_Forms': 'Sélectionnez les formulaires',
        'txt_MailExiste': 'Cet email a été utilisé.',
        'txt_Newsletter': 'Merci de votre intérêt pour notre newsletter.',
        'txt_FindProject': 'Trouvez un projet',
        'txt_ButtonContact': 'Contact Us',
        'txt_LabelForm': 'Formes',
        'txt_LabelCountry': 'Pays',
        'text_ErrorService' : 'Vous devez sélectionner ce champ pour voir nos coordonnées'
    },
    'en': {
        'txt_AjaxLoading': 'Processing...',
        'txt_MsgDownloadSuccess': 'Thank you for your interest.',
        'txt_MsgContactSuccess': 'Thank you for your interest. Your message has been received.',
        'txt_MsgNewsletterSuccess': 'Thank you for your interest in our newsletter.',
        'txt_MsgMailtoSuccess': 'Thank You for your Interest in aperam.<br/>Your request has been received.',
        'txt_Selected': 'Selected',
        'txt_SelectAll': 'all selected!',
        'text_Search': 'Search...',
        'text_Select_Country': 'Select Country',
        'text_Select_Forms': 'Select Forms',
        'txt_MailExiste': 'Cet email a été utilisé.',
        'txt_Newsletter': 'Thank you for your interest in our newsletter.',
        'txt_FindProject': 'Find a project',
        'txt_MsgAlloyReportFailed' : 'No report you have selected, please select again',
        'txt_ButtonContact': 'Contact Us',
        'txt_LabelForm': 'Forms',
        'txt_LabelCountry': 'Country',
        'text_ErrorService' : 'You need to select this field to see our contact information'
    },
    'de': {
        'txt_AjaxLoading': 'Processing...',
        'txt_MsgDownloadSuccess': 'Thank you for your interest.',
        'txt_MsgContactSuccess': 'Thank you for your interest. Your message has been received.',
        'txt_MsgNewsletterSuccess': 'Thank you for your interest in our newsletter.',
        'txt_MsgMailtoSuccess': 'Vielen Dank für Ihr Interesse an aperam.<br/>Ihre Anfrage wurde empfangen',
        'txt_Selected': 'Selected',
        'txt_SelectAll': 'all selected!',
        'text_Search': 'Search...',
        'text_Select_Country': 'Select Country',
        'text_Select_Forms': 'Select Forms',
        'txt_MailExiste': 'Cet email a été utilisé.',
        'txt_Newsletter': 'Thank you for your interest in our newsletter.',
        'txt_FindProject': 'Find a project',
        'txt_MsgAlloyReportFailed' : 'No report you have selected, please select again',
        'txt_ButtonContact': 'Contact Us',
        'txt_LabelForm': 'Forms',
        'txt_LabelCountry': 'Country',
        'text_ErrorService' : 'You need to select this field to see our contact information'
    },
    'pt-br': {
        'txt_AjaxLoading': 'Em processamento...',
        'txt_MsgDownloadSuccess': 'Obrigado pelo seu interesse.',
        'txt_MsgContactSuccess': 'Obrigado pelo seu interesse. Sua mensagem foi recebida.',
        'txt_MsgNewsletterSuccess': 'Obrigado pelo seu interesse. Sua mensagem foi recebida.',
        'txt_MsgMailtoSuccess': 'Obrigado pelo seu interesse em aperam.<br/>Seu pedido foi recebido',
        'txt_Selected': 'Selecionado',
        'txt_SelectAll': 'todos selecionados!',
        'text_Search': 'Procurar...',
        'text_Select_Country': 'Selecione o pais',
        'text_Select_Forms': 'Selecione Formulários',
        'txt_MailExiste': 'Cet email a été utilisé.',
        'txt_Newsletter': 'Obrigado pelo seu interesse em nosso boletim informativo.',
        'txt_FindProject': 'Encontre um projeto',
        'txt_MsgAlloyReportFailed' : 'Nenhum relatório que você selecionou, selecione novamente',
        'txt_ButtonContact': 'Contate-Nos',
        'txt_LabelForm': 'Formulários',
        'txt_LabelCountry': 'País',
        'text_ErrorService' : 'Você precisa selecionar este campo para ver suas informações de contato'
    },
    'es': {
        'txt_AjaxLoading': 'Procesando...',
        'txt_MsgDownloadSuccess': 'Gracias por su interés.',
        'txt_MsgContactSuccess': 'Gracias por su interés. Tu mensaje ha sido recibido.',
        'txt_MsgNewsletterSuccess': 'Gracias por su interés en nuestro boletín.',
        'txt_MsgMailtoSuccess': 'Gracias por su interés en aperam.<br/>Su solicitud ha sido recibida.',
        'txt_Selected': 'Seleccionada',
        'txt_SelectAll': 'todo seleccionado!',
        'text_Search': 'Búsqueda...',
        'text_Select_Country': 'Seleccionar país',
        'text_Select_Forms': 'Seleccionar formularios',
        'txt_MailExiste': 'Este correo electrónico ha sido utilizado.',
        'txt_Newsletter': 'Gracias por su interés en nuestro boletín.',
        'txt_FindProject': 'Encuentra un proyecto',
        'txt_MsgAlloyReportFailed' : 'No ha seleccionado ningún informe, seleccione de nuevo',
        'txt_ButtonContact': 'Contacta con nosotras',
        'txt_LabelForm': 'Formularios',
        'txt_LabelCountry': 'País',
        'text_ErrorService' : 'Debe seleccionar este campo para ver su información de contacto'
    },
    'it': {
        'txt_AjaxLoading': 'in lavorazione...',
        'txt_MsgDownloadSuccess': 'Grazie per il vostro interesse.',
        'txt_MsgContactSuccess': 'Grazie per il vostro interesse. il tuo messaggio è stato ricevuto.',
        'txt_MsgNewsletterSuccess': 'Grazie per il tuo interesse per la nostra newsletter.',
        'txt_MsgMailtoSuccess': 'Grazie per il tuo interesse per aperam.<br/>La tua richiesta è stata ricevuta.',
        'txt_Selected': 'Selezionata',
        'txt_SelectAll': 'tutti selezionati!',
        'text_Search': 'Ricerca...',
        'text_Select_Country': 'Seleziona il paese',
        'text_Select_Forms': 'Selezionare i moduli',
        'txt_MailExiste': 'Questa email è stata utilizzata.',
        'txt_Newsletter': 'Grazie per il tuo interesse per la nostra newsletter.',
        'txt_FindProject': 'Trova un progetto',
        'txt_MsgAlloyReportFailed' : 'Nessun rapporto che hai selezionato, seleziona di nuovo',
        'txt_ButtonContact': 'Contattaci',
        'txt_LabelForm': 'Le forme',
        'txt_LabelCountry': 'Paese',
        'text_ErrorService' : 'È necessario selezionare questo campo per visualizzare le informazioni di contatto'
    }

};


var MONTH_NAME = {
    'en' : ["january","february","march","april","may","june","july","august","september","october","november","december"],
    'fr' : ["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre"],
    'de' : ["januar", "februar", "märz", "april", "mai", "juni", "juli", "august", "september", "oktober", "november", "dezember"],
    'pt-br' : ["janeiro", "fevereiro", "março", "abril", "maio", "junho", "julho", "agosto", "setembro", "outubro", "novembro", "dezembro"],
    'es' : ["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"],
    'it' : ["gennaio", "febbraio", "marzo", "aprile", "aprile", "giugno", "luglio", "agosto", "settembre", "ottobre", "novembre", "dicembre"]
};

jQuery(function ($) {

    if ($(".selectbox").length > 0) {
        jQuery(".selectbox").each(function (index, value) {
            jQuery(this).SumoSelect({ placeholder: 'This is a placeholder' });
        });
    }

    if ($(".selectboxsearch").length > 0) {
        jQuery(".selectboxsearch").each(function (index, value) {
            jQuery(this).SumoSelect({ search: true, searchText: TEXT_LANG[current_language].text_Search });
        });
    }

    if ($(".selectboxmulti").length > 0) {
        jQuery(".selectboxmulti").each(function (index, value) {
            jQuery(this).SumoSelect({ search: true, searchText: TEXT_LANG[current_language].text_Search, csvDispCount: 3 });
        });
    }

    $('.SumoSelect').each(function () {
        var $this = $(this);
        $this.find('> .optWrapper.multiple .options li.opt').on('click', function () {
            $this.find('.optWrapper.multiple > .options li.opt').removeClass('selected');
            $(this).addClass('selected');
            var $labelText = $(this).find('label').text();
            $this.find('.CaptionCont').attr('title', $labelText);
            $this.find('.CaptionCont > span').text($labelText);
        });
    });

    if (jQuery(".mCustomScrollbar").length > 0) {
        jQuery(".mCustomScrollbar").mCustomScrollbar({
            theme: "dark-2"
        });
    }
});

/**
 * set position left of slider nos clients for fullwidth
 * @param {object} pObject
 */
function setPosXSlider(pObject) {
    var posLeft = Math.floor((jQuery(window).width() - CONTAINER_W) / 2);

    if (posLeft > 0) {
        jQuery(pObject).css({ "margin-left": posLeft + "px" });
    } else {
        if(jQuery(window).width() < 640)
            posLeft = 0;
        else
            posLeft = jQuery(CONTAINER).css('padding-left');
        jQuery(pObject).css({ "margin-left": posLeft });
    }
}


function setWidthEleBusinessCases() {
    var maxW = jQuery(CONTAINER).width();
    var screenW = jQuery(window).width();

    var pLeft = jQuery(CONTAINER).offset().left;
    // console.log('P LEFT ', pLeft, ' - W COL ', Math.floor(maxW/2));
    jQuery('.business-cases__item-infoholder').css({ 'paddingLeft': pLeft + 'px' });
    jQuery('.business-cases__item-photo__col').css({ 'minWidth': Math.floor(maxW / 2) + 'px' });
}


function setTopBlocTitle() {

    var heroDOM = '.bloc-hero';
    var btnDOM = '.bloc-hero__btn';
    var arrowDOM = '#n2-ss-2-arrow-next';

    if (jQuery(heroDOM).length == 0) return;

    var btnDOM_h = jQuery(btnDOM).position().top + jQuery(btnDOM).height();
    var arrowDOM_h = jQuery(arrowDOM).position().top + jQuery(arrowDOM).height();

    var delta = Math.max(btnDOM_h, arrowDOM_h);
    var deltaTop = jQuery(window).width() <= 575 ? 38 : 0;

    var top = Math.floor(jQuery(heroDOM).height() - delta - 50 + deltaTop);
    // console.log('HERO ', jQuery(heroDOM).height(), ' DEL ', delta, ' TOP ', top);

    if (top > 0)
        jQuery('.bloc-title').css({ 'top': -top + 'px' });

}

/* -------------------------------------------------------------------------- */
function toggleSwitchLang(pSelector, pSwitchBox, pDir = 'left') {
    var isShow = jQuery(pSwitchBox).is(":visible");
    // console.log('isShow ', isShow);
    jQuery(pSwitchBox).toggle("fast", "swing");

    if(pDir == 'left'){
        var left = jQuery(pSelector).position().left;
        jQuery(pSwitchBox).css({ 'left': left });
    }
    else if(pDir == 'right'){
        // console.log('LEFT ', jQuery(pSelector).position().left , ' W ', jQuery(pSwitchBox).outerWidth())
        var right = jQuery(pSelector).position().left -  340 + 40;
        jQuery(pSwitchBox).css({ 'left': right });
    }  

    if (!isShow)
        jQuery(pSelector)
            .find("i")
            .addClass("up");
    else
        jQuery(pSelector)
            .find("i")
            .removeClass("up");
}


/* -------------------------------------------------------------------------- */
function toggleSwitchLink(pSelector, pSwitchBox) {
    var isShow = jQuery(pSwitchBox).is(":visible");
    // console.log('isShow ', isShow);
    jQuery(pSwitchBox).toggle("fast", "swing");
    if (!isShow)
        jQuery(pSelector)           
            .addClass("up");
    else
        jQuery(pSelector)           
            .removeClass("up");
}

/* -------------------------------------------------------------------------- */
function closeSearchBoxAndLanguage(){
    if(jQuery('.lang-switch').is(":visible")){
        jQuery('.lang-switch').toggle("fast", "swing");
        jQuery('.lang-switch')
            .find("i")
            .addClass("up");
    }
    if(jQuery('.search-frm').is(":visible")){
        jQuery('.search-frm').toggle("fast", "swing");
    }
}

/* -------------------------------------------------------------------------- */
function toggleNewsflow(objClose, objOpen) {
    jQuery(objClose).slideUp(200, function () {
        // Animation complete.
        jQuery(objOpen).slideDown('fast');
        jQuery(objOpen).css({ 'visibility': 'visible' });
    });


}

/* -------------------------------------------------------------------------- */
function setPosYNewsflow() {

    if (jQuery(NEWS_FLOW).length == 0) return;
    var hHeader = jQuery('.share-number-holder').is(":visible") ? jQuery('.site-header-inner').height() + jQuery('.share-number-holder').height() : jQuery('.site-header-inner').height();
    var posTitle = Math.floor(jQuery('.grand-banner__inner-title').offset().top);

    var posY = hHeader + (posTitle - hHeader - jQuery(NEWS_FLOW).height()) / 2;
    // console.log('hHeader  = ', hHeader , ' - Newsflow Y = ', posY , ' - posTitle = ', posTitle);
    jQuery(NEWS_FLOW).css({ 'top': posY + 'px' });
}


// 
/* -------------------------------------------------------------------------- */
function addButtonSliderBusiness() {
    if(jQuery('.business-cases-container').length == 0) return;

    var domHTML = '<div class="arrow-holder"><div class="arrow-holder__item"><i class="info-prev fa-solid fa-arrow-left"></i></div><div class="arrow-holder__item"><i class="info-next fa-solid fa-arrow-right"></i></div></div>';
   
    var YPhoto = jQuery('.business-cases__item-photo').offset().top;
    var YInfo = jQuery('.business-cases__item-infoholder-inner').offset().top;

    var del = 0;
    var minDel = 1000;
    var hArrow = 45;

    jQuery('.business-cases__item').each(function(){
        hPhoto = jQuery(this).find('.business-cases__item-photo').outerHeight();
        hInfo = jQuery(this).find('.business-cases__item-infoholder-inner').outerHeight();
        del = (hPhoto - hInfo)/2 ;      
        minDel = Math.min(del, minDel);
        // console.log(hPhoto, ' - ', hInfo, ' = ', del, ' => ', minDel);
    })


    var posY = ((minDel - hArrow) / 2) > 0 ? ((minDel - hArrow) / 2) + 25 : 30;
    // console.log('pos Y ', posY);
    

    if (jQuery('.business-cases-container').find('.arrow-holder').length == 0) {
        jQuery('.business-cases-container').append(domHTML);

        if(jQuery(window).width() > 1200)
            jQuery('.business-cases-container').find('.arrow-holder').css({top: posY + 'px'});
        else
            jQuery('.business-cases-container').find('.arrow-holder').removeAttr('style');
    }

    if(jQuery(window).width() > 1200)
        jQuery('.business-cases-container').find('.arrow-holder').css({top: posY + 'px'});
    else
        jQuery('.business-cases-container').find('.arrow-holder').removeAttr('style');
}
/* -------------------------------------------------------------------------- */
function addButtonSliderNews() {
    // console.log('ADD BUTTON');
    if(jQuery('.news').length == 0) return;

    // console.log('ADD BUTTON AFTER');   

    var marginleft = jQuery('.news__item:nth-child(2)').offset().left + jQuery('.news__item:nth-child(2)').width() - 100;
    // console.log('offset L ', (jQuery('.news__item:nth-child(2)').offset().left), ' - OS ', jQuery('.news__item:nth-child(2)').width(), ' - marginleft ', marginleft);

    if (jQuery('.news-holder').find('.arrow-holder').length == 0) {
        var domHTML = '<div class="arrow-holder"><div class="arrow-holder__item"><i class="icon-arrow_prev prev" onclick="swapItem(-1)"></i></div><div class="arrow-holder__item"><i class="icon-arrow_next next" onclick="swapItem(1)"></i></div></div>';
        jQuery('.news-holder').prepend(domHTML);     
    }

    var marginTop = Math.floor((jQuery('.news-holder').height() - jQuery('.news-holder').find('.arrow-holder').height()) / 2); 
    jQuery('.news-holder .arrow-holder').css({'left': marginleft + 'px', 'top' : marginTop});
}



// check Email
/* -------------------------------------------------------------------------- */
function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}

// disable all form when enter
/* -------------------------------------------------------------------------- */
function disableEnterSubmit() {
    jQuery('.wpcf7-form').on('keyup keypress', function (e) {
        var keyCode = e.keyCode || e.which;
        if (keyCode === 13) {
            if (!jQuery(e.target).is("textarea")) {
                e.preventDefault();
                return false;
            }
        }
    });
}

// call show popup when click sumit button
/* -------------------------------------------------------------------------- */
function addEventMsgSubmit() {    

	document.addEventListener( 'wpcf7invalid', function( event ) {
	  	// close fancybox before
        jQuery.fancybox.close();  
	}, false );


    
    jQuery('.wpcf7-form button[type="submit"], .wpcf7-form button').click(function (event) {
        
        jQuery.fancybox.open(
            '<div class="message">' + TEXT_LANG[current_language].txt_AjaxLoading + '</div>'
        );        
    });   
}


// Event after send email success in CF7
/* -------------------------------------------------------------------------- */
function processSentMailSuccess() {
 
    document.addEventListener('wpcf7mailsent', function (event) {      
        
        jQuery('form').each(function () {            
            if(parseInt(event.detail.contactFormId) != parseInt(CF7_ID[current_language].alloyreport)) {
                this.reset();
            }   
            else{
                jQuery(this).on( 'reset', function(e) {
                    e.preventDefault();
                });
            }

            jQuery('#frm_newsletter .newsletter-chk, #frm_download .download-chk').hide();
            jQuery('#frm_newsletter .newsletter .newsletter-btn button, #frm_download .download .download-btn button').attr("disabled", true);
        });

        setTimeout(function () {            
            var frmId = event.detail.contactFormId;
            var msg = '';
          
            // choose msg belong to form type
            if (parseInt(frmId) == parseInt(CF7_ID[current_language].contact))
                msg = TEXT_LANG[current_language].txt_MsgContactSuccess;
            else if (parseInt(frmId) == parseInt(CF7_ID[current_language].download))
                msg = TEXT_LANG[current_language].txt_MsgDownloadSuccess;
            else if (parseInt(frmId) == parseInt(CF7_ID[current_language].request))
                msg = TEXT_LANG[current_language].txt_MsgRequestSuccess;
            else if (parseInt(frmId) == parseInt(CF7_ID[current_language].newsletter))
                msg = TEXT_LANG[current_language].txt_MsgNewsletterSuccess;
            else if (parseInt(frmId) == parseInt(CF7_ID[current_language].pp_newsletter))
                msg = TEXT_LANG[current_language].txt_MsgNewsletterSuccess;
             else if (parseInt(frmId) == parseInt(CF7_ID[current_language].pp_mailto))
                msg = TEXT_LANG[current_language].txt_MsgMailtoSuccess;

            if (parseInt(frmId) == parseInt(CF7_ID[current_language].alloyreport)){
                // console.log('event.detail.apiResponse ', event.detail.apiResponse);
                var listReport = event.detail.apiResponse.list_reports;
                
                
                if(listReport === null || (listReport !== null && listReport.length == 0))
                    msg =  TEXT_LANG[current_language].txt_MsgAlloyReportFailed;
                else{
                    msg = '';
                    listReport.forEach((element) => {
                        msg += "<div class='report_item'><a href='" + element.url +   "' target='_blank'>" + element.name + "</a><a href='" + element.url +   "' target='_blank'><i class='fal fa-arrow-to-bottom'></i></a></div>";
                    });
                }
            }   
            // close fancybox before
            jQuery.fancybox.close();
            if(msg != ''){
                jQuery.fancybox.open(
                    '<div class="message">' + msg + '</div>',
                    {
                        smallBtn: true,
                        toolbar: false
                    }
                );
            }

        }, 100);

    }, false);
}

// open lightbox for iframe
/* -------------------------------------------------------------------------- */
function openLighbox(pObject) {
    // console.log('pObject ', pObject);
    jQuery.fancybox.open(jQuery(pObject));
}


// add ul li item into #nav_menu-6 on footer
/* -------------------------------------------------------------------------- */
function addSubMenuFooter(obj){

    var arrItem = { "Tiếng Việt": "#", 
                    "Tiếng Anh" : "#",
                };
    var domUL = jQuery('<ul>', {'id' : 'OurWebsite'});
    var domLI = '';
    for(var item in arrItem){
        domA = jQuery('<a>', {'href' : arrItem[item],
                                'target' : 'blank'
                            }).text(item);

        domLI = jQuery('<li>').append(domA);
        domUL.append(domLI);
    }

    // console.log("UL ", domUL);
    jQuery(obj).append(domUL);

    jQuery(obj).find('.widget-title').click(function() {
        toggleSwitchLink(this, '#OurWebsite');
    });
}


/* -------------------------------------------------------------------------- */
function init(){
    // add fancy box
    jQuery('[data-fancybox]').fancybox({
        youtube : {
            controls : 0,
            showinfo : 0
        }
    });

    openTabAccordion();
    disableOptionContactForm();
}

/* -------------------------------------------------------------------------- */
jQuery(window).resize(function () {
    setPosXSlider(NEWS_SLIDER);
   
    setPosYNewsflow();
    setWidthEleBusinessCases();
    addButtonSliderBusiness();

    if(jQuery(window).width() <= 960){
        jQuery('#mega-menu-menu-1 .item-add').remove();
    }

});

jQuery(document).ready(function () {
    loadMonthReportAlloyByYear('.alloy-download select[name="date-dl"]');
    init();
    setPosXSlider(NEWS_SLIDER);
    // addButtonSliderNews();

    setPosYNewsflow();
    setWidthEleBusinessCases();

    addButtonSliderBusiness();

    disableEnterSubmit();
    addEventMsgSubmit();
    processSentMailSuccess();

    addSubMenuFooter('#nav_menu-6');
    /* setHeightSlider(NEWS_SLIDER);
    showHideRgpdDownload();
    showHideRgpdNewsletter(); */

    setCurrMonthYearAlloyDownload();
    setEventForYearAlloy();

   
    // add event open newsletter in popup
    //openNewsletter();

    // add event open mailto in popup
    addEventBtnPPMailto();
});

window.addEventListener("orientationchange", function () {
    // Generate a resize event if the device doesn't do it
    // console.log('orientationchange');
    window.dispatchEvent(new Event("resize"));

}, false);

/* -------------------------------------------------------------------------- */


/* Max Mega Menu 
 * Unhide mobile menu */
jQuery(document).ready(function ($) {
    $('.mega-menu').parents().show();

    $(window).on('resize', function () {
        $('.mega-menu').parents().show();
    });
});

/* -------------------------------------------------------------------------- */
function openPopupReadyToBuy(){
    jQuery.fancybox.open({
        src  : '.popup-holder',
        type : 'inline',             
        opts : {
            afterShow : function( instance, current ) {
                // console.log( 'done!' );
            }
        }
    }); 
}

/* -------------------------------------------------------------------------- */

// listening event click of burger menu toggle
document.addEventListener('click', function (event) {
    // console.log(event.target);
    if (jQuery(event.target).hasClass('mega-menu-toggle-block')) {
        // console.log(event.target);
        // console.log(jQuery(event.target).find('.mega-toggle-label').attr('aria-expanded'));
        var isOpen = jQuery(event.target).find('.mega-toggle-label').attr('aria-expanded') == "true" ? 1 : 0;
        if (isOpen) {
            var topBarLI = jQuery('.top-bar ul').first().children().clone();
            topBarLI.each(function (index, el) {
                // console.log('ITEM ', el);
                $el = jQuery(el),
                    classes = $el.attr('class').split(' ');
                // console.log('class ', classes);

                for (var i = 0; i < classes.length; i++) {                       
                    $el.addClass('mega-' + classes[i]).removeClass(classes[i]);   
                    $el.addClass('mega-align-bottom-left mega-menu-flyout item-add');
                    $el.find('a').addClass('mega-menu-link');
                }
            })
            jQuery('#mega-menu-menu-1').prepend(topBarLI);
        }
        else{
            jQuery('#mega-menu-menu-1 .item-add').remove();
        }
    }
}, false);



/**
 * Add event click for button Ready to buy for block Addition service in page result
 * if Type of product == Alloy then this button remove, else add event click
 */

document.addEventListener("DOMContentLoaded", function(event) { 
    if(jQuery('#readytobuy').length > 0 && typeof( isAlloy ) != 'undefined'){
        if( isAlloy == 1)
            jQuery('#readytobuy').remove(); 
        else{
            jQuery('#readytobuy').click(function(){ 
                openPopupReadyToBuy();
            }); 
        }
    }
	
}); 




/* -------------------------------------------------------------------------- */
function calcHeightApp(){
    var maxH = 0;
    var temptH = 0;
    var itemH = 0;
    jQuery('.app-holder .app').find('.app__item').each(function (index, ele) {
        temptH = maxH;
        itemH = 0;
        jQuery(this).find('.app__item__info > div').each(function(i, item){
            itemH += jQuery(this).outerHeight();
            // console.log(i, ' - ' , jQuery(this).outerHeight(), ' - ', itemH);
        })
        maxH = Math.max(itemH, maxH);
        // console.log(temptH, jQuery(this).find('.app__item__info').outerHeight(), maxH);
    })

    jQuery('.app__item__info').height(maxH);
}

/* -------------------------------------------------------------------------- */
function calcHeightRurique(){
    var maxH = 0;
    var temptH = 0;
    var itemH = 0;
    jQuery('.rubriques-holder .rubriques').find('.rubriques__item').each(function (index, ele) {
        temptH = maxH;
        itemH = 0;
        jQuery(this).find('.rubriques__item__info > div').each(function(i, item){
            itemH += jQuery(this).outerHeight();
            // console.log(i, ' - ' , jQuery(this).outerHeight(), ' - ', itemH);
        })
        maxH = Math.max(itemH, maxH);
        // console.log(temptH, jQuery(this).find('.app__item__info').outerHeight(), maxH);
    })

    jQuery('.rubriques__item__info').height(maxH);
}

/* -------------------------------------------------------------------------- */
function setEventForYearAlloy(){
    jQuery('select[name="date-dl"]').change(function(){
        var selectYear = jQuery( this ).val();
        // console.log('SELECTED ', selectYear);
        if(selectYear == '') return;

        // console.log('SS ', data_time_alloy[selectYear]);
        var d = new Date();
        m = d.getMonth();    
        y = d.getFullYear();
        var monthName = MONTH_NAME[current_language][m];
        
        jQuery('select[name="month-dl"]').empty();
        jQuery('select[name="month-dl"]').html(gCboMonth);
        jQuery('select[name="month-dl"]').find('option').each(function(index, ele){ 
            if(jQuery(this).val() != ''){  
                // console.log(index, ' - CP ', data_time_alloy[selectYear].indexOf(index));
                if(data_time_alloy[selectYear].indexOf(index) == -1)
                    jQuery(this).remove();   
            }           
        });   

        jQuery('select[name="month-dl"]').find('option').each(function(){
            if(jQuery(this).val().toLowerCase() == monthName)
                jQuery(this).prop('selected', true);
        }); 

        jQuery('select[name="month-dl"]')[0].sumo.reload(); 
    });
}

/* -------------------------------------------------------------------------- */
var gCboMonth = '';
function setCurrMonthYearAlloyDownload(){
    
    gCboMonth = jQuery('select[name="month-dl"]').html();
    if(jQuery('select[name="month-dl"]').length > 0 && jQuery('select[name="date-dl"]').length > 0){
        // console.log('data_time_alloy ', data_time_alloy);

        var d = new Date();
        y = d.getFullYear();

        // remove date not file attach
        if (typeof data_time_alloy !== 'undefined' && data_time_alloy !== null){
            jQuery('select[name="date-dl"]').find('option').each(function(){              
                if(jQuery(this).val() in data_time_alloy == false && jQuery(this).val() != ''){                
                    jQuery(this).remove();  
                }  
            }); 
        }

        // not set current year for select box date-dl
        // jQuery('select[name="date-dl"] option[value="'+ y +'"]').prop('selected', true);
        // jQuery('select[name="date-dl"]')[0].sumo.reload();

        setTimeout(function(){
            jQuery('select[name="date-dl"]').trigger('change');
        }, 1000)
    }
   
}

/* -------------------------------------------------------------------------- */
function openTabAccordion(){
    if(jQuery('.elementor-accordion').length == 0) return;

    var hash = location.hash;
    if(typeof (hash) == 'undefined') return;

    var tab = hash.substring(hash.lastIndexOf('-') + 1, hash.length);
    if(tab == '') return;
    // console.log(hash, " --> ", tab);

    setTimeout(function(){
        jQuery('.elementor-accordion').find('div[data-tab="' + tab + '"]').trigger('click');
    }, 100);  
    
}

/* -------------------------------------------------------------------------- */
function disableOptionContactForm(){
    if(jQuery('#frmContact').length == 0) return;

    jQuery('#frmContact select[name="sendto"] option[value="I need a sales contact for"]').prop('disabled', true);
    jQuery('#frmContact select[name="sendto"] option[value="I need technical support in"]').prop('disabled', true);

    jQuery('#frmContact select[name="sendto"]')[0].sumo.reload(); 

    var aTextPadding = ['Stainless', 'Alloys', 'Electrical', 'Carbon', 'All products'];
    jQuery('#frmContact').find('ul li').each(function(index, ele){ 
        if(aTextPadding.indexOf(jQuery(this).find('label').text()) != -1){
            jQuery(this).find('label').css({'padding-left': '30px'});
        }
    })
}


/* -------------------------------------------------------------------------- */
function callShare(obj, objShow){
    // console.log(jQuery(obj).parent().find(objShow));
    jQuery(objShow).css({'opacity' : 0});
    var alpha = jQuery(obj).parent().find(objShow).css('opacity') == 0 ? 1 : 0;
    jQuery(obj).parent().find(objShow).css({'opacity' : alpha});
}


/* -------------------------------------------------------------------------- */
function changeLang(currLang, lang, pUrl){
    // if change diffrent lang
    console.log(currLang , "!=", lang)
    if(currLang != lang){
        console.log('DEFF CLEAR LOCASTORAGE');
        clearCartLocal();
    }       

    window.location.href = pUrl;
}

/* -------------------------------------------------------------------------- */
/*
function openNewsletter__(){
    if(!sessionStorage.ppnewsletter || sessionStorage.ppnewsletter != 1){       
                
        if(jQuery('.ppcart-holder').length > 0 && (!localStorage.ppcart || localStorage.ppcart == 0)) return;
        if(jQuery('#frm_newsletterpp').length == 0) return;
        
        setTimeout(function(){
            jQuery.fancybox.open({
                src: '#frm_newsletterpp',
                type: 'inline',
                opts: {
                    afterShow: function (instance, current) {
                        console.log('done!');
                        sessionStorage.ppnewsletter = 1;
                    }
                }
            });
        }, 2000);        
    }


    jQuery('.btn-ppnewsletter').click(function() {
        jQuery.fancybox.open({
            src: '#frm_newsletterpp',
            type: 'inline',
            opts: {
                afterShow: function (instance, current) {
                    console.log('done!');
                }
            }
        });
    });
    
}
*/

/* -------------------------------------------------------------------------- */
function setWithExpiry(key, value, ttl) {
    const now = new Date()

    // `item` is an object which contains the original value
    // as well as the time when it's supposed to expire
    const item = {
        value: value,
        expiry: now.getTime() + ttl,
    }
    localStorage.setItem(key, JSON.stringify(item))
}

/* -------------------------------------------------------------------------- */
function getWithExpiry(key) {
    const itemStr = localStorage.getItem(key)
    // if the item doesn't exist, return null
    if (!itemStr) {
        return null
    }
    const item = JSON.parse(itemStr)
    const now = new Date()

    console.log('item in getWithExpiry ', item);
    // compare the expiry time of the item with the current time
    if (now.getTime() > item.expiry) {
        // If the item is expired, delete the item from storage
        // and return null
        localStorage.removeItem(key)
        return null
    }
    return item.value
}

/* -------------------------------------------------------------------------- */
function openNewsletter(){
    var ppNewsletter = getWithExpiry('ppnewsletter');
    console.log('ppNewsletter ', ppNewsletter);

    if(ppNewsletter == null){       
                
        if(jQuery('.ppcart-holder').length > 0 && (!localStorage.ppcart || localStorage.ppcart == 0)) return;
        if(jQuery('#frm_newsletterpp').length == 0) return;
        
        setTimeout(function(){
            jQuery.fancybox.open({
                src: '#frm_newsletterpp',
                type: 'inline',
                opts: {
                    afterShow: function (instance, current) {
                        console.log('done!');
                        jQuery('#frm_newsletterpp select[name="country"]')[0].sumo.reload(); 
                        
                        var ttc = 15*24*60*60*1000;
                        // var ttc = 1000*60;
                        setWithExpiry('ppnewsletter', 1, ttc);
                    }
                }
            });
        }, 2000);        
    }


    jQuery('.btn-ppnewsletter').click(function() {
        jQuery.fancybox.open({
            src: '#frm_newsletterpp',
            type: 'inline',
            opts: {
                afterShow: function (instance, current) {
                    console.log('done!');
                }
            }
        });
    });
    
} 

/* -------------------------------------------------------------------------- */
function openMailto(maildes){
            
    if(jQuery('#frm_mailtopp').length == 0) return;    
   
    jQuery.fancybox.open({
        src: '#frm_mailtopp',
        type: 'inline',
        opts: {
            afterShow: function (instance, current) {
                //console.log('SHOW PP MAILTO');
                jQuery('#frm_mailtopp .mail_destinataire').html("Send mail to "+maildes);
                jQuery('#frm_mailtopp input[name="emailto"]').val(maildes);

            }
        }
    });       
}

/* -------------------------------------------------------------------------- */
function addEventBtnPPMailto(){
    if(jQuery('#btn-ppmailto').length == 0) return;
    jQuery('#btn-ppmailto').click(function() {
        event.preventDefault()
        var mailto = jQuery(this).attr('data-mailto');
        console.log('mailto ', mailto);
        openMailto(mailto);
    });    
}

/* -------------------------------------------------------------------------- */
function loadMonthReportAlloyByYear(elementClass){
    if(jQuery(elementClass).length == 0) return;

    var data = {
        action: 'get_alloy_months',
        pa_nonce: pa_vars.pa_nonce,                
    };

    var cboMonthCopy = jQuery('.alloy-download select[name="month-dl"]').children();

    jQuery(elementClass).change(function(){

        // console.log('year ', jQuery(this).val());
        data.cboYear = jQuery(this).val();
        jQuery('select[name="month-dl"]')[0].sumo.disable(); 
      
        // console.log('cboMonthCopy ', cboMonthCopy)
        jQuery.post(my_ajax_object.ajax_url, data, function (response) {       
            if (response) {
                // console.log('response ', response); 
                
                var arrMonths = response.data;
                if(arrMonths.length == 0){
                    jQuery('.alloy-download select[name="month-dl"]').children().not(':first').remove();
                }
                else{
                    arrMonths = arrMonths.map(str => {
                        return parseInt(str, 10);
                    });

                    jQuery('.alloy-download select[name="month-dl"]').empty().html(cboMonthCopy);
                    jQuery('.alloy-download select[name="month-dl"]').find('option').each(function(index, ele){                        
                        if(index != 0 && jQuery.inArray(index, arrMonths) === -1) {                        
                            jQuery(this).remove();
                        }
                    })
                    jQuery('select[name="month-dl"]')[0].sumo.enable(); 
                    jQuery('select[name="month-dl"]')[0].sumo.reload(); 
                   
                }
                
            };
        });        
    })

}