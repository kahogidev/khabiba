<!-- Confidence Section -->
<section class="confidence-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <h2><?= Yii::t("app", "hotels")?></h2>
        </div>
        <div class="row clearfix">

            <!-- Service Block Two -->
            <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="icon-box">
                        <span class="icon flaticon-file"></span>
                    </div>
                    <h3><a href="room-detail.html"><?= Yii::t("app", "res3")?></a></h3>
                </div>
            </div>

            <!-- Service Block Two -->
            <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="icon-box">
                        <span class="icon flaticon-airplane"></span>
                    </div>
                    <h3><a href="room-detail.html"><?= Yii::t("app", "res5")?></a></h3>
                </div>
            </div>

            <!-- Service Block Two -->
            <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="icon-box">
                        <span class="icon flaticon-hotel"></span>
                    </div>
                    <h3><a href="room-detail.html"><?= Yii::t("app", "res6")?></a></h3>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="gallery-section-two">
    <div class="outer-container">
        <div class="gallery-carousel owl-carousel owl-theme">

            <?php if (!empty($models)): ?>
                <?php foreach ($models as $model):?>
                    <?php
                    $img = app\models\StaticFunctions::getImage('hotel', $model->id, $model->images);
                    ?>
                    <div class="gallery-block-three">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?=$img?>" alt="" />
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <div class="upper-content">
                                                <h2><a href=""><?=$model->name?></a></h2>
                                            </div>
                                            <div class="lower-content">
                                                <div class="text"><?=$model->country?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            <?php endif;?>

        </div>
    </div>
</section>