@extends('layouts.app')

@section('content')
    <h1>Editar um Post</h1>
    <form action="{{route(['App\Http\Controllers\PostsController@edit',$post->id])}}" method="POST">
        <div class="mb-3">
            <label for="FormControlInput1" class="form-label">Titulo</label>
            <input type="text" class="form-control" name="titulo" placeholder="titulo">
        </div>
        <div class="mb-3">
            <label for="FormControlTextarea1" class="form-label">Body</label>
            <textarea class="form-control" id="summary-ckeditor" name="body" rows="8" placeholder="Corpo do texto"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mr-1 mb-1">Salvar</button>
        {{-- <a type="submit" class="btn btn-primary" href="{{}}" role="button">Enviar</a>  --}}
    </form>
@endsection