<section class="testimonial-section" style="background-image: url(/frontend-files/images/background/1.jpg)">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Title Column -->
            <div class="title-column col-lg-5 col-md-12 col-sm-12">
                <div class="inner-column">
                    <!-- Sec Title / Light -->
                    <div class="sec-title light">
                        <h2><?= Yii::t("app", "testmon")?></h2>
                    </div>

                </div>
            </div>

            <!-- Carousel Column -->
            <div class="carousel-column col-lg-7 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="single-item-carousel owl-carousel owl-theme">

                        <?php if (!empty($models)): ?>
                            <?php foreach ($models as $model):?>
                                <div class="testimonial-block">
                                    <div class="inner-box">
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="text"><?=$model['comment_'.Yii::$app->language];?></div>
                                        <div class="author">
                                            <?=$model->name?>
                                            <span> <?=$model->email?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach;?>
                        <?php endif;?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>