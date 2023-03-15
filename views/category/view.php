<section class="latest-news sec-padding home-two">
    <div class="zt-container">
        <div class="sec-title text-center sec-title-padding">
            <h2><?= Yii::t("app", "category1")?></h2>
            <span class="img-border"></span>
        </div>
        <div class="row">
            <?php if (!empty($models)): ?>
                <?php foreach ($models as $model):?>
                    <?php $img = app\models\StaticFunctions::getImage('tours_category', $model->id, $model->images); ?>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-latest-news">
                            <div class="img-box zt-overlay">
                                <div class="zindex zt-overlay-panel zt-flex zt-flex-top zt-flex-left">
                                    <div class="img-wrap-box zt-overlay-background zt-flex zt-flex-top zt-flex-left">
                                    </div>
                                </div>
                                <div class="zt-overlay-panel zt-overlay-scale ">
                                    <a href="<?=\yii\helpers\Url::to(["tours/view","id"=>$model->id])?>"><span style="justify-content: center;"><h1 style=" margin-top: 80px"><?=$model['name_'.Yii::$app->language];?></h1></span></a>
                                </div>
                                <img src="<?=$img?>" alt=""/>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            <?php endif;?>
        </div>
    </div>
</section>
<section class="famous-locations">
    <ul class="famous-slider text-white">
        <li class="item">
            <div class="row">
                <div class="col-md-5 col-sm-5 hidden-xs">
                    <img src="/frontend-files/images/mt-fuji-sea-of-clouds-sunrise1.png" alt=""/>
                </div>
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="position-relative">
                        <div class="content">
                            <h3><?= Yii::t("app", "why_us")?></h3>
                            <div class="famous-locations-meta"><span class="number">01.</span> <?= Yii::t("app", "why_us1")?></div>
                            <p><?= Yii::t("app", "why_us1t")?></p>
                        </div>
                        <div class="map-location">
                            <img src="/frontend-files/images/map1-1.png" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="item">
            <div class="row">
                <div class="col-md-5 col-sm-5 hidden-xs">
                    <img src="/frontend-files/images/zone-tour-image-2.png" alt=""/>
                </div>
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="position-relative">
                        <div class="content">
                            <h3><?= Yii::t("app", "why_us")?></h3>
                            <div class="famous-locations-meta"><span class="number">02.</span> <?= Yii::t("app", "why_us2")?></div>
                            <p><?= Yii::t("app", "why_us2t")?></p>
                        </div>
                        <div class="map-location">
                            <img src="/frontend-files/images/map-japan.png" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</section>