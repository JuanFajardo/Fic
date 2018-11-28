@extends('bett1')

@section('cuerpo')
<br><br>
<form  autocomplete="off" action="{{asset('index.php/confirmar')}}" method="post" id="formulario">
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
                <label > <b> Carnet de Identidad</b></label>
                <div class="input-group input-group-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-lg"> <li class="fa fa-address-card"></li> </span>
                  </div>
                  <input name="ci" id="ci" type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" required>
                </div>
              </div>
          </div>


          <br>
          <div class="row">
            <div class="col-sm">
              <center>
                <button type="submit" name="button" class="btn btn-danger btn-lg" id="boton" >
                  <h3>Confirmar</h3></button>
              </center>
            </div>
          </div>

      </div>
    </div>
  </div>
</div>


</form>
@endsection
