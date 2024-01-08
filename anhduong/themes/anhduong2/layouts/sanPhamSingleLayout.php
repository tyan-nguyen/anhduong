<?= $this->render('header') ?>
<style>
.slider-nav-thumbnails .slick-slide {
	opacity: 0.5;
}

.slider-nav-thumbnails .slick-slide.slick-active {
	opacity: 1;
  background: green;
}

.slick-slide {
    padding-left: 5px;
}

.slider-nav-thumbnails .slick-slide.slick-active {
    opacity: 1;
    background: white;
}

.slider-nav-thumbnails .slick-slide img:hover {
    border:2px solid #eb5e0b;
}


.slider-nav-thumbnails{
    width:300px;
}

.slider-nav-thumbnails .slick-track{
    width:auto !important;
}
.slider-nav-thumbnails img{
    cursor:pointer;
}

.fancy-caption-title{
    font-size:2.5rem;
}


.sanpham-tbl{
    border-collapse: collapse;
    border: 0px !important;
}

.sanpham-tbl tr{
    border-bottom: 1px solid #e6e6e6;
}

.sanpham-tbl tr:last-child{
    border-bottom: 0px;
}

.sanpham-tbl tr td{
    border: 0px;
}

.sanpham-tbl tr td:first-child{
    text-align: left;
}
.sanpham-tbl tr td:last-child{
    text-align: right;
}


</style>
<body class="page-template-default page page-id-3155 page-child parent-pageid-3143 wp-custom-logo mega-menu-menu-1 css3-animations no-js page-layout-full-width-no-sidebar overlap-enabled sidebar no-topbar elementor-default elementor-kit-26685 elementor-page elementor-page-3155">
<div id="page" class="site"> <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
  <header id="masthead" class="site-header sticky mobile-menu"  >
    <div class="corp-container">
      <div class="site-header-inner">
        <div class="site-branding space-logo logo-head-mobile"> <a href="/" class="custom-logo-link" rel="home"><img width="338" height="100" src="/anhduong2/images/logo.png" class="custom-logo no-lazyload" alt="aperam" decoding="async" srcset="/anhduong2/images/logo.png 2x" loading="eager" /></a>
          <div class="color-over"></div>
        </div>
        <!-- .site-branding -->
        
        <?= $this->render('menu') ?>
        <!-- .nav-element --> 
      </div>
      <!-- .site-header-inner --> 
    </div>
    <!-- .corp-container --> 
    
    <!-- share nunber for mobile --> 
    <!-- <div class="share-number-holder mobile">
			<i class="icon-stock_exchange"></i>
			<div class="price">				
				
				<span class="st_price" style="font-size: 18px;"><strong>30.99 €</strong></span><span class="st_changep" style="color:#009900; font-size:13px; margin-left:5px;"><img  style="float:right; margin-left:2px; margin-top:-2px;" data-src="/wp-content/themes/siteorigin-corp-child/assets/images/up_g.gif" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img  style="float:right; margin-left:2px; margin-top:-2px;" data-src="/wp-content/themes/siteorigin-corp-child/assets/images/up_g.gif" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img src="/wp-content/themes/siteorigin-corp-child/assets/images/up_g.gif" style="float:right; margin-left:2px; margin-top:-2px;"/></noscript></noscript><strong>0,26%</strong></span>
				
			</div>
		</div>--> 
    
  </header>
  <!-- #masthead -->
  
  <div id="content" class="site-content">
    <div class="corp-container">
      <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
          <article id="post-3155" class="post-3155 page type-page status-publish post">
            <div class="entry-content">
              <div data-elementor-type="wp-page" data-elementor-id="3155" class="elementor elementor-3155" data-elementor-post-type="page">
                <?= $this->render('sanphamsingle/slide.php') ?>
                <?php echo $this->render('sanphamsingle/breadrum.php') ?>
                
                <?= $content ?>
                <?php // $this->render('home/info-1.php') ?>
                <?php // $this->render('product/content-header') ?>
                <?php // $this->render('product/content-product') ?>
                <?php // $this->render('page/content-content') ?>
                <?php // $this->render('home/product-4.php') ?>
                <?php // $this->render('home/banner') ?>
                
                <!-- application -->
                <?php //$this->render('home/application') ?>
                <?php // $this->render('home/info-more') ?>
                
                <!-- contact -->
                <?php // $this->render('home/contact') ?>
                <?= $this->render('home/newsletter') ?>
              </div>
            </div>
            <!-- .entry-content --> 
            
          </article>
          <!-- #post-## --> 
          
        </main>
        <!-- #main --> 
      </div>
      <!-- #primary --> 
      
    </div>
    <!-- .corp-container --> 
  </div>
  <!-- #content --> 
  
  <!-- footer -->
  <?= $this->render('home/footer') ?>
</div>
<!-- #page --> 

<!-- script section -->
<?= $this->render('script') ?>

<?= $this->render('home/script2') ?>
<?= $this->render('home/popup') ?>
<script>
/* jQuery(document).ready(function () {
    // add event open newsletter in popup
    openNewsletter();
}); */

$('.fanc').fancybox({
	// Options will go here
	/* caption : function( instance, item ) {
      return $(this).find('figcaption').html();
  	} */
});


