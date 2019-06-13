<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    <meta name="keywords" content="<?=$CONTENT->metaKeywords?>" />
    <meta name="description" content="<?=$CONTENT->metaDescription?>" />

    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">

    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:400,500%7CTeko:300,400,500%7CMaven+Pro:500">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/fonts.css">
    <link rel="stylesheet" href="/css/style.css" id="main-styles-link">
    <script type="text/javascript" src="/js/libs/jquery-1.11.0.min.js"></script>
<!--    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>-->
    <script type="text/javascript" src="/js/slonne.forms2.js"></script>


    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="/images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="/js/html5shiv.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="/favicon.ico" type="/image/x-icon">

    <title><?=$CONTENT->title?></title>

</head>
<body>
<?// if(Admin::isAdmin() ):?>
<!--    --><?//Core::renderPartial(SHARED_VIEWS_DIR.'/adminTools/adminPanel.php', $model=null, $buffer=false, $ignoreIsAdminka=true);?>
<?//endif?>
<div class="preloader">
    <div class="preloader-body">
        <div class="cssload-container"><span></span><span></span><span></span><span></span>
        </div>
    </div>
</div>
<?//vd($_GLOBALS['MENU'])?>
<div class="page">
    <!-- Page Header-->
    <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap rd-navbar-modern-wrap">
            <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="70px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                <div class="rd-navbar-main-outer">
                    <div class="rd-navbar-main">
                        <!-- RD Navbar Panel-->
                        <div class="rd-navbar-panel">
                            <!-- RD Navbar Toggle-->
                            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                            <!-- RD Navbar Brand-->
                            <div class="rd-navbar-brand">
