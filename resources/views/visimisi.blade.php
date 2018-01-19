@extends('layouts.master-home')


@section('content')
		<div id="st-container" class="st-container">
		    <div class="st-pusher">
	        	<div class="st-content">
	        		<section class="page-title-section white-arrow">
							<div class="container">
								<div class="page-header">
								  <h1>Vision and Mission</h1>
								</div>

								<ol class="breadcrumb">
								  <li><a href="home">Home</a></li>
								  <li class="active">Vision and Mission</li>
								</ol>
							</div>
						</section>
					<section class="service-intro-wrap section-padding">
						<div class="container">
							<div class="row">
								<div class="col-sm-6">
									<div class="service-intro-thumb text-center">
										<img src="img/service-thumb.jpg" alt="service">
									</div>
								</div><!--/.col-->
								<div class="col-sm-6">

									<div class="service-intro-content">
										<h3>Visi</h3>
										<p>Proactively productize principle-centered processes after business portals. Enthusiastically target distributed e-markets whereas 24/365 innovation. Completely mesh prospective strategic theme areas before high standards in materials. Phosfluorescently repurpose high-payoff metrics vis-a-vis tactical portals. Globally customize viral processes for state of the art mindshare.</p>
									
										<h3>Misi</h3>
										<div class="row">
											<div class="col-sm-12">
												<ul>
													<li>Completely productize next generation</li>
													<li>Mind share without timely experiences</li>
													<li>Completely pontificate</li>
													<li>Resource levelling</li>
													<li>Highly potentialities</li>
												</ul>
											</div><!-- /.col -->
										</div><!--/.row-->
									</div><!--/.service-intro-content-->

								</div><!--/.col-->
							</div><!--/.row -->
						</div><!--/.container-->

					</section>
	    		</div> <!-- .st-content -->
		    </div> <!-- .st-pusher -->
    	    	@include('layouts.master-sidebar')
		</div><!-- /st-container -->
@endsection