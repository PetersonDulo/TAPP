@extends('layouts.app')

@section('content')
    <h1>Post</h1>
    @if(count($posts) > 0)
        @foreach ($posts as $item)
           <div class=""> 
               <h4><a href="/posts/{{$item->id}}">{{$item->titulo}}</a></h4>
               <small>Feito em {{$item->created_at}}</small>
           </div>
        @endforeach
        <div class="tam">
            {{-- {{$posts->links()}} --}}
        </div>
        
    @else
        <p> No posts found</p>
    @endif
@endsection