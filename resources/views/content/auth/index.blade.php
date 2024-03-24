@extends('bs')

@section('content')
    <div class="container-fluid py-5 my-3">
        <div class="container d-flex justify-content-center ">
            <div class=" w-50 card border-danger">
                <div class="card-body">

                    <form action="/sesi/login" method="POST" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        {{-- form create product --}}

                        <p class="h1 text-center ">login<i class="bi bi-person-fill-gear m-2-danger text-danger "></i></p>
                        <div class="mb-3">
                            <label for="email" class="form-label">email</label>
                            <input type="email" value="{{ old('email') }}" class="form-control" name="email"
                                id="email" aria-describedby="helpId" placeholder="product..." />
                                @if ($errors->has('email'))
                                <small id="helpId" class="form-text text-danger">{{$errors->first('email')}}</small>
                                @endif
                        </div>

                        {{-- form create price --}}
                        <div class="mb-3">
                            <label for="password" class="form-label">password</label>
                            <input type="password" value="{{ old('password') }}" class="form-control" name="password"
                                id="password" aria-describedby="helpId" placeholder="password..." />
                                @if ($errors->has('password'))
                                <small id="helpId" class="form-text text-danger">{{$errors->first('password')}}</small>
                                @endif
                        </div>

                        <input type="submit" value="login" class="btn btn-outline-danger  rounded-5 ">
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
