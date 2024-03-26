@extends('master')

@section('content')
    <div class="container-fluid py-5 my-4">
        <div class="container ">
            <div class="row">
                <div class="col-9">
                    <div class="card text-start">
                        <div class="card-body d-flex ">


                            <div class="card text-start w-25 m-1 bg-warning ">
                                <div class="card-body">
                                    <p class="h1 text-center ">{{ $active }}</p>
                                    <p class="text-center ">active</p>
                                </div>
                            </div>

                            <div class="card text-start w-25 m-1 bg-success ">
                                <div class="card-body">
                                    <p class="h1 text-center ">{{ $nonactive }}</p>
                                    <p class="text-center ">nonactive</p>
                                </div>
                            </div>

                            <div class="card text-start w-25 m-1 bg-danger ">
                                <div class="card-body">
                                    <p class="h1 text-center ">{{ $allitem }}</p>
                                    <p class="text-center ">all item</p>
                                </div>
                            </div>

                            <div class="card text-start w-25 m-1 bg-primary ">
                                <div class="card-body">
                                    <p class="h1 text-center ">{{ $allvalue }}</p>
                                    <p class="text-center ">all price</p>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
                <div class="col-3">
                    <div class="card text-start">
                        <div class="card-body">
                            <i class=" d-inline h1 bi bi-person-fill"></i>
                            <p class="d-inline h1">admin</p>
                        </div>
                    </div>

                    <div class="card text-start m-1">
                        <div class="card-body">
                            <i class=" d-inline h1 bi bi-box-fill"></i>
                            <p class="d-inline h1">{{ $countprod }}</p>
                        </div>
                    </div>
                </div>


                <div class="col-9 py-2">
                    <div class="card text-start">
                        <div class="card-body d-flex ">

                            <div style="background: #BFA3F6" class="card w-25 mx-2 p-2 m-auto rounded-4  ">
                                <img class="card-img-top rounded-3" src="{{ url('foto') . '/' . $pbanyak->image_url }}" alt="Card image cap" />

                                <p class="text-center">most items : {{$pbanyak->stock}}</p>
                            </div>

                            <div style="background: #D8F276" class="card w-25 mx-2 p-2 m-auto rounded-4  ">
                                <img class="card-img-top rounded-3" src="{{ url('foto') . '/' . $psedikit->image_url }}" alt="Card image cap" />

                                <p class="text-center">least items : {{$psedikit->stock}}</p>
                            </div>

                            <div style="background: #B4655F" class="card w-25 mx-2 p-2 m-auto rounded-4  ">
                                <img class="card-img-top rounded-3" src="{{ url('foto') . '/' . $pmahal->image_url }}" alt="Card image cap" />

                                <p class="text-center">expensive : {{$pmahal->price}} Rp</p>
                            </div>


                            <div style="background: #D9DDEF" class="card w-25 mx-2 p-2 m-auto rounded-4  ">
                                <img class="card-img-top rounded-3" src="{{ url('foto') . '/' . $pmurah->image_url }}" alt="Card image cap" />

                                <p class="text-center">cheapest : {{$pmurah->price}} Rp</p>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
