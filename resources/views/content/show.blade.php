@extends('bs')

@section('content')
    <div class="container-fluid">
        <div class="container p-3 my-4">

                <div class="card my-3 w-50 m-auto rounded-4  ">
                    <img
                    class="card-img-top"
                    src="{{url('foto').'/'.$product->image_url}}"
                    alt="Card image cap"
                    />
                    <div class="card-body">
                        <span class="h1 card-title m-1 ">{{$product->product_name}}</span>
                        <span class="{{$product->is_active != 'active' ? 'bg-secondary' : 'bg-success'  }} m-1  rounded-3 p-1 h5 text-light">{{$product->is_active}}</span>
                        <p class=" card-text m-2  ">price : {{$product->price}} Rp | stock : {{$product->stock}} item </p>
                        @if ($product->description)
                        <div class="card">
                            <div class="card-body">
                                <blockquote class="blockquote mb-0 ">
                                        <cite title="">{{$product->description}}</cite>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                        @endif

                    </div>
                    <a href="/products" class="btn btn-secondary w-25 m-4 ms-auto ">back</a>
                </div>


        </div>
    </div>
@endsection
