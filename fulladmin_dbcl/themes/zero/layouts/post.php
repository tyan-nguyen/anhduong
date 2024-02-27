<?php

use app\themes\zero\assets\IndexAssets;
use app\modules\dashboard\models\PostPublic;
use app\modules\dashboard\models\TagList;

/** @var yii\web\View $this */
/** @var string $content */

IndexAssets::register($this);

$listNewPosts = PostPublic::getPostsPublic('POST')->limit(4)->orderBy(['date_created'=>SORT_DESC])->all();
$listCategories = PostPublic::getCategoriesPublic('POST')->all();
$listTags = (new TagList())->getList();

//register meta tags
$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <title><?= $this->title ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrapper">
	<?= $this->render('guest/header') ?>
	<main>
		 <section class="block-introduce block-sidebar">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-intro">                            
                            	
                            	<div class="ct-right-intro" data-aos="fade-up">
                                
                                	<?= $content ?>
                                	
                                    <!-- <h1 class="title">Giới thiệu chung</h1>
                                    <div style="padding: 16px 45px 16px 45px;">
                                        <img src="https://khaothi.tmu.edu.vn/upload/staticpage/original/staticpage-1698046491.jpg"></div>
                                    <div class="desc2 desc">
                                        <div class="clearfix" style="color: #333333; background-color: #ffffff;">
                                            <div class="hometext m-bottom" style="font-family: OpenSansR, sans-serif; font-style: italic; margin-bottom: 10px !important;">&nbsp;</div>
                                            <div class="hometext m-bottom" style="font-family: OpenSansR, sans-serif; font-style: italic; margin-bottom: 10px !important;">Ph&ograve;ng Khảo th&iacute; &amp; Đảm bảo chất lượng gi&aacute;o dục được th&agrave;nh lập ng&agrave;y 27/08/2007. Trong qu&aacute; tr&igrave;nh x&acirc;y dựng v&agrave; ph&aacute;t triển, năm 2010 ph&ograve;ng được đổi t&ecirc;n từ ph&ograve;ng Khảo th&iacute; &amp; Kiểm định chất lượng gi&aacute;o dục th&agrave;nh ph&ograve;ng Khảo th&iacute; &amp; Đảm bảo chất lượng gi&aacute;o dục</div>
                                        </div>
                                        <div id="news-bodyhtml" class="bodytext margin-bottom-lg" style="margin-bottom: 15px; word-break: keep-all; max-width: 100%; overflow: hidden visible; line-height: 1.7em; font-family: OpenSansR, Arial, sans-serif; color: #333333; background-color: #ffffff;">
                                            <p style="margin-top: 0px; margin-bottom: 0px; text-align: justify;">Ph&ograve;ng Khảo th&iacute; v&agrave; Đảm bảo chất lượng gi&aacute;o dục (KT&amp;ĐBCLGD) được th&agrave;nh lập th&aacute;ng 8 năm 2007 theo Quyết định số 615/TM-TCTTr ng&agrave;y 23 th&aacute;ng 8 năm 2007 của Hiệu trưởng trường Đại học Thương Mại, l&agrave; đơn vị trực thuộc Trường Đại học Thương Mại. Tổ chức v&agrave; hoạt động của Ph&ograve;ng tu&acirc;n theo c&aacute;c quy định của Điều lệ trường đại học, Quy chế tổ chức v&agrave; hoạt động của Trường Đại học Thương Mại v&agrave; c&aacute;c quy định kh&aacute;c c&oacute; li&ecirc;n quan. Ph&ograve;ng hiện c&oacute; 23 c&aacute;n bộ trong đ&oacute; c&oacute; 01 TS, 19 Thạc sỹ, 03 cử nh&acirc;n.</p>
                                        </div>
                                    </div> -->
                                    
                                </div>
                                
                                <div class="sidebar-intro" data-aos="fade-down">
                                
                                	<?php if($this->params['showBanner']){ ?>
                                	<div class="box-wrapper">
                                        <div class="box-title">
                                            <h4 class="title"><?= $this->params['title'] ?></h4>
                                        </div>
                                        <ul>
                                            <li class=" active ">
                                                <a href="https://khaothi.tmu.edu.vn/trang/gioi-thieu-chung-130">Giới thiệu chung</a></li>
                                            <li class="">
                                                <a href="https://khaothi.tmu.edu.vn/trang/chuc-nang-nhiem-vu-131">Chức năng - Nhiệm vụ</a></li>
                                            <li class="">
                                                <a href="co-cau-to-chuc.html">Cơ cấu tổ chức</a></li>
                                        </ul>
                                    </div>
                                	<?php } ?>
                                	
                                	<div class="box-wrapper">
                                        <div class="box-title">
                                            <h4 class="title">Giới thiệu chung</h4>
                                        </div>
                                        <ul>
                                            <li class=" active ">
                                                <a href="https://khaothi.tmu.edu.vn/trang/gioi-thieu-chung-130">Giới thiệu chung</a></li>
                                            <li class="">
                                                <a href="https://khaothi.tmu.edu.vn/trang/chuc-nang-nhiem-vu-131">Chức năng - Nhiệm vụ</a></li>
                                            <li class="">
                                                <a href="co-cau-to-chuc.html">Cơ cấu tổ chức</a></li>
                                        </ul>
                                    </div>
                                    <div class="box-wrapper">
                                    	<div class="box-title box-after">
                                            <h4 class="title">Tin mới nhất</h4>
                                        </div>
                                    	<ul>            
                                        	<?php foreach ($listNewPosts as $iPost=>$post){ ?>
                                        	<li>
                                        		<div class="row">
                                        			<div class="col-sm-4 d-none d-sm-block">
                                                       
                                                          <a href="<?= $post->url ?>"><img loading="lazy" alt="img" src="<?= $post->imgCover ?>" width="100px"></a>
                                                       
                                                    </div>
                                                    <div class="col-sm-8 col-xs-12">
                                                        
                                                          <h4 class="post-title">
                                                            <a href="<?= $post->url ?>"><?= $post->title ?></a>
                                                          </h4>
                                                        
                                                    </div>
                                                </div>
                                          	</li><!-- post end-->
                                        	<?php } ?>
                                        </ul>
                                    </div>
                                    <div class="box-wrapper">                                    
                                    	<div class="box-title box-after">
                                            <h4 class="title">Danh mục</h4>
                                        </div>
                                        
                                        <ul class="arrow nav nav-tabs">
                                        <?php foreach ($listCategories as $iCat=>$cat){ ?>
                                        <li><a href="<?= $cat->url ?>"><?= $cat->name ?></a></li>
                                        <?php } ?>
                                        </ul>
  
                                    </div>
                                    <div class="box-wrapper">
                                    	<div class="box-title box-after">
                                            <h4 class="title">Thẻ</h4>
                                        </div>
                                
                                        <ul class="list-unstyled box-tags">
                                            <?php foreach ($listTags as $slug=>$name){ ?>
                                            <li><a href="/tag/<?= $slug ?>"><?= $name ?></a></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
	</main>
	<?= $this->render('guest/footer') ?>
	
	<div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
      <button class="button-top" title="Back to Top">
        <i class="fa fa-arrow-up" aria-hidden="true"></i>
      </button>
    </div>
    
<?php 

$script = <<< JS
 let ENV = { version: '0', token: 'dGzmJZMb1qEqTHxOCCnp807ENwEu9ls7sp9ukoiJ', SITE_NAME: 'Phòng Khảo thí và Đảm bảo chất lượng giáo dục', BASE_URL: 'https://khaothi.tmu.edu.vn/web/', PUBLIC_URL: 'https://tmu.edu.vn/', LANG: 'vi', tel: '0906122309', hotline: '(024) 3764 3219', email: 'mail@tmu.edu.vn', isAdminUrl: '0', },
        COOKIE_ID = 'Đại học Thương Mại',
        DOMAIN_COOKIE_REG_VALUE = 1,
        DOMAIN_COOKIE_STRING = 'tmu.edu.vn';
    API_URL = 'https://api.tmu.edu.vn/v1';
    let BASE_URL = 'https://khaothi.tmu.edu.vn';
    var validate_full_name = 'Vui lòng nhập Họ và Tên';
    var validate_format_ho_ten = 'Vui lòng nhập Họ và Tên nhiều hơn 3 ký tự';
    var validate_phone = 'Vui lòng nhập Số điện thoại';
    var validate_phone_format = 'Vui lòng nhập đúng định dạng Số điện thoại';
    var validate_email = 'Vui lòng nhập Email';
    var validate_email_format = 'Vui lòng nhập đúng định dạng Email';
    var thanh_cong = 'Thành công';
    var co_loi_xay_ra = 'Thông báo';
    var submit_form_success = 'Thông tin đăng kí của bạn đã được gửi đến Admin';
    var submit_form_error = 'Lỗi hệ thống, vui lòng thử lại sau';

if ($('#album-slide').length > 0) { var swiperFeaturedHome = new Swiper('#album-slide', { loop: false, speed: 1200, spaceBetween: 30, slidesPerView: 2, navigation: { nextEl: '#album-slide-next', prevEl: '#album-slide-prev', }, pagination: { el: '#album-slide-pagination', clickable: true, }, breakpoints: { 310: { slidesPerView: 1, }, 570: { slidesPerView: 2, spaceBetween: 10, }, 767: { slidesPerView: 2, spaceBetween: 30, }, }, }); }
if ($('#admissions-slide').length > 0) { var swiperAdmissions = new Swiper('#admissions-slide', { loop: false, speed: 1200, spaceBetween: 40, slidesPerView: 2.6, navigation: { nextEl: '#admissions-slide-prev', prevEl: '#admissions-slide-next', }, breakpoints: { 310: { slidesPerView: 1.2, spaceBetween: 20, }, 570: { slidesPerView: 2, spaceBetween: 20, }, 992: { slidesPerView: 2.6, spaceBetween: 40, }, }, }); }
if ($('#partner-slide').length > 0) { var swiperpartner = new Swiper('#partner-slide', { loop: false, speed: 1200, spaceBetween: 20, slidesPerView: 6, navigation: { nextEl: '#partner-slide-next', prevEl: '#partner-slide-prev', }, breakpoints: { 310: { slidesPerView: 2, }, 375: { slidesPerView: 3, spaceBetween: 10, }, 768: { slidesPerView: 4, spaceBetween: 20, }, 992: { slidesPerView: 5, spaceBetween: 20, }, 1200: { slidesPerView: 6, spaceBetween: 20, }, }, }); }

$('#formHome').submit(function() { if ($('.keyword-search').val().length < 3) { alert('Vui lòng nhập từ khóa lớn hơn 3 ký tự'); return false; } else { $('#formHome').submit(); } })

$(window).on('scroll', function () {
    // scroll to top btn show/hide
    function scrollTopBtn() {
        var scrollToTop = $('#back-to-top'),
            scroll = $(window).scrollTop();
        if (scroll >= 50) {
            scrollToTop.fadeIn();
        } else {
            scrollToTop.fadeOut();
        }
    }
    scrollTopBtn();
});

// back to top
function backToTop() {
    $('#back-to-top').on('click', function () {
        $('#back-to-top').tooltip('hide');
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
}
backToTop();

JS;
$this->registerJs($script);
?>
    
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
