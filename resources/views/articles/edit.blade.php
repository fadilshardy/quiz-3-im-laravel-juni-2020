@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-header bg-primary text-white">
        Edit artikel #{{$article->id}}
    </div>
    <div class="card-body">
        <form action="/artikel/{{$article->id}}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" value="{{$article->judul}}" class="form-control" id="judul" name="judul"
                    placeholder="Isi judul artikel">
            </div>
            <div class="form-group">
                <label for="isi">Isi</label>
                <textarea class="form-control" name="isi" id="isi" cols="30" rows="10">{{$article->isi}}</textarea>
            </div>
            <div class="form-group">
                <label for="tag">Tag</label>
                <input type="text" class="form-control" id="tag" name="tag" placeholder="Isi tag artikel"
                    value="{{$article->tag}}">
                <small id="emailHelp" class="form-text text-muted">pisah tag dengan koma</small>

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection

@push('scripts')
{{-- 
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    });
</script> --}}

@endpush