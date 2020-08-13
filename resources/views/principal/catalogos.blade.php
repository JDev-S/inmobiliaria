@extends('welcome')
@section('contenido')
@section('scripts')
<link rel="stylesheet" href="/vendores/css/style.css">
@stop

<section class="context-dark">
    <div class="parallax-container" data-parallax-img="/images/bg-header-1920x362.jpg">
        <div class="material-parallax parallax"><img src="/images/bg-header-1920x362.jpg" alt="" style="display: block; transform: translate3d(-50%, 53px, 0px);"></div>
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

<section class="section section-lg oh">
    <div class="container">
        <!-- Isotope Filters-->
        <div class="row mb-3">
            <div class="col-6 themed-grid-col">Municipios
                <div>
                    <select id="cars">
                        <option value="volvo">Salamanca</option>
                        <option value="saab">San Miguel</option>
                        <option value="vw">Cortazar</option>
                        <option value="audi" selected>Celaya</option>
                    </select>
                </div>
            </div>
                        <div class="col-6 themed-grid-col">Tipo de venta
                <div>
                    <select id="cars">
                        <option value="volvo">Rentar</option>
                        <option value="saab">Comprar</option>
                        
                    </select>
                </div>
            </div>
           
        </div>
        <div class="isotope isotope-responsive row isotope--loaded" data-isotope-layout="fitRows" data-isotope-group="portfolio" style="position: relative; height: 689.22px;">
            <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Other" style="position: absolute; left: 0px; top: 0px;">
                <!-- Thumbnail Modern-->
                <div class="thumbnail-modern"><img class="thumbnail-modern-image" src="/vendores/images/grid-layout-1-370x256.jpg" alt="" width="370" height="256">
                    <div class="thumbnail-modern-caption">
                        <h4 class="thumbnail-modern-title"><a href="/info_propiedad">923 Folsom St, New York</a></h4>
                        <p class="text-primary font-weight-bold">$450.00/month</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Apartments" style="position: absolute; left: 318px; top: 0px;">
                <!-- Thumbnail Modern-->
                <div class="thumbnail-modern"><img class="thumbnail-modern-image" src="/vendores/images/grid-layout-2-370x256.jpg" alt="" width="370" height="256">
                    <div class="thumbnail-modern-caption">
                        <h4 class="thumbnail-modern-title"><a href="/info_propiedad">275 Lake Ave, Chicago</a></h4>
                        <p class="text-primary font-weight-bold">$750.00/month</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Houses" style="position: absolute; left: 637px; top: 0px;">
                <!-- Thumbnail Modern-->
                <div class="thumbnail-modern"><img class="thumbnail-modern-image" src="/vendores/images/grid-layout-3-370x256.jpg" alt="" width="370" height="256">
                    <div class="thumbnail-modern-caption">
                        <h4 class="thumbnail-modern-title"><a href="/info_propiedad">623 Willow Rd, Dallas</a></h4>
                        <p class="text-primary font-weight-bold">$650.00/month</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Apartments" style="position: absolute; left: 0px; top: 229px;">
                <!-- Thumbnail Modern-->
                <div class="thumbnail-modern"><img class="thumbnail-modern-image" src="/vendores/images/grid-layout-4-370x256.jpg" alt="" width="370" height="256">
                    <div class="thumbnail-modern-caption">
                        <h4 class="thumbnail-modern-title"><a href="/info_propiedad">9021 Oak Ln, San Diego</a></h4>
                        <p class="text-primary font-weight-bold">$340.00/month</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Other" style="position: absolute; left: 318px; top: 229px;">
                <!-- Thumbnail Modern-->
                <div class="thumbnail-modern"><img class="thumbnail-modern-image" src="/vendores/images/grid-layout-5-370x256.jpg" alt="" width="370" height="256">
                    <div class="thumbnail-modern-caption">
                        <h4 class="thumbnail-modern-title"><a href="/info_propiedad">401 Biscayne Blvd, Miami</a></h4>
                        <p class="text-primary font-weight-bold">$430.00/month</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Houses" style="position: absolute; left: 637px; top: 229px;">
                <!-- Thumbnail Modern-->
                <div class="thumbnail-modern"><img class="thumbnail-modern-image" src="/vendores/images/grid-layout-6-370x256.jpg" alt="" width="370" height="256">
                    <div class="thumbnail-modern-caption">
                        <h4 class="thumbnail-modern-title"><a href="/info_propiedad">3782 Broadway St, Atlanta</a></h4>
                        <p class="text-primary font-weight-bold">$250.00/month</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Other" style="position: absolute; left: 0px; top: 459px;">
                <!-- Thumbnail Modern-->
                <div class="thumbnail-modern"><img class="thumbnail-modern-image" src="/vendores/images/grid-layout-7-370x256.jpg" alt="" width="370" height="256">
                    <div class="thumbnail-modern-caption">
                        <h4 class="thumbnail-modern-title"><a href="/info_propiedad">585 W. Halifax Dr., Seattle</a></h4>
                        <p class="text-primary font-weight-bold">$310.00/month</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Houses" style="position: absolute; left: 318px; top: 459px;">
                <!-- Thumbnail Modern-->
                <div class="thumbnail-modern"><img class="thumbnail-modern-image" src="/vendores/images/grid-layout-8-370x256.jpg" alt="" width="370" height="256">
                    <div class="thumbnail-modern-caption">
                        <h4 class="thumbnail-modern-title"><a href="/info_propiedad">7565 Ashley St., Memphis</a></h4>
                        <p class="text-primary font-weight-bold">$490.00/month</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Apartments" style="position: absolute; left: 637px; top: 459px;">
                <!-- Thumbnail Modern-->
                <div class="thumbnail-modern"><img class="thumbnail-modern-image" src="/vendores/images/grid-layout-9-370x256.jpg" alt="" width="370" height="256">
                    <div class="thumbnail-modern-caption">
                        <h4 class="thumbnail-modern-title"><a href="/info_propiedad">585 W. Halifax Dr., Seattle</a></h4>
                        <p class="text-primary font-weight-bold">$280.00/month</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop
