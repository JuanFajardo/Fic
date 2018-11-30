@extends('bett1')
@section('cuerpo')
<br><br>

<div class="row">
  <div class="col-sm">
    <div class="card">
      <div class="card-body">

          <br>
          <div class="row">
              <div class="col-sm">
                <label > <b> Carnet de Identidad</b></label>
                <div class="input-group input-group-lg">
                  <input name="ci" id="ci" type="text"   style="font-size:50px;" autofocus>
                </div>
              </div>
          </div>
          <br>

          <div class="row">
            <div class="col-sm">
              <center>
                <button type="button" name="button" class="btn btn-danger btn-lg" id="boton" >
                  <h3>Revisar</h3></button>
              </center>
            </div>
          </div>
          <br><br><br>
          <div class="row">
            <div class="col-sm">
              <center>
                <h1 id="msj1">  </h1>
                <h1 id="msj2">  </h1>
              </center>
            </div>
          </div>

      </div>
    </div>
  </div>
</div>
@endsection

@section('js')

<script type="text/javascript">
  jQuery('#boton').click(function(){
    var ci = $('#ci').val();
    $('#ci').val('');
    $('#ci').focus();


    var link = "{{asset('index.php/revisar/')}}/"+ci;
    $.getJSON(link, function(data, textStatus) {
      if(data.length > 0){
          $.each(data, function(index, el) {

            var texto =  el.ci + " - "+ el.nombres;
            $( "#msj1" ).html( texto )

            var texto2 = "";
            if( el.estado == "gamp")
              texto2 =  '<span class="badge badge-primary">SUPER V.I.P.</span>';
            else
              texto2 =  '<span class="badge badge-success">VIP INSCRITOS</span>';

            $( "#msj2" ).html( texto2 );

          });
      }else{
        var texto =  "El "+ci+" NO REALIZO SU RESERVA";
        $( "#msj1" ).html( texto );
        $( "#msj2" ).html( ' ' );
      }
    });

  });
</script>
@endsection
