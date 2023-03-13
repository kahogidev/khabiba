<!-- Main Header -->
<header class="main-header">

    <!-- Header Top -->
    <div class="header-top">
        <div class="auto-container d-flex justify-content-between align-items-center flex-wrap">

            <!-- Left Box -->
            <div class="left-box d-flex flex-wrap">
                <!-- Social Box -->
            </div>

            <!-- Right Box -->
            <div class="right-box d-flex flex-wrap">

                <!-- Language -->
                <div class="language-dropdown">
                    <button class="dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                        <i><img src="/frontend-files/images/icons/flag.png" alt="" /></i><?= Yii::t("app", "lang")?> &nbsp;<span class="fa fa-angle-down"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                             <?php
                                foreach (Yii::$app->params['language'] as $key => $value){

                       echo "<li><a class='dropdown-item' href='".\yii\helpers\Url::to(['site/ozgar',"til"=>$key])."'>".$value."</a></li>";
                                }
                            ?>
                    </ul>
                </div>

            </div>

        </div>
    </div>

    <!-- Header Lower -->
    <div class="header-lower">

        <div class="auto-container">
            <div class="inner-container d-flex justify-content-between align-items-center flex-wrap">

                <div class="logo-box">
                    <div class="logo"><a href="index-2.html"><img src="/frontend-files/images/logo.png" alt="" title=""></a></div>
                </div>

                <div class="nav-outer d-flex align-items-center flex-wrap">

                    <!-- Main Menu -->
                    <nav class="main-menu show navbar-expand-md">
                        <div class="navbar-header">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <?php if (!empty($menues)): ?>
                                    <?php foreach ($menues as $menue): ?>
                                        <li><a href="<?=$menue->link?>"><?=$menue['name_'.Yii::$app->language];?></a></li>
                                    <?php endforeach;?>
                                <?php endif;?>

                            </ul>
                        </div>

                    </nav>
                    <!-- Main Menu End-->

                </div>

                <!-- Outer Box -->
                <div class="outer-box d-flex align-items-center flex-wrap">



                    <!-- Button Box -->
                    <div class="button-box">
                        <a href="<?=\yii\helpers\Url::to(["admin/"])?>" class="theme-btn btn-style-one"><span class="txt">login</span></a>
                    </div>

                    <!-- Mobile Navigation Toggler -->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>

                </div>
                <!-- End Outer Box -->

            </div>

        </div>
    </div>
    <!-- End Header Lower -->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container d-flex justify-content-between align-items-center flex-wrap">
            <!-- Logo -->
            <div class="logo">
                <a href="index-2.html" title=""><img src="/frontend-files/images/sticky-logo.png" alt="" title=""></a>
            </div>

            <!-- Main Menu -->
            <nav class="main-menu">
                <!--Keep This Empty / Menu will come through Javascript-->
            </nav><!-- Main Menu End-->

            <!-- Mobile Navigation Toggler -->
            <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
        </div>
    </div><!-- End Sticky Menu -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-cancel"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="index-2.html"><img src="/frontend-files/images/logo-sidebar.png" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        </nav>
    </div><!-- End Mobile Menu -->

</header>

<!-- Main Slider Section -->
<section class="main-slider">
    <div class="main-slider-carousel owl-carousel owl-theme">

        <!-- Slide -->
        <div class="slide" style="background-image: url(/frontend-files/images/main-slider/1.jpg)">
            <div class="auto-container">

                <!-- Content -->
                <div class="content-box">
                    <div class="box-inner">
                        <span class="color-one"></span>
                        <span class="color-two"></span>
                        <h1><a href="reservation.html"><?= Yii::t("app", "slider1")?></a></h1>
                    </div>
                    <!-- Help Line -->
                    <div class="helpline">
                        <div class="helpline-inner d-flex align-items-center">
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Slide -->
        <div class="slide" style="background-image: url(/frontend-files/images/main-slider/1510383.jpg)">
            <div class="auto-container">

                <!-- Content -->
                <div class="content-box">
                    <div class="box-inner">
                        <span class="color-one"></span>
                        <span class="color-two"></span>
                        <h1><a href="reservation.html"><?= Yii::t("app", "slider2")?></a></h1>
                        <div class="buttons-box">
                            </div>
                    </div>
                    <!-- Help Line -->
                    <div class="helpline">
                        <div class="helpline-inner d-flex align-items-center">
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Slide -->
        <div class="slide" style="background-image: url(/frontend-files/images/main-slider/1510600.jpg)">
            <div class="auto-container">

                <!-- Content -->
                <div class="content-box">
                    <div class="box-inner">
                        <span class="color-one"></span>
                        <span class="color-two"></span>
                        <h1><a href="reservation.html"><?= Yii::t("app", "slider3")?></a></h1>
                        <div class="buttons-box">
                        </div>
                    </div>
                    <!-- Help Line -->
                    <div class="helpline">
                        <div class="helpline-inner d-flex align-items-center">
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>