<footer class="main-footer">
    <div class="auto-container">
        <!-- Upper Box -->
        <div class="upper-box">
            <div class="row clearfix">

                <!-- Info Column -->

            </div>
        </div>
        <!-- End Upper Box -->

        <!-- Widgets Section -->
        <div class="widgets-section">
            <div class="row clearfix">

                <!-- Footer Column -->


                <!-- Footer Column -->
                <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                    <div class="footer-widget location-widget">
                        <h5><?= Yii::t("app", "menulinks")?></h5>
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <ul class="footer-list">
                                    <?php if(!empty($menues)):?>
                                         <?php foreach ($menues as $menue):?>
                                            <li><a href="<?=$menue->link;?>"><?=$menue['name_'.Yii::$app->language];?></a></li>
                                        <?php endforeach;?>
                                    <?php endif;?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer Column -->
                <div class="footer-column col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-widget newsletter-widget">
                        <h5><?= Yii::t("app", "news")?></h5>
                        <!-- Subscribe Box -->
                        <div class="subscribe-box">

                                <div class="form-group">
                                    <input type="email" name="search-field" value="" placeholder="<?= Yii::t("app", "email")?>" required>
                                    <button type="submit" class="theme-btn submit-btn">
                                        <?= Yii::t("app", "subscribe")?>
                                    </button>
                                </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- End Widgets Section -->

    </div>
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Column -->
                <div class="column col-lg-6 col-md-12 col-sm-12">
                    <div class="copyright">&copy; 2023 All Rights Reserved. Design By <a href="">WEBSPACE</a></div>
                </div>
                <!-- Column -->
                <div class="column col-lg-6 col-md-12 col-sm-12">
                </div>
            </div>
        </div>
    </div>
</footer>