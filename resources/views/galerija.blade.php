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
                            <h3>GALERIJA</h3>
                        </div>

                        <div id="lightgallery">
                            <a href="{{ asset('images/web/gallery-image-1.png') }}">
                                <img class="img-fluid" src="{{ asset('images/web/gallery-image-1.png') }}" />
                                <h3>A KLASA</h3>
                            </a>
                            <a href="{{ asset('images/web/gallery-image-2.png') }}">
                                <img class="img-fluid"  src="{{ asset('images/web/gallery-image-2.png') }}" />
                                <h3>C KLASA</h3>
                            </a>
                            <a href="{{ asset('images/web/gallery-image-3.png') }}">
                                <img class="img-fluid"  src="{{ asset('images/web/gallery-image-3.png') }}" />
                                <h3>D KLASA</h3>
                            </a>

                            <a href="{{ asset('images/web/gallery-image-1.png') }}">
                                <img class="img-fluid" src="{{ asset('images/web/gallery-image-1.png') }}" />
                                <h3>A KLASA</h3>
                            </a>
                            <a href="{{ asset('images/web/gallery-image-2.png') }}">
                                <img class="img-fluid"  src="{{ asset('images/web/gallery-image-2.png') }}" />
                                <h3>C KLASA</h3>
                            </a>
                            <a href="{{ asset('images/web/gallery-image-3.png') }}">
                                <img class="img-fluid"  src="{{ asset('images/web/gallery-image-3.png') }}" />
                                <h3>D KLASA</h3>
                            </a>
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