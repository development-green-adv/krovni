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
                        <div class="krovni-koferi-right-naslov">
                            <h3>KROVNI KOFERI THULE</h3>
                        </div>

                        <div class="row">

                            @if(count($data) > 0)

                                @foreach($data as $kofer)

                                    <div class="col-md-4">
                                        <div class="krovni-koferi-right-card">
                                            <div class="krovni-koferi-right-card-img position-relative">
                                                <img class="img-fluid w-100" src="../images_gallery/{{ $kofer->main_image }}">
                                                <div class="krovni-koferi-right-card-img-inner">
                                                <a href="/krovni-koferi/{{ $kofer->kategorija }}/{{ $kofer->alias }}">
                                                        <img src="{{ asset('images/web/lupa.png') }}">
                                                        <h4>KLIKNI ZA VISE DETALJA</h4>
                                                    </a>
                                                </div>
                                            </div>
                                            <p>{{ $kofer->kofer_naziv }}</p>
                                            <p><b>{{ $kofer->kofer_cena }} rsd</b></p>
                                        </div>
                                    </div>

                                @endforeach

                            @else

                                <p>Trenutno nema kofera</p>

                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        
    @include("inc/porucite-inc")

    @include("inc/footer-top")

    @include("inc/footer")


@endsection