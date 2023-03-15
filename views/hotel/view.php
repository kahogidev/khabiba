<section class="top-location sec-padding-top">
    <div class="sec-title text-center sec-title-padding">
        <h2><?= Yii::t("app", "hotels")?></h2>
        <span class="img-border"></span>
    </div>
    <ul class="top-location-slider position-relative">
        <?php if (!empty($models)): ?>
            <?php foreach ($models as $model):?>
                <?php
                $img = app\models\StaticFunctions::getImage('hotel', $model->id, $model->images);
                ?>
                <li class="zt-overlay item  zt-flex zt-flex-bottom">
                    <div class="caption zt-overlay-panel zt-overlay-background">
                        <div class="position-relative">
                            <div class="top-location-content">
                                <h3> <?=$model->country?> </h3>
                                <p><?=$model->name?></p>
                            </div>
                            <div class="map-location">
                                <img src="/frontend-files/images/map-2-1.png" alt=""/>
                            </div>
                        </div>
                    </div>
                    <div class="overlay-bg zt-overlay-panel zt-overlay-background"></div>
                    <img src="<?=$img?>" alt="" />
                </li>
            <?php endforeach;?>
        <?php endif;?>
    </ul>
</section>