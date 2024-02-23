<div class="post-content post-single">
    <div class="post-media post-image text-center">
        <img loading="lazy" src="<?= $post->imgCover ?>" class="img-fluid" alt="post-image">
    </div>
    <div class="post-body">
        <div class="entry-header">
            <div class="post-meta">
                <span class="post-cat">
                    <i class="far fa-folder-open"></i>
                    <?= $post->getCategoriesView() ?>
                </span>
                <span class="post-meta-date"><i class="far fa-calendar"></i> <?= $post->dateCreated ?></span>
            </div>
            <h2 class="entry-title">
                <?= $post->title ?>
            </h2>
        </div><!-- header end -->
        <div class="entry-content">
            <?= $post->content ?>
        </div>
        <div class="tags-area d-flex align-items-center justify-content-between">
            <div class="post-tags">
            	<?= $post->geTagsView() ?>
                <!-- <a href="#">Construction</a>
                <a href="#">Safety</a>
                <a href="#">Planning</a> -->
            </div>
            <div class="share-items">
                <ul class="post-social-icons list-unstyled">
                    <li class="social-icons-head">Share:</li>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div><!-- post-body end -->
</div><!-- post content end -->
<section id="news" class="news" style="padding:20px 0">
    <div class="container">
        <div class="row">
            <div class="col-12"  style="margin-bottom:10px">
                <h3 class="section-title">Bài viết khác</h2>
            </div>
        </div>
        <!--/ Title row end -->
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="latest-post">
                    <div class="latest-post-media">
                        <a href="news-single.html" class="latest-post-img">
                            <img loading="lazy" class="img-fluid" src="/ntweb/images/news/news1.jpg" alt="img">
                        </a>
                    </div>
                    <div class="post-body">
                        <h4 class="post-title">
                            <a href="news-single.html" class="d-inline-block">We Just Completes $17.6 million Medical Clinic in Mid-Missouri</a>
                        </h4>
                        <div class="latest-post-meta">
                            <span class="post-item-date">
                                <i class="fa fa-clock-o"></i> July 20, 2017
                            </span>
                        </div>
                    </div>
                </div><!-- Latest post end -->
            </div><!-- 1st post col end -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="latest-post">
                    <div class="latest-post-media">
                        <a href="news-single.html" class="latest-post-img">
                            <img loading="lazy" class="img-fluid" src="/ntweb/images/news/news2.jpg" alt="img">
                        </a>
                    </div>
                    <div class="post-body">
                        <h4 class="post-title">
                            <a href="news-single.html" class="d-inline-block">Thandler Airport Water Reclamation Facility Expansion Project Named</a>
                        </h4>
                        <div class="latest-post-meta">
                            <span class="post-item-date">
                                <i class="fa fa-clock-o"></i> June 17, 2017
                            </span>
                        </div>
                    </div>
                </div><!-- Latest post end -->
            </div><!-- 2nd post col end -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="latest-post">
                    <div class="latest-post-media">
                        <a href="news-single.html" class="latest-post-img">
                            <img loading="lazy" class="img-fluid" src="/ntweb/images/news/news3.jpg" alt="img">
                        </a>
                    </div>
                    <div class="post-body">
                        <h4 class="post-title">
                            <a href="news-single.html" class="d-inline-block">Silicon Bench and Cornike Begin Construction Solar Facilities</a>
                        </h4>
                        <div class="latest-post-meta">
                            <span class="post-item-date">
                                <i class="fa fa-clock-o"></i> Aug 13, 2017
                            </span>
                        </div>
                    </div>
                </div><!-- Latest post end -->
            </div><!-- 3rd post col end -->
        </div>
        <!--/ Content row end -->
    </div>
    <!--/ Container end -->
</section>