
<section style="margin:40px 0">
    <div class="container container-box">
    	<!-- <div class="row">
    		<div class="col-md-12 content-text">
    			<h2 class="node-title"><span class="field-wrapper" style="color: #5f2869;"><?= $model['title'] ?></span></h2>
    		</div>
    	</div>-->
    	
    	<div class="row">
			<div class="col-md-6">
				<img src="/anhduong2/images/du-an/<?= $model['image'] ?>" />
			</div>
			
			<div class="col-md-6 fancy-info">
				<h2 class="node-title"><span class="field-wrapper" style="color: #5f2869;"><?= $model['title'] ?></span></h2>
				<p><?= $model['subTitle'] ?></p>
				<p class="fancy-caption-content"><?= $model['desc'] ?></p>
				
				
			</div>
		</div>
		
		<!-- <div class="row" style="margin-top:20px">
			<div class="col-md-12">
				<p>Chúng tôi cung cấp vật liệu đa dạng phù hợp cho mọi công trình từ trang trí nội, ngoại thất cho các toà cao ốc, văn phòng, chung cư, khách sạn, khu nghỉ dưỡng, trung tâm thương mại...</p>
			</div>
		</div>
		-->

        					

    </div>
</section>


<section class="elementor-section elementor-top-section elementor-element elementor-element-ee94ad7 bloc-app elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ee94ad7" data-element_type="section" style="background-color: #f2f2f2;padding:40px;">
  <div class="elementor-container elementor-column-gap-default" >
    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c9ff8fa" data-id="c9ff8fa" data-element_type="column">
      <div class="elementor-widget-wrap elementor-element-populated">
        <div class="elementor-element elementor-element-8fe7cb5 elementor-widget elementor-widget-heading" data-id="8fe7cb5" data-element_type="widget" data-widget_type="heading.default">
          <div class="elementor-widget-container">
            <h3 class="elementor-heading-title elementor-size-default">Dự án khác</h2>
          </div>
        </div>
        <div class="elementor-element elementor-element-d1c4cc1 elementor-widget elementor-widget-text-editor" data-id="d1c4cc1" data-element_type="widget" data-widget_type="text-editor.default">
          <div class="elementor-widget-container">
            <div class="app-holder">
              <div class="app" style="background: none">
			<?php 
    		foreach ($otherDuAn as $index=>$duAn){
    		?>
    		 <div class="app__item" style="background-image: url('/anhduong2/images/du-an/<?= $duAn['image'] ?>')">
  <div class="app__item__info">
    <div>
      <h3><?= $duAn['title'] ?></h3>
      <div class="app__item__info-excerpt"> <?= $duAn['subTitle'] ?> </div>
    </div>
    <div class="app__item__info-btn"> <a href="/xem-du-an/<?= $duAn['slug'] ?>"> <i class="fa-regular fa-circle-right"></i> </a> </div>
  </div>
  <div class="app__item__hover">
    <div>
      <h3>Thông tin dự án</h3>
      <div class="app__item__hover-des"> <?= $duAn['desc'] ?> </div>
      <div class="app__item__hover-btn aperam-btn"> <a href="/xem-du-an/<?= $duAn['slug'] ?>"> Xem thêm </a> </div>
    </div>
    <!-- <div class="app__item__hover-arrow">
    <div class="icon-arrow"></div>
</div> --> 
    
  </div>
  <!-- .app__item__hover --> 
</div>              
    		<?php 
    		}
    		?>
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