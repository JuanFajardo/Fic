<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Festival Internacional de la Cultura - FIC 2018</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  </head>
  <body ng-app="AdycttoBett0" background="{{asset('img/potosi.jpg')}}" style="background-size: cover;background-repeat: no-repeat;" class = "responsive-img center-align">
    <div class="container ">

      @if( !isset($reserva) )
      <div class="row">
          <div class="col-lg-12">
						<div class="row"></div>
						<div class="row"></div>
						<div class="row"></div>

						<div class="row">
							<div class="col s1 m3"></div>
							<div class="col s10 m6">
								<div class="row">
									<img src="{{asset('/img/fic.png')}}" alt="" class="circle responsive-img center-align pulse">
								</div>
								<div class="row">
									<div class="col s12 m12">
										<a class="waves-effect waves-light red darken-4 btn-large modal-trigger" href="#crear">Reserva para la F.I.C.</a>
									</div>
								</div>

							</div>
							<div class="col s1 m3"></div>
							<div id="crear" class="modal">
								<div class="modal-content">


									<nav class="nav-extended">
										<div class="nav-content">
								      <span class="nav-title">Gobierno Autonomo Municipal de Potosí</span>
								    </div>
									</nav>

									<form class="col s12" autocomplete="off" action="{{asset('index.php/reserva')}}" method="post">
										{{ csrf_field() }}

											<div class="row">
													<div class="input-field col m6 s12">
															<i class="material-icons prefix">how_to_reg</i>
															<input name="nombres" id="nombres" type="text" class="validate" required>
															<label for="nombres">Nombres y Apellidos </label>
													</div>
													<div class="input-field col m6 s12">
														<i class="material-icons prefix">receipt</i>
															<input name="ci" id="ci" type="text" class="validate">
															<label for="ci">Carnet de Identidad</label>
													</div>
											</div>

											<div class="row">
													<div class="input-field col m6 s12">
																<i class="material-icons prefix">call</i>
															<input type="text" name="celular" id="celular">
															<label for="celular">Numero Telefono / Celular</label>
													</div>
													<div class="input-field col m6 s12">
															<i class="material-icons prefix">business</i>
															<input name="direccion" id="direccion" type="text" class="validate" required="required" data-parsley-required-message="Campo obligatorio"
															data-parsley-trigger="change focusout" data-parsley-pattern="/^[a-zA-Z]*$/">
															<label for="direccion">Direccion de Domicilio</label>
													</div>
											</div>

											<div class="row">
												<div class="select-field col s12">

													<select name="id_evento" id="id_evento">
														<option value="" disabled selected>Elige tu Evento de la FIC</option>
														@foreach($eventos as $evento)
															<option value="{{$evento->id}}">{{$evento->evento}}</option>
														@endforeach
													</select>
													<label for="id_evento">Evento de la FIC</label>
												</div>
											</div>

											<br>

											<div class="row">
													<div class="col m12">
														<p class="center-align">
															 <button type="submit" name="button" class="btn waves-effect waves-light btn-large red darken-4">Registrar
															 </button>
														</p>
													</div>
											</div>
									</form>
								</div>
							</div>
							<div class="modal" id="informacion">
								<div class="modal-content ">
									h
								</div>
							</div>
						</div>

          </div>
      </div>
    </div>
    @endif

    @if( isset($reserva) )
        <div class="row">
          <div class="col-lg-12">
            <div class="card blue-grey darken-1">
              <div class="card-content white-text">
                <span class="card-title">{{$reserva[0]->nombres}}</span>
                <h5>Se realizo la reserva para <b>{{$reserva[0]->evento}}</b> debes recoger tu entrada el <b>FCHA</b>.</h5><br>
                    <div class="card-panel">
                      <span class="red-text text-darken-2"><h6>Gracias por reservar y por favor recoja la entrada en la fecha indicada caso contrario se anulara su reserva.</h6></span>
                    </div>
                    <br><br>
                    <a class="waves-effect waves-light red darken-4 btn-large modal-trigger" href="{{asset('index.php/#crear')}}">Reserva para la F.I.C.</a>
                </p>
              </div>
            </div>
          </div>
        </div>
    @endif

    <script src="{{asset('assets/angular/angular.min.js')}}"></script>
    <script src="{{asset('assets/angular/angular-resource.js')}}"></script>
    <script src="{{asset('assets/angular/angular-route.js')}}"></script>
    <script src="{{asset('assets/angular/angular-animate.js')}}"></script>

    <script type="text/javascript">
      $(document).ready(function(){
      	$('select').formSelect();
 				$('.modal').modal();
 				$('.collapsible').collapsible();
 				$('.tooltipped').tooltip({delay: 50});
      });

			$( function() {
				$( "#fecha_nacimiento" ).datepicker();
			} );

    </script>


  </body>
</html>
