<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="{{ asset('css/app.css')}}"> 
    <link rel="stylesheet" href="{{ asset('css/estilo.css')}}">

  </head>
  <body>
        <div>
        //@component('components.componenteMenuUsuarioPadrao', ["current" => $current])
        @endcomponent
          <main rola="main">
            @hasSection('content')
              @yield('content')
            @endif
          </main>
        </div>
        <script src="{{ asset('js/app.js')}}" type="text/javascript"></script>
  </body>
</html>