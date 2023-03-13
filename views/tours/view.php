<section class="popular-services sec-padding">
    <div class="zt-container">
        <div class="sec-title text-center sec-title-padding">
            <h2><?= Yii::t("app", "tours")?></h2>
            <span class="img-border"></span>
        </div>
        <div class="row">

            <?php if (!empty($models)): ?>
                <?php foreach ($models as $model):?>
                    <?php $img = app\models\StaticFunctions::getImage('tours', $model->id, $model->images); ?>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="tour-list-box text-center zt-overlay zt-overlay-hover">
                            <div class="img-box position-relative">
                                <div class="zt-overlay-panel zt-overlay-background zt-overlay-slide-top zt-flex zt-flex-center zt-flex-middle text-center">
                                    <a href="<?=yii\helpers\Url::to(['toursview/view', "id"=>$model->id]);?>" class="btn zt-default btn-lg"><?= Yii::t("app", "book")?></a>
                                </div>
                                <img src="<?=$img?>" alt=""/>
                            </div>
                            <div class="box-content">
                                <h3><?=$model['title_'.Yii::$app->language];?></h3>
                                <div class="rating">
                                    <span class="fa fa-star color-primary"></span>
                                    <span class="fa fa-star color-primary"></span>
                                    <span class="fa fa-star color-primary"></span>
                                    <span class="fa fa-star color-primary"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div class="driver"></div>
                                <span class="duration">Muddati: <?=$model->period?> <br/> Narxi: <?=$model->price?>UZS</span>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            <?php endif;?>
        </div>
    </div>
</section>