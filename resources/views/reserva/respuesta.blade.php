@extends('bett1')

@section('cuerpo')
<br><br><br>
<div class="row">
  <div class="col-sm">
    <div class="card text-white bg-info mb-3">
      <div class="card-header">
        <center> <h1> <b>{{$respuesta}}</b></h1> </center>
      </div>
      <div class="card-body">
        <br>
        <center><h1 class="card-text"> {{$respuesta}} se confirmó su asistencia. </h1></center>
        <br><br>
          <center><a class="btn btn-success btn-lg" href="{{asset('index.php/confirmar')}}"> <h2>Realizar otra Confirmacion <b>AQUI</b> </h2></a></center>
      </div>
    </div>

  </div>
</div>
@endsection
