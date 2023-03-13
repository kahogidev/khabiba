<section class="contact-info-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <h2><?= Yii::t("app", "contactinfo")?></h2>
        </div>
        <div class="inner-container">
            <div class="row clearfix">
                <?php if (!empty($models)): ?>
                     <?php foreach ($models as $model):?>
                        <!-- Info Column -->
                        <div class="info-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="content">
                                    <span class="icon flaticon-telephone"></span>
                                    Tel :  <a href=""><?=$model->first_phone?></a><br>
                                </div>
                            </div>
                        </div>

                        <!-- Info Column -->
                        <div class="info-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="content">
                                    <span class="icon flaticon-envelope-1"></span>
                                    Email :  <a href=""><?=$model->email?></a><br>

                                </div>
                            </div>
                </div>
                    <?php endforeach;?>
                <?php endif;?>

            </div>
        </div>
    </div>
</section>
<!-- End Contact Section -->

<!-- Contact Form Section -->

<section class="contact-form-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title">
            <h2><?= Yii::t("app", "book")?></h2>
        </div>
        <div class="row clearfix">

            <!-- Form Column -->
            <div class="form-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <!-- Contact Form -->
                    <div class="contact-form">


                        <div class="form-group">
                            <input type="text" name="username" placeholder="<?= Yii::t("app", "name")?>" id="name" required="">
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" placeholder="<?= Yii::t("app", "email")?>" id="email" required="">
                        </div>

                        <div class="form-group">
                            <input type="tel" name="phone" placeholder="<?= Yii::t("app", "tel")?>" id="phone" required="">
                        </div>
                        <div class="form-group">
                            <input style="border: 1px solid rgb(235 235 235); padding: 20px; width: 520px"  type="date" name="" placeholder="Phone No (Optional)" id="date" required="">
                        </div>
                        <div class="form-group">
                            <select name="" id="select">
                                <?php if(!empty($tours)):?>
                                    <?php foreach ($tours as $tour):?>
                                        <option style="padding: 10px"><?=$tour["title_".Yii::$app->language];?></option>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </select>
                        </div>


                        <div class="form-group">
                            <div class="buttons-box">
                                <button onclick="booking()" class="theme-btn btn-style-one">
                                    <span class="txt"><?= Yii::t("app", "send")?></span>
                                </button>
                            </div>
                        </div>


                    </div>
                    <!-- End Contact Form -->

                </div>
            </div>

            <!-- Map Column -->
            <div class="map-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <?php if (!empty($models)): ?>
                          <?php foreach ($models as $model):?>
                                <div class="text"><?=$model->addres?></div>
                        <?php endforeach;?>
                    <?php endif;?>

                    <!-- Map Box -->
                    <div class="map-box">
                        <div class="mapouter"><div class="gmap_canvas"><iframe width="560" height="490" id="gmap_canvas" src="https://maps.google.com/maps?q=namangan%20shahar&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-i.net">123movies annihilation</a><br><style>.mapouter{position:relative;text-align:right;height:490px;width:560px;}</style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:490px;width:560px;}</style></div></div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>