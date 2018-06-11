@extends('layouts.guest')

@section('content')

	<!--banner-->
	<div class="banner">
		<div class="effect5"><!--shadow effect-->
			<div class="container">
				<div class="logo">
					<h1><a href="index.html"><img src="images/logo.png" alt="" /></a></h1>
				</div>
				  @include('layouts.top_nav')
			</div>
		</div>
	</div>
	<!--//banner-->
	<!-- single -->
	<div class="single">
		<div class="container">
			<h2 class="title">Deteccion de plagas</h2>
			<div class="single-info">
				<div class="col-md-12 single-left">
					<h3>Unde omnis iste natus error sit voluptatem accusantium</h3>
					<img src="images/img1.jpg" alt=" " class="img-responsive" />
					<br>

					<form action="{{ url('/plagas') }}" method="post">
						@csrf

						<div class="form-group">
							<label for="n_patas">¿Cuantas patas tiene?</label>
						 	<select class="form-control" name="n_patas">
						 		<option value="patas_0">0</option>
						 		<option value="patas_6">6</option>
						 		<option value="patas_8">8</option>
						 		<option value="patas_mas_8">mas de 8</option>
						 	</select>
						</div>

						<div class="form-group">
							<label for="antenas">¿Tiene Antenas?</label>
						 	<select class="form-control" name="antenas">
						 		<option value="antenas_si">Si</option>
						 		<option value="antenas_no">No</option>
						 	</select>
						</div>

						<div class="form-group">
							<label for="caparazon">¿Tiene Caparazon?</label>
						 	<select class="form-control" name="caparazon">
						 		<option value="caparazon_si">Si</option>
						 		<option value="caparazon_no">No</option>
						 	</select>
						</div>

						<div class="form-group">
							<label for="alas">¿Tiene Alas?</label>
						 	<select class="form-control" name="alas">
						 		<option value="alas_si">Si</option>
						 		<option value="alas_no">No</option>
						 	</select>
						</div>

						<div class="form-group">
							<label for="exoesqueleto">¿Tiene Exoesqueleto?</label>
						 	<select class="form-control" name="exoesqueleto">
						 		<option value="exoesqueleto_si">Si</option>
						 		<option value="exoesqueleto_no">No</option>
						 	</select>
						</div>

						<div class="form-group">
							<label for="forma">¿Que forma tiene?</label>
						 	<select class="form-control" name="forma">
						 		<option value="forma_redonda">Redonda</option>
						 		<option value="forma_ovalada">Ovalada</option>
						 		<option value="forma_alargada">Alargada</option>
						 	</select>
						</div>

						<div class="form-group">
							<label for="tamano">¿Que forma tiene?</label>
						 	<select class="form-control" name="tamano">
						 		<option value="tamano_menos_1_cm">Menos de 1 cm.</option>
						 		<option value="tamano_mas_1_cm">Mas de 1 cm.</option>\
						 	</select>
						</div>

						<div class="form-group">
							<label for="color">¿Que color es?</label>
						 	<select class="form-control" name="color">
						 		<option value="color_verde">Verde</option>
						 		<option value="color_rojo">Rojo</option>\
						 		<option value="color_negro">Negro</option>\
						 		<option value="color_blanco">Blanco</option>\
						 	</select>
						</div>

						<button class="btn btn-succes" type="submit" name="button">Buscar Plaga</button>

					</form>

				</div>


			</div>
		</div>
	</div>
	<!-- //single -->


@endsection
