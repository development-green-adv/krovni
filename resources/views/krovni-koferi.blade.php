@extends("layout/master")

@section("title", "Enter title here")

@section("seo_content")

    <meta name="keywords" content="" />
    <meta name="description" content="" />

@endsection

@section("content")

    @include("inc/header")

    <section class="main-image">
        <div class="container">
            <div class="main-image-content">
                <h4>iznajmljivanje, prodaja i čuvanje</h4>
                <h1>krovnih kofera i krovnih nosača</h1>
            </div>
        </div>
    </section>

    <section class="krovni-koferi-page">
        <img class="img-fluid first-section-img" src="{{ asset('images/web/first-section-traka.png') }}" alt="">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="left-meni">
                        <div class="left-meni-naslovna">
                            <h3>NASLOVNA</h3>
                        </div>
                        <ul class="left-meni-items">
                            <li data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1" class="collapsed li-drop">
                                KROVNI KOFERI
                            </li>
                            <ul class="multi-collapse collapse left-meni-items-inner" id="multiCollapseExample1"> 
                                <li>
                                    <a href="#">Krovni koferi thule</a>
                                </li>
                                <li>
                                    <a href="#">Krovni koferi g3</a>
                                </li>
                                <li>
                                    <a href="#">Krovni koferi cam</a>
                                </li>
                            </ul>
                            <li data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2" class="collapsed li-drop">
                                KROVNI NOSAČI
                            </li>
                            <ul class="multi-collapse collapse left-meni-items-inner" id="multiCollapseExample2"> 
                                <li>
                                    <a href="#">Krovni koferi thule</a>
                                </li>
                                <li>
                                    <a href="#">Krovni koferi g3</a>
                                </li>
                                <li>
                                    <a href="#">Krovni koferi cam</a>
                                </li>
                            </ul>
                            <li data-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample3" class="collapsed li-drop">
                                RENTIRAJTE ONLINE
                            </li>
                            <ul class="multi-collapse collapse left-meni-items-inner" id="multiCollapseExample3"> 
                                <li>
                                    <a href="#">Krovni koferi thule</a>
                                </li>
                                <li>
                                    <a href="#">Krovni koferi g3</a>
                                </li>
                                <li>
                                    <a href="#">Krovni koferi cam</a>
                                </li>
                            </ul>
                            <li data-toggle="collapse" href="#multiCollapseExample4" role="button" aria-expanded="false" aria-controls="multiCollapseExample4" class="collapsed li-drop">
                                GALERIJA
                            </li>
                            <ul class="multi-collapse collapse left-meni-items-inner" id="multiCollapseExample4"> 
                                <li>
                                    <a href="#">Krovni koferi thule</a>
                                </li>
                                <li>
                                    <a href="#">Krovni koferi g3</a>
                                </li>
                                <li>
                                    <a href="#">Krovni koferi cam</a>
                                </li>
                            </ul>
                            <li data-toggle="collapse" href="#multiCollapseExample5" role="button" aria-expanded="false" aria-controls="multiCollapseExample5" class="collapsed li-drop">
                                KONTAKT
                            </li>
                            <ul class="multi-collapse collapse left-meni-items-inner" id="multiCollapseExample5"> 
                                <li>
                                    <a href="#">Krovni koferi thule</a>
                                </li>
                                <li>
                                    <a href="#">Krovni koferi g3</a>
                                </li>
                                <li>
                                    <a href="#">Krovni koferi cam</a>
                                </li>
                            </ul>
                        </ul>
                    </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="krovni-koferi-right">
                        <div class="krovni-koferi-right-naslov">
                            <h3>KROVNI KOFERI THULE</h3>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="krovni-koferi-right-card">
                                    <div class="krovni-koferi-right-card-img position-relative">
                                        <img class="img-fluid w-100" src="{{ asset('images/web/krovni-koferi-right-card.png') }}" alt="">
                                        <div class="krovni-koferi-right-card-img-inner">
                                            <img src="{{ asset('images/web/lupa.png') }}" alt="">
                                            <h4>KLIKNI ZA VISE DETALJA</h4>
                                        </div>
                                    </div>
                                    <p>MOTION XT SPORT</p>
                                    <p><b>64.500,00 rsd</b></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="krovni-koferi-right-card">
                                    <div class="krovni-koferi-right-card-img position-relative">
                                        <img class="img-fluid w-100" src="{{ asset('images/web/krovni-koferi-right-card.png') }}" alt="">
                                        <div class="krovni-koferi-right-card-img-inner">
                                            <img src="{{ asset('images/web/lupa.png') }}" alt="">
                                        </div>
                                    </div>
                                    <p>MOTION XT SPORT</p>
                                    <p><b>64.500,00 rsd</b></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="krovni-koferi-right-card">
                                    <div  class="krovni-koferi-right-card-img position-relative">
                                        <img class="img-fluid w-100" src="{{ asset('images/web/krovni-koferi-right-card.png') }}" alt="">
                                        <div class="krovni-koferi-right-card-img-inner">
                                            <img src="{{ asset('images/web/lupa.png') }}" alt="">
                                        </div>
                                    </div>
                                    <p>MOTION XT SPORT</p>
                                    <p><b>64.500,00 rsd</b></p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="krovni-koferi-right-card">
                                    <div  class="krovni-koferi-right-card-img position-relative">
                                        <img class="img-fluid w-100" src="{{ asset('images/web/krovni-koferi-right-card.png') }}" alt="">
                                        <div class="krovni-koferi-right-card-img-inner">
                                            <img src="{{ asset('images/web/lupa.png') }}" alt="">
                                        </div>
                                    </div>
                                    <p>MOTION XT SPORT</p>
                                    <p><b>64.500,00 rsd</b></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="krovni-koferi-right-card">
                                    <div  class="krovni-koferi-right-card-img position-relative">
                                        <img class="img-fluid w-100" src="{{ asset('images/web/krovni-koferi-right-card.png') }}" alt="">
                                        <div class="krovni-koferi-right-card-img-inner">
                                            <img src="{{ asset('images/web/lupa.png') }}" alt="">
                                        </div>
                                    </div>
                                    <p>MOTION XT SPORT</p>
                                    <p><b>64.500,00 rsd</b></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="krovni-koferi-right-card">
                                    <div  class="krovni-koferi-right-card-img position-relative">
                                        <img class="img-fluid w-100" src="{{ asset('images/web/krovni-koferi-right-card.png') }}" alt="">
                                        <div class="krovni-koferi-right-card-img-inner">
                                            <img src="{{ asset('images/web/lupa.png') }}" alt="">
                                        </div>
                                    </div>
                                    <p>MOTION XT SPORT</p>
                                    <p><b>64.500,00 rsd</b></p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="krovni-koferi-right-card">
                                    <div  class="krovni-koferi-right-card-img position-relative">
                                        <img class="img-fluid w-100" src="{{ asset('images/web/krovni-koferi-right-card.png') }}" alt="">
                                        <div class="krovni-koferi-right-card-img-inner">
                                            <img src="{{ asset('images/web/lupa.png') }}" alt="">
                                        </div>
                                    </div>
                                    <p>MOTION XT SPORT</p>
                                    <p><b>64.500,00 rsd</b></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="krovni-koferi-right-card">
                                    <div  class="krovni-koferi-right-card-img position-relative">
                                        <img class="img-fluid w-100" src="{{ asset('images/web/krovni-koferi-right-card.png') }}" alt="">
                                        <div class="krovni-koferi-right-card-img-inner">
                                            <img src="{{ asset('images/web/lupa.png') }}" alt="">
                                        </div>
                                    </div>
                                    <p>MOTION XT SPORT</p>
                                    <p><b>64.500,00 rsd</b></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="krovni-koferi-right-card">
                                    <div  class="krovni-koferi-right-card-img position-relative">
                                        <img class="img-fluid w-100" src="{{ asset('images/web/krovni-koferi-right-card.png') }}" alt="">
                                        <div class="krovni-koferi-right-card-img-inner">
                                            <img src="{{ asset('images/web/lupa.png') }}" alt="">
                                        </div>
                                    </div>
                                    <p>MOTION XT SPORT</p>
                                    <p><b>64.500,00 rsd</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        
    @include("inc/porucite-inc")



    <section class="krovni-koferi-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="krovni-koferi-bottom-card position-relative">
                        <img src="{{ asset('images/web/krovni-koferi-bottom-card-1.png') }}" alt="">
                        <a href="#">RENTIRANJE KROVNIH KOFERA</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="krovni-koferi-bottom-card position-relative">
                        <img src="{{ asset('images/web/krovni-koferi-bottom-card-2.png') }}" alt="">
                        <a href="#">PRODAJA KROVNIH KOFERA</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="krovni-koferi-bottom-card position-relative">
                        <img src="{{ asset('images/web/krovni-koferi-bottom-card-3.png') }}" alt="">
                        <a href="#">KROVNI KOSACI ZA SKIJE I BICKILE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include("inc/footer")


@endsection