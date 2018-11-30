@extends('bett1')

@section('cuerpo')
<div class="row">
  <div class="col-sm">
    <br><br>
    <!--<a href="{{asset('/index.php/votar')}}" class="btn btn-primary  btn-lg"> <h1>VOTA AQUÍ</h1></a>-->
    <br>
    <img src="{{asset('/img/fic.png')}}" alt="" class="circle responsive-img center-align pulse" width="100%"><br>
    <br>
    <a href="{{asset('/index.php/reserva')}}" class="btn btn-danger  btn-lg"> <h1>RESERVA PARA EL FIC 2018</h1></a>
  </div>
</div>
@endsection
