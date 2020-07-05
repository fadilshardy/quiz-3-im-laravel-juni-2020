@extends('layouts.master')

@section('content')
<div class="my-2 ml-3">
    <a href="/artikel" class="btn btn-primary btn-sm  text-left">
        <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
    </a>
</div>
<div class="pt-2 mx-3">
    <div class="card">
        <div class="card-body">
            <h4>Judul: {{$article->judul}}</h4>
            <h6>slug: {{$article->slug}} </h6>
            <p class="card-text">{{$article->isi}}</p>

            @foreach ($tags as $tag)
            <button class="btn btn-success">{{$tag}}</button>
            @endforeach
        </div>
    </div>
</div>

@endsection