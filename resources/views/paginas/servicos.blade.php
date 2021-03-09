@extends('layouts.app')

@section('content')
    <h1>{{$titulo}}</h1>
      {{-- verifica se existe alguma variavel com o nome de servicos --}}
      @if(count($servi)>0)
      <ul class="list-group">
          @foreach($servi as $servico)
              <li class="list-group-item lis">{{$servico}}</li>
          @endforeach
      </ul>
  @endif
@endsection
        
    