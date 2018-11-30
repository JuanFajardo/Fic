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



      <div class="row">
        @foreach($datos as $dato)
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
                  <?php $suma = \DB::table('votacions')->where('id_artista', '=', $dato->id)->sum('voto'); ?>
                
                  <span class="badge badge-light"> <h4> Total Votos {{$suma}}</h4>  </span>
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


@endsection
