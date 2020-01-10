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
                            <h3>KROVNI NOSAČI</h3>
                        </div>

                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <div class="krovni-nosaci-card">
                                    <img src="{{ asset('images/web/krovni-nosaci-card-1.png') }}" alt="">
                                    <div>
                                        <h1>krovni nosači</h1>
                                        <p>Krovni nosači - za automobile mogu biti sa čeličnim ili aluminijumskim šipkama, u zavisnosti od proizvođača njihova nosivost iznosi 50-75kg, što je preporučeno i od samih proizvođača automobila. U većini slučajeva nosači su specifični za svaki automobil. Mali broj modela automobila ima iste nosače. Ako menjate automobil često, a potrebni su vam 1 godišnje mi smo tu da vam iznajmimo nosače uz besplatnu montažu i demontažu.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-4">
                                <div class="krovni-nosaci-card">
                                    <img src="{{ asset('images/web/krovni-nosaci-card-2.png') }}" alt="">
                                    <div>
                                        <h1>nosači za bicikle</h1>
                                        <p>Nosači za bicikle - se mogu kačiti na različite načine. Najzastupljeniji nosači su za "peta" vrata. Postoje nosači koji se kače na kuku. Treći način za prevoz bicikla je na krovnim nosačima za kola.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="krovni-nosaci-card">
                                    <img src="{{ asset('images/web/krovni-nosaci-card-3.png') }}" alt="">
                                    <div>
                                        <h1>nosači za skije</h1>
                                        <p>Nosači za skije - mogu biti u vidu magneta koji se zalepe za krov automobila, mogućnost prevoza dva para skija. Jedina mana ovih nosača je preporučena brzina od 130km/h. Nosači za skije koji se montiraju na već postojeće nosače za kola mogu biti za 1,3 ili 5 pari skija. Na njima takođe mogu da se prevoze i snowboard daske.</p>
                                    </div>
                                </div>
                            </div>
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