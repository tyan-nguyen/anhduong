<?php

use app\themes\zero\assets\IndexAssets;

/** @var yii\web\View $this */
/** @var string $content */

IndexAssets::register($this);
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
		<?= $this->render('guest/banner') ?>
		<?= $this->render('guest/about') ?>
		<?= $this->render('guest/news') ?>
		<?= $this->render('guest/news') ?>
		<?= $this->render('guest/news') ?>
	</main>
	<?= $this->render('guest/footer') ?>
	
	<div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
      <button class="button-top" title="Back to Top">
        <i class="fa fa-arrow-up" aria-hidden="true"></i>
      </button>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    
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
