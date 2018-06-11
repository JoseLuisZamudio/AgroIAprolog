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
	<!--gallery-->
	<div class="gallery">
		<div class="container">
			<h2 class="title">Our Gallery</h2>
			<div class="gallery-grids">
				<div class="col-md-4 port-grids view view-fourth">
					<a class="example-image-link" href="images/g1.jpg" data-lightbox="example-set" data-title="">
						<img src="images/g1.jpg" class="img-responsive" alt=""/>
						<div class="mask">
							<p>By using Bio Farming Services we can raise your crops and livestock</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 port-grids view view-fourth">
					<a class="example-image-link" href="images/g2.jpg" data-lightbox="example-set" data-title="">
						<img src="images/g2.jpg" class="img-responsive" alt=""/>
						<div class="mask">
							<p>By using Bio Farming Services we can raise your crops and livestock</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 port-grids view view-fourth">
					<a class="example-image-link" href="images/g3.jpg" data-lightbox="example-set" data-title="">
						<img src="images/g3.jpg" class="img-responsive" alt=""/>
						<div class="mask">
							<p>By using Bio Farming Services we can raise your crops and livestock</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 port-grids view view-fourth">
					<a class="example-image-link" href="images/g4.jpg" data-lightbox="example-set" data-title="">
						<img src="images/g4.jpg" class="img-responsive" alt=""/>
						<div class="mask">
							<p>By using Bio Farming Services we can raise your crops and livestock</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 port-grids view view-fourth">
					<a class="example-image-link" href="images/g5.jpg" data-lightbox="example-set" data-title="">
						<img src="images/g5.jpg" class="img-responsive" alt=""/>
						<div class="mask">
							<p>By using Bio Farming Services we can raise your crops and livestock</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 port-grids view view-fourth">
					<a class="example-image-link" href="images/g6.jpg" data-lightbox="example-set" data-title="">
						<img src="images/g6.jpg" class="img-responsive" alt=""/>
						<div class="mask">
							<p>By using Bio Farming Services we can raise your crops and livestock</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 port-grids view view-fourth">
					<a class="example-image-link" href="images/g7.jpg" data-lightbox="example-set" data-title="">
						<img src="images/g7.jpg" class="img-responsive" alt=""/>
						<div class="mask">
							<p>By using Bio Farming Services we can raise your crops and livestock</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 port-grids view view-fourth">
					<a class="example-image-link" href="images/g8.jpg" data-lightbox="example-set" data-title="">
						<img src="images/g8.jpg" class="img-responsive" alt=""/>
						<div class="mask">
							<p>By using Bio Farming Services we can raise your crops and livestock</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 port-grids view view-fourth">
					<a class="example-image-link" href="images/g9.jpg" data-lightbox="example-set" data-title="">
						<img src="images/g9.jpg" class="img-responsive" alt=""/>
						<div class="mask">
							<p>By using Bio Farming Services we can raise your crops and livestock</p>
						</div>
					</a>
				</div>
				<div class="clearfix"> </div>
				<script src="js/lightbox-plus-jquery.min.js"> </script>
			</div>
		</div>
	</div>
	<!--//gallery-->
	<!--contact-->
	<div class="contact" id="contact">
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3144.899142009709!2d23.72354!3d37.979482999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a1bd238977fb45%3A0xbdf5a6106a003293!2sFashion+Workshop+by+Vicky+Kaya!5e0!3m2!1sen!2sin!4v1440569426817" allowfullscreen></iframe>
			<div class="map-color">
			</div>
		</div>
		<div class="contact-grids">
			<div class="col-md-4 contact-grid news-ltr">
				<div class="newsletter">
					<h3><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Newsletter</h3>
				</div>
				<form>
					<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="submit" value="Subscribe" >
				</form>
			</div>
			<div class="col-md-5 contact-grid">
				<form>
					<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
					<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
					<input type="submit" value="Submit" >
				</form>
			</div>
			<div class="col-md-3 contact-grid">
				<div class="call">
					<div class="col-xs-2 contact-grdl">
						<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 contact-grdr">
						<ul>
							<li>+3402 890 679</li>
							<li>+5356 890 679</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="address">
					<div class="col-xs-2 contact-grdl">
						<span class="glyphicon glyphicon-send" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 contact-grdr">
						<ul>
							<li>345 Diamond Street,</li>
							<li>Greece.</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="mail">
					<div class="col-xs-2 contact-grdl">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 contact-grdr">
						<ul>
							<li><a href="mailto:example@mail.com">mail@example.com</a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//contact-->

@endsection
