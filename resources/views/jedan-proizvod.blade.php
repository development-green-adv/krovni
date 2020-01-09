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

                    @include("inc/left-meni")

                </div>
                <div class="col-md-9">
                    <div class="krovni-koferi-right">
                        <div class="krovni-koferi-right-naslov d-flex justify-content-between">
                            <h3>KROVNI KOFERI THULE - MOTION XT SPORT</h3>
                            <h4 class="cena-proizvoda-naslov">64.500,00 RSD</h4>
                        </div>

                        <div class="jedan-prozivod-slika">
                            <img src="{{ asset('images/web/single-proizvod.png') }}" alt="">
                        </div>

                        <div class="krovni-koferi-right-naslov opis-proizvoda">
                            <h5>OPIS PROIZVODA</h5>
                        </div>

                        <ul class="karakteristike-proizvoda">
                            <li><span>Unutrašnja dimenzija</span> <span>215x85x43</span></li>
                            <li><span>Litraža</span> <span>610 Kg</span></li>
                            <li><span>Težina praznog kofera</span> <span>25.5</span></li>
                            <li><span>Max. dozvoljena nosivost</span> <span>75 Kg</span></li>
                            <li><span>Otvaranje</span> <span>dvostrano</span></li>
                            <li><span>Centralno zaključavanje</span> <span>da</span></li>
                            <li><span>Način kačenja</span> <span>Power Click</span></li>
                            <li><span>Pogodno za skije</span> <span>>215 5-7 pari</span></li>
                        </ul>

                        <div class="opis-proizvoda-btns mt-4">
                            <a href="#">POŠALJITE UPIT</a>
                            <a href="/krovni-koferi">POVRATAK</a>
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