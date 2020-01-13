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
            <h4>Dodaj nosač</h4>
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


            <form action="/admin/dodaj-rent-nosaci" method="POST" enctype="multipart/form-data">
                @csrf


                <div class="row">
                    <div class="form-group col-12 col-md-6">

                        <label>Model</label>
                        <input class="form-control" type="text" name="model_nosaca">

                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-12 col-md-2 align-self-center">
                        <br><br>
                        <b>Cena 1 - 3 dana</b>
                    </div>
                    <div class="form-group col-12 col-md-4 align-self-center">
                        <label>Cena nosača</label>
                        <input class="form-control" type="text" name="nosac0103">
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-2 align-self-center">
                        <br>
                        <b>Cena 4 - 7 dana</b>
                    </div>
                    <div class="form-group col-12 col-md-4 align-self-center">
                        <input class="form-control" type="text" name="nosac0407">
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-2 align-self-center">
                        <br>
                        <b>Cena 8 - 12 dana</b>
                    </div>
                    <div class="form-group col-12 col-md-4 align-self-center">
                        <input class="form-control" type="text" name="nosac0812">
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-2 align-self-center">
                        <br>
                        <b>Cena 13 - 20 dana</b>
                    </div>
                    <div class="form-group col-12 col-md-4 align-self-center">
                        <input class="form-control" type="text" name="nosac1320">
                    </div>
                </div>
                <br>
                <hr>

                <button class="btn btn-primary">Sačuvaj</button>
            </form>
        </div>

    </div>

@endsection