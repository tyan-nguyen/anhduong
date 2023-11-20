<div class="container-fluid container-fluid-extend padding-small bg-building">
	<div class="row">
          <div class="col-md-12">
            <section class="hero-section d-flex align-items-center">
              <div class="container-fluid">
                <div class="row text-center">
                  <div class="hero-content align-items-center">
                    <h1 class="display-1">Tin tức</h1>
                      <div class="breadcrumbs">
                        <span class="item">
                          <a href="<?= Yii::getAlias('@web') ?>">Trang chủ /</a>
                        </span>
                        <span class="item">Blog</span>
                      </div>
                  </div>
                </div>
              </div>
            </section>
  		</div>
	</div>
</div>

<div class="post-wrap my-5">
    <div class="container-fluid">
      <div class="row">
        <main class="post-list post-card-small">
            <div class="row">
            
            <?php for($i=1;$i<=9;$i++):?>

              <div class="col-lg-4 col-md-6">
                <article class="post-item pb-5 image-zoom-effect">
                  <div class="post-image overflow-hidden">
                    <a href="<?= Yii::getAlias('@web/site/post') ?>"><img src="<?= Yii::getAlias('@web') ?>/images/post-item1.jpg" class="img-fluid" ="fashion"></a>
                  </div>
                  <div class="post-content">
                    <div class="post-meta text-uppercase py-3">
                      <span class="meta-date">30/8/2023</span>
                    </div>
                    <h5 class="post-title text-uppercase">
                      <a href="<?= Yii::getAlias('@web/site/post') ?>">Đại lý cửa nhôm Xingfa chính hãng tại Trà Vinh</a>
                    </h5>
                    <p>Review đại lý cửa nhôm Xingfa tại tỉnh Trà Vinh, địa chỉ cung cấp nhôm Xingfa hệ 55, 65 uy tín và chất lượng....</p>
                  </div>
                </article>
              </div>
           	<?php endfor; ?>
           	 
            </div>

            <nav aria-label="Page navigation" class="d-flex justify-content-center mt-5">
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="<?= Yii::getAlias('@web/site/posts') ?>" aria-label="Previous">
                    <svg class="arrow-left" width="18" height="20">
                       <use xlink:href="#arrow-left"></use>
                    </svg>
                  </a>
                </li>
                <li class="page-item active" aria-current="page"><a class="page-link" href="<?= Yii::getAlias('@web/site/posts') ?>">1</a></li>
                <li class="page-item"><a class="page-link" href="<?= Yii::getAlias('@web/site/posts') ?>">2</a></li>
                <li class="page-item"><a class="page-link" href="<?= Yii::getAlias('@web/site/posts') ?>">3</a></li>
                <li class="page-item"><a class="page-link" href="<?= Yii::getAlias('@web/site/posts') ?>">4</a></li>
                <li class="page-item"><a class="page-link" href="<?= Yii::getAlias('@web/site/posts') ?>">5</a></li>
                <li class="page-item">
                  <a class="page-link" href="<?= Yii::getAlias('@web/site/posts') ?>" aria-label="Next">
                    <svg class="arrow-right" width="18" height="20">
                      <use xlink:href="#arrow-right"></use>
                    </svg>
                  </a>
                </li>
              </ul>
            </nav>

        </main>
      </div>
    </div>
  </div>

    
    
    
    
    