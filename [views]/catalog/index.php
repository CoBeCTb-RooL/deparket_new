<!--крамбсы-->
<? Core::renderPartial(SHARED_VIEWS_DIR.'/crumbs.php', $MODEL);?>
<!--//крамбсы-->



<!--<h4 style="margin-top: 50px;   " class="title-decoration-lines-content">--><?//=$MODEL['title']?><!--</h4>-->

<section class="section-sm">
    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-12"><?=$MODEL['catInfo']->attrs['descr']?></div>
        </div>
    </div>
</section>



<!-- Section-services-->
<section class="section section-xs bg-default">
    <div class="container">
        <div class="row row-50 justify-content-center box-ordered">

            <?foreach ($MODEL['list'] as $item):?>
            <div class="col-md-6 col-lg-5 col-xl-4">
                <!-- Services Classic-->
                <article class="services-classic"><a class="services-classic-figure" href="/catalog/<?=$item->urlPiece()?>"><img src="<?=Media::img($item->attrs['pic'].'').'&width=370&height=297'?>" alt="" width="370" height="297"></a>
                    <div class="services-classic-caption">
                        <h4 class="services-classic-counter box-ordered-item"></h4>
                        <h5 class="services-classic-title"><a href="/catalog/<?=$item->urlPiece()?>"><?=$item->attrs['name']?></a></h5>
                    </div>
                </article>
            </div>
            <?endforeach;?>

        </div>
    </div>
</section>