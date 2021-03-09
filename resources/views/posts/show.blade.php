@extends('layouts.app')

@section('content')
    <br>
    <a href="/posts"  class="btn btn-outline-light">Volta</a>
    <h1>{{$post->titulo}}</h1>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Feito em {{$post->created_at}}</small>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-light">Editar</a>
@endsection