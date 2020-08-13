@extends('welcome')
@section('contenido')
<section class="context-dark">
        <div class="parallax-container" data-parallax-img="/images/bg-header-1920x362.jpg"><div class="material-parallax parallax"><img src="/images/bg-header-1920x362.jpg" alt="" style="display: block; transform: translate3d(-50%, 53px, 0px);"></div>
          <div class="parallax-content">
            <div class="container section-top-34 section-md-top-98 section-bottom-34">
              <div>
                <h1 class="font-weight-bold">Contacts</h1>
              </div>
              <ul class="list-inline list-inline-dashed p text-light breadcrumb-modern offset-top-10 offset-md-top-66">
                <li class="list-inline-item active"><a href="./">Home</a></li>
                <li class="list-inline-item"> Contacts</li>
              </ul>
            </div>
          </div>
        </div>
      </section>

<section class="bg-lighter section-66 novi-background bg-cover">
        <div class="container-wide">
          <div class="row row-fix justify-content-sm-center text-md-left">
            <div class="col-sm-10 col-md-8 col-lg-12">
              <div class="row row-50 justify-content-sm-center">
                <div class="col-sm-6 col-lg-3 col-xxl-2">
                  <div class="unit unit-spacing-xs unit-sm flex-md-row">
                    <div class="unit-left"><span class="novi-icon icon icon-xs mdi mdi-phone text-primary" style="font-size: 26px"></span></div>
                    <div class="unit-body">
                      <h6>Phones</h6>
                      <div class="p"><a class="d-block" href="tel:1-800-1234-567">1-800-1234-567</a><a class="d-block" href="tel:1-800-6547-987">1-800-6547-987</a></div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-3 col-xxl-2">
                  <div class="unit unit-spacing-xs unit-sm flex-md-row">
                    <div class="unit-left"><span class="novi-icon icon icon-xs mdi mdi-email-open text-primary" style="font-size: 26px"></span></div>
                    <div class="unit-body">
                      <h6>E-mail</h6>
                      <div class="p"><a class="d-block" href="mailto:info@demolink.org">info@demolink.org</a></div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-3 col-xxl-2">
                  <div class="unit unit-spacing-xs unit-sm flex-md-row">
                    <div class="unit-left"><span class="novi-icon icon icon-xs mdi mdi-map text-primary" style="font-size: 26px"></span></div>
                    <div class="unit-body">
                      <h6>Address</h6>
                      <address class="contact-info">213, New Lenox, Chicago, IL 60606</address>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-3 col-xxl-2">
                  <div class="unit unit-spacing-xs unit-sm flex-md-row">
                    <div class="unit-left"><span class="novi-icon icon icon-xs mdi mdi-timelapse text-primary" style="font-size: 26px"></span></div>
                    <div class="unit-body">
                      <h6>Open Hours</h6>
                      <div>
                        <p>8:00 – 19:00 Mon – Fri</p>
                      </div>
                      <p class="offset-top-0">9:00 – 17:00 Sat</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



<section class="section-98 section-md-110 novi-background bg-cover">
        <div class="container">
          <h2 class="font-weight-bold">Get In Touch</h2>
          <hr class="divider bg-saffron">
          <div class="offset-md-top-66">
            <div class="row row-fix justify-content-sm-center">
              <div class="col-sm-10 col-lg-8">
                <!-- RD Mailform-->
                <form class="rd-mailform text-left" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php" novalidate="novalidate">
                  <div class="row row-30 row-fix justify-content-sm-center">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="form-label rd-input-label" for="mailform-first-name">First name</label>
                        <input class="form-control bg-white form-control-has-validation form-control-last-child" id="mailform-first-name" type="text" name="first name" data-constraints="@Required"><span class="form-validation"></span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="form-label rd-input-label" for="mailform-last-name">Last Name</label>
                        <input class="form-control bg-white form-control-has-validation form-control-last-child" id="mailform-last-name" type="text" name="last name" data-constraints="@Required"><span class="form-validation"></span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="form-label rd-input-label" for="mailform-phone">Phone</label>
                        <input class="form-control bg-white form-control-has-validation form-control-last-child" id="mailform-phone" type="text" name="phone" data-constraints="@Numeric @Required"><span class="form-validation"></span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="form-label rd-input-label" for="mailform-email">E-mail</label>
                        <input class="form-control bg-white form-control-has-validation form-control-last-child" id="mailform-email" type="text" name="email" data-constraints="@Email @Required"><span class="form-validation"></span>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-label rd-input-label" for="mailform-message">Message</label>
                        <textarea class="form-control bg-white form-control-has-validation form-control-last-child" id="mailform-message" name="message" data-constraints="@Required"></textarea><span class="form-validation"></span>
                      </div>
                    </div>
                  </div>
                  <div class="offset-top-24 text-center">
                    <button class="btn btn-primary" type="submit">send message</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>

<div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;"><div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div>
@stop