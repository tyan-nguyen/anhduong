<section style="margin-bottom:40px">
    <div class="container container-box">
    	<div class="row">
    		<div class="col-md-12 content-text">
    			<h2 class="node-title"><span class="field-wrapper" style="color: #5f2869;">TRẦN KIM LOẠI </span></h2>
    			<p>Chúng tôi cung cấp vật liệu đa dạng phù hợp cho mọi công trình từ trang trí nội, ngoại thất cho các toà cao ốc, văn phòng, chung cư, khách sạn, khu nghỉ dưỡng, trung tâm thương mại...</p>
    		</div>
    	</div>
    </div>
</section>

<?php 
foreach ($model as $index=>$mod){
    $stt = $index+1;
?>
<section style="<?= ($index>0?'margin:20px 0':'') ?>">
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




<!-- 


<section style="">
    <div class="container container-box">
    	
    	<div class="row">
			<div class="col-md-4">
			 
    			
        		<div id="slider1" class="slider">        				
                        
    				<figure style=" position: relative;">
    					
    						<img src="/anhduong2/images/san-pham/tran-kim-loai-1.jpg" alt="One">
    						
    						<span style=" position: absolute;
    right:5px;
    bottom:0px;z-index:9999;font-size:25px;"><a href="/anhduong2/images/san-pham/tran-kim-loai-1.jpg" class="fanc" style="color:white;"><i class="fa-solid fa-expand"></i></a></span>
    					
    				</figure>
    				<figure style=" position: relative;">
    					<img src="/anhduong2/images/san-pham/tran-kim-loai-2.jpg" alt="One">
    					
    					<span style=" position: absolute;
    right:5px;
    bottom:0px;z-index:9999;font-size:25px;"><a href="/anhduong2/images/san-pham/tran-kim-loai-2.jpg" class="fanc" style="color:white;"><i class="fa-solid fa-expand"></i></a></span>
    				</figure>
    					
    			</div>
    			
    			
        	</div>
        	
        	<div class="col-md-8 fancy-info">
        		<a href="/site2/xem-tran-kim-loai"><h3 class="fancy-caption-title">Trần kim loại 1</h3></a>
				
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
							
                			<div id="slider-nav-thumbnails-1" class="slider-nav-thumbnails">
                				<div><img src="/anhduong2/images/san-pham/tran-kim-loai-1.jpg" alt="One" width="100"></div>
                				<div><img src="/anhduong2/images/san-pham/tran-kim-loai-2.jpg" alt="Two" width="100"></div>
                
                			</div>
						</td>
					</tr>
				</table>
				
        	</div>
		</div>     
		
	</div>	
</section>

<section style="padding:0px 0px;margin:20px 0;">		
		<div class="container container-box" style="border-top:1px solid #ddd;padding-top:20px">
		  	<div class="row">
			<div class="col-md-4">
			 
    			
        		<div id="slider2" class="slider">        				
                    
    				<figure style=" position: relative;">
    					
    						<img src="/anhduong2/images/san-pham/tran-kim-loai-1.jpg" alt="One">
    						
    						<span style=" position: absolute;
    right:5px;
    bottom:0px;z-index:9999;font-size:25px;"><a href="/anhduong2/images/san-pham/tran-kim-loai-1.jpg" class="fanc" style="color:white;"><i class="fa-solid fa-expand"></i></a></span>
    					
    				</figure>
    				<figure style=" position: relative;">
    					<img src="/anhduong2/images/san-pham/tran-kim-loai-2.jpg" alt="One">
    					
    					<span style=" position: absolute;
    right:5px;
    bottom:0px;z-index:9999;font-size:25px;"><a href="/anhduong2/images/san-pham/tran-kim-loai-2.jpg" class="fanc" style="color:white;"><i class="fa-solid fa-expand"></i></a></span>
    				</figure>
    				
    			</div>
    			
    			
              
        	</div>
        	
        	<div class="col-md-8 fancy-info">
        		<a href="/site2/xem-tran-kim-loai"><h3 class="fancy-caption-title">Trần kim loại 2</h3></a>
				
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
							
                			<div id="slider-nav-thumbnails-2" class="slider-nav-thumbnails">
                				<div><img src="/anhduong2/images/san-pham/tran-kim-loai-1.jpg" alt="One" width="100"></div>
                				<div><img src="/anhduong2/images/san-pham/tran-kim-loai-2.jpg" alt="Two" width="100"></div>
                
                			</div>
						</td>
					</tr>
				</table>
				
        	</div>
		</div>      
		
    </div>
</section>

<section style="margin:20px 0px;">
    <div class="container container-box" style="border-top:1px solid #ddd;padding-top:20px">
    
    	
    	<div class="row">
			<div class="col-md-4">
			 
    			
        		<div id="slider3" class="slider">        				
                    
    
    				<figure style=" position: relative;">
    					
    						<img src="/anhduong2/images/san-pham/tran-kim-loai-1.jpg" alt="One">
    						
    						<span style=" position: absolute;
    right:5px;
    bottom:0px;z-index:9999;font-size:25px;"><a href="/anhduong2/images/san-pham/tran-kim-loai-1.jpg" class="fanc" style="color:white;"><i class="fa-solid fa-expand"></i></a></span>
    					
    				</figure>
    				<figure style=" position: relative;">
    					<img src="/anhduong2/images/san-pham/tran-kim-loai-2.jpg" alt="One">
    					
    					<span style=" position: absolute;
    right:5px;
    bottom:0px;z-index:9999;font-size:25px;"><a href="/anhduong2/images/san-pham/tran-kim-loai-2.jpg" class="fanc" style="color:white;"><i class="fa-solid fa-expand"></i></a></span>
    				</figure>
    				
    			</div>
    			
              
        	</div>
        	
        	<div class="col-md-8 fancy-info">
        		<a href="/site2/xem-tran-kim-loai"><h3 class="fancy-caption-title">Trần kim loại 3</h3></a>
				
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
							
                			<div id="slider-nav-thumbnails-3" class="slider-nav-thumbnails">
                				<div><img src="/anhduong2/images/san-pham/tran-kim-loai-1.jpg" alt="One" width="100"></div>
                				<div><img src="/anhduong2/images/san-pham/tran-kim-loai-2.jpg" alt="Two" width="100"></div>
                
                			</div>
						</td>
					</tr>
				</table>
				
        	</div>
        	
		</div>   	
		
	</div>	
</section>

 -->