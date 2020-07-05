@extends('layouts.master')

@section('content')
<div class="pt-1 mx-3">
    <div class="my-2 text-left">
        <a href="/artikel/create" class="btn btn-primary btn-sm">
            Buat Artikel Baru </a>
    </div>

    <div class="card">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th class="text-center" style="width: 200px">Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($articles as $key => $item)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$item->judul}}</td>
                    <td>{{$item->isi}}</td>
                    <td class="text-white text-center">
                        <a href="/artikel/{{$item->id}}" class="btn btn-success  btn-sm">view</a>
                        <a href="/artikel/{{$item->id}}/edit" class="btn btn-info btn-sm">Edit</a>
                        <form action="/artikel/{{$item->id}}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">
                                Delete
                            </button>
                        </form>

                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('scripts')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush