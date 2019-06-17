<!--крамбсы-->
<? Core::renderPartial(SHARED_VIEWS_DIR.'/crumbs.php', $MODEL);?>
<!--//крамбсы-->



<!--<h4 style="margin-top: 50px;   " class="title-decoration-lines-content">--><?//=$MODEL['title']?><!--</h4>-->

<section class="section-sm">
    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-12" ><?=$MODEL['info']->attrs['descr']?></div>
        </div>
    </div>
</section>





<!-- Latest Projects-->
<section class="section section-xs section-fluid bg-default">
    <div class="container">
        <h6 class="title-decoration-lines-content">Наши работы</h6>
    </div>
    <!-- Owl Carousel-->
    <div class="owl-carousel owl-classic" data-items="1" data-md-items="2" data-lg-items="3" data-xl-items="4" data-margin="30" data-autoplay="true" data-nav="true" data-dots="true">

        <?foreach ($MODEL['info']->attrs['pics'] as $pic):?>
        <!-- Thumbnail Classic-->
        <article class="thumbnail thumbnail-mary thumbnail-md">
            <div class="thumbnail-mary-figure"><img src="<?=Media::img($pic->path.'').'&width=420&height=308'?>" alt="" width="420" height="308">
            </div>
            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="<?=Media::img($pic->path.'').''?>" data-lightgallery="item"><img src="<?=Media::img($pic->path.'').'&width=420&height=308'?>" alt="" width="420" height="308"></a>
                <h5 class="thumbnail-mary-title"><?=$pic->title[Lang::RU]?></h5>
            </div>
        </article>
        <?endforeach;?>

        <!-- Thumbnail Classic-->
        <article class="thumbnail thumbnail-mary thumbnail-md">
            <div class="thumbnail-mary-figure"><img src="images/project-7-420x308.jpg" alt="" width="420" height="308">
            </div>
            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/grid-gallery-1-570x800-original.jpg" data-lightgallery="item"><img src="images/project-7-420x308.jpg" alt="" width="420" height="308"></a>
                <h5 class="thumbnail-mary-title"><a href="single-project.html">Project #1</a></h5>
            </div>
        </article>
        <!-- Thumbnail Classic-->
        <article class="thumbnail thumbnail-mary thumbnail-md">
            <div class="thumbnail-mary-figure"><img src="images/project-8-420x308.jpg" alt="" width="420" height="308">
            </div>
            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/grid-gallery-2-530x800-original.jpg" data-lightgallery="item"><img src="images/project-8-420x308.jpg" alt="" width="420" height="308"></a>
                <h5 class="thumbnail-mary-title"><a href="single-project.html">Project #2</a></h5>
            </div>
        </article>
        <!-- Thumbnail Classic-->
        <article class="thumbnail thumbnail-mary thumbnail-md">
            <div class="thumbnail-mary-figure"><img src="images/project-9-420x308.jpg" alt="" width="420" height="308">
            </div>
            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/grid-gallery-3-1200x800-original.jpg" data-lightgallery="item"><img src="images/project-9-420x308.jpg" alt="" width="420" height="308"></a>
                <h5 class="thumbnail-mary-title"><a href="single-project.html">Project #3</a></h5>
            </div>
        </article>
        <!-- Thumbnail Classic-->
        <article class="thumbnail thumbnail-mary thumbnail-md">
            <div class="thumbnail-mary-figure"><img src="images/project-10-420x308.jpg" alt="" width="420" height="308">
            </div>
            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/grid-gallery-4-530x800-original.jpg" data-lightgallery="item"><img src="images/project-10-420x308.jpg" alt="" width="420" height="308"></a>
                <h5 class="thumbnail-mary-title"><a href="single-project.html">Project #4</a></h5>
            </div>
        </article>
        <!-- Thumbnail Classic-->
        <article class="thumbnail thumbnail-mary thumbnail-md">
            <div class="thumbnail-mary-figure"><img src="images/project-11-420x308.jpg" alt="" width="420" height="308">
            </div>
            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/grid-gallery-5-1200x800-original.jpg" data-lightgallery="item"><img src="images/project-11-420x308.jpg" alt="" width="420" height="308"></a>
                <h5 class="thumbnail-mary-title"><a href="single-project.html">Project #5</a></h5>
            </div>
        </article>
        <!-- Thumbnail Classic-->
        <article class="thumbnail thumbnail-mary thumbnail-md">
            <div class="thumbnail-mary-figure"><img src="images/project-12-420x308.jpg" alt="" width="420" height="308">
            </div>
            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/grid-gallery-6-1200x800-original.jpg" data-lightgallery="item"><img src="images/project-12-420x308.jpg" alt="" width="420" height="308"></a>
                <h5 class="thumbnail-mary-title"><a href="single-project.html">Project #6</a></h5>
            </div>
        </article>
    </div>
</section>

