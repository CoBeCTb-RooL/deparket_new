<?//vd($MODEL['slides'])?>


<!-- Swiper-->
<section class="section swiper-container swiper-slider swiper-slider-modern" data-loop="true" data-autoplay="5000" data-simulate-touch="true" data-nav="true" data-slide-effect="fade">
    <div class="swiper-wrapper text-left">


        <?foreach ($MODEL['slides'] as $slide):?>
        <?vd(Media::img($slide->attrs['pic'].''))?>
        <div class="swiper-slide" data-slide-bg="<?=Media::img($slide->attrs['pic'].'')?>">
            <div class="swiper-slide-caption">
                <div class="container">
                    <div class="row">
                        <div class="col-11 col-sm-9 col-md-8 col-lg-7 col-xl-6 col-xxl-5">
                            <div class="slider-modern-box">
                                <h2 class="oh slider-modern-title">
                                    <span data-caption-animate="slideInDown" data-caption-delay="0"><?=$slide->attrs['name']?></span>
<!--                                    <span data-caption-animate="slideInUp" data-caption-delay="0">flooring solutions</span>-->
                                </h2>
                                <p data-caption-animate="fadeInRight" data-caption-delay="400"><?=$slide->attrs['anons']?></p>
                                <div class="oh button-wrap"><a class="button button-default-outline-2 button-ujarak" href="/catalog" data-caption-animate="slideInLeft" data-caption-delay="400">Смотреть каталог</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?endforeach?>

    </div>
    <!-- Swiper Navigation-->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    <!-- Swiper Pagination-->
    <div class="swiper-pagination swiper-pagination-style-2"></div>
</section>








<!-- Section CTA-->
<section class="section section-sm1 bg-default text-md-center">
    <div class="parallax-container" data-parallax-img="/images/bg-cta-2.jpg">
        <div class="parallax-content section-xs section-inset-custom-2 context-dark">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7 col-lg-10">
                        <h3 class="oh font-weight-normal"><span class="d-inline-block wow slideInDown" data-wow-delay="0s"><?=$MODEL['info']->attrs['anons']?></span></h3>
                        <p class="text-spacing-75 wow fadeInRight" data-wow-delay=".1s"><?=$MODEL['info']->attrs['descr']?></p><a class="button button-secondary button-ujarak wow fadeInUp" href="/catalog" data-wow-delay=".2s">Смотреть наши услуги</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<!-- In the spotlight-->
<section class="section section-sm section-first bg-default">
    <div class="container">
        <div class="oh">
            <div class="title-decoration-lines wow slideInUp" data-wow-delay="0s">
                <h4 class="title-decoration-lines-content">Наши работы</h4>
            </div>
        </div>
        <div class="row row-30 justify-content-center">
            <?$i=0; ?>
            <?foreach ($MODEL['catalog'] as $key=>$item):?>
                <div class="col-sm-6 col-lg-<?=$i? 4 : 8 ?>">
                    <div class="oh-desktop">
                        <!-- box Spotlight-->
                        <article class="box-sportlight box-sportlight-sm wow slideInRight" data-wow-delay=".1s"><a class="box-sportlight-figure" href="/catalog/<?=$item->urlPiece()?>"><img src="<?=Media::img($item->attrs['pic'].'').'&width='.($i ? '370' : '770').'&height=332'?>" ></a>
                            <div class="box-sportlight-caption">
                                <h5 class="box-sportlight-title"><a href="/catalog/<?=$item->urlPiece()?>"><?=$item->attrs['name']?></a></h5>
                                <div class="box-sportlight-arrow"></div>
                            </div>
<!--                            <div class="box-sportlight-badge box-sportlight-sale">-30%</div>-->
                        </article>
                    </div>
                </div>
            <?$i++; ?>
            <?endforeach?>


        </div>
    </div>

    <div class="button-wrap">
        <a href="/catalog" class="button button-md button-default-outline button-wapasha">Смотреть все наши работы</a>
    </div>
</section>


