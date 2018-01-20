@extends('layouts.master-home')


@section('content')
		<div id="st-container" class="st-container blog">
		    <div class="st-pusher">
	        	<div class="st-content">
	        		<section class="page-title-section white-arrow">
							<div class="container">
								<div class="page-header">
								  <h1>Contact</h1>
								</div>

								<ol class="breadcrumb">
								  <li><a href="home">Home</a></li>
								  <li class="active">Contact</li>
								</ol>
							</div>
					</section>

					<section class="contact-wrap section-padding">
						<div class="container">
							<div class="row col-md-8 col-sm-12" >
								<div class="col-xs-12">
									<div class="location-map">
										<div id="googleMap">
							                <div>
							                 	<iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=Jl.%20Teknik%20Kimia%2C%20Keputih%2C%20Sukolilo%2C%20Kota%20SBY%2C%20Jawa%20Timur%2060117&key=AIzaSyABjK2aUEvhS01nOGom8SGAFGXCWxcrW-E" allowfullscreen></iframe>  
							             	</div>
										</div>
									</div>
								</div><!-- /.col -->
							</div><!-- /.row -->
							<div class="office-locations">
								<h2>Worldwide Location</h2>
								<div class="row">
									<div class="col-md-2 col-sm-12">
										<div class="office-address">
											<h3>Head Office</h3>
											<address>
												<span>384 Maple Circle</span>
												<span>Simi Valley Navada 47489</span>
												<br>
												<span>T.(554) 616 9926</span>
												<span>M.(554) 616 9926</span>
												<span>F.(554) 616 9926</span>
												<a href="#">example@yahoo.com</a>

											</address>
										</div>
									</div><!-- /.col -->

									<div class="col-md-2 col-sm-12">
										<div class="office-address">
											<h3>State Office</h3>
											<address>
												<span>384 Maple Circle</span>
												<span>Simi Valley Navada 47489</span>
												<br>
												<span>T.(554) 616 9926</span>
												<span>M.(554) 616 9926</span>
												<span>F.(554) 616 9926</span>
												<a href="#">example@yahoo.com</a>

											</address>
										</div>
									</div><!-- /.col -->
								</div><!-- /.row -->
							</div><!-- /.office-locations -->
						</div><!-- /.container -->
					</section>
				

	    		</div> <!-- .st-content -->
		    </div> <!-- .st-pusher -->
    	    	@include('layouts.master-sidebar')
		</div><!-- /st-container -->
@endsection