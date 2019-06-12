<?
$item = $MODEL['item'];
?>


<!--крамбсы-->
<? Core::renderPartial(SHARED_VIEWS_DIR.'/crumbs.php', $MODEL);?>
<!--//крамбсы-->



<!--<h4 style="margin-top: 50px;   " class="title-decoration-lines-content">--><?//=$item->attrs['name']?><!--</h4>-->



<!-- Single-project-->
<section class="section section-sm section-first bg-default">
    <div class="container">
        <div class="row row-50 justify-content-center align-items-xl-center">
            <div class="col-md-10 col-lg-4 ">
                <div class="offset-right-xl-15">
                    <!-- Owl Carousel-->
                    <div class="owl-carousel owl-dots-white" data-items="1" data-dots="true" data-autoplay="true" data-animation-in="fadeIn" data-animation-out="fadeOut">
                        <img src="<?=Media::img($item->attrs['pic'].'').'&width=655&height=496'?>" alt="" width="655" height="496">
                    </div>
                </div>
            </div>
            <div class="col-md-10 col-lg-8 ">
                <div class="single-project">
                    <h4><?=$item->attrs['name']?></h4>
                    <p class="text-gray-500 " ><?=$item->attrs['descr']?></p>

<!--                    <div class="divider divider-30"></div>-->
<!--                    <div class="group-md group-middle justify-content-sm-start"><span class="social-title">Share</span>-->
<!--                        <div>-->
<!--                            <ul class="list-inline list-inline-sm social-list">-->
<!--                                <li><a class="icon fa fa-facebook" href="#"></a></li>-->
<!--                                <li><a class="icon fa fa-twitter" href="#"></a></li>-->
<!--                                <li><a class="icon fa fa-google-plus" href="#"></a></li>-->
<!--                                <li><a class="icon fa fa-instagram" href="#"></a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
            </div>
        </div>


        <?if($item->attrs['pics'] && count($item->attrs['pics'])):?>
        <div class="row">
            <!-- Improve your interior with deco-->
            <section class="section section-xs1 bg-default">
                <div class="container">
                    <div class="oh">
                        <div class="title-decoration-lines wow slideInUp" data-wow-delay="0s">
                            <h6 class="title-decoration-lines-content">Галерея</h6>
                        </div>
                    </div>
                    <div class="row row-30" data-lightgallery="group">

                        <?$slideDirections = ['Up', 'Down', 'Left', 'Right', ];?>
                        <?foreach ($item->attrs['pics'] as $pic):?>
                        <div class="col-sm-6 col-lg-3">
                            <div class="oh-desktop">
                                <!-- Thumbnail Classic-->
                                <article  class="thumbnail thumbnail-mary thumbnail-sm wow slideIn<?=$slideDirections[rand(0, 3)]?>" data-wow-delay="0s">
                                    <div class="thumbnail-mary-figure"><img src="<?=Media::img($pic->path.'').'&width=370&height=303'?>" alt="" width="370" height="303">
                                    </div>
                                    <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="<?=Media::img($pic->path.'')?>" data-lightgallery="item"><img src="<?=Media::img($pic->path.'').'&width=370&height=303'?>" alt="" width="370" height="303"></a>
                                        <h5 class="thumbnail-mary-title"><?=$pic->title[Lang::RU]?></h5>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <?endforeach;?>


                    </div>
                </div>
            </section>
            
        </div>
        <?endif;?>


    </div>
</section>