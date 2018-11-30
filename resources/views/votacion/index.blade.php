@extends('bett1')

@section('cuerpo')
<br>
    <div class="card">
      <div class="card-body">

          <div class="row">
            <div class="col-sm">
              <center><img src="{{asset('/img/logo.jpg')}}" width="350"></center>
            </div>
          </div>


          <h1> ARTES MUSICALES - PRIMARIA</h1><br>
          <div class="row">
            @foreach($datos0 as $dato)
            <figure class = "votar" data-id="{{ $dato->id }}">
            <div class="card votar" style="width: 18rem;">
              <div class="card-body">
                <center>
                <h4 class="card-title">{{$dato->nombre}}</h4>
                  <p class="card-text">
                    <img src="{{asset('artista/'.$dato->foto)}}"  width="200" class="rounded">
                  </p>
                  <figcaption>
                    <a  class="btn btn-info" class="votar">
                    <h4 class="">CLICK VOTAR <i class></i> </h4>
                      <span class="badge badge-light"> <h4>{{$dato->obra}}</h4>  </span>
                    </a>
                  </figcaption>
                </center>
              </div>
            </div>
            </figure>
            @endforeach
          </div>

          <h1> ARTES MUSICALES - SECUNDARIA</h1><br>
          <div class="row">
            @foreach($datos1 as $dato)
            <figure class = "votar" data-id="{{ $dato->id }}">
            <div class="card votar" style="width: 18rem;">
              <div class="card-body">
                <center>
                <h4 class="card-title">{{$dato->nombre}}</h4>
                  <p class="card-text">
                    <img src="{{asset('artista/'.$dato->foto)}}"  width="200" class="rounded">
                  </p>
                  <figcaption>
                    <a  class="btn btn-info" class="votar">
                    <h4 class="">CLICK VOTAR <i class></i> </h4>
                      <span class="badge badge-light"> <h4>{{$dato->obra}}</h4>  </span>
                    </a>
                  </figcaption>
                </center>
              </div>
            </div>
            </figure>
            @endforeach
          </div>

          <h1> ARTES ESCENICAS - PRIMARIA</h1><br>
          <div class="row">
            @foreach($datos2 as $dato)
            <figure class = "votar" data-id="{{ $dato->id }}">
            <div class="card votar" style="width: 18rem;">
              <div class="card-body">
                <center>
                <h4 class="card-title">{{$dato->nombre}}</h4>
                  <p class="card-text">
                    <img src="{{asset('artista/'.$dato->foto)}}"  width="200" class="rounded">
                  </p>
                  <figcaption>
                    <a  class="btn btn-info" class="votar">
                    <h4 class="">CLICK VOTAR <i class></i> </h4>
                      <span class="badge badge-light"> <h4>{{$dato->obra}}</h4>  </span>
                    </a>
                  </figcaption>
                </center>
              </div>
            </div>
            </figure>
            @endforeach
          </div>

          <h1> ARTES ESCENICAS - SECUNDARIA</h1><br>
          <div class="row">
            @foreach($datos3 as $dato)
            <figure class = "votar" data-id="{{ $dato->id }}">
            <div class="card votar" style="width: 18rem;">
              <div class="card-body">
                <center>
                <h4 class="card-title">{{$dato->nombre}}</h4>
                  <p class="card-text">
                    <img src="{{asset('artista/'.$dato->foto)}}"  width="200" class="rounded">
                  </p>
                  <figcaption>
                    <a  class="btn btn-info" class="votar">
                    <h4 class="">CLICK VOTAR <i class></i> </h4>
                      <span class="badge badge-light"> <h4>{{$dato->obra}}</h4>  </span>
                    </a>
                  </figcaption>
                </center>
              </div>
            </div>
            </figure>
            @endforeach
          </div>
      </div>
    </div>



<div class="modal fade bd-example-modal-sm" id="bien" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <center> <h2> Gracias por su votación</h2></center>
      </div>
    </div>
  </div>
</div>


<div class="modal fade bd-example-modal-sm" id="mal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm " role="document">
    <div class="modal-content  panel-warning">
      <div class="modal-header  panel-heading">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <center> <h2> Su voto ya fué registrado</h2></center>
      </div>
    </div>
  </div>
</div>


@endsection

@section('js')
<script type="text/javascript">
  $('.votar').click(function(event){
    var fila = $(this).parents('figure');
    var id = fila.data('id');

    var link = "{{asset('index.php/artista/')}}/"+id;
    $.getJSON(link, function(data, textStatus) {
      if(data.length > 0){
        $.each(data, function(index, el) {
          if(el.respuesta == 'OK'){
            $('#bien').modal('show');
          }else{
            $('#mal').modal('show');
          }
        });
      }
    });
  });
</script>
@endsection
