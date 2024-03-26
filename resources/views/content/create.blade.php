@extends('bs')

@section('content')
    <div class="container-fluid py-5 my-3">
        <div class="bg-r container d-flex justify-content-center ">
            <div class=" w-75 card border-secondary rounded-3">
                <div style="background: #1F1E30" class="bg-r text-light rounded-3 card-body">

                    <form action="/products" method="POST" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        {{-- form create product --}}
                        <div class="mb-3">
                            <label for="product_name" class="form-label">product</label>
                            <input style="background: #1F1E30" type="text" value="{{ old('product_name') }}" class="form-control text-light" name="product_name"
                                id="product_name" aria-describedby="helpId" placeholder="product..." />
                                @if ($errors->has('product_name'))
                                <small id="helpId" class="form-text text-danger">{{$errors->first('product_name')}}</small>
                                @endif
                        </div>

                        {{-- form create price --}}
                        <div class="mb-3">
                            <label for="price" class="form-label">price</label>
                            <input style="background: #1F1E30" type="text" value="{{ old('price') }}" class="form-control text-light" name="price"
                                id="price" aria-describedby="helpId" placeholder="price..." />
                                @if ($errors->has('price'))
                                <small id="helpId" class="form-text text-danger">{{$errors->first('price')}}</small>
                                @endif
                        </div>

                        {{-- form create stock --}}
                        <div class="mb-3">
                            <label for="stock" class="form-label">stock</label>
                            <input style="background: #1F1E30" type="text" value="{{ old('stock') }}" class="form-control text-light " name="stock"
                                id="stock" aria-describedby="helpId" placeholder="stock..." />
                                @if ($errors->has('stock'))
                                <small id="helpId" class="form-text text-danger">{{$errors->first('stock')}}</small>
                                @endif
                        </div>

                        {{-- form create image --}}
                        <div class="mb-3">
                            <label for="image" class="form-label">image</label>
                            <input style="background: #1F1E30" type="file" class="text-light form-control" name="image_url" id="image"
                                aria-describedby="helpId" placeholder="image..." />
                                @if ($errors->has('image_url'))
                                <small id="helpId" class="form-text text-danger">{{$errors->first('image_url')}}</small>
                                @endif
                        </div>

                        <div class="mb-3">
                            <label for="isactive" class="form-label d-block ">is active</label>
                            <input type="radio" name="is_active" value="active" id="isactive"><i
                                class="bi text-success ms-1 bi-check-all"></i>active
                            <input type="radio" name="is_active" value="nonactive" id="isactive"><i
                                class="bi text-danger ms-1 bi-check"></i>nonactive
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">description</label>
                            <textarea style="background: #1F1E30" name="description" id="description" class="form-control text-light "></textarea>
                        </div>

                        <a href="/products" class=" btn btn-secondary rounded-5 "><i class="bi bi-arrow-left"></i></a>
                        <button type="submit" class="btn btn-primary rounded-5 "><i class="bi bi-box-arrow-in-down"></i> store</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
