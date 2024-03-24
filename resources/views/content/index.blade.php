@extends('master')

@section('content')
    <div class="container-fluid py-5 my-4">
        <div class="container ">
            <form action="/products/cari" method="POST" class="d-flex my-2 my-lg-0 mb-3">
                @csrf
                <input class="form-control me-sm-2 w-25 ms-auto" type="text" name="cari" placeholder="Search" />
                <button class="btn btn-outline-danger my-2 my-sm-0 mb-3 " type="submit">
                    Search
                </button>
            </form>
            <table class="table table-bordered table-striped overflow-x-scroll my-3 ">
                @foreach ($products as $item)
                    <tr class=" text-center ">
                        <td>
                            @if ($item->image_url)
                                <img style="max-height: 50px;max-width:50px"
                                    src="{{ url('foto') . '/' . $item->image_url }}" alt="">
                            @endif
                        </td>
                        <td>{{ $item->product_name }}</td>
                        <td>{{ $item->price }} Rp</td>
                        <td>{{ $item->stock }} item</td>
                        <td>{{ $item->is_active }}</td>
                        <td>
                            <form action="products/{{ $item->id }}"
                                onsubmit="return confirm('apakah anda yakin ingin menhapus data ini')" method="POST"
                                class="d-inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm  ">delete</button>
                            </form>
                            <a href="/products/{{ $item->id }}/edit" class="btn btn-warning btn-sm">edit</a>
                            <a href="/products/{{ $item->id }}" class="btn btn-secondary btn-sm">show</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
