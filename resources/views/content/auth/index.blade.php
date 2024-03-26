@extends('bs')

@section('content')
    <div class="container-fluid py-5 my-3">
        <div class="container d-flex justify-content-center ">
            <div class=" w-50 card border-primay rounded-4 border-2 border-primary">
                <div style="background: #1F1E30" class="p-4 rounded-4  card-body text-light">

                    <form action="/sesi/login" method="POST" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        {{-- form create product --}}

                        <p class="h1 text-center ">login<i class="bi bi-box m-2-danger "></i></p>
                        <div class="mb-3">
                            <label for="email" class="form-label">email</label>
                            <input style="background: #1F1E30" type="email" value="{{ old('email') }}" class="form-control text-light" name="email"
                                id="email" aria-describedby="helpId" placeholder="product..." />
                                @if ($errors->has('email'))
                                <small id="helpId" class="form-text text-danger">{{$errors->first('email')}}</small>
                                @endif
                        </div>

                        {{-- form create price --}}
                        <div class="mb-3">
                            <label for="password" class="form-label">password</label>
                            <input style="background: #1F1E30" type="password" value="{{ old('password') }}" class="form-control text-light " name="password"
                                id="password" aria-describedby="helpId" placeholder="password..." />
                                @if ($errors->has('password'))
                                <small id="helpId" class="form-text text-danger">{{$errors->first('password')}}</small>
                                @endif
                        </div>

                        <input type="submit" value="login" class="btn mt-5 btn-outline-primary  rounded-5 ">
                    </form>

                    <p class="mt-2 text-center">develop by:@ryanhz</p>
                    <p class="text-center">copyright 2024©</p>
                </div>
            </div>

        </div>
    </div>
@endsection
