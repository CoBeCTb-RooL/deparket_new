<!--крамбсы-->
<? Core::renderPartial(SHARED_VIEWS_DIR.'/crumbs.php', $MODEL);?>
<!--//крамбсы-->



<!--<h4 style="margin-top: 50px;   " class="title-decoration-lines-content">--><?//=$MODEL['title']?><!--</h4>-->

<section class="section-sm">
    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-12"><?=$MODEL['info']->attrs['descr']?></div>
        </div>
    </div>
</section>

