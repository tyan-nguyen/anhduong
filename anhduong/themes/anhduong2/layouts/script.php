<!-- scrolltop -->
<div id="scroll-to-top"> <span class="screen-reader-text">Scroll to top</span>
  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
    <path class="st0" d="M12,2c0.3,0,0.5,0.1,0.7,0.3l7,7C19.9,9.5,20,9.7,20,10c0,0.3-0.1,0.5-0.3,0.7S19.3,11,19,11
				c-0.3,0-0.5-0.1-0.7-0.3L13,5.4V21c0,0.3-0.1,0.5-0.3,0.7S12.3,22,12,22s-0.5-0.1-0.7-0.3S11,21.3,11,21V5.4l-5.3,5.3
				C5.5,10.9,5.3,11,5,11c-0.3,0-0.5-0.1-0.7-0.3C4.1,10.5,4,10.3,4,10c0-0.3,0.1-0.5,0.3-0.7l7-7C11.5,2.1,11.7,2,12,2z"/>
  </svg>
</div>
<!-- scrolltop button --> 

<!-- button right middle --> 

<div class="sticky-cart">
  <div class="sticky-cart__title">GỌI CHO <br/>
    CHÚNG TÔI</div>
  <div class="sticky-cart__info">
    <div class="sticky-cart__info-number"><a href="tel:0388923998"><i class="fa-solid fa-headphones"></i></a></div>
    <div class="sticky-cart__info-icon"><a href="https://zalo.me/0388923998" target="_blank" class="button-action-bottom button-zalo"><img src="/anhduong2/images/zalo.svg" width="40"></a></div>
  </div>
</div>

<!-- button right middle --> 

<script>
	document.addEventListener("DOMContentLoaded", function() {
		var body = document.body;
		var stickyCart = document.querySelector(".sticky-cart");
		var productsHolder = document.querySelector(".products-holder");
  		
		
		if (body.classList.contains("home")) {
		  stickyCart.style.display = "none";
			
			if (productsHolder) {
				var rect = productsHolder.getBoundingClientRect();
  				var productsHolderDistanceFromTop = rect.top;
				console.log("productsHolderDistanceFromTop="+productsHolderDistanceFromTop);
				
			  window.addEventListener("scroll", function() {
				var scrollY = window.scrollY;
				  console.log("scrollY="+scrollY);

				if (scrollY < (productsHolderDistanceFromTop - 100) )  {
				  stickyCart.style.display = "none";
				} else {
				  stickyCart.style.display = "block";
				}
			  });
			}
			
		} else {
		  stickyCart.style.display = "block";
		}
});

</script>

<link rel='stylesheet' id='elementor-post-30475-css' href='/anhduong2/css/post-30475.css?ver=1' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-30565-css' href='/anhduong2/css/post-30565.css?ver=1' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-51676-css' href='/anhduong2/css/post-51676.css?ver=1' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-55948-css' href='/anhduong2/css/post-55948.css?ver=1' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-30465-css' href='/anhduong2/css/post-30465.css?ver=1' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-57920-css' href='/anhduong2/css/post-57920.css?ver=1' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-30479-css' href='/anhduong2/css/post-30479.css?ver=1' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-30482-css' href='/anhduong2/css/post-30482.css?ver=1' type='text/css' media='all' />
<link rel='stylesheet' id='slick-script-css' href='/anhduong2/js/slick/slick.css?ver=1' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-309-css' href='/anhduong2/css/post-309.css?ver=1' type='text/css' media='all' />
<style id='wpcf7-6579b7e477447-inline-inline-css' type='text/css'>
#miel {display:none !important; visibility:hidden !important;}
</style>
<style id='wpcf7-6579b7e47de60-inline-inline-css' type='text/css'>
#miel {display:none !important; visibility:hidden !important;}
</style>
<link rel='stylesheet' id='sow-social-media-buttons-wire-df3bebaba07e-css' href='/anhduong2/css/sow-social-media-buttons-wire-df3bebaba07e.css?ver=1' type='text/css' media='all' />
