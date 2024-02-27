<?php 
$posts = \app\modules\dashboard\models\Posts::getPostByType('SLIDE',5);
?>

<section class="banner-home banner-tplnc">
<swiper-container class="mySwiper" pagination="true" pagination-dynamic-bullets="true">
<?php foreach ($posts as $iPost=>$post){ ?>
    <swiper-slide>
    	<a class="item" href="" title="Chào mừng đến với">
			<img src="<?= $post->imgCover ?>" alt="" class="img-fluid" />
			<?php if($post->title != null || $post->summary !=null){?>
			<div class="banner-home-content">
                <div class="container">
                    <?php if($post->summary !=null){?><span class="small-text"><?= $post->summary ?></span><?php } ?>
                    <?php if($post->title != null){?><span class="big-text"><?= $post->title ?></span><?php } ?>
                </div>
            </div>
            <?php } ?>
		</a>
	</swiper-slide>
<?php } ?>
  <!--   <swiper-slide>
    	<a class="item" href="" title="Chào mừng đến với">
    		<img src="/dbcl/images/banner-1663128854.png" alt="Chào mừng đến với" class="img-fluid" />
    	</a>
    </swiper-slide> -->
  </swiper-container>
</section>