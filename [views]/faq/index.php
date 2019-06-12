<!--крамбсы-->
<? Core::renderPartial(SHARED_VIEWS_DIR.'/crumbs.php', $MODEL);?>
<!--//крамбсы-->


<!--<h4 style="margin-top: 50px;   " class="title-decoration-lines-content">--><?//=$MODEL['title']?><!--</h4>-->


<!-- Section FAQ-->
<section class="section section-md1 bg-default" style="margin: 50px 0px 30px 0; ">
    <div class="container">
        <!-- Bootstrap collapse-->
        <div class="row row-15 align-items-start card-group-custom card-group-corporate" id="accordion2" role="tablist" aria-multiselectable="false">



                <?
                $list = array_chunk($MODEL['faq'], floor(count($MODEL['faq'])/2));
                ?>

                <?foreach ($list as $column=>$items):?>
                <div class="col-lg-12">
                    <?foreach ($items as $item):?>
                    <!-- Bootstrap card-->
                        <article class="card card-custom card-corporate">
                            <div class="card-header" id="accordion2Heading6" role="tab">
                                <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#accordion2Collapse6-<?=$item->id?>" aria-controls="accordion2Collapse6"><?=$item->attrs['name']?>
                                        <div class="card-arrow"></div></a>
                                </div>
                            </div>
                            <div class="collapse" id="accordion2Collapse6-<?=$item->id?>" role="tabpanel" aria-labelledby="accordion2Heading6">
                                <div class="card-body">
                                    <p><?=$item->attrs['descr']?></p>
                                </div>
                            </div>
                        </article>
                    <?endforeach;?>
                </div>
                <?endforeach;?>






        </div>
    </div>
</section>


