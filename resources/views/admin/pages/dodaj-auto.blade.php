@extends('admin/layouts/mas')

@section('style')

    <style>
        
        .li{
            list-style-type: none;
        }
    
    </style>

@endsection

@section('data')

    <div class="row">
        <div class="col-12 col-md-12">
            <h4>Dodaj model</h4>
            <div style="border-bottom: 1px solid #c5c5c5; margin-bottom: 30px;"></div>
        </div>
        <div class="col-12 col-md-2"></div>
        <div class="col-12 col-md-8">
            <div class="row">
                
            </div>
        
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif

            @if(session()->has('messageError'))
                <div class="alert alert-danger">
                    {{ session()->get('messageError') }}
                </div>
            @endif


            <form action="/admin/dodaj-automobile" method="POST" enctype="multipart/form-data">
                @csrf


                <div class="row">
                    <div class="form-group col-12 col-md-6">

                        <label>Kategorija</label>
                        <select class="form-control" name="marka">
    
                            <option selected disabled>Odaberite marku vozila</option>
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

                    </div>

                    <div class="form-group col-12 col-md-6">

                        <label>Model</label>
                        <input type="text" name="model" class="form-control">

                    </div>

                </div>

                <div class="row">
                    <div class="form-group col-12 col-md-6">
                        <label>Vrsta nosaca</label>
                        <select class="form-control" name="vrsta_nosaca">
    
                            <option selected disabled>Odaberite vrstu nosaca</option>
                            <option value="cam">CAM</option>
                            <option value="thule">THULE</option>

                        </select>
                    </div>

                    <div class="form-group col-12 col-md-6">
                        <label>Kit</label>
                        <input class="form-control" type="text" name="kit">
                    </div>

                </div>

                <div class="row">
                    <div class="form-group col-12 col-md-6">

                        <label>Sipka</label>
                        <input type="text" name="sipka" class="form-control">

                    </div>
                </div>
                
                <hr>

                <button class="btn btn-primary">Sačuvaj</button>
            </form>
        </div>

    </div>


@endsection