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
                        <p class="box-contacts-link"><a href="tel:#">+1 323-913-4688</a></p>
                        <p class="box-contacts-link"><a href="tel:#">+1 323-888-4554</a></p>
                    </div>
                </article>
            </div>
            <div class="col-sm-8 col-md-6 col-lg-4">
                <article class="box-contacts">
                    <div class="box-contacts-body">
                        <div class="box-contacts-icon fl-bigmug-line-up104"></div>
                        <div class="box-contacts-decor"></div>
                        <p class="box-contacts-link"><a href="#">4730 Crystal Springs Dr, Los Angeles, CA 90027</a></p>
                    </div>
                </article>
            </div>
            <div class="col-sm-8 col-md-6 col-lg-4">
                <article class="box-contacts">
                    <div class="box-contacts-body">
                        <div class="box-contacts-icon fl-bigmug-line-chat55"></div>
                        <div class="box-contacts-decor"></div>
                        <p class="box-contacts-link"><a href="/cdn-cgi/l/email-protection#0724"><span class="__cf_email__" data-cfemail="3b565a52577b5f5e5654575255501554495c">[email&#160;protected]</span></a></p>
                        <p class="box-contacts-link"><a href="/cdn-cgi/l/email-protection#7f5c"><span class="__cf_email__" data-cfemail="f79e999198b793929a989b9e999cd9988590">[email&#160;protected]</span></a></p>
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
                <div class="google-map-container" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-styles="[{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#444444&quot;}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f2f2f2&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi.business&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:45}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#b4d4e1&quot;},{&quot;visibility&quot;:&quot;on&quot;}]}]">
                    <div class="google-map"></div>
                    <ul class="google-map-markers">
                        <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png"></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <h4 class="text-spacing-50">Contact Form</h4>
                <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                    <div class="row row-14 gutters-14">
                        <div class="col-sm-6">
                            <div class="form-wrap">
                                <input class="form-input" id="contact-first-name" type="text" name="name" data-constraints="@Required">
                                <label class="form-label" for="contact-first-name">First Name</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-wrap">
                                <input class="form-input" id="contact-last-name" type="text" name="name" data-constraints="@Required">
                                <label class="form-label" for="contact-last-name">Last Name</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-wrap">
                                <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                                <label class="form-label" for="contact-email">E-mail</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-wrap">
                                <label class="form-label" for="contact-message">Message</label>
                                <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                            </div>
                        </div>
                    </div>
                    <button class="button button-secondary button-pipaluk" type="submit">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>