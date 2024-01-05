<?= $this->render('header') ?>

<style>
/* .facades-timeline::before, .timeline::before { */
.dot-div-center:before {
    content: "";
    height: 100%;
    position: absolute;
    left: calc(50% - 10px);
    top: 0px;
    display: block;
    width: 20px;
    background-image: radial-gradient(circle farthest-side at center, black 10%, rgba(255, 255, 255, 0) 0%);
    background-position: center;
    background-size: 20px 10px;
    background-repeat: repeat-y;
    z-index: -99;
}

.right-col{
    display: flex; 
    align-items: center; 
    text-align:center;
    font-weight: bold;
    font-size:1.3rem;
    padding-left:40px;
}

.left-col{
    display: flex; 
    flex-direction:column;
    align-items: flex-end; 
    text-align:right;
    font-weight: bold;
    font-size:1.3rem;
    padding-right:40px;
}

.container-box h3{
    color:#5f2869;
}

.left-col::after{
        content: "";
    border: 10px solid #c4d600;
    background: transparent;
    position: absolute;
    right: -37.5px;
    top: calc(50% - 37.5px);
    border-radius: 50%;
    height: 75px;
    width: 75px;
    animation: pulse 3s ease-out;
    animation-iteration-count: infinite;
    z-index: 1;
    opacity: 0;
}

@media (max-width: 720px){
	.dot-div-center:before {
        background-image: none;
    }
    
    .right-col{
        padding-left:10px;
        margin-top:20px;
    }
    
    .left-col{
        padding-right:10px;
    }
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
                <?= $this->render('thietke/slide.php') ?>
                <?php echo $this->render('thietke/breadrum.php') ?>
                <?php // $this->render('home/info-1.php') ?>
                
              
                <?php // $content ?>
                
                <?= $this->render('thietke/content') ?>
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

</body>
</html>