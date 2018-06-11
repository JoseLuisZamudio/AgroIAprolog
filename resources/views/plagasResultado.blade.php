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
					<h3>{{ $resultado }}</h3>

					<script type="text/javascript">
					var cadena = {!! json_encode($resultado )!!};

					var arana_roja = cadena.indexOf('arana_roja');
					var larvas = cadena.indexOf('larvas');
					var caracol = cadena.indexOf('caracol');
					var babosa = cadena.indexOf('babosa');
					var hormigas = cadena.indexOf('hormigas');
					var cochinillas = cadena.indexOf('cochinillas');
					var picudo_rojo = cadena.indexOf('picudo_rojo');
					var chapulines = cadena.indexOf('chapulines');
					var avispa_serradora = cadena.indexOf('avispa_serradora');
					var trips = cadena.indexOf('trips');
					var mosca_blanca = cadena.indexOf('mosca_blanca');
					var pulgones = cadena.indexOf('pulgones');

					if(arana_roja === -1){
						if(larvas === -1){
							if(caracol === -1){
								if(babosa === -1){
									if(hormigas === -1){
										if(cochinillas === -1){
											if(picudo_rojo === -1){
												if(avispa_serradora === -1){
													if(trips === -1){
														if(mosca_blanca === -1){
															if(pulgones === -1){

															}
															else {
																alert('pulgones')
															}
														}
														else {
															alert('mosca_blanca')
														}
													}
													else {
														alert('trips')
													}
												}
												else {
													alert('avispa_serradora')
												}
											}
											else {
												alert('picudo_rojo')
											}
										}
										else {
											alert('cochinillas')
										}
									}
									else {
										alert('hormigas')
									}
								}
								else {
									alert('babosa')
								}
							}
							else {
								alert('caracol')
							}
						}
						else {
							alert('larvas')
						}
					}else {
						alert('arana_roja');
					}

					</script>

				</div>


			</div>
		</div>
	</div>
	<!-- //single -->


@endsection
