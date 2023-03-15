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
                    <div class="event-block">
                        <div class="inner-box">
                            <div class="image">
                                <img  src="<?=$img?>" alt="" />
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
<section class="newsletter-section" style="background-image: url(/frontend-files/images/background/2.jpg)">
    <div class="top-color-layer"></div>
    <div class="bottom-color-layer"></div>
    <div class="auto-container">
        <div class="d-flex justify-content-between align-items-center flex-wrap">
            <div class="empty-box"></div>
            <div class="content">
                <div class="icon-box">
                    <span class="icon flaticon-mail"></span>
                </div>
                <h2><?= Yii::t("app", "banner11")?></h2>

                <!-- Newsletter Box -->
                <div class="newsletter-box">

                </div>

            </div>
        </div>
    </div>
</section>