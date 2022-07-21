@extends('layouts.app', ['activePage' => 'paciente', 'titlePage' => __('Crear Paciente')])
@section('content')
  <style>
  #nombre{
    color: #333;
    font-size: 20px;
    font-weight: 600;
    }
    h4{
    color:#fda205;
    font-size: 40px;
    font-weight: 600;
    }
  </style>
  </head>
  <body>
    
  <div class="cargando">
      <div class="loader-outter"></div>
      <div class="loader-inner"></div>
  </div>
  <div class="container mt-5 p-5">
    <h4 class="text-center">
      <img src="{{ asset('img/logo.png') }}" alt="Logo"  style="width: 120px;">
    </h4>
    <hr>
    <div class="row text-center" style="background-color: #f7f8f8">
      @foreach($resultados as $resultado)
          <div class="col-md-3 mt-2 mb-2"> 
            <label for="nombre" id="nombre">{{ $resultado->nombre }}</label>
            <br>
              {{
              $miQr = QrCode::
                    format('svg')->
                    size(100)  //defino el tamaño
                    ->margin(1)  //defino el margen
                    ->generate($resultado) /** genero el codigo qr **/
              }}
          </div>
      @endforeach

    </div>
  </div>


    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript">
      $(document).ready(function() {

          $(window).load(function() {
              $(".cargando").fadeOut(1000);
          });
      });
    </script>
@endsection