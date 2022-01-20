@extends('estruturaHTML')

@section('conteudo')
		<!-- Wrapper -->
    	<div class="wrapper">

            <!-- Incluindo navbar -->
			@include('componentes.navbar')
			
			<!-- Dark overlay -->
    		<div class="overlay"></div>

			<!-- Content -->
			<div class="content">
			
				<!-- open sidebar menu -->
				<a class="btn btn-primary btn-customized open-menu" href="#" role="button">
                    <i class="fas fa-align-left"></i> <span>Menu</span>
                </a>
			
		        <!-- Top content -->
		        <div class="top-content section-container background-image" id="top-content">
			        <div class="container">
			            <div class="row">
			                <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2">
			                	<h1 class="wow fadeIn">Bootstrap 4 Template with <strong>Sidebar Menu</strong></h1>
			                	<div class="description wow fadeInLeft">
			                		<p>
			                			A template with Sidebar Menu made with the Bootstrap 4 framework. Download the template or learn how to create it, step by step, on 
			                			<a href="https://azmind.com"><strong>AZMIND</strong></a>.
			                		</p>
			                	</div>
			                	<div class="buttons wow fadeInUp">							
									<a class="btn btn-primary btn-customized scroll-link" href="#section-1" role="button">
										<i class="fas fa-book-open"></i> Learn More
									</a>
									<a class="btn btn-primary btn-customized-2 scroll-link" href="#section-3" role="button">
										<i class="fas fa-pencil-alt"></i> Our Projects
									</a>
								</div>
			                </div>
			            </div>
			        </div>
		        </div>
		        <!-- end Top content -->
		
		        <!-- Section 1 -->
		        <div class="section-1-container section-container" id="section-1">
			        <div class="container">
			            <div class="row">
			                <div class="col section-1 section-description wow fadeIn">
			                    <h2>What We Do</h2>
			                    <div class="divider-1 wow fadeInUp"><span></span></div>
			                </div>
			            </div>
			            <div class="row">
		                	<div class="col-md-4 section-1-box wow fadeInUp">
		                		<div class="row">
		                			<div class="col-md-4">
					                	<div class="section-1-box-icon">
					                		<i class="fas fa-magic"></i>
					                	</div>
				                	</div>
			                		<div class="col-md-8">
			                    		<h3>Branding</h3>
			                    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
			                    	</div>
			                    </div>
		                    </div>
		                    <div class="col-md-4 section-1-box wow fadeInDown">
			                	<div class="row">
		                			<div class="col-md-4">
					                	<div class="section-1-box-icon">
					                		<i class="fas fa-cog"></i>
					                	</div>
				                	</div>
			                		<div class="col-md-8">
			                    		<h3>Web design</h3>
			                    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
			                    	</div>
			                    </div>
		                    </div>
		                    <div class="col-md-4 section-1-box wow fadeInUp">
			                	<div class="row">
		                			<div class="col-md-4">
					                	<div class="section-1-box-icon">
					                		<i class="fab fa-twitter"></i>
					                	</div>
				                	</div>
			                		<div class="col-md-8">
			                    		<h3>Social media</h3>
			                    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
			                    	</div>
			                    </div>
		                    </div>
			            </div>
			        </div>
		        </div>
				<!-- End Section 1 -->
		
		        <!-- Section 2 -->
		        <div class="section-2-container section-container section-container-gray-bg" id="section-2">
			        <div class="container">
			            <div class="row">
			                <div class="col section-2 section-description wow fadeIn">
			                </div>
			            </div>
			            <div class="row">
			            	<div class="col-8 section-2-box wow fadeInLeft">
		                    	<h3>About Us</h3>
		                    	<p class="medium-paragraph">
		                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
		                    		sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud.
		                    	</p>
		                    	<p>
		                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
		                    		Ut wisi enim ad minim veniam, quis nostrud. 
		                    		Exerci tation ullamcorper suscipit <a href="#">lobortis nisl</a> ut aliquip ex ea commodo consequat. 
		                    		Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl. 
		                    	</p>
			                </div>
			                <div class="col-4 section-2-box wow fadeInUp">
		                    	<img src="{{asset('assets/images/pico-bandeira.jpg')}}" alt="about-us">
			                </div>
			            </div>
			        </div>
		        </div>
		
				<!-- Section 3 -->
		        <div class="section-3-container section-container" id="section-3">
			        <div class="container">
			        	
			            <div class="row">
			                <div class="col section-3 section-description wow fadeIn">
			                    <h2>Our Projects</h2>
			                    <div class="divider-1 wow fadeInUp"><span></span></div>
			                </div>
			            </div>
			            
			            <div class="row">
			                <div class="col-md-6 section-3-box wow fadeInLeft">
			                	<div class="row">
			                		<div class="col-md-3">
			                			<div class="section-3-box-icon">
			                				<i class="fas fa-paperclip"></i>
			                			</div>
			                		</div>
			                		<div class="col-md-9">
			                			<h3>Ut wisi enim ad minim</h3>
				                    	<p>
				                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
				                    		Ut wisi enim ad minim veniam, quis nostrud.
				                    	</p>
			                		</div>
			                	</div>
			                </div>
			                <div class="col-md-6 section-3-box wow fadeInLeft">
			                	<div class="row">
			                		<div class="col-md-3">
			                			<div class="section-3-box-icon">
			                				<i class="fas fa-pencil-alt"></i>
			                			</div>
			                		</div>
			                		<div class="col-md-9">
			                			<h3>Sed do eiusmod tempor</h3>
				                    	<p>
				                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
				                    		Ut wisi enim ad minim veniam, quis nostrud.
				                    	</p>
			                		</div>
			                	</div>
			                </div>
			            </div>
			            
			            <div class="row">
			                <div class="col-md-6 section-3-box wow fadeInLeft">
			                	<div class="row">
			                		<div class="col-md-3">
			                			<div class="section-3-box-icon">
			                				<i class="fas fa-cloud"></i>
			                			</div>
			                		</div>
			                		<div class="col-md-9">
			                			<h3>Quis nostrud exerci tat</h3>
				                    	<p>
				                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
				                    		Ut wisi enim ad minim veniam, quis nostrud.
				                    	</p>
			                		</div>
			                	</div>
			                </div>
			                <div class="col-md-6 section-3-box wow fadeInLeft">
			                	<div class="row">
			                		<div class="col-md-3">
			                			<div class="section-3-box-icon">
			                				<i class="fab fa-google"></i>
			                			</div>
			                		</div>
			                		<div class="col-md-9">
			                			<h3>Minim veniam quis nostrud</h3>
				                    	<p>
				                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
				                    		Ut wisi enim ad minim veniam, quis nostrud.
				                    	</p>
			                		</div>
			                	</div>
			                </div>
			            </div>
		
			        </div>
		        </div>
		
				<!-- Section 4 -->
		        <div class="section-4-container section-container section-container-image-bg background-image-2" id="section-4">
			        <div class="container">
			            <div class="row">
			                <div class="col section-4 section-description wow fadeInLeftBig">
			                	<h2>We Think That...</h2>
			                    <p>
			                    	Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut 
			                    	aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud.
			                    </p>
			                </div>
			            </div>
			            <div class="row">
			            	<div class="col section-bottom-button wow fadeInUp">
		                        <a class="btn btn-primary btn-customized-2 scroll-link" href="#section-6" role="button">
				            		<i class="fas fa-envelope"></i> Contact Us
				            	</a>
			            	</div>
			            </div>
			        </div>
		        </div>
		        
		        <!-- Section 5 -->
		        <div class="section-5-container section-container" id="section-5">
			        <div class="container">
			            <div class="row">
			                <div class="col section-5 section-description wow fadeIn">
			                    <h2>Portfolio</h2>
			                    <div class="divider-1 wow fadeInUp"><span></span></div>
			                    <p>We have completed 486 projects since we started back in 2013. Check them out!</p>
			                </div>
			            </div>
			            <div class="row">
		                	<div class="col-md-4 section-5-box wow fadeInUp">
		                		<div class="section-5-box-image"><img src="assets/img/portfolio/1.jpg" alt="portfolio-1"></div>
		                		<h3><a href="#">Acme branding</a> <i class="fas fa-angle-right"></i></h3>
		                		<div class="section-5-box-date"><i class="far fa-calendar"></i> June 2019</div>
		                		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
		                    </div>
		                    <div class="col-md-4 section-5-box wow fadeInDown">
			                	<div class="section-5-box-image"><img src="assets/img/portfolio/2.jpg" alt="portfolio-2"></div>
		                		<h3><a href="#">Created 150 flyers</a> <i class="fas fa-angle-right"></i></h3>
		                		<div class="section-5-box-date"><i class="far fa-calendar"></i> February 2019</div>
		                		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
		                    </div>
		                    <div class="col-md-4 section-5-box wow fadeInUp">
			                	<div class="section-5-box-image"><img src="assets/img/portfolio/3.jpg" alt="portfolio-3"></div>
		                		<h3><a href="#">WordPress design</a> <i class="fas fa-angle-right"></i></h3>
		                		<div class="section-5-box-date"><i class="far fa-calendar"></i> November 2018</div>
		                		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
		                    </div>
			            </div>
			            <div class="row">
			            	<div class="col section-bottom-button wow fadeInUp">
		                        <a class="btn btn-primary btn-customized" href="#" role="button">
				            		<i class="fas fa-sync"></i> View All
				            	</a>
			            	</div>
			            </div>
			        </div>
		        </div>
		        
		       @include('componentes.footer')
	        
	        </div>
	        <!-- End content -->
        
        </div>
        <!-- End wrapper -->

@endsection