<?php 
use app\modules\dashboard\models\PostPublic;

$categories = PostPublic::getCategoriesPublic('POST')->orderBy(['priority'=>SORT_ASC])->all();
foreach ($categories as $indexCat=>$cate){
    $posts = PostPublic::getPostsPublicByCategory('POST', $cate->slug)->orderBy(['date_created'=>SORT_DESC])->all();
    if($posts != null) {
?>
<section class="block-news-adm block-news-basic">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="box-title" data-aos="fade-down">
                    <h3 class="title"><?= $cate->name ?></h3>
                    <a title="<?= $cate->name ?>" href="<?= $cate->url ?>" class="link-title-singlebox">
                        xem tất cả <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                
                <div class="list">
                	<?php foreach ($posts as $iPost=>$post){ ?>
                	<div class="item" data-aos="fade-up">
                        <a title="<?= $post->title ?>" href="<?= $post->url ?>" class="img">
                            <img src="<?= $post->imgCover ?>" alt="" />
                        </a>
                        <div class="info">
                            <a title="<?= $post->title ?>" href="<?= $post->url ?>" class="name">
                                <?= $post->title ?>
                            </a>
                            <span><?= $post->dateCreated ?></span></div>
                    </div>
                	<?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php }} ?>