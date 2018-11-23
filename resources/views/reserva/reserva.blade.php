@extends('bett1')

@section('cuerpo')
<br><br>
<form  autocomplete="off" action="{{asset('index.php/reserva')}}" method="post">
{{ csrf_field() }}


<div class="row">
  <div class="col-sm">
    <div class="card">
      <div class="card-body">

          <div class="row">
            <div class="col-sm">
              <center><img src="{{asset('/img/logo.jpg')}}" width="350"></center>
            </div>
          </div>
          <br>
          <div class="row">
              <div class="col-sm">
                <label > <b> Nombre Completo</b></label>
                <div class="input-group input-group-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-lg"> <li class="fa fa-user"></li> </span>
                  </div>
                  <input name="nombres" id="nombres" type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" required>
                </div>
              </div>
          </div>

          <div class="row">
              <div class="col-sm">
                <label > <b> Carnet de Identidad</b></label>
                <div class="input-group input-group-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-lg"> <li class="fa fa-address-card"></li> </span>
                  </div>
                  <input name="ci" id="ci" type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" required>
                </div>
              </div>
          </div>

          <div class="row">
              <div class="col-sm">
                <label > <b> Numero Telefono / Celular </b></label>
                <div class="input-group input-group-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-lg"> <li class="fa fa-phone"></li> </span>
                  </div>
                  <input type="text" name="celular" id="celular" type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" required>
                </div>
              </div>
          </div>

          <div class="row">
              <div class="col-sm">
                <label > <b> Elige tu Evento de la FIC </b></label>
                  <select name="id_evento" id="id_evento" class="form-control" required>
                    <option value="" disabled selected></option>
                    @foreach($eventos as $evento)
                      <option value="{{$evento->id}}">{{$evento->evento}} -  {{$evento->descripcion}} </option>
                    @endforeach
                  </select>
              </div>
          </div>
          <br>
          <div class="row">
            <div class="col-sm">
              <center>
                <button type="submit" name="button" class="btn btn-danger btn-lg  ">
                  <h3>Registrar</h3></button>
              </center>
            </div>
          </div>

      </div>
    </div>
  </div>
</div>


</form>
@endsection
