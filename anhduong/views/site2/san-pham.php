<?= $this->render('sanpham/slide.php', ['model'=>$model, 'title'=>$title]) ?>
<?= $this->render('sanpham/breadrum.php', ['model'=>$model, 'title'=>$title]) ?>

<section style="margin-bottom:40px">
    <div class="container container-box">
    	<div class="row">
    		<div class="col-md-12 content-text">
    			<h2 class="node-title"><span class="field-wrapper" style="color: #5f2869;"><?= $title ?></span></h2>
    			<p>Chúng tôi cung cấp vật liệu đa dạng phù hợp cho mọi công trình từ trang trí nội, ngoại thất cho các toà cao ốc, văn phòng, chung cư, khách sạn, khu nghỉ dưỡng, trung tâm thương mại...</p>
    		</div>
    	</div>
    	<div class="row">
    		<?php 
    		foreach ($model as $index=>$spItem){
    		?>
    		<div class="col-md-3 col-sm-6 div-vat-lieu">
    		<figure>
    		<div class="dwrap" style="width: 100%;height:auto;">
    			<img src="/anhduong2/images/san-pham/<?= $spItem['image'] ?>" />
    			
    			<div class="view_link">
                    <div class="elementor-button elementor-button-link elementor-size-sm fanc" style="cursor: pointer;"> 
                    <span class="elementor-button-content-wrapper"><span class="elementor-button-text"><i class="fa-solid fa-eye"></i></span></span>
                    
                    <figcaption style="display:none">
        				<div class="fancy-caption">
        				<div class="container">
        					<div class="row">
            					<div class="col-md-6">
            						<img src="/anhduong2/images/san-pham/<?= $spItem['image'] ?>" />
            					</div>
            					
            					<div class="col-md-6 fancy-info">
            						<h3 class="fancy-caption-title"><?= $spItem['title'] ?></h3>
            						<p class="fancy-caption-content"><?= $spItem['desc'] ?></p>
            						
            						<button class="btn-aperam" onclick="" tabindex="-1"><i class="fa-solid fa-phone"></i> Gọi Hotline</button> &nbsp;
            						<a class="btn-aperam elementor-button elementor-button-link elementor-size-sm" tabindex="-1" href="/xem-san-pham/<?= $spItem['slug'] ?>"><i class="fa-solid fa-link"></i> Xem chi tiết</a>
            					</div>
        					</div>
        				
        				</div>
        				
        				</div>
    				</figcaption>
                    
                     </div>
                </div>
                
    		</div>	
    			<a href="/xem-san-pham/<?= $spItem['slug'] ?>"><h3><?= $spItem['title'] ?></h3></a>
    			<p class="subtitle"><?= $spItem['subTitle'] ?></p>
    			
    			
    		</figure>
    		</div>
    		<?php 
    		}
    		?>
    	</div>
    	
    </div>
</section>