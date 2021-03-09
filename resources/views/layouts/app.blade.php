<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{url('/css/app.css')}}" rel="stylesheet">
    <link href="{{url('css/bootstrap.css')}}" rel="stylesheet">
    <title>{{config('app.name', 'Teste')}}</title>
</head>
<body style="background-color: rgb(50,50,50)">
    @include('inc.navbar')
    <div class="container conCor">
        @include('inc.mensagens')
        @yield('content')    
    </div>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
    CKEDITOR.replace( 'summary-ckeditor' );
    </script>
</body>
</html> 