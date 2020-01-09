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

    <section class="second-section">
        <div class="container">
            <h1 data-aos="fade-right">PORUČITE KROVNI KOFERILI NOSAC <span>ONLINE</span></h1>
            <form action="">
                <div class="row">
                    <div class="col-md-6">
                        <div class="second-section-left" data-aos="fade-right">

                            <div class="d-flex justify-content-between mb-4 checkbox-items">
                                <div><input class="ml-3" type="checkbox" name="" value=""> NOSAČ I KOFER</div>
                                <div><input type="checkbox" name="" value=""> SAMO NOSAČ</div>
                                <div><input type="checkbox" name="" value=""> SAMO KOFER</div>
                            </div>


                           <div class="d-flex justify-content-between mb-4">
                                <input id="datepicker" placeholder="Početak rentiranja" />
                                <input id="datepicker-1" placeholder="Kraj rentiranja" />
                           </div>
                           
                           <select class="w-100 marka-vozila-items">
                            <option value="volvo" selected>Odaberite marku vozila</option>
                            <option value="Alfa Romeo">Alfa Romeo</option>
                            <option value="Audi">Audi</option>
                            <option value="BMW">BMW</option>
                            <option value="Chevrolet">Chevrolet</option>
                            <option value="Citroen">Citroen</option>
                            <option value="Dacia">Dacia</option>
                            <option value="Fiat">Fiat</option>
                            <option value="Ford">Ford</option>
                            <option value="Honda">Honda</option>
                            <option value="Hyundai">Hyundai</option>
                            <option value="Jaguar">Jaguar</option>
                            <option value="Jeep">Jeep</option>
                            <option value="Kia">Kia</option>
                            <option value="Lancia">Lancia</option>
                            <option value="Land Rover">Land Rover</option>
                            <option value="Lexus">Lexus</option>
                            <option value="Mazda">Mazda</option>
                            <option value="Mercedes Benz">Mercedes Benz</option>
                            <option value="Mini">Mini</option>
                            <option value="Mitsubishi">Mitsubishi</option>
                            <option value="Nissan">Nissan</option>
                            <option value="Opel">Opel</option>
                            <option value="Peugeot">Peugeot</option>
                            <option value="Porsche">Porsche</option>
                            <option value="Renault">Renault</option>
                            <option value="Seat">Seat</option>
                            <option value="Subaru">Subaru</option>
                            <option value="Suzuki">Suzuki</option>
                            <option value="Škoda">Škoda</option>
                            <option value="Toyota">Toyota</option>
                            <option value="Volkswagen">Volkswagen</option>
                            <option value="Volvo">Volvo</option>
                            <option value="Zastava">Zastava</option>
                          </select>
                           
                          <select class="w-100 marka-vozila-items">
                            <option value="volvo" selected>Odaberite model kofera</option>
                            <option value="1">Cam 323</option>
                            <option value="2">Cam 431</option>
                            <option value="3">THULE Pacific 100</option>
                            <option value="4">THULE Pacific 200</option>
                            <option value="5">THULE Pacific 600</option>
                            <option value="6">THULE pacific 780</option>
                            <option value="7">THULE MOTION 800</option>
                          </select>

                          <div class="napomena">
                              <h5>NAPOMENA:</h5>
                              <p>Sva polja su obavezna: ukoliko rentirate opremu od subote do subote, montaža je u petak, a demontaža u nedelju do 13h. Da bi izračunali cenu rente u kalendaru oznacite od subote do subote. Rentiranje ne može biti ispod 3 dana.</p>
                          </div>

                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-left">

                        <div class="d-flex justify-content-between mb-4 checkbox-items invisible">
                            <div><input class="ml-3" type="checkbox" name="" value=""> NOSAČ I KOFER</div>
                            <div><input type="checkbox" name="" value=""> SAMO NOSAČ</div>
                            <div><input type="checkbox" name="" value=""> SAMO KOFER</div>
                        </div>

                        <div class="second-section-right">
                            <input type="text" placeholder="Ime i prezime"> <br><br>
                            <input class="phone-adress" type="text" placeholder="Kontakt telefon">
                            <input class="phone-adress" type="text" placeholder="Email adresa"> <br><br>
                            <textarea name="" id="" cols="30" rows="6" placeholder="Eventualne napomene"></textarea>

                            <button type="submit">POŠALJITE ZAHTEV</button>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </section>

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