$('#slider1').slick({
 	slidesToShow: 1,
 	slidesToScroll: 1,
 	arrows: false,
 	fade: false,
 	asNavFor: '#slider-nav-thumbnails-1',
 });

 $('#slider-nav-thumbnails-1').slick({
 	slidesToShow: 5,
 	slidesToScroll: 1,
 	asNavFor: '#slider1',
 	dots: false,
 	focusOnSelect: true
 });

 // Remove active class from all thumbnail slides
 $('#slider-nav-thumbnails-1 .slick-slide').removeClass('slick-active');

 // Set active class to first thumbnail slides
 $('#slider-nav-thumbnails-1 .slick-slide').eq(0).addClass('slick-active');

 // On before slide change match active thumbnail to current slide
 $('#slider1').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
 	var mySlideNumber = nextSlide;
 	$('#slider-nav-thumbnails-1 .slick-slide').removeClass('slick-active');
 	$('#slider-nav-thumbnails-1 .slick-slide').eq(mySlideNumber).addClass('slick-active');
});


$('#slider2').slick({
 	slidesToShow: 1,
 	slidesToScroll: 1,
 	arrows: false,
 	fade: false,
 	asNavFor: '#slider-nav-thumbnails-2',
 });

 $('#slider-nav-thumbnails-2').slick({
 	slidesToShow: 5,
 	slidesToScroll: 1,
 	asNavFor: '#slider2',
 	dots: false,
 	focusOnSelect: true
 });

 // Remove active class from all thumbnail slides
 $('#slider-nav-thumbnails-2 .slick-slide').removeClass('slick-active');

 // Set active class to first thumbnail slides
 $('#slider-nav-thumbnails-2 .slick-slide').eq(0).addClass('slick-active');

 // On before slide change match active thumbnail to current slide
 $('#slide2').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
 	var mySlideNumber = nextSlide;
 	$('#slider-nav-thumbnails-2 .slick-slide').removeClass('slick-active');
 	$('#slider-nav-thumbnails-2 .slick-slide').eq(mySlideNumber).addClass('slick-active');
});


$('#slider3').slick({
 	slidesToShow: 1,
 	slidesToScroll: 1,
 	arrows: false,
 	fade: false,
 	asNavFor: '#slider-nav-thumbnails-3',
 });

 $('#slider-nav-thumbnails-3').slick({
 	slidesToShow: 5,
 	slidesToScroll: 1,
 	asNavFor: '#slider3',
 	dots: false,
 	focusOnSelect: true
 });

 // Remove active class from all thumbnail slides
 $('#slider-nav-thumbnails-3 .slick-slide').removeClass('slick-active');

 // Set active class to first thumbnail slides
 $('#slider-nav-thumbnails-3 .slick-slide').eq(0).addClass('slick-active');

 // On before slide change match active thumbnail to current slide
 $('#slide3').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
 	var mySlideNumber = nextSlide;
 	$('#slider-nav-thumbnails-3 .slick-slide').removeClass('slick-active');
 	$('#slider-nav-thumbnails-3 .slick-slide').eq(mySlideNumber).addClass('slick-active');
});


$('#slider4').slick({
 	slidesToShow: 1,
 	slidesToScroll: 1,
 	arrows: false,
 	fade: false,
 	asNavFor: '#slider-nav-thumbnails-4',
 });

 $('#slider-nav-thumbnails-4').slick({
 	slidesToShow: 5,
 	slidesToScroll: 1,
 	asNavFor: '#slider4',
 	dots: false,
 	focusOnSelect: true
 });

 // Remove active class from all thumbnail slides
 $('#slider-nav-thumbnails-4 .slick-slide').removeClass('slick-active');

 // Set active class to first thumbnail slides
 $('#slider-nav-thumbnails-4 .slick-slide').eq(0).addClass('slick-active');

 // On before slide change match active thumbnail to current slide
 $('#slide4').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
 	var mySlideNumber = nextSlide;
 	$('#slider-nav-thumbnails-4 .slick-slide').removeClass('slick-active');
 	$('#slider-nav-thumbnails-4 .slick-slide').eq(mySlideNumber).addClass('slick-active');
});

$('#slider5').slick({
 	slidesToShow: 1,
 	slidesToScroll: 1,
 	arrows: false,
 	fade: false,
 	asNavFor: '#slider-nav-thumbnails-5',
 });

 $('#slider-nav-thumbnails-5').slick({
 	slidesToShow: 5,
 	slidesToScroll: 1,
 	asNavFor: '#slider5',
 	dots: false,
 	focusOnSelect: true
 });

 // Remove active class from all thumbnail slides
 $('#slider-nav-thumbnails-5 .slick-slide').removeClass('slick-active');

 // Set active class to first thumbnail slides
 $('#slider-nav-thumbnails-5 .slick-slide').eq(0).addClass('slick-active');

 // On before slide change match active thumbnail to current slide
 $('#slide5').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
 	var mySlideNumber = nextSlide;
 	$('#slider-nav-thumbnails-5 .slick-slide').removeClass('slick-active');
 	$('#slider-nav-thumbnails-5 .slick-slide').eq(mySlideNumber).addClass('slick-active');
});

</script>
</body>
</html>