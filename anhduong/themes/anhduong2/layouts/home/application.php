<?php 
use app\models\DataApplication;

$data = DataApplication::data();
$duAnArray = array_slice($data, 0, 8);//tu 1-24
?>

<section class="elementor-section elementor-top-section elementor-element elementor-element-ee94ad7 bloc-app elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ee94ad7" data-element_type="section">
  <div class="elementor-container elementor-column-gap-default">
    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c9ff8fa" data-id="c9ff8fa" data-element_type="column">
      <div class="elementor-widget-wrap elementor-element-populated">
        <div class="elementor-element elementor-element-8fe7cb5 elementor-widget elementor-widget-heading" data-id="8fe7cb5" data-element_type="widget" data-widget_type="heading.default">
          <div class="elementor-widget-container">
            <h2 class="elementor-heading-title elementor-size-default">DỰ ÁN</h2>
          </div>
        </div>
        <div class="elementor-element elementor-element-d1c4cc1 elementor-widget elementor-widget-text-editor" data-id="d1c4cc1" data-element_type="widget" data-widget_type="text-editor.default">
          <div class="elementor-widget-container">
            <div class="app-holder">
              <div class="app">
              
              <?php 
    		foreach ($duAnArray as $index=>$duAn){
    		?>
                <?= $this->render('application/app1', ['model'=>$duAn]) ?>                
            <?php } ?>
                <?php // $this->render('application/app2') ?>
                <?php // $this->render('application/app3') ?>
                
        
              </div>
            </div>
            <script>
                jQuery(document).ready(function() {
                    calcHeightApp();
                })
            
                jQuery(window).on('resize orientationchange', function() {  
                    calcHeightApp();
                 })
            </script> 
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
