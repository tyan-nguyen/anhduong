<?= $this->render('sanpham/slide.php', ['model'=>$model, 'title'=>$title]) ?>
<?= $this->render('sanpham/breadrum.php', ['model'=>$model, 'title'=>$title]) ?>

<section style="margin-bottom:40px">
    <div class="container container-box">
    	<div class="row">
    		<div class="col-md-12 content-text">
    			<h2 class="node-title"><span class="field-wrapper" style="color: #5f2869;"><?= $model['title'] ?></span></h2>
    		</div>
    	</div>
    	
    	<div class="row">
			<div class="col-md-6">
				<img src="/anhduong2/images/san-pham/<?= $model['image'] ?>" />
			</div>
			
			<div class="col-md-6 fancy-info">
				<h3 class="fancy-caption-title"><?= $model['title'] ?></h3>
				<p class="fancy-caption-content"><?= $model['desc'] ?></p>
				
				<p>
				<button class="btn-aperam" onclick="" tabindex="-1"><i class="fa-solid fa-phone"></i> Gọi Hotline</button> &nbsp;
				<button class="btn-aperam" onclick="" tabindex="-1"><i class="fa-solid fa-envelope"></i> Gửi liên hệ</button> &nbsp;
				</p>
			</div>
		</div>
		<?php if($model['content'] != null){ ?>
		<div class="row" style="margin-top:20px">
			<div class="col-md-12">
				<?= $model['content'] ?>
			</div>
		</div>
		<?php } ?>
		

        					

    </div>
</section>


<section class="elementor-section elementor-top-section elementor-element elementor-element-f06c18a bloc-key-products elementor-section-boxed elementor-section-height-default elementor-section-height-default">		
		<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="elementor-heading-title elementor-size-default"><?= $title ?> khác</h2>
			</div>
			<?php 
    		foreach ($otherVatLieu as $index=>$vatLieu){
    		?>
    		<div class="col-md-3 col-sm-6 div-vat-lieu">
    		<figure>
    		<div class="dwrap" style="width: 100%;height:auto;background: none;">
    			<img src="/anhduong2/images/san-pham/<?= $vatLieu['image'] ?>" />
    			
    			<div class="view_link">
                    <div class="elementor-button elementor-button-link elementor-size-sm fanc" style="cursor: pointer;"> 
                    <span class="elementor-button-content-wrapper"><span class="elementor-button-text"><i class="fa-solid fa-eye"></i></span></span>
                    
                    <figcaption style="display:none">
        				<div class="fancy-caption">
        				<div class="container">
        					<div class="row">
            					<div class="col-md-6">
            						<img src="/anhduong2/images/san-pham/<?= $vatLieu['image'] ?>" />
            					</div>
            					
            					<div class="col-md-6 fancy-info">
            						<h3 class="fancy-caption-title"><?= $vatLieu['title'] ?></h3>
            						<p class="fancy-caption-content"><?= $vatLieu['desc'] ?></p>
            						
            						<button class="btn-aperam" onclick="" tabindex="-1"><i class="fa-solid fa-phone"></i> Gọi Hotline</button> &nbsp;
            						<a class="btn-aperam elementor-button elementor-button-link elementor-size-sm" tabindex="-1" href="/<?= $vatLieu['slug'] ?>"><i class="fa-solid fa-link"></i> Xem chi tiết</a>
            					</div>
        					</div>
        				
        				</div>
        				
        				</div>
    				</figcaption>
                    
                     </div>
                </div>
                
    		</div>	
    			<a href="/xem-san-pham/<?= $vatLieu['slug'] ?>"><h3><?= $vatLieu['title'] ?></h3></a>
    			<p class="subtitle"><?= $vatLieu['subTitle'] ?></p>
    			
    			
    		</figure>
    		</div>
    		<?php 
    		}
    		?>
		</div>
	</div>
</section>