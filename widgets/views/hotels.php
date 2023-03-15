<section style="margin-top: 150px" class="gallery-section-two">
    <div class="outer-container">
        <div class="sec-title centered">

            <h2><?= Yii::t("app", "hotels")?></h2>
        </div>
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