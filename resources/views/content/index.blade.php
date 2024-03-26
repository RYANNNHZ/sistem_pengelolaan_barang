@extends('master')

@section('content')
    <div class="container-fluid py-5 my-4">
        <div class="container ">
            <form action="/products/cari" method="POST" class="d-flex my-2 my-lg-0 mb-3">
                @csrf
                <input class="form-control me-sm-2 w-25 ms-auto" type="text" name="cari" placeholder="Search" />
                <button style="background: #D8F276" class="btn my-2 my-sm-0 mb-3 " type="submit">
                    <i class="bi bi-search"></i>
                </button>
            </form>
            <table
                class="table table-group-divider table-responsive rounded-3 table-hover table-striped overflow-x-scroll my-3 ">
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
                        <td><span
                                class="{{ $item->is_active != 'active' ? 'bg-secondary' : 'bg-success' }} m-1  rounded-3 p-1 text-light">{{ $item->is_active }}</span>
                        </td>
                        <td>
                            <form action="products/{{ $item->id }}"
                                onsubmit="return confirm('apakah anda yakin ingin menhapus data ini')" method="POST"
                                class="d-inline">
                                @csrf
                                @method('delete')
                                <button style="background: #F3C4C3; color:#B4655F" type="submit"
                                    class="btn rounded-3 btn-danger btn-sm border-0  "><i class="bi bi-trash2"></i>
                                    delete</button>
                            </form>
                            <a style="background-color: #D8F276" href="/products/{{ $item->id }}/edit"
                                class="btn btn-warning rounded-3  border-0  btn-sm"><i class="bi bi-pen"></i> edit</a>
                            <a style="background: #575667;color:#a4a2bb" href="/products/{{ $item->id }}"
                                class="btn btn-secondary btn-sm rounded-3 "><i class="bi bi-back"></i> detail</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
