@extends('bett1')

@section('cuerpo')
<div class="row">
  <div class="col-sm">
    <img src="{{asset('/img/fic.png')}}" alt="" class="circle responsive-img center-align pulse" width="100%"><br>
    <a href="{{asset('/index.php/reserva')}}" class="btn btn-danger  btn-lg"> <h2>RESERVAR PARA LA F.I.C. 2018</h2></a>
  </div>
</div>
@endsection
