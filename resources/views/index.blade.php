@extends('layouts.master-home')


@section('content')
		<div id="st-container" class="st-container">
		    <div class="st-pusher">
	        	<div class="st-content">
                    <div id="main-carousel" class="carousel slide hero-slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#main-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#main-carousel" data-slide-to="1"></li>
                            <li data-target="#main-carousel" data-slide-to="2"></li>
                            <li data-target="#main-carousel" data-slide-to="3"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="img/slider/slide-1.png" alt="Hero Slide" data-stellar-background-ratio="0.7">
                                <!--Slide Image-->

                                <div class="container">
                                    <div class="carousel-caption">
                                        <h1 class="animated lightSpeedIn" style="color: white;" >Title of Your Product <br>Service or Event</h1>

                                        <p class="lead animated lightSpeedIn" style="color: white;">It's a tag line, where you can write a key point of your idea.
                                            It is a long
                                            established fact that a reader will be distracted.</p>

                                        <a class="btn btn-primary btn-lg animated lightSpeedIn" href="#">WORK WITH US TODAY</a>
                                	</div>
                                    <!--.carousel-caption-->
                                </div>
                                <!--.container-->
                            </div>
                            <!--.item-->

                            <div class="item">
                                <img src="img/slider/slide-2.png" alt="Hero Slide" class="grayscale">
                                <!--Slide Image-->

                                <div class="container">
                                    <div class="carousel-caption">

                                        <h1 class="animated bounceIn" style="color: white;">Title of Your Product <br>Service or Event</h1>

                                        <p class="lead animated bounceIn" style="color: white;">It's a tag line, where you can write a key point of your idea. It
                                            is a long
                                            established fact that a reader will be distracted.</p>
                                        <a class="btn btn-primary btn-lg animated bounceIn" href="#">WORK WITH US TODAY</a>
                                    </div>
                                    <!--.carousel-caption-->
                                </div>
                                <!--.container-->
                            </div>
                            <!--.item-->

                             <div class="item">
                                <img src="img/slider/slide-3.png" alt="Hero Slide" class="grayscale">
                                <!--Slide Image-->

                                <div class="container">
                                    <div class="carousel-caption">

                                        <h1 class="animated bounceIn" style="color: white;">Title of Your Product <br>Service or Event</h1>

                                        <p class="lead animated bounceIn" style="color: white;">It's a tag line, where you can write a key point of your idea. It
                                            is a long
                                            established fact that a reader will be distracted.</p>
                                        <a class="btn btn-primary btn-lg animated bounceIn" href="#">WORK WITH US TODAY</a>
                                    </div>
                                    <!--.carousel-caption-->
                                </div>
                                <!--.container-->
                            </div>

                             <div class="item">
                                <img src="img/slider/slide-4.png" alt="Hero Slide" class="grayscale">
                                <!--Slide Image-->

                                <div class="container">
                                    <div class="carousel-caption">

                                        <h1 class="animated bounceIn" style="color: white;">Title of Your Product <br>Service or Event</h1>

                                        <p class="lead animated bounceIn" style="color: white;">It's a tag line, where you can write a key point of your idea. It
                                            is a long
                                            established fact that a reader will be distracted.</p>
                                        <a class="btn btn-primary btn-lg animated bounceIn" href="#">WORK WITH US TODAY</a>
                                    </div>
                                    <!--.carousel-caption-->
                                </div>
                                <!--.container-->
                            </div>
                        </div>
                        <!--.carousel-inner-->

                        <!-- Controls -->
                        <a class="left carousel-control" href="#main-carousel" role="button" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#main-carousel" role="button" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <!-- #main-carousel-->

			        <!-- services start -->
					<section class="service-wrap">
						
						<!-- Controls will work for desktop and large devices -->
					  	<div class="slider-control hidden-sm hidden-xs">
							<a class="left carousel-control" href="#service-carousel" role="button" data-slide="prev">
							    <span class="flaticon-previous11" aria-hidden="true"></span>
							    <span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#service-carousel" role="button" data-slide="next">
							    <span class="flaticon-next15" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
							</a>
						</div><!--/.slider-control -->

			            <div class="container">
			              	<div class="row">
			              		<div class="col-md-4 col-sm-12">
			              			<div class="service-left-box">
						              	<div class="section-heading">
						                  <h2 class="section-title">Our 24 Hour’s Services</h2>
						                  <span class="section-sub">Progressively architect prospective</span>
						                </div> <!--section-header-->

						                <div class="service-intro">
						                	 <p>This is Margueritte McAllister, headmistress of the Spencer School for Girls in Wildwood, New Jersey. Is Mr. or Mrs. Lando home? Yes, this is she. Mrs. Lando, when your husband enrolled Mathilda at Spencer, he told us she had "problems". Well, as you know, we pride ourselves on turning troubled girls into healthy, productive young women. But if they are not here, there is very little we can do. Now, Mathilda left school without permission nearly two weeks ago.</p>
						                </div><!--/.service-intro-->
					                </div><!-- /.service-left-box -->
				               </div><!-- /.col -->
				               <div class="col-md-8 col-sm-12">
				              		<div id="service-carousel" class="carousel slide">
				              			<!-- Controls
				              			will work for small devices -->
				              			
									  	<div class="slider-control visible-sm visible-xs">
											<a class="left carousel-control" href="#service-carousel" role="button" data-slide="prev">
											    <span class="flaticon-previous11" aria-hidden="true"></span>
											    <span class="sr-only">Previous</span>
											</a>
											<a class="right carousel-control" href="#service-carousel" role="button" data-slide="next">
											    <span class="flaticon-next15" aria-hidden="true"></span>
											    <span class="sr-only">Next</span>
											</a>
										</div><!--/.slider-control -->

									  <!-- Wrapper for slides -->
									  	<div class="carousel-inner" role="listbox">
									    	<div class="item active">
									    		<div class="row">
									    			<div class="col-sm-6 col-xs-12">
											    		<div class="service-content">
												    		<h3>Marine<br><span>unshipation</span></h3>
												    		<div class="service-thumb">
												    			<img class="img-responsive" src="img/service1.png" alt="image"/>
												    		</div>	
												    		<p>Progressively architect prospective imperatives through competitive communities. Professionally productize user strategic theme areas.</p>
												    		<a class="btn btn-primary" href="#">Continue reading<i class="fa fa-long-arrow-right"></i></a>
											    		</div><!-- /.service-content -->
										    		</div><!--/.col -->
											    	<div class="col-sm-6 col-xs-12">
												    	<div class="service-content">
												    		<h3>Air<br><span>transportation</span></h3>
												    		<div class="service-thumb">
												    			<img class="img-responsive" src="img/service2.png" alt="image"/>
												    		</div>	
												    		<p>Progressively architect prospective imperatives through competitive communities. Professionally productize user strategic theme areas.</p>
												    		<a class="btn btn-primary" href="#">Continue reading<i class="fa fa-long-arrow-right"></i></a>
												    	</div><!-- /.service-content -->
											    	</div><!--/.col-->
									    		</div>
									    	</div><!--/.item -->
									    	<div class="item">
										    	<div class="row">
										    		<div class="col-sm-6 col-xs-12">
												    	<div class="service-content">
												    		<h3>Quick<br><span>service</span></h3>
												    		<div class="service-thumb">
												    			<img class="img-responsive" src="img/service1.png" alt="image"/>
												    		</div>	
												    		<p>Progressively architect prospective imperatives through competitive communities. Professionally productize user strategic theme areas.</p>
												    		<a class="btn btn-primary" href="#">Continue reading<i class="fa fa-long-arrow-right"></i></a>
												    	</div><!-- /.service-content -->
											    	</div><!--/.col-->
											    	<div class="col-sm-6 col-xs-12">
												    	<div class="service-content">
												    		<h3>Worldwide<br><span>shipments</span></h3>
												    		<div class="service-thumb">
												    			<img class="img-responsive" src="img/service2.png" alt="image"/>
												    		</div>	
												    		<p>Progressively architect prospective imperatives through competitive communities. Professionally productize user strategic theme areas.</p>
												    		<a class="btn btn-primary" href="#">Continue reading<i class="fa fa-long-arrow-right"></i></a>
												    	</div><!-- /.service-content -->
											    	</div><!--/.col-->
										    	</div><!--/.row-->
									    	</div><!--/.item-->
									    
										</div>
									</div><!-- /.carousel -->
				               </div><!--/.col-->
			                </div><!-- /.row -->
			            </div><!-- /.container -->
			        </section>
			        <!-- services end -->

			        <!-- About-us-wrap -->	
			        <section class="about-us-wrap section-padding">
			        	<div class="container">
			        		<div class="row">
			        			<div class="col-sm-4 col-xs-12">
			        				<div class="about-us-content">
			        					<h3>Who we are</h3>
			        					<div class="about-content-block">
				        					<span>Distinctively Orchestrate Standardized</span>
				        					<p>Progressively architect prospective imperatives through competitive communities. Professionally productize user strategic theme areas.</p>
			        					</div>
			        					<br>
			        					<div class="about-content-block">
				        					<span>Synergistically extend open source</span>
				        					<p>Progressively architect prospective imperatives through competitive communities. Professionally productize user strategic theme areas.</p>
			        					</div>
			        				</div><!-- /about-us-content -->
			        			</div><!--/.col-->

			        			<div class="col-sm-4 col-xs-12">
			        				<div class="about-us-content">
			        					<h3>What we do</h3>
			        					<div class="about-content-block">
				        					<span>Distinctively Orchestrate Standardized</span>
				        					<p>Progressively architect prospective imperatives through competitive communities. Professionally productize user strategic theme areas.Professionally productize user strategic theme areas.</p>
			        					</div>
			        					<br>
			        					<div class="about-content-block">
				        					<span>Synergistically extend open source e-business.</span>
				        					<p>Progressively architect prospective imperatives through competitive communities. Professionally productize user strategic theme areas.</p>
			        					</div>
			        				</div><!-- /about-us-content -->
			        			</div><!-- /.col-->

			        			<div class="col-sm-4 col-xs-12">
			        				<div class="about-us-content capabilities">
			        					<div class="about-content-block">
				        					<h3>Our Capabilities</h3>
				        					<ul>
				        						<li>Airport service</li>
				        						<li>24 hours service in 7 days a week</li>
				        						<li>Priority delivery service</li>
				        						<li>Senior discounts</li>
				        						<li>Corporate accounts available</li>
				        					</ul>
			        					</div>
			        					
			        				</div><!-- /about-us-content -->
			        			</div><!--/.col-->
			        		</div><!-- /.row -->
			        	</div><!-- /.container -->

			        </section>
			        <!-- /About-us-wrap -->

			        <!-- featuer-wrap start -->
			        <section class="feature-wrap section-padding" 
			            data-stellar-background-ratio="0.5">

				        <div class="container center">
				        	<div class="row">
				        		<div class="col-xs-12">
				        			<div class="feature-content" >
				        				<h2>Providing cost-effective<br><span>And reliable marine and air unshipations
				        					</span>
				        				</h2>
				        				<div>	
					        				<p>Etiam non augue in tortor facilisis porttitor at sit amet justo. Sed blandit tempor hendrerit. Suspendisse quis tincidunt nisl. Nulla bibendum purus elit, ut hendrerit orci porttitor id. Donec egestas dapibus massa, et tempor nulla ultricies quis. Donec mattis, metus vel pharetra pulvinar, nunc leo consectetur purus, sit amet tincidunt dui lorem ac elit. Vivamus nulla nisl, sodales eu rutrum sit amet, viverra eu eros. Proin sollicitudin congue augue, eget condimentum purus dictum sit amet. Aenean et tempor augue.</p>
				        				</div>
				        				<a data-toggle="modal" data-target="#quoteModal" href="#" class="btn btn-primary quote-btn btn-lg">Get a Quote <i class="fa fa-long-arrow-right"></i></a>

				        				<!-- Modal -->
										<div class="modal fade" id="quoteModal"			tabindex="-1" role="dialog" 
											aria-labelledby="quoteModalLabel" aria-hidden="true">

										  	<div class="modal-dialog modal-lg">
											    <div class="modal-content">
											      	<div class="modal-header">
												        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												        <h3 class="modal-title" id="quoteModalLabel">Request a rate for the shipping of your goods.</h3>
											      	</div>

											      	<div class="modal-body">
														<form id="contactForm" action="sendemail.php" method="POST">
														<div class="row">
															<div class="col-md-6">
																<div class="form-group">
																    <label for="name">Name</label>
																    <input id="name" name="name" type="text" class="form-control"  required="" placeholder="">
																</div>
															</div>
															<div class="col-md-6">
															  <div class="form-group">
															    <label for="company">Company Name</label>
															    <input id="company" name="company" type="text" class="form-control" placeholder="">
															  </div>
															</div>
														</div><!--/.row-->

														<div class="row">
															<div class="col-md-6">
															  <div class="form-group">
															    <label for="phone">Phone Number</label>
															    <input id="phone" name="phone" type="text" class="form-control" placeholder="">
															  </div>
															</div>
															<div class="col-md-6">
															  <div class="form-group">
															    <label for="email">Email address</label>
															    <input id="email" name="email" type="email" class="form-control" required="" placeholder="">
															  </div>
															</div>
														</div>

														<div class="row">
															<div class="col-md-6">
															  <div class="form-group">
															    <label for="city">City Name</label>
															    <input id="city" name="city" type="text" class="form-control" placeholder="">
															  </div>
															</div>
															<div class="col-md-6">
															  <div class="form-group">
															    <label for="subject">Subject</label>
															    <input id="subject" name="subject" type="text" class="form-control" required="" placeholder="">
															  </div>
															</div>
														</div>
														<div class="form-group text-area">
															<label for="message">Your Message</label>
															<textarea id="message" name="message" class="form-control" rows="6" required="" placeholder=""></textarea>
														</div>

														<button type="submit" class="btn btn-primary btn-lg">Send Message</button>
													</form>
											      </div>
											    </div><!--/.modal-content-->
										  	</div><!--/.modal-dialog-->
										</div><!-- Modal END -->

				        			</div><!--/.feature-content-->
				        		</div><!--/.col-->
				        
				        	</div><!-- /.row -->
				        </div><!-- .container -->
			        </section>

			        <section class="featured-service-wrap section-padding">
						<div class="container">
							<div class="section-heading">
								<h2 class="section-title">News</h2>
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