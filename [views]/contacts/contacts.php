<!--крамбсы-->
<? Core::renderPartial(SHARED_VIEWS_DIR.'/crumbs.php', $MODEL);?>
<!--//крамбсы-->



<!--<h4 style="margin-top: 50px;   " class="title-decoration-lines-content">Контакты</h4>-->













<!-- Contact information-->
<section class="section section-xs section-first bg-default">
    <div class="container">
        <div class="row row-30 justify-content-center">
            <div class="col-sm-8 col-md-6 col-lg-4">
                <article class="box-contacts">
                    <div class="box-contacts-body">
                        <div class="box-contacts-icon fl-bigmug-line-cellphone55"></div>
                        <div class="box-contacts-decor"></div>
                        <?foreach($MODEL['phones'] as $phone):?>
                            <p class="box-contacts-link"><a href="tel:<?=$phone?>"><?=$phone?></a></p>
                        <?endforeach;?>
                    </div>
                </article>
            </div>
            <div class="col-sm-8 col-md-6 col-lg-4">
                <article class="box-contacts">
                    <div class="box-contacts-body">
                        <div class="box-contacts-icon fl-bigmug-line-up104"></div>
                        <div class="box-contacts-decor"></div>
                        <p class="box-contacts-link"><a href="#"><?=Settings::val('contactsAddress')?></a></p>
                    </div>
                </article>
            </div>
            <div class="col-sm-8 col-md-6 col-lg-4">
                <article class="box-contacts">
                    <div class="box-contacts-body">
                        <div class="box-contacts-icon fl-bigmug-line-chat55"></div>
                        <div class="box-contacts-decor"></div>
                        <?foreach(explode(',', Settings::val('contactsEmail')) as $email):?>
                        <p class="box-contacts-link"><a href="mailto:<?=$email?>"><span class="__cf_email__" ><?=$email?></span></a></p>
                        <?endforeach;?>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form and Gmap-->
<section class="section section-sm section-last bg-default text-md-left">
    <div class="container">
        <div class="row row-50">
            <div class="col-lg-6 section-map-small">
                <div class="google-map-container" >
                    <?=Settings::val('contactsGoogleMapCode')?>
<!--                    <div class="google-map"></div>-->
<!--                    <ul class="google-map-markers">-->
<!--                        <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png"></li>-->
<!--                    </ul>-->
                </div>
            </div>




            <div class="col-lg-6">
                <h4 class="text-spacing-50">Свяжитесь с нами</h4>
                <form class="rd-form rd-mailform" id="contactsForm"  method="post" target="frame7" action="/contacts/formSubmit" onsubmit="return contactsForm.submit(); " >
                    <div class="row row-14 gutters-14">
                        <div class="col-sm-6">
                            <div class="form-wrap" >
                                <input class="form-input"  type="text" name="name"  placeholder="Имя" slonne-required="true">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-wrap">
                                <input class="form-input" type="text" name="phone" placeholder="Телефон" slonne-required="true">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-wrap">
                                <input class="form-input"  type="email" name="email" placeholder="E-mail"  >
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-wrap">
                                <textarea class="form-input" name="message" placeholder="Ваше сообщение" slonne-required="true"></textarea>
                            </div>
                        </div>
                    </div>
                    <button class="button button-secondary button-pipaluk" type="submit">Отправить</button>
                    <div class="loading" style="display: none; ">Секунду...</div>
                    <div class="info"></div>
                </form>
                <div class="slonne-form-success section-sm" style="display: none; ">
                    <h6>Ваше сообщение успешно отправлено!</h6>
                    <div style="margin: 20px 0 0 0; ">Мы постараемся как можно скорее Вам ответить.</div>
                </div>
                <iframe name="frame7" src="" style="display: none; border: 1px solid black; width: 100%; height: 500px; " frameborder="0"></iframe>
            </div>


            <script>
                var contactsForm = SlonneForm($('#contactsForm'))
                // $(document).ready(function(){
                //     var contactsForm = SlonneForm($('#contactsForm'))
                //     // alert(contactsForm.validate($('#contactsForm input[name=phone]')))
                // })
            </script>
        </div>
    </div>
</section>