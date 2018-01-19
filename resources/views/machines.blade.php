@extends('layouts.master-home')


@section('content')
		<div id="st-container" class="st-container">
		    <div class="st-pusher">
	        	<div class="st-content">
	        		<section class="page-title-section white-arrow">
							<div class="container">
								<div class="page-header">
								  <h1>Work On Machines</h1>
								</div>

								<ol class="breadcrumb">
								  <li><a href="home">Home</a></li>
								  <li class="active">Work On Machines</li>
								</ol>
							</div>
					</section>
					<section class="featured-service-wrap section-padding">
						<div class="container">
							<div class="section-heading">
								<h2 class="section-title">The Facilities for Work on Machines</h2>
							</div>
							<div class="row">
								<div class="col-sm-4">
									<div class="featured-service">
										<div class="featured-service-thumb">
											<img class="img-responsive" src="img/service/thumb1.jpg" alt="image">
										</div>
										<div class="featured-service-content">
											<h3>Air transportation</h3>
											<p>Intrinsicly strategize exceptional mindshare vis-a-vis functionalized imperatives.Energistically incentivize innovative convergence through wireless ideas. </p>
										</div>
									</div>
							
								</div><!-- /.col -->

								<div class="col-sm-4">
									<div class="featured-service">
										<div class="featured-service-thumb">
											<img class="img-responsive" src="img/service/thumb2.jpg" alt="image">
										</div>
										<div class="featured-service-content">
											<h3>Marine transportation</h3>
											<p>Intrinsicly strategize exceptional mindshare vis-a-vis functionalized imperatives.Energistically incentivize innovative convergence through wireless ideas. </p>
										</div>
									</div>
									
								</div><!-- /.col -->

								<div class="col-sm-4">
									<div class="featured-service">
										<div class="featured-service-thumb">
											<img class="img-responsive" src="img/service/thumb3.jpg" alt="image">
										</div>
										<div class="featured-service-content">
											<h3>Trucking</h3>
											<p>Intrinsicly strategize exceptional mindshare vis-a-vis functionalized imperatives.Energistically incentivize innovative convergence through wireless ideas. </p>
										</div>
									</div>
									
								</div><!-- /.col -->
							</div><!-- /.row -->
						</div><!-- /.container -->

					</section>
	    		</div> <!-- .st-content -->
		    </div> <!-- .st-pusher -->
    	    	@include('layouts.master-sidebar')
		</div><!-- /st-container -->
@endsection