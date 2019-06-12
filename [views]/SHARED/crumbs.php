<?php
$crumbs = $MODEL['crumbs'];
//vd($crumbs);
?>



    <!-- Breadcrumbs -->
    <section class="breadcrumbs-custom-inset">
        <div class="breadcrumbs-custom context-dark">
            <div class="container">
                <h2 class="breadcrumbs-custom-title"><?=$MODEL['title']?></h2>
                <ul class="breadcrumbs-custom-path">
                    <?foreach ($crumbs as $k=>$item):?>
                        <li <?=$k==count($crumbs)-1 ? ' class="active" ' : ''?>><?=$item?></li>
                    <?endforeach;?>
<!--                    <li><a href="index.html">Home</a></li>-->
<!--                    <li><a href="#">Pages</a></li>-->
<!--                    <li class="active">FAQ</li>-->
                </ul>
            </div>
            <div class="box-position" style="background-image: url(/images/bg-breadcrumbs.jpg);"></div>
<!--            <div class="box-position" style="background-image: url(/images/crumbs-bg2.jpg);"></div>-->
        </div>
    </section>



<?php 
//if(count($crumbs))
//{?>
<!--	<div class="crumbs">-->
<!--		<span class="item"><img src="/img/crump-pic.gif" height="17" style="vertical-align: top; padding: 0 2px 0 0 ; " alt="" />--><?//=join('</span><span class="item">', $crumbs)?><!--</span>-->
<!--	</div>-->
<?php //
//}?>