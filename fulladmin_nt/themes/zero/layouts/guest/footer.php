<?php 
use app\modules\dashboard\models\Links;
use app\modules\dashboard\models\Options;

$quickLink = Links::find()->where(['type'=>'QUICK_LINK'])->all();
$footerLink = Links::find()->where(['type'=>'FOOTER_LINK'])->all();
$socialLink = Links::find()->where(['type'=>'SOCIAL_LINK'])->all();

$setting = Options::getOptions('SETTING');
?>
<footer id="footer" class="footer bg-overlay">
<div class="footer-main">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-4 col-md-6 footer-widget footer-about">
        <h3 class="widget-title">Về chúng tôi</h3>
        <img loading="lazy" class="footer-logo" src="<?= $setting['site_logo_white'] ?>" alt="Constra">
        <p><?= $setting['site_description'] ?></p>
        <div class="footer-social">
          <ul>
          	<?php 
          	foreach ($socialLink as $iLink=>$link){
          ?>
          <li><a <?= $link->open_new_tab ? 'target="_bank"' : '' ?> href="<?= $link->link ?>"><?= $link->name ?></a></li>
          <?php     
          }
          ?>
          </ul>
        </div><!-- Footer social end -->
      </div><!-- Col end -->

     <!-- Col end -->

      <div class="col-lg-4 col-md-6 mt-5 mt-lg-0 footer-widget">
        <h3 class="widget-title">Liên kết</h3>
        <ul class="list-arrow">
        	<?php 
          foreach ($footerLink as $iLink=>$link){
          ?>
          <li><a <?= $link->open_new_tab ? 'target="_bank"' : '' ?> href="<?= $link->link ?>"><?= $link->name ?></a></li>
          <?php     
          }
          ?>
        
        </ul>
      </div><!-- Col end -->

      <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
        <h3 class="widget-title">Bản đồ</h3>
        <div class="working-hours">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d245.63233749748625!2d106.3375597152774!3d9.924179611521206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0175b80077a69%3A0x88e890ee0daf9887!2zQ-G7rWEgSMOgbmcgTmjDtG0gS8OtbmggLSBT4bqvdCBWbHhkIE5ndXnhu4VuIFRyw6xuaA!5e0!3m2!1svi!2s!4v1708161529516!5m2!1svi!2s" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>

    </div><!-- Row end -->
  </div><!-- Container end -->
</div><!-- Footer main end -->

<div class="copyright">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-12">
        <div class="copyright-info text-center">
          <?= $setting['site_copyright'] ?>
        </div>
      </div>

     <!--  <div class="col-md-12">
        <div class="copyright-info text-center">
          <span>Distributed by <a href="https://themewagon.com/">Themewagon</a></span>
        </div>
      </div> -->

      <div class="col-md-12">
        <div class="footer-menu text-center">
          <ul class="list-unstyled mb-0">
          <?php 
          foreach ($footerLink as $iLink=>$link){
          ?>
          <li><a <?= $link->open_new_tab ? 'target="_bank"' : '' ?> href="<?= $link->link ?>"><?= $link->name ?></a></li>
          <?php     
          }
          ?>
          </ul>
        </div>
      </div>
    </div><!-- Row end -->

    <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
      <button class="btn btn-primary" title="Back to Top">
        <i class="fa fa-angle-double-up"></i>
      </button>
    </div>

  </div><!-- Container end -->
</div><!-- Copyright end -->
</footer><!-- Footer end -->
