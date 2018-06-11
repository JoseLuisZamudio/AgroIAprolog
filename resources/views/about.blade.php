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
	<!-- about-->
	<!--about-top-->
	<div class="about">
		<!-- container -->
		<div class="container">
			<h2 class="title">About Us</h2>
			<div class="about-info">
				<div class="col-md-4 about-top-grid">
					<img src="images/img4.jpg" alt="" />
				</div>
				<div class="col-md-8 about-top-grid about-grid-right">
					<h4>Quisque eget nunc a ligula lobortis facilisis sed ornare commodo nunc elementum ultricies fusce eget lorem fringilla </h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed odio consequat, tristique elit sed, molestie nulla.
						Mauris et quam leo. Quisque tincidunt facilisis rutrum. Etiam mattis arcu vitae velit sagittis vehicula. Duis posuere
						ex in mollis iaculis. Suspendisse tincidunt ut velit id euismod.vulputate turpis porta ex sodales, dignissim hendrerit
						eros sagittis. Curabitur lacinia dui ut luctus congue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis
						eleifend augue. Integer sit amet euismod odio, at pretium lectus lorem ipsum dolor sit amet, consectetur adipiscing elit.
					</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!--//container-->
	</div>
	<!--//about-top-->
	<!--events-->
	<div class="events">
		<div class="container">
			<h3 class="title">Events</h3>
			<div class="events-info">
				<div class="col-md-6 event-grids">
					<div class="six">
						<h4>10<span>Nov</span></h4>
						<h6><a href="single.html">Sed ut perspiciatis unde omnis </a></h6>
						<div class="clearfix"> </div>
					</div>
					<p>Kasertas lertyasea deeraeser miasera lertasa ritise doloert ferdas caplicabo nerafaes asety u lasec vaserat. nikertyade asetkertyptaiades goertayse.nikertyade asetkertyptaiades goertayse</p>
					<a href="single.html" class="btn btn-1 btn-1b">Read More</a>
				</div>
				<div class="col-md-6 event-grids">
					<div class="six">
						<h4>20<span>Dec</span></h4>
						<h6><a href="single.html">Voluptatem accusa doloremque </a></h6>
						<div class="clearfix"> </div>
					</div>
					<p>Kasertas lertyasea deeraeser miasera lertasa ritise doloert ferdas caplicabo nerafaes asety u lasec vaserat. nikertyade asetkertyptaiades goertayse.nikertyade asetkertyptaiades goertayse</p>
					<a href="single.html" class="btn btn-1 btn-1b">Read More</a>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//events-->
	<!--products-->
	<div class="about about-products">
		<div class="container">
			<h3 class="title">Our Products</h3>
			<div class="products-row">
				<div class="col-sm-6 col-md-3 products-grids">
					<div class="thumbnail products-thmnl">
						<div class="product-img">
							<img src="images/g2.jpg" class="img-responsive zoom-img" alt="...">
						</div>
						<div class="caption">
							<h4><a href="single.html">Vines plants</a></h4>
							<p>Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3 products-grids">
					<div class="thumbnail products-thmnl">
						<div class="product-img">
							<img src="images/g10.jpg" class="img-responsive zoom-img" alt="...">
						</div>
						<div class="caption">
							<h4><a href="single.html">Moluptatem</a></h4>
							<p>Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3 products-grids">
					<div class="thumbnail products-thmnl">
						<div class="product-img">
							<img src="images/g5.jpg" class="img-responsive zoom-img" alt="...">
						</div>
						<div class="caption">
							<h4><a href="single.html">Perspiciatis</a></h4>
							<p>Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3 products-grids">
					<div class="thumbnail products-thmnl">
						<div class="product-img">
							<img src="images/g4.jpg" class="img-responsive zoom-img" alt="...">
						</div>
						<div class="caption">
							<h4><a href="#">Lertyasea</a></h4>
							<p>Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//products-->
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
