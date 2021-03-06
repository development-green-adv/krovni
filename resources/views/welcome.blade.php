@extends("layout/master")

@section("title", "Enter title here")

@section("seo_content")

    <meta name="keywords" content="" />
    <meta name="description" content="" />

@endsection

@section("content")

    @include("inc/header")

    <div class="slideshow">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active position-relative">
                <img class="d-block w-100" src="{{ asset('images/web/slider-img-1.png') }}" alt="First slide">
                <div class="container">
                    <div class="slider-content">
                        <h3 data-aos="fade-left">iznajmljivanje, prodaja i čuvanje</h3>
                        <h1 data-aos="fade-right">krovnih kofera i krovnih nosača</h1>
                        <a class="slider-btn-1" href="#">KROVNI KOFERI</a>
                        <a class="slider-btn-2" href="#">KROVNI NOSAČI</a>
                    </div>
                </div>
              </div>
              <div class="carousel-item position-relative">
                <img class="d-block w-100" src="{{ asset('images/web/slider-img-1.png') }}" alt="Second slide">
                <div class="container">
                    <div class="slider-content">
                        <h3>iznajmljivanje, prodaja i čuvanje</h3>
                        <h1>krovnih kofera i krovnih nosača</h1>
                        <a class="slider-btn-1" href="#">KROVNI KOFERI</a>
                        <a class="slider-btn-2" href="#">KROVNI NOSAČI</a>
                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>

    <section class="first-section">
        <img class="img-fluid first-section-img" src="{{ asset('images/web/first-section-traka.png') }}" alt="">
        <div class="container">
            <h1 data-aos="fade-right">od malih kola <span>pravimo velika</span></h1>
            <div class="row">
                <div class="col-md-6" data-aos="fade-right">
                    <p><b>Sve veći broj vozača se odlučuje na kupovinu malog automobila, 
                        zbog nedostatka parking prostora ili jos bolje garaža. </b></p>
                    <p>Kada nemate garažu, samim tim nemate mesto gde bi čuvali vas krovni kofer. Mi smo tu da vam izadjemo u susret. Kod nas možete iznajmiti krovni kofer po povoljnim cenama. Rentiranje krovnih kofera ima vise pogodnosti. Potreba za njihovo korišćenje je 10 - 15 dana godišnje, tako da kofer treba skladistiti skoro 1 godinu, a nemate gde.</p> 
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <p><b>Sve veći broj vozača se odlučuje na kupovinu malog automobila, 
                        zbog nedostatka parking prostora ili jos bolje garaža.</b></p>
                    <p>Kada nemate garažu, samim tim nemate mesto gde bi čuvali vas krovni kofer. Mi smo tu da vam izadjemo u susret. Kod nas možete iznajmiti krovni kofer po povoljnim cenama. Rentiranje krovnih kofera ima vise pogodnosti. Potreba za njihovo korišćenje je 10 - 15 dana godišnje, tako da kofer treba skladistiti skoro 1 godinu, a nemate gde.</p>
                </div>
            </div>
        </div>
    </section>

    
    @include("inc/porucite-inc")


    <section class="services">
        <div class="container">
            <h1>NAŠE <span>USLUGE</span></h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="service-card" data-aos="fade-up">
                        <div class="service-card-img">
                            <img class="img-fluid w-100" src="{{ asset('images/web/service-card-img-1.png') }}" alt="">
                        </div>
                        <h2>rentiranje krovnih kofera</h2>
                        <p>Novo na našem tržištu,rentiranje krovnih kofera koji su Vam potrebni jednom ili dva puta godišnje. U ponudi su krovni boksevi švedske firme Thule, različitih dimenzija.</p>
                        <div class="mt-4"><a href="#">DETALJNIJE</a></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card" data-aos="fade-down">
                        <div class="service-card-img">
                            <img class="img-fluid w-100" src="{{ asset('images/web/service-card-img-2.png') }}" alt="">
                        </div>
                        <h2>prodaja krovnih kofera</h2>
                        <p>U ponudi imamo više modela različitih proizvodjača krovnih kofera i krovnih nosača: Thule, Hapro, Cam. Sa različitim zapreminama. Sigurni smo da ćemo naći pravo rešenje za vas. </p>
                        <div class="mt-4"><a href="#">DETALJNIJE</a></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card" data-aos="fade-up">
                        <div class="service-card-img">
                            <img class="img-fluid w-100" src="{{ asset('images/web/service-card-img-3.png') }}" alt="">
                        </div>
                        <h2>krovni nosači za skije i bicikle</h2>
                        <p>Ako imate svoj kofer ili nameravate da ga kupite, a nemate prostor gde bi mogli da ga skladištite u vreme kada vam kofer nije potreban, možete ga ostaviti nama na čuvanje do sledeće upotrebe.</p>
                        <div class="mt-4"><a href="#">DETALJNIJE</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include("inc/footer")


@endsection