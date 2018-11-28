@extends('bett0')
@section('modal2')
    <div id="modalModifiar" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content panel panel-primary ">

                <div class="modal-header panel-heading">
                    <b>Ver </b>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body panel-body">

                    <div class="row">
                      <div class="col-sm">
                        <label> <b><i>id_postulante</i></b> </label>
                        <input name='id_postulante' class='form-control' id='id_postulante' />
                      </div>
                      <div class="col-sm">
                        <label> <b><i>nombres</i></b> </label>
                        <input name='nombres' class='form-control' id='nombres'  />
                      </div>
                      <div class="col-sm">
                        <label> <b><i>Paterno</i></b> </label>
                        <input name='paterno'  class='form-control' id='paterno'  />
                      </div>
                      <div class="col-sm">
                        <label> <b><i>materno</i></b> </label>
                        <input name='materno' class='form-control' id='materno'  />
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-sm">
                        <label> <b><i>fec_nacimiento</i></b> </label>
                        <input name='fec_nacimiento' class='form-control' id='fec_nacimiento'  />
                      </div>
                      <div class="col-sm">
                        <label> <b><i>ci</i></b> </label>
                        <input name='ci' class='form-control' id='ci'  />
                      </div>
                      <div class="col-sm">
                        <label> <b><i>direccion_vive</i></b> </label>
                        <input name='direccion_vive' class='form-control' id='direccion_vive'  />
                      </div>
                      <div class="col-sm">
                        <label> <b><i>tel_fijo</i></b> </label>
                        <input name='tel_fijo' class='form-control' id='tel_fijo'  />
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-sm">
                        <label> <b><i>tel_movil</i></b> </label>
                        <input name='tel_movil' class='form-control' id='tel_movil'  />
                      </div>
                      <div class="col-sm">
                        <label> <b><i>tel_fax</i></b> </label>
                        <input name='tel_fax' class='form-control' id='tel_fax'  />
                      </div>
                      <div class="col-sm">
                        <label> <b><i>email</i></b> </label>
                        <input name='email' class='form-control' id='email'  />
                      </div>
                      <div class="col-sm">
                        <label> <b><i>profesion</i></b> </label>
                        <input name='profesion' class='form-control' id='profesion'  />
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-sm">
                        <label> <b><i></i>empresa</b> </label>
                        <input name='empresa' class='form-control' id='empresa'  />
                      </div>
                      <div class="col-sm">
                        <label> <b><i>fec_alta</i></b> </label>
                        <input name='fec_alta' class='form-control' id='fec_alta'  />
                      </div>
                      <div class="col-sm">
                        <label> <b><i>ciudad</i></b> </label>
                        <input name='ciudad' class='form-control' id='ciudad'  />
                      </div>
                      <div class="col-sm">
                        <label> <b><i>nacimiento</i></b> </label>
                        <input name='nacimiento' class='form-control' id='nacimiento'  />
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-sm">
                        <label> <b><i>expedido</i></b> </label>
                        <input name='expedido' class='form-control' id='expedido'  />
                      </div>
                      <div class="col-sm">
                        <label> <b><i>activo</i></b> </label>
                        <input name='activo' class='form-control' id='activo'  />
                      </div>
                      <div class="col-sm">
                        <label> <b><i>ci_explicativo</i></b> </label>
                        <input name='ci_explicativo' class='form-control' id='ci_explicativo'  />
                      </div>
                      <div class="col-sm">
                        <label> <b><i>created_at</i></b> </label>
                        <input name='created_at' class='form-control' id='created_at'  />
                      </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection

@section('cuerpo')
<div class="row">
	<div class="col-sm">
		<span class="badge badge-info"> <h4><center>29 de Nov.</center> <br> {{ $jueves }} Personas Inscritas</h4>  </span>
	</div>

	<div class="col-sm">
		<span class="badge badge-primary"> <h4><center>30 de Nov.</center> <br> {{ $viernes }} Personas Inscritas</h4>  </span>
	</div>

	<div class="col-sm">
		<span class="badge badge-success"> <h4><center>01 de Dic.</center> <br> {{ $sabado }} Personas Inscritas</h4>  </span>
	</div>
</div>

<br>
<br>

<table id="tabla" class="table" width="100%">
  <thead>
    <tr>
        <th> Nombres </th> <th> CI </th> <th> Celular </th>  <th> Evento </th> <th> Estado</th> <th> Fecha Reserva </th> <th> Fecha Vencimiento</th> <th> Acciones </th>
    </tr>
  </thead>
  <tbody>
      @foreach($datos as $dato)
      <tr data-id="{{ $dato->id }}">
          <td>{{$dato->nombres}} </td>
          <td>{{$dato->ci}}</td>
          <td>{{$dato->celular}}</td>
          <td>{{$dato->evento}}</td>
					<td>
						@if( $dato->estado == "r"  )
							<span class="badge badge-warning">Reservado</span>
						@elseif( $dato->estado == "e"  )
							<span class="badge badge-success">Entregado</span>
						@elseif( $dato->estado == "v"  )
							<span class="badge badge-danger">Vencido</span>
						@endif
					</td>
					<td>{{$dato->fecha_reserva}}</td>
					<td>{{$dato->fecha_vencimiento}}</td>
          <td>
						@if( $dato->estado == "r"  )
							<a href=""  data-toggle="modal" data-target=""  class="actualizar"> <i class="fa fa-eye"></i> Aceptar </a>
						@endif
					</td>
        </tr>
      @endforeach
  </tbody>
</table>
@endsection


@section('js')
<script type="text/javascript">
    $(document).ready(function(){
        $('#tabla').DataTable({
            "order": [[ 3, 'asc']],
            "language": {
                "bDeferRender": true,
                "sEmtpyTable": "No ay registros",
                "decimal": ",",
                "thousands": ".",
                "lengthMenu": "Mostrar _MENU_ datos por registros",
                "zeroRecords": "No se encontro nada,  lo siento",
                "info": "Mostrar paginas [_PAGE_] de [_PAGES_]",
                "infoEmpty": "No ay entradas permitidas",
                "search": "Buscar ",
                "infoFiltered": "(Busqueda de _MAX_ registros en total)",
                "oPaginate":{
                    "sLast":"Final",
                    "sFirst":"Principio",
                    "sNext":"Siguiente",
                    "sPrevious":"Anterior"
                }
            }
        });
    });

    $('.actualizar').click(function(event){
			if( confirm('Confirmar la reserva') ){
	    	var fila = $(this).parents('tr');
	      var id = fila.data('id');
	      link  = '{{ asset("/index.php/Reservar/")}}/'+id;
				location.href=link;
			}
   });
</script>
@endsection
