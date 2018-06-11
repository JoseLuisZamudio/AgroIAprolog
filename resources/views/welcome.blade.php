@extends('layouts.guest')

@section('content')
	<!--banner-->
	<div class="banner">
		<div class="effect5"><!--shadow effect-->
			<div class="container">
				<div class="logo">
					<h1><a href="index.html"><img src="images/logo.png" alt="" /></a></h1>
				</div>
				<div class="banner-slider">
					<h2>Hello!</h2>
					<h3>By Using Bio Farming</h3>
					<h4>We can raise your
						<div class="pushEffect">
							<span> cropping</span>
							<span> high Yield</span>
							<span> nutritious</span>
							<span> farming</span>
							<span> natural</span>
						</div>
					</h4>
				</div>
        @include('layouts.top_nav')

			</div>
		</div>
	</div>
	<!--//banner-->
	<!--welcome-->
	<div class="welcome">
		<div class="container">
			<h3 class="title">Welcome</h3>
			<p>Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod </p>
			<div class="welcome-info">
				<div class="col-md-6 welcome-grids">
					<div class="welcome-img">
						<img src="images/img1.jpg" class="img-responsive zoom-img" alt=""/>
					</div>
				</div>
				<div class="col-md-6 welcome-grids">
					<div class="welcome-img">
						<img src="images/img2.jpg" class="img-responsive zoom-img" alt=""/>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<p>Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus omnis optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae </p>
		</div>
	</div>
	<!--//welcome-->
	<!--services-->
	<div class="services">
		<div class="container">
			<h3 class="title">Services</h3>
			<div class="servc-grids">
				<div class="col-md-3 servc-grid">
					<div class="servc-icon">
						<span class="glyphicon glyphicon glyphicon-user" aria-hidden="true"></span>
					</div>
					<h4>Lorem ipsum dolor </h4>
					<p>Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod </p>
				</div>
				<div class="col-md-3 servc-grid">
					<div class="servc-icon">
						<span class="glyphicon glyphicon glyphicon-home" aria-hidden="true"></span>
					</div>
					<h4>Cumque nihil impedit </h4>
					<p>Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod </p>
				</div>
				<div class="col-md-3 servc-grid">
					<div class="servc-icon">
						<span class="glyphicon glyphicon glyphicon-fire" aria-hidden="true"></span>
					</div>
					<h4>Ipsum dolor lorem  </h4>
					<p>Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod </p>
				</div>
				<div class="col-md-3 servc-grid">
					<div class="servc-icon">
						<span class="glyphicon glyphicon glyphicon-heart-empty" aria-hidden="true"></span>
					</div>
					<h4>Eligendi optio </h4>
					<p>Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod </p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//services-->
	<!--popular-->
	<div class="popular">
		<div class="container">
			<div class="col-md-8 popular-grids">
				<h4>Nam libero tempore cum soluta nobis est eligendi optio cumque tempore cum soluta nobis est eligendi</h4>
				<h5>Eligendi optio cumque nihil impedit </h5>
				<div class="bottom-popular">
					<div class="col-md-6 popular-text">
						<h6>Cumque nihil impedit </h6>
						<p>Sed ut perspiciatis unde omnis iste natus error sit Placeat facere possimus. doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae </p>
						<a href="single.html" class="btn btn-1 btn-1b">Read More</a>
					</div>
					<div class="col-md-6 popular-text">
						<h6>Nihil cumque impedit </h6>
						<p>Placeat facere possimus.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi </p>
						<a href="single.html" class="btn btn-1 btn-1b">Read More</a>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-4 popular-grids popular-img">
				<img src="images/img3.jpg" class="img-responsive zoom-img" alt=""/>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//popular-->
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
