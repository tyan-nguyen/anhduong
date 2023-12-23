<section style="margin-bottom:40px">
    <div class="container container-box">
    	<div class="row">
    		<div class="col-md-12 content-text">
    			<h2 class="node-title"><span class="field-wrapper" style="color: #5f2869;">Năng lực nhà máy của chúng tôi</span></h2>
    			<p>Với cơ sở vật chất và máy móc tiên tiến, hiện đại, chúng tôi không chỉ chuyên cung cấp, sản xuất, lắp đặt các hàng inox (trắng, màu mạ PVD), gia công những tấm thép không gỉ #304, #316 với các định dạng bề mặt đa dạng: Sọc nhuyễn HL, bóng gương hay hoa văn (với hơn 100 mẫu khác nhau),  ... được áp dụng trang trí nội, ngoại thất cho các toà cao ốc, văn phòng, chung cư, khách sạn, khu nghỉ dưỡng, trung tâm thương mại... mà chúng tôi còn lò xi mạ với công nghệ mới nhất có thể mạ titan các màu sắc theo yêu cầu của khách hàng.</p>
    		</div>
    	</div>
    	<div class="row">
    		<?php 
    		for($nl=1;$nl<=21;$nl++){
    		?>
    		<div class="col-md-4 col-sm-6 div-nang-luc">
    			<a href="/anhduong2/images/nang-luc/nang-luc-<?= $nl ?>.jpg" data-fancybox="gallery" data-caption="Năng lực nhà máy">
    				<img src="/anhduong2/images/nang-luc/nang-luc-<?= $nl ?>.jpg" />
    			</a>
    		</div>
    		<?php 
    		}
    		?>
    	</div>
    </div>
</section>