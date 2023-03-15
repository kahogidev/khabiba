<section class="team-page-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <h2><?= Yii::t("app", "managers")?></h2>
        </div>
        <div class="row clearfix">


            <?php if (!empty($models)): ?>
                <?php foreach ($models as $model):?>
                    <?php
                    $img = app\models\StaticFunctions::getImage('managers', $model->id, $model->images);
                    ?>
                     <!-- Team Block -->
                        <div class="team-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <a href="#"><img src="<?=$img?>" alt="" /></a>
                                </div>
                                <div class="lower-content">
                                    <div class="phone"><span class="icon flaticon-telephone"></span><?=$model->first_phone?></div>
                                    <h3><a href="#"><?=$model->first_name?> <br> <?=$model->last_name?></a></h3>
                                    <div class="designation"><?=$model->position?></div>
                                    <!-- Social Box -->
                                    <ul class="social-box">
                                      <a href="" ><?=$model->email?></a>

                                    </ul>
                                </div>
                            </div>
                        </div>
                <?php endforeach;?>
            <?php endif;?>


        </div>
    </div>
</section>