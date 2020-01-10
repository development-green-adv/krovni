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
                            <h3>KONTAKT</h3>
                        </div>

                        <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=nilaco&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://saveytmp3.com">youtube to mp3</a></div><style>.mapouter{position:relative;text-align:right;height:400px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:100%;}</style></div>

                        <p class="kontakt-text">Ukoliko su Vam potrebne dodatne informacije vezano za krovne kofere, nosače ili Vas interesuju magneti za skije budite slobodni da nas kontaktirate putem telefona ili emailom.</p>
                        
                        <div class="krovni-koferi-right-naslov">
                            <h3>NILACO - VILINE VODE 47, BEOGRAD, 066 347 347, INFO@KROVNIKOFERI.RS</h3>
                        </div>

                        <div class="kontakt-page-form">
                            <form action="">
                                <input type="text" placeholder="Ime i prezime"> <br>
                                <input type="text" placeholder="Kontakt telefon" class="kontakt-page-form-1">
                                <input type="text" placeholder="Email adresa" class="kontakt-page-form-2">
                                <textarea name="" id="" cols="30" rows="4" placeholder="Eventualne promene"></textarea>
                                <button type="submit">POSALJITE PORUKU</button>
                            </form>
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