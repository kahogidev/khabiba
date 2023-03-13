<!-- Accomodation Section -->
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
                    <!-- Room Block -->
                    <div class="room-block">
                        <div class="inner-box">
                            <div class="image">
                                <img style="height: 475px; object-fit: cover" src="<?=$img?>" alt="" />
                                <div class="overlay-box">
                                    <!-- Upper Box -->
                                    <div class="upper-box">
                                        <h3><a href="<?=$model['title_'.Yii::$app->language];?>"><?=$model['title_'.Yii::$app->language];?></a></h3>
                                        <div class="price">Narxi: <span class="theme_color"><?=$model->price?> UZS</span> </div>
                                    </div>
                                    <!-- Lower Box -->
                                    <div class="lower-box">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <!-- Options List -->
                                            <ul class="options-list">
                                                <li class="flaticon-wifi"></li>
                                                <li class="flaticon-heating"></li>
                                                <li class="flaticon-cutlery"></li>
                                            </ul>
                                            <!-- Review -->
                                            <div class="review"><span class="fa fa-star"></span> 5.0</div>
                                        </div>
                                        <a class="more" href="<?=$model['title_'.Yii::$app->language];?>"><?= Yii::t("app", "more")?></a>
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