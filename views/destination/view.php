<!-- Events Section -->
<section class="events-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <h2><?= Yii::t("app", "category1")?></h2>
        </div>
        <div class="event-carousel owl-carousel owl-theme">

            <?php if (!empty($models)): ?>
                <?php foreach ($models as $model):?>
                    <?php $img = app\models\StaticFunctions::getImage('tours_category', $model->id, $model->images); ?>
                    <!-- Event Block -->
                    <div class="event-block">
                        <div class="inner-box">
                            <div class="image">
                                <img style="height: 475px; object-fit: cover" src="<?=$img?>" alt="" />
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="upper-content">
                                            <h3><a href="<?=\yii\helpers\Url::to(["tours/view","id"=>$model->id])?>"><?=$model['name_'.Yii::$app->language];?></a></h3>
                                        </div>
                                        <div class="lower-content">

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
<section class="beach-section" style="background-image: url(/frontend-files/images/background/3.jpg)">
    <div class="auto-container">
        <div class="inner-container">
            <!-- Sec Title -->
            <div class="sec-title light">
                <h2><?= Yii::t("app", "video")?></h2>
            </div>
            <!-- Button Box -->

        </div>
    </div>
</section>