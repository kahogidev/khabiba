
<section class="confidence-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <h2><?= Yii::t("app", "service_t")?></h2>
        </div>
        <div class="row clearfix">

            <!-- Service Block Two -->
            <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="icon-box">
                        <span class="icon flaticon-file"></span>
                    </div>
                    <h3><a href="room-detail.html"><?= Yii::t("app", "service1")?></a></h3>
                </div>
            </div>

            <!-- Service Block Two -->
            <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="icon-box">
                        <span class="icon flaticon-airplane"></span>
                    </div>
                    <h3><a href="room-detail.html"><?= Yii::t("app", "service2")?></a></h3>
                </div>
            </div>

            <!-- Service Block Two -->
            <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="icon-box">
                        <span class="icon flaticon-hotel"></span>
                    </div>
                    <h3><a href="room-detail.html"><?= Yii::t("app", "service3")?></a></h3>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="accomodation-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <h2><?= Yii::t("app", "tours")?></h2>
        </div>
        <div class="three-item-carousel owl-carousel owl-theme">

            <?php if (!empty($models)): ?>
                 <?php foreach ($models as $model):?>
                     <?php $img = app\models\StaticFunctions::getImage('tours', $model->id, $model->images); ?>
                        <div class="room-block">
                            <div class="inner-box">
                                <div class="image">
                                    <img style="height: 475px; object-fit: cover"  src="<?=$img?>" alt="" />
                                    <div class="overlay-box">
                                        <!-- Upper Box -->
                                        <div class="upper-box">
                                            <h3><a href="<?=yii\helpers\Url::to(['toursview/view', "id"=>$model->id]);?>"><?=$model['title_'.Yii::$app->language];?></a></h3>
                                            <div class="price">Narxi:  <span class="theme_color"><?=$model->price?></span> UZS</div>
                                            <div class="price">Davomiyligi:  <span class="theme_color"><?=$model->period?></span></div>
                                        </div>
                                        <!-- Lower Box -->
                                        <div class="lower-box">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <!-- Options List -->

                                                <!-- Review -->
                                                <div class="review"><span class="fa fa-star"></span> 5.0</div>
                                            </div>
                                            <a class="more" href="<?=yii\helpers\Url::to(['toursview/view', "id"=>$model->id]);?>"><?= Yii::t("app", "more")?></a>
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