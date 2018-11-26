@extends('bett1')

@section('cuerpo')
<br><br><br>
<div class="row">
  <div class="col-sm">
    <div class="card text-white bg-info mb-3">
      <div class="card-header">
        <center> <h1> <b>{{$reservas[0]->nombres}}</b></h1> </center>
      </div>
      <div class="card-body">
        <h2 class="card-title">Su reserva fue realizada para
          @if( count($reservas) > 1 )
            los eventos:
          @else
            el evento:
          @endif
        </h2>
        <br>
        <h2 class="card-text">
          <ul>
            @foreach($reservas as $reserva)
            <li> <b>{{$reserva->evento}} : </b> con los grupos {{$reserva->descripcion}}, el <b>{{ date('d', strtotime($reserva->fecha) ) }}</b> de {{ date('M', strtotime($reserva->fecha) ) }}. </li>
            @endforeach
          </ul>
          Lugar : <b> {{ $reserva->lugar }} </b>
        </h2>
        <br><br>
        <center> <span class="badge badge-danger"> <h5>Confirme su registro hasta el medio día  del  evento, <br>caso contrario se anulara su reservación. </h5></span> </center>
        <br><br>


          <center><a class="btn btn-primary btn-lg" href="{{asset('index.php')}}"> <h2>Realizar otra reservar <b>AQUI</b> </h2></a></center>



      </div>
    </div>

  </div>
</div>
@endsection