<!--                                <a class="brand" href="/"><img src="/images/logo-default-149x46.png" alt="" width="149" height="46"></a>-->
                                <a class="brand" href="/"><img src="/images/logo.png" alt="" style="width: 350px; " ></a>
                            </div>
                        </div>




                        <div class="rd-navbar-main-element">
                            <div class="rd-navbar-nav-wrap">

                                <!-- RD Navbar Nav-->
                                <ul class="rd-navbar-nav">
                                <?foreach ($_GLOBALS['MENU'] as $item):?>
                                    <li class="rd-nav-item <?=in_array($item->id, $_GLOBALS['activePageIds']) ? 'active' : ''?>" ><a class="rd-nav-link" href="<?=$item->url() ?> "><?=$item->attrs['name']?></a>
                                        <!-- RD Navbar Dropdown-->
                                        <?if(count($item->subs)):?>
                                        <ul class="rd-menu rd-navbar-dropdown">
                                            <?foreach ($item->subs as $sub):?>
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="<?=$item->id==27 ? '/catalog/'.$sub->urlPiece() : $sub->url()?>"><?=$sub->attrs['name']?></a></li>
                                            <?endforeach?>
                                        </ul>
                                        <?endif?>
                                    </li>
                                <?endforeach?>
                                </ul>
                            </div>
                            <div class="rd-navbar-project-hamburger" data-multitoggle=".rd-navbar-main" data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate="data-multitoggle-isolate">
                                <div class="project-hamburger"><span class="project-hamburger-arrow-top"></span><span class="project-hamburger-arrow-center"></span><span class="project-hamburger-arrow-bottom"></span></div>
                                <div class="project-hamburger-2"><span class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span>
                                </div>
                                <div class="project-close"><span></span><span></span></div>
                            </div>
                        </div>
                        <div class="rd-navbar-project rd-navbar-modern-project">
                            <div class="rd-navbar-project-modern-header">
                                <h4 class="rd-navbar-project-modern-title">Follow us</h4>
                                <div class="rd-navbar-project-hamburger" data-multitoggle=".rd-navbar-main" data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate="data-multitoggle-isolate">
                                    <div class="project-close"><span></span><span></span></div>
                                </div>
                            </div>
                            <div class="rd-navbar-project-content rd-navbar-modern-project-content">
                                <div>
                                    <p class="text-spacing-25">Want to get the latest flooring ideas from our team? Follow us on Instagram to keep up with the newest trends and offers from Parquetry.</p>
                                    <div class="row row-10 gutters-10" data-lightgallery="group">
                                        <div class="col-6 col-lg-4">
                                            <!-- Thumbnail Classic-->
                                            <article class="thumbnail thumbnail-mary">
                                                <div class="thumbnail-mary-figure"><img src="/images/gallery-image-14-124x124.jpg" alt="" width="124" height="124">
                                                </div>
                                                <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="/images/gallery-image-14-1200x800-original.jpg" data-lightgallery="item"><img src="/images/gallery-image-14-124x124.jpg" alt="" width="124" height="124"></a>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="col-6 col-lg-4">
                                            <!-- Thumbnail Classic-->
                                            <article class="thumbnail thumbnail-mary">
                                                <div class="thumbnail-mary-figure"><img src="/images/gallery-image-15-124x124.jpg" alt="" width="124" height="124">
                                                </div>
                                                <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="/images/grid-gallery-3-1200x800-original.jpg" data-lightgallery="item"><img src="/images/gallery-image-15-124x124.jpg" alt="" width="124" height="124"></a>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="col-6 col-lg-4">
                                            <!-- Thumbnail Classic-->
                                            <article class="thumbnail thumbnail-mary">
                                                <div class="thumbnail-mary-figure"><img src="/images/gallery-image-16-124x124.jpg" alt="" width="124" height="124">
                                                </div>
                                                <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="/images/grid-gallery-5-1200x800-original.jpg" data-lightgallery="item"><img src="/images/gallery-image-16-124x124.jpg" alt="" width="124" height="124"></a>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="col-6 col-lg-4">
                                            <!-- Thumbnail Classic-->
                                            <article class="thumbnail thumbnail-mary">
                                                <div class="thumbnail-mary-figure"><img src="/images/gallery-image-17-124x124.jpg" alt="" width="124" height="124">
                                                </div>
                                                <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="/images/gallery-image-17-530x800-original.jpg" data-lightgallery="item"><img src="/images/gallery-image-17-124x124.jpg" alt="" width="124" height="124"></a>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="col-6 col-lg-4">
                                            <!-- Thumbnail Classic-->
                                            <article class="thumbnail thumbnail-mary">
                                                <div class="thumbnail-mary-figure"><img src="/images/gallery-image-18-124x124.jpg" alt="" width="124" height="124">
                                                </div>
                                                <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="/images/grid-gallery-2-530x800-original.jpg" data-lightgallery="item"><img src="/images/gallery-image-18-124x124.jpg" alt="" width="124" height="124"></a>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="col-6 col-lg-4">
                                            <!-- Thumbnail Classic-->
                                            <article class="thumbnail thumbnail-mary">
                                                <div class="thumbnail-mary-figure"><img src="/images/gallery-image-19-124x124.jpg" alt="" width="124" height="124">
                                                </div>
                                                <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="/images/grid-gallery-1-570x800-original.jpg" data-lightgallery="item"><img src="/images/gallery-image-19-124x124.jpg" alt="" width="124" height="124"></a>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                    <ul class="rd-navbar-modern-contacts">
                                        <li>
                                            <div class="unit unit-spacing-sm">
                                                <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                                                <div class="unit-body"><a class="link-phone" href="tel:#">+1 323-913-4688</a></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="unit unit-spacing-sm">
                                                <div class="unit-left"><span class="icon fa fa-location-arrow"></span></div>
                                                <div class="unit-body"><a class="link-location" href="#">4730 Crystal Springs Dr, Los Angeles, CA 90027</a></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="unit unit-spacing-sm">
                                                <div class="unit-left"><span class="icon fa fa-envelope"></span></div>
                                                <div class="unit-body"><a class="link-email" href="/cdn-cgi/l/email-protection#2300"><span class="__cf_email__" data-cfemail="f69b979f9ab692939b999a9f989dd8998491">[email&#160;protected]</span></a></div>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="list-inline rd-navbar-modern-list-social">
                                        <li><a class="icon fa fa-facebook" href="#"></a></li>
                                        <li><a class="icon fa fa-twitter" href="#"></a></li>
                                        <li><a class="icon fa fa-google-plus" href="#"></a></li>
                                        <li><a class="icon fa fa-instagram" href="#"></a></li>
                                        <li><a class="icon fa fa-pinterest" href="#"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>



    <!--контент-->
    <?//vd($_SERVER)?>
    <div class="content1 <?=$CORE->isIndexPage() ? '' : 'margined' ?>" style="  ">
        <?=$CONTENT->content?>
    </div>
    <!--контент-->











    <!-- Page Footer-->
    <footer class="section footer-variant-2 footer-modern context-dark">
        <div class="footer-variant-2-content">
            <div class="container">
                <div class="row row-40 justify-content-between" >
                    <div class="col-sm-6 col-lg-4 col-xl-3" style="border: 0px solid red; ">
                        <div class="oh-desktop">
                            <div class="wow slideInRight" data-wow-delay="0s">
                                <div class="footer-brand"><a href="/"><img src="/images/logo.png" alt="" width="279" ></a></div>
                                <p>Мы являемся ведущим в отрасли поставщиком продукции и услуг для напольных покрытий. Давайте сделаем ваш пол эффектным!</p>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4  ">
                        <div class="oh-desktop">
                            <div class="inset-top-18 wow slideInDown" data-wow-delay="0s">
                                <ul class="footer-contacts d-inline-block d-md-block">
                                    <li>
                                        <div class="unit unit-spacing-xs">
                                            <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                                            <div class="unit-body"><a class="link-phone" href="tel:<?=Settings::val('contactsPhone')?>"><?=Settings::val('contactsPhone')?></a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="unit unit-spacing-xs">
                                            <div class="unit-left"><span class="icon fa fa-clock-o"></span></div>
                                            <div class="unit-body">
                                                <p>Пн-Пт, 09:00 - 18:00</p>
                                            </div> 
                                        </div>
                                    </li>
                                    <li>
                                        <div class="unit unit-spacing-xs">
                                            <div class="unit-left"><span class="icon fa fa-location-arrow"></span></div>
                                            <div class="unit-body"><a class="link-location" href="#"><?=Settings::val('contactsAddress')?></a></div>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3">
                        <div class="oh-desktop">
                            <div class="inset-top-18 wow slideInLeft" data-wow-delay="0s">
<!--                                <h5 class="text-spacing-75">Newsletter</h5>-->
<!--                                <p>Join our email list for tips and useful information.</p>-->
<!--                                <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">-->
<!--                                    <div class="form-wrap">-->
<!--                                        <input class="form-input" id="subscribe-form-5-email" type="email" name="email" data-constraints="@Email @Required">-->
<!--                                        <label class="form-label" for="subscribe-form-5-email">Enter Your E-mail</label>-->
<!--                                    </div>-->
<!--                                    <button class="button button-block button-secondary button-ujarak" type="submit">Subscribe</button>-->
<!--                                </form>-->


                                <div class="group-lg group-middle">

                                    <p class="footer-social-list-title">Соц. сети</p>
                                    <div>
                                        <ul class="list-inline list-inline-xs footer-social-list-2">
                                            <li><a class="icon fa fa-facebook" href="#"></a></li>
                                            <li><a class="icon fa fa-instagram" href="#"></a></li>
                                            <li><a class="icon fa fa-twitter" href="#"></a></li>
                                            <li><a class="icon fa fa-vk" href="#"></a></li>
                                        </ul>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-variant-2-bottom-panel">
            <div class="container">
                <!-- Rights-->
                <div class="group-sm group-sm-justify">
                    <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year1"></span> <a href="/"><b>DeParket.kz</b></a>. Все права защищены.
                    </p>
                    <p class="rights"><a href="privacy-policy.html">Privacy Policy.</a></p>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- Javascript-->
<script src="/js/core.min.js"></script>
<script src="/js/script.js"></script>





</body>

</html>