 <section>
<div class="container container-box">

<div class="row">
    		<div class="col-md-12 content-text">
    			<h2 class="node-title"><span class="field-wrapper" style="color: #5f2869;">DỰ ÁN</span></h2>
    			<p>Chúng tôi cung cấp vật liệu đa dạng phù hợp cho mọi công trình từ trang trí nội, ngoại thất cho các toà cao ốc, văn phòng, chung cư, khách sạn, khu nghỉ dưỡng, trung tâm thương mại. Danh sách các dự án tiêu biểu mà chúng tôi đã thi công thực hiện:</p>
    		</div>
    	</div>
    	
    			
<div class="elementor-element elementor-element-d1c4cc1 elementor-widget elementor-widget-text-editor" data-id="d1c4cc1" data-element_type="widget" data-widget_type="text-editor.default">
  <div class="elementor-widget-container">
    <div class="app-holder">
      <div class="app">
      
      <?php 
	foreach ($models as $index=>$model){
	?>
        <div class="app__item" style="background-image: url('/anhduong2/images/du-an/<?= $model['image'] ?>')">
  <div class="app__item__info">
    <div>
      <h3><?= $model['title'] ?></h3>
      <div class="app__item__info-excerpt"> <?= $model['subTitle'] ?> </div>
    </div>
    <div class="app__item__info-btn"> <a href="/xem-du-an/<?= $model['slug'] ?>"> <i class="fa-regular fa-circle-right"></i> </a> </div>
  </div>
  <div class="app__item__hover">
    <div>
      <h3>Thông tin dự án</h3>
      <div class="app__item__hover-des"> <?= $model['desc'] ?> </div>
      <div class="app__item__hover-btn aperam-btn"> <a href="/xem-du-an/<?= $model['slug'] ?>"> Xem thêm </a> </div>
    </div>
    <!-- <div class="app__item__hover-arrow">
    <div class="icon-arrow"></div>
</div> --> 
    
  </div>
  <!-- .app__item__hover --> 
</div>                
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
</section>