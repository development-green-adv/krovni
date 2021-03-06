@extends('admin/layouts/mas')

@section('style')

    <style>
        
        .table > tbody > tr > td {
            vertical-align: middle;
        }
    
    </style>

@endsection

@section('data')

    <div class="row">
        <div class="col-12 col-md-12">
            <div class="row">
                <div class="col-12 col-md-12">
                    <h4>Lista kofera za rentiranje</h4>
                    <div style="border-bottom: 1px solid #c5c5c5; margin-bottom: 30px;"></div>
                </div>
            </div>

            <div class="row" style="margin-bottom: 20px;">
            </div>

            <div class="row activee">
                <div class="col-12 col-md-12">

                    @if(session()->has('success'))
                        <div class="alert alert-success text-center">
                            {{ session()->get('success') }}
                        </div>
                    @endif
    
                    @if(session()->has('messageError'))
                        <div class="alert alert-danger text-center">
                            {{ session()->get('messageError') }}
                        </div>
                    @endif
                    

                    <table class="table table-striped" id="myTable">
                        <thead class="thead-dark">
                            <tr>
                                <th>Akcija</th>
                                <td>Slika</td>
                                <th>Model</th>
                                <th>Dimenzije</th>
                                <th>Zapremina</th>
                                <th>01 - 03</th>
                                <th>04 - 07</th>
                                <th>08 - 12</th>
                                <th>13 - 20</th>
                            </tr>
                        </thead>
                        <tbody id="els">

                            @if(count($data) > 0)

                                @foreach($data as $product)

                                    <tr>
                                        <td>
                                            <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#exampleModal{{ $product->id }}"><i class="fas fa-trash-alt"></i> Obriši</a>
                                        </td>
                                        <td><img style="height: 100px;" src="../images_gallery/{{ $product->main_image }}"></td>
                                        <td>{{ $product->model_kofera }}</td>
                                        <td>{{ $product->dimenzije }}</td>
                                        <td>{{ $product->zapremina }}</td>
                                        <td>{{ $product->kofer0103 }} / {{ $product->komplet0103 }}</td>
                                        <td>{{ $product->kofer0407 }} / {{ $product->komplet0407 }}</td>
                                        <td>{{ $product->kofer0812 }} / {{ $product->komplet0812 }}</td>
                                        <td>{{ $product->kofer1320 }} / {{ $product->komplet1320 }}</td>
                                    </tr>

                                    <div class="modal fade" id="exampleModal{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <h4><b>Da li ste sigurni ?</b></h4>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Ne</button>
                                                <a href="/admin/obrisi-rent-kofer/{{ $product->id }}" class="btn btn-success">Da</a>
                                            </div>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach

                                

                            @else

                                <tr>
                                    <td>Trenutno nema kofera za rentiranje</td>
                                </tr> 

                            @endif

                           

                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>





    <script>

        $('#myTable').DataTable({
            "columnDefs": [{
                "searchable": false,
                "targets": [0]
            },{
                "orderable": false,
                "targets": [0]
            }]

        });
    
    </script>

    

@endsection