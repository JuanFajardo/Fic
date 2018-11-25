@extends('bett1')

@section('cuerpo')
<br><br><br>
<div class="row">
  <div class="col-sm">

    @if( $reserva[0]->fecha == '2018-11-29' )
    <div class="card text-white bg-success mb-3">
    @elseif( $reserva[0]->fecha == '2018-11-30' )
    <div class="card text-white bg-primary mb-3">
    @elseif( $reserva[0]->fecha == '2018-12-01' )
    <div class="card text-white bg-secondary mb-3">
    @endif

      <div class="card-header">
        <center> <h1> <b>{{$reserva[0]->nombres}}</b></h1> </center>
      </div>
      <div class="card-body">
        <h2 class="card-title">¡Su reserva fue realizada!.</h2>
        <br>
        <h2 class="card-text">
          Para la de <b>{{$reserva[0]->evento}} </b> con los grupos {{$reserva[0]->descripcion}}. <br>
            el día  <b>{{ date('d', strtotime($reserva[0]->fecha) ) }}</b> de {{ date('M', strtotime($reserva[0]->fecha) ) }}.en el  {{ $reserva[0]->lugar }} <br>
        </h2>
        <br><br>
        <center> <span class="badge badge-danger"> <h5>Confirme su registro hasta el medio día  del  evento, <br>caso contrario se anulara su reservación. </h5></span> </center>
        <br><br>

        @if( $reserva[0]->fecha == '2018-11-29' )
          <center><a class="btn btn-success btn-lg" href="{{asset('index.php')}}"> <h2>Realizar otra reservar <b>AQUI</b> </h2></a></center>
        @elseif( $reserva[0]->fecha == '2018-11-30' )
          <center><a class="btn btn-primary btn-lg" href="{{asset('index.php')}}"> <h2>Realizar otra reservar <b>AQUI</b> </h2></a></center>
        @elseif( $reserva[0]->fecha == '2018-12-01' )
          <center><a class="btn btn-secondary btn-lg" href="{{asset('index.php')}}"> <h2>Realizar otra reservar <b>AQUI</b> </h2></a></center>
        @endif


      </div>
    </div>

  </div>
</div>
@endsection
