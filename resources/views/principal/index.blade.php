@extends('welcome')
@section('contenido')

        <!-- Section Slider-->
        <section class="context-dark">
            <!-- Swiper-->
            <div class="swiper-container swiper-slider" data-height="33%" data-min-height="600px" data-dots="true" data-autoplay="5000">
                <div class="swiper-wrapper">
                    <div class="swiper-slide swiper-slide-overlay-disable" data-slide-bg="/images/slide-01-1920x640.jpg" style="background-position: center center"></div>
                    <div class="swiper-slide swiper-slide-overlay-disable" data-slide-bg="/images/slide-02-1920x640.jpg" style="background-position: center center"></div>
                    <div class="swiper-slide swiper-slide-overlay-disable" data-slide-bg="/images/slide-03-1920x640.jpg" style="background-position: center center"></div>
                </div>
                <div class="swiper-caption-wraper">
                    <div class="container section-41">
                        <h1 class="font-weight-bold">Professional realtor works for you</h1>
                        <div class="offset-top-30">
                            <div class="group text-center"><a class="btn btn-primary" href="catalog.html">View more</a><a class="btn btn-default" href="contact.html">Contact us</a></div>
                        </div>
                    </div>
                </div>
                <!-- Swiper Pagination-->
                <div class="swiper-pagination swiper-pagination-type-2"></div>
            </div>
        </section>
        <!--Section thumbnails terry-->
        <section class="section-34 novi-background bg-cover">
            <div class="container-fluid">
                <div class="row row-30 justify-content-sm-center">
                    <div class="col-sm-8 col-md-6 col-xl-3">
                        <!-- Thumbnail Terry-->
                        <figure class="thumbnail-terry"><a href="#"><img width="442" height="280" src="/images/home-img-01-442-280.jpg" alt="" /></a>
                            <figcaption>
                                <div>
                                    <h4 class="thumbnail-terry-title">With Swimming Pool </h4>
                                </div>
                                <p class="thumbnail-terry-desc offset-top-0">32 properties</p><a class="btn offset-top-10 offset-lg-top-0 btn-primary" href="catalog.html">choose an apartment</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-sm-8 col-md-6 col-xl-3">
                        <!-- Thumbnail Terry-->
                        <figure class="thumbnail-terry"><a href="#"><img width="442" height="280" src="/images/home-img-02-442-280.jpg" alt="" /></a>
                            <figcaption>
                                <div>
                                    <h4 class="thumbnail-terry-title">Cozy Houses</h4>
                                </div>
                                <p class="thumbnail-terry-desc offset-top-0">54 properties</p><a class="btn offset-top-10 offset-lg-top-0 btn-primary" href="catalog.html">choose an apartment</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-sm-8 col-md-6 col-xl-3">
                        <!-- Thumbnail Terry-->
                        <figure class="thumbnail-terry"><a href="#"><img width="442" height="280" src="/images/home-img-03-442-280.jpg" alt="" /></a>
                            <figcaption>
                                <div>
                                    <h4 class="thumbnail-terry-title">Studio Apartments</h4>
                                </div>
                                <p class="thumbnail-terry-desc offset-top-0">32 properties</p><a class="btn offset-top-10 offset-lg-top-0 btn-primary" href="catalog.html">choose an apartment</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-sm-8 col-md-6 col-xl-3">
                        <!-- Thumbnail Terry-->
                        <figure class="thumbnail-terry"><a href="#"><img width="442" height="280" src="/images/home-img-04-442-280.jpg" alt="" /></a>
                            <figcaption>
                                <div>
                                    <h4 class="thumbnail-terry-title">Luxury Houses</h4>
                                </div>
                                <p class="thumbnail-terry-desc offset-top-0">19 properties</p><a class="btn offset-top-10 offset-lg-top-0 btn-primary" href="catalog.html">choose an apartment</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </section>
        <!--Section Recent Properties-->
        <section class="section-bottom-98 section-top-34 section-lg-bottom-110 section-lg-top-66 novi-background bg-cover">
            <div class="container">
                <h2 class="font-weight-bold">Recent Properties</h2>
                <hr class="divider bg-saffron">
                <div class="row row-60">
                    <div class="col-md-6 col-lg-4"><img class="img-fluid d-inline-block" src="/images/home-img-05-370x250.jpg" width="370" height="250" alt="">
                        <div class="text-md-left offset-top-24">
                            <div>
                                <h5 class="font-weight-bold text-primary"><a href="single-property.html">AVA Nob Hill</a></h5>
                            </div>
                            <h6 class="offset-top-10"> $1199.00/mon</h6>
                            <ul class="list-inline list-inline-dotted text-dark">
                                <li class="list-inline-item">1200 sq ft</li>
                                <li class="list-inline-item">4 bedrooms</li>
                                <li class="list-inline-item">2 bathrooms</li>
                            </ul>
                            <div>
                                <p>AVA Nob Hill includes studios and 1 and 2 bedroom apartments that feature an urban-inspired design that extends beyond your walls and throughout the entire community.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4"><img class="img-fluid d-inline-block" src="/images/home-img-06-370x250.jpg" width="370" height="250" alt="">
                        <div class="text-md-left offset-top-24">
                            <div>
                                <h5 class="font-weight-bold text-primary"><a href="single-property.html">Ashton San Francisco</a></h5>
                            </div>
                            <h6 class="offset-top-10"> $1595.00/mon</h6>
                            <ul class="list-inline list-inline-dotted text-dark">
                                <li class="list-inline-item">1200 sq ft</li>
                                <li class="list-inline-item">2 bedrooms</li>
                                <li class="list-inline-item">2 bathrooms</li>
                            </ul>
                            <div>
                                <p>Ashton San Francisco offers luxury apartments, eco-friendly features, and remarkable on-site resident amenities. Enjoy premier services and access to our state-of-the-art fitness center, clubhouse, business center, and outdoor fire pit lounge.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4"><img class="img-fluid d-inline-block" src="/images/home-img-07-370x250.jpg" width="370" height="250" alt="">
                        <div class="text-md-left offset-top-24">
                            <div>
                                <h5 class="font-weight-bold text-primary"><a href="single-property.html">The Presidio Residences</a></h5>
                            </div>
                            <h6 class="offset-top-10"> $2699.00/mon</h6>
                            <ul class="list-inline list-inline-dotted text-dark">
                                <li class="list-inline-item">2200 sq ft</li>
                                <li class="list-inline-item">4 bedrooms</li>
                                <li class="list-inline-item">3 bathrooms</li>
                            </ul>
                            <div>
                                <p>The Presidio Residences offer a unique opportunity to live in a national park setting and enjoy quiet neighborhoods, convenient location, beautiful open spaces, and outstanding recreational amenities.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4"><img class="img-fluid d-inline-block" src="/images/home-img-08-370x250.jpg" width="370" height="250" alt="">
                        <div class="text-md-left offset-top-24">
                            <div>
                                <h5 class="font-weight-bold text-primary"><a href="single-property.html">Alchemy by Alta</a></h5>
                            </div>
                            <h6 class="offset-top-10"> $1199.00/mon</h6>
                            <ul class="list-inline list-inline-dotted text-dark">
                                <li class="list-inline-item">1200 sq ft</li>
                                <li class="list-inline-item">4 bedrooms</li>
                                <li class="list-inline-item">2 bathrooms</li>
                            </ul>
                            <div>
                                <p>One month FREE on select apartment homes for a limited time.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4"><img class="img-fluid d-inline-block" src="/images/home-img-09-370x250.jpg" width="370" height="250" alt="">
                        <div class="text-md-left offset-top-24">
                            <div>
                                <h5 class="font-weight-bold text-primary"><a href="single-property.html">Avalon at Mission Bay</a></h5>
                            </div>
                            <h6 class="offset-top-10"> $1595.00/mon</h6>
                            <ul class="list-inline list-inline-dotted text-dark">
                                <li class="list-inline-item">1200 sq ft</li>
                                <li class="list-inline-item">2 bedrooms</li>
                                <li class="list-inline-item">2 bathrooms</li>
                            </ul>
                            <div>
                                <p>Avalon at Mission Bay located in San Francisco near the San Francisco Caltrain Station offers thoughtfully designed studio, 1, 2 and 3 bedroom apartments and town homes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4"><img class="img-fluid d-inline-block" src="/images/home-img-10-370x250.jpg" width="370" height="250" alt="">
                        <div class="text-md-left offset-top-24">
                            <div>
                                <h5 class="font-weight-bold text-primary"><a href="single-property.html">Bayside Village Apartments</a></h5>
                            </div>
                            <h6 class="offset-top-10"> $2699.00/mon</h6>
                            <ul class="list-inline list-inline-dotted text-dark">
                                <li class="list-inline-item">2200 sq ft</li>
                                <li class="list-inline-item">4 bedrooms</li>
                                <li class="list-inline-item">3 bathrooms</li>
                            </ul>
                            <div>
                                <p>Pick your pleasure from a vantage point that puts all the best of the city's lively South Beach neighborhood within easy reach.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="offset-top-50"><a class="btn btn-primary" href="catalog.html">view all properties</a></div>
            </div>
        </section>
        <!--Section Real Estate Tools and Resources-->
        <section class="context-dark">
            <div class="parallax-container" data-parallax-img="/images/bg-01-1920x768.jpg">
                <div class="parallax-content">
                    <div class="container section-98 section-md-110">
                        <h2 class="font-weight-bold">Real Estate Tools and Resources</h2>
                        <hr class="divider bg-saffron">
                        <div class="row row-60 justify-content-sm-center offset-top-66">
                            <div class="col-md-4">
                                <!-- Icon Box Type 4--><span class="novi-icon novi-background icon icon-circle mdi mdi-comment-text-outline icon-carrot-filled"></span>
                                <h5 class="font-weight-bold text-uppercase">more listings</h5>
                                <p class="text-light">Check up to 40% more houses for sale. See pictures of your new life at a new place. See maps, markets, etc.</p>
                            </div>
                            <div class="col-md-4">
                                <!-- Icon Box Type 4--><span class="novi-icon novi-background icon icon-circle mdi mdi-star icon-carrot-filled"></span>
                                <h5 class="font-weight-bold text-uppercase">top-rated agents</h5>
                                <p class="text-light">All our real estate agents are professionals in your neighborhood, which are ready to help you find your new home.</p>
                            </div>
                            <div class="col-md-4">
                                <!-- Icon Box Type 4--><span class="novi-icon novi-background icon icon-circle mdi mdi-domain icon-carrot-filled"></span>
                                <h5 class="font-weight-bold text-uppercase">home estimates</h5>
                                <p class="text-light">Wanna know how much your new home will cost? See estimates for any neighborhood and check prices for similar homes.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Section Real Estate Agents-->
        <section class="section-98 section-lg-110 novi-background bg-cover">
            <div class="container">
                <h2 class="font-weight-bold">Real Estate Agents</h2>
                <hr class="divider bg-saffron">
                <div class="row row-50 justify-content-sm-center offset-top-66">
                    <div class="col-md-6 col-lg-3">
                        <div class="member-block-type-6"><img class="img-fluid d-inline-block" src="/images/user-ashley-mason-270x270.jpg" width="270" height="270" alt="">
                            <div class="text-left offset-top-20">
                                <div>
                                    <h5 class="font-weight-bold text-primary"><a href="team-member.html">Ashley Mason</a></h5>
                                </div>
                            </div>
                            <address class="contact-info text-left">
                                <ul class="list-unstyled p">
                                    <li class="d-block"><span class="novi-icon icon icon-xxs mdi mdi-phone text-middle"></span> <a class="d-inline-block text-middle" href="tel:1-800-7650-986">1-800-7650-986</a>
                                    </li>
                                    <li class="d-block"><span class="novi-icon icon icon-xxs mdi mdi-email-open text-middle"></span> <a class="d-inline-block text-middle" href="mailto:ashley@demolink.org">ashley@demolink.org</a>
                                    </li>
                                </ul>
                            </address>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="member-block-type-6"><img class="img-fluid d-inline-block" src="/images/user-russel-myers-270x270.jpg" width="270" height="270" alt="">
                            <div class="text-left offset-top-20">
                                <div>
                                    <h5 class="font-weight-bold text-primary"><a href="team-member.html">Russell Myers</a></h5>
                                </div>
                            </div>
                            <address class="contact-info text-left">
                                <ul class="list-unstyled p">
                                    <li class="d-block"><span class="novi-icon icon icon-xxs mdi mdi-phone text-middle"></span> <a class="d-inline-block text-middle" href="tel:1-800-7650-986">1-800-7650-986</a>
                                    </li>
                                    <li class="d-block"><span class="novi-icon icon icon-xxs mdi mdi-email-open text-middle"></span> <a class="d-inline-block text-middle" href="mailto:russell@demolink.org">russell@demolink.org</a>
                                    </li>
                                </ul>
                            </address>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="member-block-type-6"><img class="img-fluid d-inline-block" src="/images/user-shirley-vasques-270x270.jpg" width="270" height="270" alt="">
                            <div class="text-left offset-top-20">
                                <div>
                                    <h5 class="font-weight-bold text-primary"><a href="team-member.html">Shirley Vasquez</a></h5>
                                </div>
                            </div>
                            <address class="contact-info text-left">
                                <ul class="list-unstyled p">
                                    <li class="d-block"><span class="novi-icon icon icon-xxs mdi mdi-phone text-middle"></span> <a class="d-inline-block text-middle" href="tel:1-800-7650-986">1-800-7650-986</a>
                                    </li>
                                    <li class="d-block"><span class="novi-icon icon icon-xxs mdi mdi-email-open text-middle"></span> <a class="d-inline-block text-middle" href="mailto:shirley@demolink.org">shirley@demolink.org</a>
                                    </li>
                                </ul>
                            </address>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="member-block-type-6"><img class="img-fluid d-inline-block" src="/images/user-terry-sandoval-270x270.jpg" width="270" height="270" alt="">
                            <div class="text-left offset-top-20">
                                <div>
                                    <h5 class="font-weight-bold text-primary"><a href="team-member.html">Terry Sandoval</a></h5>
                                </div>
                            </div>
                            <address class="contact-info text-left">
                                <ul class="list-unstyled p">
                                    <li><span class="novi-icon icon icon-xxs mdi mdi-phone text-middle"></span> <a class="d-inline-block text-middle" href="tel:1-800-7650-986">1-800-7650-986</a>
                                    </li>
                                    <li><span class="novi-icon icon icon-xxs mdi mdi-email-open text-middle"></span> <a class="d-inline-block text-middle" href="mailto:terry@demolink.org">terry@demolink.org</a>
                                    </li>
                                </ul>
                            </address>
                        </div>
                    </div>
                </div>
                <div class="offset-top-66"><a class="btn btn-primary" href="about.html">view all agents</a></div>
            </div>
        </section>
        <!--Section Testimonials-->
        <section class="section-98 section-lg-110 bg-lighter novi-background bg-cover">
            <div class="container">
                <h2 class="font-weight-bold">Testimonials</h2>
                <hr class="divider bg-saffron">
                <div class="offset-top-66">
                    <!-- Testimonials Slider v.4-->
                    <div class="owl-carousel owl-carousel-classic owl-carousel-class-light owl-carousel-testimonials-3" data-items="1" data-md-items="2" data-xl-items="3" data-nav="false" data-dots="true" data-margin="50px">
                        <div>
                            <blockquote class="quote quote-slider-4 unit uni-spacing-sm flex-md-row text-md-left">
                                <div class="unit-left"><img class="quote-img rounded-circle" width="80" height="80" src="/images/user-lisa-evans-80x80.jpg" alt="Lisa Evans" /></div>
                                <div class="unit-body">
                                    <div>
                                        <p>
                                            <q>Thank you for your prompt response and the help that you gave me. You always have a quick solution to any problem. What an excellent level of customer service!</q>
                                        </p>
                                    </div>
                                    <p class="font-weight-bold quote-author offset-top-10 offset-md-top-4">
                                        <cite class="text-normal">Lisa Evans</cite>
                                    </p>
                                </div>
                            </blockquote>
                        </div>
                        <div>
                            <blockquote class="quote quote-slider-4 unit uni-spacing-sm flex-md-row text-md-left">
                                <div class="unit-left"><img class="quote-img rounded-circle" width="80" height="80" src="/images/user-nicholas-lane-80x80.jpg" alt="Nicholas Lane" /></div>
                                <div class="unit-body">
                                    <div>
                                        <p>
                                            <q>I just want to thank you for your help. I was so pleased and grateful. Keep up the excellent work. Your site provides the best support I have ever encountered.</q>
                                        </p>
                                    </div>
                                    <p class="font-weight-bold quote-author offset-top-10 offset-md-top-4">
                                        <cite class="text-normal">Nicholas Lane</cite>
                                    </p>
                                </div>
                            </blockquote>
                        </div>
                        <div>
                            <blockquote class="quote quote-slider-4 unit uni-spacing-sm flex-md-row text-md-left">
                                <div class="unit-left"><img class="quote-img rounded-circle" width="80" height="80" src="/images/user-ethan-dean-80x80.jpg" alt="Ethan Dean" /></div>
                                <div class="unit-body">
                                    <div>
                                        <p>
                                            <q>Thank you very much for your rapid response. It's no doubt that your company is worth admiring! I have experienced the fastest support ever. Thank you a thousand times.</q>
                                        </p>
                                    </div>
                                    <p class="font-weight-bold quote-author offset-top-10 offset-md-top-4">
                                        <cite class="text-normal">Ethan Dean</cite>
                                    </p>
                                </div>
                            </blockquote>
                        </div>
                        <div>
                            <blockquote class="quote quote-slider-4 unit uni-spacing-sm flex-md-row text-md-left">
                                <div class="unit-left"><img class="quote-img rounded-circle" width="80" height="80" src="/images/user-lisa-evans-80x80.jpg" alt="Lisa Evans" /></div>
                                <div class="unit-body">
                                    <div>
                                        <p>
                                            <q>Thank you for your prompt response and the help that you gave me. You always have a quick solution to any problem. What an excellent level of customer service!</q>
                                        </p>
                                    </div>
                                    <p class="font-weight-bold quote-author offset-top-10 offset-md-top-4">
                                        <cite class="text-normal">Lisa Evans</cite>
                                    </p>
                                </div>
                            </blockquote>
                        </div>
                        <div>
                            <blockquote class="quote quote-slider-4 unit uni-spacing-sm flex-md-row text-md-left">
                                <div class="unit-left"><img class="quote-img rounded-circle" width="80" height="80" src="/images/user-nicholas-lane-80x80.jpg" alt="Nicholas Lane" /></div>
                                <div class="unit-body">
                                    <div>
                                        <p>
                                            <q>I just want to thank you for your help. I was so pleased and grateful. Keep up the excellent work. Your site provides the best support I have ever encountered.</q>
                                        </p>
                                    </div>
                                    <p class="font-weight-bold quote-author offset-top-10 offset-md-top-4">
                                        <cite class="text-normal">Nicholas Lane</cite>
                                    </p>
                                </div>
                            </blockquote>
                        </div>
                        <div>
                            <blockquote class="quote quote-slider-4 unit uni-spacing-sm flex-md-row text-md-left">
                                <div class="unit-left"><img class="quote-img rounded-circle" width="80" height="80" src="/images/user-ethan-dean-80x80.jpg" alt="Ethan Dean" /></div>
                                <div class="unit-body">
                                    <div>
                                        <p>
                                            <q>Thank you very much for your rapid response. It's no doubt that your company is worth admiring! I have experienced the fastest support ever.Thank you a thousand </q>
                                        </p>
                                    </div>
                                    <p class="font-weight-bold quote-author offset-top-10 offset-md-top-4">
                                        <cite class="text-normal">Ethan Dean</cite>
                                    </p>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Section Real Estate Tools and Resources-->
        <section class="context-dark">
            <div class="parallax-container" data-parallax-img="/images/bg-02-1920x855.jpg">
                <div class="parallax-content">
                    <div class="container section-98 section-md-110">
                        <h2 class="font-weight-bold">Get In Touch</h2>
                        <hr class="divider bg-saffron">
                        <div class="row row-fix justify-content-sm-center offset-top-66">
                            <div class="col-md-8">
                                <!-- RD Mailform-->
                                <form class="rd-mailform text-left" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                                    <div class="row row-fix">
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label class="form-label" for="real-estate-first-name">First name:</label>
                                                <input class="form-control" id="real-estate-first-name" type="text" name="name" data-constraints="@Required">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 offset-top-24 offset-xl-top-0">
                                            <div class="form-group">
                                                <label class="form-label" for="real-estate-last-name">Last name:</label>
                                                <input class="form-control" id="real-estate-last-name" type="text" name="last_name" data-constraints="@Required">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 offset-top-24">
                                            <div class="form-group">
                                                <label class="form-label" for="real-estate-phone">Phone:</label>
                                                <input class="form-control" id="real-estate-phone" type="text" name="phone" data-constraints="@Numeric @Required">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 offset-top-24">
                                            <div class="form-group">
                                                <label class="form-label" for="real-estate-mail">E-mail:</label>
                                                <input class="form-control" id="real-estate-mail" type="email" name="email" data-constraints="@Required @Email">
                                            </div>
                                        </div>
                                        <div class="col-xl-12 offset-top-24">
                                            <div class="form-group">
                                                <label class="form-label" for="contact-me-message">Message:</label>
                                                <textarea class="form-control" id="contact-me-message" name="message" data-constraints="@Required" style="height: 150px"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="offset-top-30 text-center">
                                        <button class="btn btn-primary" type="submit">send message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@stop