<?php

use app\models\DataProduct;

$data = DataProduct::data();
$vatLieuArray = array_slice($data, 48, 24);//tu 49->63

?>

<section style="margin-bottom:40px">
    <div class="container container-box">
    	<div class="row">
    		<div class="col-md-12 content-text">
    			<h2 class="node-title"><span class="field-wrapper" style="color: #5f2869;">VẬT LIỆU</span></h2>
    			<p>Chúng tôi cung cấp vật liệu đa dạng phù hợp cho mọi công trình từ trang trí nội, ngoại thất cho các toà cao ốc, văn phòng, chung cư, khách sạn, khu nghỉ dưỡng, trung tâm thương mại...</p>
    		</div>
    	</div>
    	<div class="row">
    		<?php 
    		foreach ($vatLieuArray as $index=>$vatLieu){
    		?>
    		<div class="col-md-3 col-sm-6 div-vat-lieu">
    		<figure>
    		<div class="dwrap" style="width: 100%;height:auto;">
    			<img src="/anhduong2/images/vat-lieu/vat-lieu-<?= $vatLieu['id'] ?>.jpg" />
    			
    			<div class="view_link">
                    <div class="elementor-button elementor-button-link elementor-size-sm fanc" style="cursor: pointer;"> 
                    <span class="elementor-button-content-wrapper"><span class="elementor-button-text"><i class="fa-solid fa-eye"></i></span></span>
                    
                    <figcaption style="display:none">
        				<div class="fancy-caption">
        				<div class="container">
        					<div class="row">
            					<div class="col-md-6">
            						<img src="/anhduong2/images/vat-lieu/vat-lieu-<?= $vatLieu['id'] ?>.jpg" />
            					</div>
            					
            					<div class="col-md-6 fancy-info">
            						<h3 class="fancy-caption-title"><?= $vatLieu['title'] ?> <?= $vatLieu['subTitle']!=null?' - ': '' ?> <?= $vatLieu['subTitle'] ?></h3>
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
    			<a href="/<?= $vatLieu['slug'] ?>"><h3><?= $vatLieu['title'] ?></h3></a>
    			<p class="subtitle"><?= $vatLieu['subTitle'] ?></p>
    			
    			
    		</figure>
    		</div>
    		<?php 
    		}
    		?>
    	</div>
    	
    	<div class="row">
    		<div class="col-md-12">
    			<div style="display: flex;justify-content:center;">
    			
    			<div class="paging-container"> 
              		<a href="/site2/vat-lieu?page=1">1</a>
                 	<a href="/site2/vat-lieu?page=2">2</a>
                 	<a href="/site2/vat-lieu?page=3" class="active">3</a>
              </div>
          
    			</div>
    		</div>
    	</div>
    </div>
</section>