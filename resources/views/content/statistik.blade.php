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


                <div class="col-6">

                </div>
            </div>
        </div>
    </div>
@endsection
