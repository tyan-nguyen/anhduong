
<section style="margin-top:20px; margin-bottom:40px;">
    <div class="container container-box">
    	
    	<div class="row">
			<div class="col-md-4">
			 
    			<!-- MAIN SLIDES -->
        		<div id="slider1" class="slider">        				
                        
    				<figure style=" position: relative;">
    					
    						<img src="/anhduong2/images/san-pham/<?= $model['images'][0] ?>" alt="One">
    						
    						<span style=" position: absolute;
    right:5px;
    bottom:0px;z-index:9999;font-size:25px;"><a href="/anhduong2/images/san-pham/<?= $model['images'][0] ?>" class="fanc" style="color:white;"><i class="fa-solid fa-expand"></i></a></span>
    					
    				</figure>
    				<figure style=" position: relative;">
    					<img src="/anhduong2/images/san-pham/<?= $model['images'][1] ?>" alt="One">
    					
    					<span style=" position: absolute;
    right:5px;
    bottom:0px;z-index:9999;font-size:25px;"><a href="/anhduong2/images/san-pham/<?= $model['images'][1] ?>" class="fanc" style="color:white;"><i class="fa-solid fa-expand"></i></a></span>
    				</figure>
    					
    			</div>
    			
    			
        	</div>
        	
        	<div class="col-md-8 fancy-info">
        		<h3 class="fancy-caption-title"><?= $model['title'] ?></h3>
				
				<table class="sanpham-tbl">
					<tr>
						<td>Vật liệu</td>
						<td>Kim loại</td>
					</tr>
					<tr>
						<td>Áp dụng</td>
						<td>Sảnh tòa nhà, sảnh ga tàu</td>
					</tr>
					<tr>
						<td>Màu sắc</td>
						<td>Tùy chọn</td>
					</tr>
					<tr>
						<td colspan="2">
							<!-- THUMBNAILS -->
                			<div id="slider-nav-thumbnails-1" class="slider-nav-thumbnails">
                				<div><img src="/anhduong2/images/san-pham/<?= $model['images'][0] ?>" alt="One" width="100"></div>
                				<div><img src="/anhduong2/images/san-pham/<?= $model['images'][1] ?>" alt="Two" width="100"></div>
                
                			</div>
						</td>
					</tr>
				</table>
				
        	</div>
        	
        	
		</div>      <!-- row -->  	
		
		<div class="row">
			<div class="col-md-12">
        		Nội dung cập nhật...........
        	</div>
		</div>
		
	</div>	
</section>

<section style="margin-bottom:0">
    <div class="container container-box">
    	
    	<div class="row">
    		<div class="col-md-12">
    			<h2 class="elementor-heading-title elementor-size-default">Trần kim loại khác</h2>
    		</div>
    	</div>
   	</div>
</section>

<?php 
foreach ($otherVatLieu as $index=>$mod){
    $stt = $index+2;
?>
<section style="margin:20px">
    <div class="container container-box" <?= ($index>0?'style="border-top:1px solid #ddd;padding-top:20px"':'') ?>>
    	
    	<div class="row">
			<div class="col-md-4">
			 
    			<!-- MAIN SLIDES -->
        		<div id="slider<?= $stt ?>" class="slider">        				
                        
    				<figure style=" position: relative;">
    					
    						<img src="/anhduong2/images/san-pham/<?= $mod['images'][0] ?>" alt="One">
    						
    						<span style=" position: absolute;
    right:5px;
    bottom:0px;z-index:9999;font-size:25px;"><a href="/anhduong2/images/san-pham/<?= $mod['images'][0] ?>" class="fanc" style="color:white;"><i class="fa-solid fa-expand"></i></a></span>
    					
    				</figure>
    				<figure style=" position: relative;">
    					<img src="/anhduong2/images/san-pham/<?= $mod['images'][1] ?>" alt="One">
    					
    					<span style=" position: absolute;
    right:5px;
    bottom:0px;z-index:9999;font-size:25px;"><a href="/anhduong2/images/san-pham/<?= $mod['images'][1] ?>" class="fanc" style="color:white;"><i class="fa-solid fa-expand"></i></a></span>
    				</figure>
    					
    			</div>
    			
    			
        	</div>
        	
        	<div class="col-md-8 fancy-info">
        		<a href="/site2/xem-tran-kim-loai?slug=<?= $mod['slug'] ?>"><h3 class="fancy-caption-title"><?= $mod['title'] ?></h3></a>
				
				<table class="sanpham-tbl">
					<tr>
						<td>Vật liệu</td>
						<td>Kim loại</td>
					</tr>
					<tr>
						<td>Áp dụng</td>
						<td>Sảnh tòa nhà, sảnh ga tàu</td>
					</tr>
					<tr>
						<td>Màu sắc</td>
						<td>Tùy chọn</td>
					</tr>
					<tr>
						<td colspan="2">
							<!-- THUMBNAILS -->
                			<div id="slider-nav-thumbnails-<?= $stt ?>" class="slider-nav-thumbnails">
                				<div><img src="/anhduong2/images/san-pham/<?= $mod['images'][0] ?>" alt="One" width="100"></div>
                				<div><img src="/anhduong2/images/san-pham/<?= $mod['images'][1] ?>" alt="Two" width="100"></div>
                
                			</div>
						</td>
					</tr>
				</table>
				
        	</div>
		</div>      <!-- row -->  	
		
	</div>	
</section>


<?php } ?>

