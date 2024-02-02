	<!-- ======= Hero Section ======= -->
	<?php 

    @include './includes/header.php';
	
	?>
    <section id="hero">
		<div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
			
			<ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
			
			<div class="carousel-inner" role="listbox">
				<!-- Slide 1 -->
				<div class="carousel-item active" style="background-image: url(assets/img/slide/slide-3.png)">
					<div class="carousel-container">
						<div class="container">
							<span class="animate__animated animate__fadeInUp subhead">Projects</span>
							<h2 class="animate__animated animate__fadeInDown">Vento Tower</h2>
							<p class="animate__animated animate__fadeInUp">Embrace luxury in its full essence</p>
							<a href="ventotower.php" class="btn-get-started animate__animated animate__fadeInUp scrollto hover-switch"><img src="assets/img/white_arrow-up-right.svg" alt="" /><img src="assets/img/akar-icons_arrow-up-right.svg" alt="" />&nbsp;&nbsp;Discover More</a>
						</div>
					</div>
				</div>
				<!-- Slide 2 -->
				<div class="carousel-item" style="background-image: url(assets/img/slide/slide-1.jpg)">
					<div class="carousel-container">
						<div class="container">
							<h2 class="animate__animated animate__fadeInDown">Vision Beyond<br />Possibilities</h2>
							<a href="our-destinations.php" class="btn-get-started animate__animated animate__fadeInUp scrollto hover-switch"><img src="assets/img/white_arrow-up-right.svg" alt="" /><img src="assets/img/akar-icons_arrow-up-right.svg" alt="" />&nbsp;&nbsp;Discover More</a>
						</div>
					</div>
				</div>
				
				<!-- Slide 2 -->
				<!--
				<div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
					<div class="carousel-container">
						<div class="container">
							<span class="animate__animated animate__fadeInUp subhead">Latest</span>
							<h2 class="animate__animated animate__fadeInDown">Changing Landscapes</h2>
							<p class="animate__animated animate__fadeInUp">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
							<a href="business-bay.html" class="btn-get-started animate__animated animate__fadeInUp scrollto hover-switch"><img src="assets/img/white_arrow-up-right.svg" alt="" /><img src="assets/img/akar-icons_arrow-up-right.svg" alt="" />&nbsp;&nbsp;Discover More</a>
						</div>
					</div>
				</div>
				-->
			</div>
			<!--
				<a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
				<span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
				</a>
				
				<a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
				<span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
				</a>
			-->
		</div>
		<div class="scrolldowndiv">
		<a href="#about" title="Scroll to down" class="mouse scrollto"></a>
		</div>
	</section><!-- End Hero -->
	<main id="main">
		<section id="about" class="about" data-aos="fade-up">
			<div class="container" data-aos="fade-up" data-aos-delay="100">
				<p class="abouttxt">About us</p>
			</div>
			<!-- ======= About carousel desktop ======= -->
			<div id="myCarousel" class="container carousel slide d-none d-md-block" data-bs-interval="5000" data-bs-ride="carousel">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
					<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
				</div>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="text-start row">
							<div class="col-md-6">
								<p class="abouttxt_gold mt-3 animate__animated animate__fadeInUp" data-aos="fade-up" data-aos-delay="100">We are driven by</p>
								<div class="about-big-head animate__animated animate__fadeInDown" data-aos="fade-up" data-aos-delay="100">Passions</div>
								<p class="about-small-head animate__animated animate__fadeInUp" data-aos="fade-up" data-aos-delay="100">Passion drives every project. Anax Development's commitment to excellence is fueled by an unwavering passion for creating spaces that inspire and endure.</p>
								<div class="mt-5" data-aos="fade-up" data-aos-delay="100"><img src="assets/img/about/about-slide1.jpg" class="img-fluid" alt=""></div>
							</div>
							<div class="col-md-6">
								<div data-aos="fade-up" data-aos-delay="100"><img src="assets/img/about/about-slide2.jpg" class="img-fluid" alt=""></div>
								<p class="abouttxt_gold mt-5 animate__animated animate__fadeInUp" data-aos="fade-left" data-aos-delay="200">We thrives on</p>
								<div class="about-big-head animate__animated animate__fadeInDown" data-aos="fade-left" data-aos-delay="200">Innovation</div>
								<p class="about-small-head animate__animated animate__fadeInUp" data-aos="fade-left" data-aos-delay="200">We aim to push the boundaries of conventional real estate to create spaces that are cutting-edge and forward-thinking, powered by technology that creates ultimate comfort and luxury.</p>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="text-start row">
							<div class="col-md-6">
								<p class="abouttxt_gold mt-3 animate__animated animate__fadeInUp">We cultivate confidence through</p>
								<div class="about-big-head animate__animated animate__fadeInDown">Trust</div>
								<p class="about-small-head animate__animated animate__fadeInUp">Our foundation rests on transparency, reliability, and a commitment to delivering homes that stand the test of time.</p>
								<div class="mt-5"><img src="assets/img/about/about-slide3.jpg" class="img-fluid" alt=""></div>
							</div>
							<div class="col-md-6">
								<div><img src="assets/img/about/about-slide4.jpg" class="img-fluid" alt=""></div>
								<p class="abouttxt_gold mt-5 animate__animated animate__fadeInUp">We pledge to</p>
								<div class="about-big-head animate__animated animate__fadeInDown">Sustainability</div>
								<p class="about-small-head animate__animated animate__fadeInUp">Our foundation embraces eco-conscious practices, renewable solutions, and a steadfast commitment to building homes that respect and nurture our environment.</p>
							</div>
						</div>
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
			<!-- ======= About carousel mobile ======= -->
			<div id="myCarousel" class="container carousel slide d-block d-md-none" data-bs-interval="50000" data-bs-ride="carousel">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
					<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
					<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 2" class=""></button>
					<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 2" class=""></button>
				</div>
				<div class="carousel-inner" data-aos="fade-up" data-aos-delay="100">
					<div class="carousel-item active">
						<div class="text-start row">
							<div class="col-12">
								<p class="abouttxt_gold mt-3 animate__animated animate__fadeInUp">We are driven by</p>
								<div class="about-big-head animate__animated animate__fadeInDown">Passions</div>
								<p class="about-small-head animate__animated animate__fadeInUp">Passion drives every project. Anax Development's commitment to excellence is fueled by an unwavering passion for creating spaces that inspire and endure.</p>
								<div class="mt-4"><img src="assets/img/about/about-slide1.jpg" class="img-fluid" alt=""></div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="text-start row">
							<div class="col-12">
								<p class="abouttxt_gold mt-3 animate__animated animate__fadeInUp">We thrives on</p>
								<div class="about-big-head animate__animated animate__fadeInDown">Innovation</div>
								<p class="about-small-head animate__animated animate__fadeInUp">We aim to push the boundaries of conventional real estate to create spaces that are cutting-edge and forward-thinking, powered by technology that creates ultimate comfort and luxury.</p>
								<div class="mt-4"><img src="assets/img/about/about-slide2.jpg" class="img-fluid" alt=""></div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="text-start row">
							<div class="col-md-6">
								<p class="abouttxt_gold mt-3 animate__animated animate__fadeInUp">We cultivate confidence through</p>
								<div class="about-big-head animate__animated animate__fadeInDown">Trust</div>
								<p class="about-small-head animate__animated animate__fadeInUp">Our foundation rests on transparency, reliability, and a commitment to delivering homes that stand the test of time.</p>
								<div class="mt-4"><img src="assets/img/about/about-slide3.jpg" class="img-fluid" alt=""></div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="text-start row">
							<div class="col-12">
								<p class="abouttxt_gold mt-3 animate__animated animate__fadeInUp">We pledge to</p>
								<div class="about-big-head animate__animated animate__fadeInDown">Sustainability</div>
								<p class="about-small-head animate__animated animate__fadeInUp">Our foundation embraces eco-conscious practices, renewable solutions, and a steadfast commitment to building homes that respect and nurture our environment.</p>
								<div class="mt-4"><img src="assets/img/about/about-slide4.jpg" class="img-fluid" alt=""></div>
							</div>
						</div>
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</section><!-- End About -->
		
		<!-- ======= vento Section ======= -->
		<section id="ventosec" class="ventobg">
			<div class="container" data-aos="fade-up">
				<p class="ventotxt animate__animated animate__fadeInUp" data-aos="fade-up" data-aos-delay="100">Featured</p>
				<h3 class="vento-big-head animate__animated animate__fadeInDown" data-aos="fade-up" data-aos-delay="100">Embrace luxury in its full essence.</h3>
			</div>
			<div id="vento">
				<div id="ventoCarousel2" data-bs-interval="50000" class="carousel slide carousel-fade" data-bs-ride="carousel">
					<!--
					<ol class="carousel-indicators" id="vento-carousel-indicators">
						<li data-bs-target="#ventoCarousel2" data-bs-slide-to="0" class="active"></li>
						<li data-bs-target="#ventoCarousel2" data-bs-slide-to="1"></li>
					</ol>
					-->
					<div class="carousel-inner" role="listbox">
						<!-- Slide 1 -->
						<div class="carousel-item active" style="background-image: url(assets/img/vento/newvento-slide.jpg)">
							<div class="carousel-container">
								<div class="container">
									<div class="animate__animated animate__fadeInDown">
									<picture>
									<source media="(min-width: 767px)" srcset="assets/img/vento/vento-logo.png">
									<img src="assets/img/vento/mobile-vento-logo.png" alt="Vento" class="ventoslideimg" data-aos="fade-in" data-aos-delay="100" />
									</picture>
									</div>
									<div data-aos="fade-up" data-aos-delay="100" class="mt-5 ventodiscover"><a href="ventotower.php" class="btn-get-started animate__animated animate__fadeInUp scrollto hover-switch"><img src="assets/img/white_arrow-up-right.svg" alt="" /><img src="assets/img/akar-icons_arrow-up-right.svg" alt="" />&nbsp;&nbsp;Discover More</a></div>
								</div>
							</div>
						</div>
					</div>
					<!--
					<a class="carousel-control-prev" href="#ventoCarousel2" role="button" data-bs-slide="prev">
						<span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
					</a>
					
					<a class="carousel-control-next" href="#ventoCarousel2" role="button" data-bs-slide="next">
						<span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
					</a>
					-->
				</div>
			</div>
		</section>
		<!-- End Vento -->
		<!-- ======= Our Destination Section ======= -->
		<section id="destination" class="destination">
			<div class="container" data-aos="zoom-in">
				<div class="row content">
					<div class="col-12">
						<h2 class="desti-main-head" data-aos="zoom-in" data-aos-delay="100">Our Destinations</h2>
					</div>
				</div>
				<div class="row content">
					<div class="col-md-7">
						<div class="card text-white animate__animated animate__fadeInLeft" data-aos="zoom-in" data-aos-delay="100">
							<img src="assets/img/destinations/desti-card1.png" alt="...">
							<div class="card-img-overlay">
								<h4 class="card-title">Business Bay</h4>
								<a href="business-bay.php" class="orange-circle">
									<img src="assets/img/destinations/akar-icons_arrow-right.svg" class="" alt="...">
								</a>
								<a href="business-bay.php" class="sub-head-text">Discover more</a>
							</div>
						</div>
					</div>
					<div class="col-md-5">
						<div class="row">
							<div class="col-12 cust-sm-mt-4">
								<div class="card text-white animate__animated animate__fadeInRight" data-aos="zoom-in" data-aos-delay="100">
									<img src="assets/img/destinations/desti-card2.jpg" alt="...">
									<div class="card-img-overlay">
										<h4 class="card-title">Furjan</h4>
										<a href="furjan.php" class="orange-circle">
											<img src="assets/img/destinations/akar-icons_arrow-right.svg" class="" alt="...">
										</a>
										<a href="furjan.php" class="sub-head-text">Discover more</a>
									</div>
								</div>
							</div>
							<div class="col-12 mt-4">
								<a href="our-destinations.php" class="orange-big-rect animate__animated animate__fadeInRight">
									Discover other destination <img src="assets/img/destinations/akar-icons_arrow-right-black.svg" class="" alt="...">
								</a>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- End About Section -->
		
		<!-- ======= invest Section ======= -->
		<section id="investsec">
				<div id="invest">
				<h2 class="desti-main-head container" data-aos="zoom-in" data-aos-delay="100">Why Invest in Dubai</h2>
				<div id="investCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
					<ol class="carousel-indicators" id="invest-carousel-indicators">
						<li data-bs-target="#investCarousel" data-bs-slide-to="0" class="active"></li>
						<li data-bs-target="#investCarousel" data-bs-slide-to="1"></li>
						<li data-bs-target="#investCarousel" data-bs-slide-to="2"></li>
						<li data-bs-target="#investCarousel" data-bs-slide-to="3"></li>
						<li data-bs-target="#investCarousel" data-bs-slide-to="4"></li>
						<li data-bs-target="#investCarousel" data-bs-slide-to="5"></li>
					</ol>
					
					<div class="carousel-inner" role="listbox">
						<!-- Slide 1 -->
						<div class="carousel-item active" style="background-image: url(assets/img/invest/invest-slide1.png)">
							<div class="carousel-container" data-aos="fade-up">
								<div class="container" data-aos="fade-up" data-aos-delay="100">
									<h2 class="animate__animated animate__fadeInDown">Strategic Global Hub</h2>
									<p class="animate__animated animate__fadeInLeft">Dubai's real estate market thrives due to its strategic location, connected to one third of the world's population. The UAE ranked fourth globally in terms of international tourist spending.</p>
								</div>
							</div>
						</div>
						<!-- Slide 2 -->
						<div class="carousel-item" style="background-image: url(assets/img/invest/invest-slide2.jpg?v=1.1)">
							<div class="carousel-container" data-aos="fade-up">
								<div class="container" data-aos="fade-up" data-aos-delay="100">
									<h2 class="animate__animated animate__fadeInDown">The Dubai Economic Agenda 'D33</h2>
									<p class="animate__animated animate__fadeInLeft">Dubai Economic Agenda D33 aimed at launching transformational and innovative projects that contribute to establishing the strategic vision of His Highness Sheikh Mohammed bin Rashid Al Maktoum, Vice President and Prime Minister of the UAE to position Dubai the best city in the world to live and work. </p>
								</div>
							</div>
						</div>
						<!-- Slide 3 -->
						<div class="carousel-item" style="background-image: url(assets/img/invest/invest-slide3.jpg)">
							<div class="carousel-container" data-aos="fade-up">
								<div class="container" data-aos="fade-up" data-aos-delay="100">
									<h2 class="animate__animated animate__fadeInDown">Tax-Free Environment</h2>
									<p class="animate__animated animate__fadeInLeft">Dubai's tax-free status has turned it into a haven for wealthy investors seeking secure and lucrative investment opportunities. With no income taxes, property taxes, or capital gains taxes, Dubai provides a unique opportunity for investors to grow their wealth with minimal tax liability.</p>
								</div>
							</div>
						</div>
						<!-- Slide 4 -->
						<div class="carousel-item" style="background-image: url(assets/img/invest/invest-slide4.jpg)">
							<div class="carousel-container" data-aos="fade-up">
								<div class="container" data-aos="fade-up" data-aos-delay="100">
									<h2 class="animate__animated animate__fadeInDown">Safe and Stable City</h2>
									<p class="animate__animated animate__fadeInLeft">Dubai's reputation for safety and stability is a major attraction for real estate investors. With low crime rates and a secure environment, the city offers a safe haven for investments. Dubai ranks as number 3 safest city in the world for solo female travellers. </p>
								</div>
							</div>
						</div>
						<!-- Slide 5 -->
						<div class="carousel-item" style="background-image: url(assets/img/invest/invest-slide5.jpg)">
							<div class="carousel-container" data-aos="fade-up">
								<div class="container" data-aos="fade-up" data-aos-delay="100">
									<h2 class="animate__animated animate__fadeInDown">Strong Return on Investment</h2>
									<p class="animate__animated animate__fadeInLeft">Dubai's surging population and expatriate influx drive robust rental demand for apartments, villas, and commercial spaces. The city's top-tier rental yields, one of the world's highest, guarantee consistent income. Booming tourism amplifies the need for short-term rentals. Dubai's real estate boasts a proven track record with a stable, high ROI, ranging from 5% to 8.4%, competing favorably globally. Population growth and government efforts to attract foreign investment fuel escalating property prices and heightened investor ROI.</p>
								</div>
							</div>
						</div>
						<!-- Slide 6 -->
						<div class="carousel-item" style="background-image: url(assets/img/invest/invest-slide6.jpg)">
							<div class="carousel-container" data-aos="fade-up">
								<div class="container" data-aos="fade-up" data-aos-delay="100">
									<h2 class="animate__animated animate__fadeInDown">Digital Transformation and Sustainability </h2>
									<p class="animate__animated animate__fadeInLeft">Dubai has been at the forefront of a remarkable journey towards digital innovation and sustainability, aiming to shape a smart economy that leverages technology and knowledge for sustainable growth, positioning Dubai as the best city in the world to live and work. The Dubai Land Department (DLD) recently launched an ‘Instant Sale’ feature that utilizes smart evaluation technology in real estate transactions, bypassing the need for audits. With aspirations to sustain the country’s exceptional real estate growth, this move will enable property purchases to be securely conducted in a matter of minutes.</p>
								</div>
							</div>
						</div>
					</div>
					<a class="carousel-control-prev" href="#investCarousel" role="button" data-bs-slide="prev">
						<span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
					</a>
					<a class="carousel-control-next" href="#investCarousel" role="button" data-bs-slide="next">
						<span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
					</a>
				</div>
			</div>
		</section><!-- End Invest -->
		<!-- ======= Projects Section ======= -->
		<section id="projects" class="mb-5">
			<div class="container" data-aos="zoom-in">
				<div class="row content">
					<div class="col-12">
						<h2 class="project-main-head" data-aos="zoom-in" data-aos-delay="100">Projects</h2>
					</div>
				</div>
				<div class="row content">
					<div class="col-md-4">
						<div class="image-container animate__animated animate__fadeInLeft" data-aos="zoom-in" data-aos-delay="100">
							<a href="ventotower.php" target="_blank">
								<img src="assets/img/projects/vento.png" class="img-fluid" alt="Image">
								<div class="overlay-text">
									<h2>Vento<br />Tower</h2>
									<p>Business Bay</p>
									<a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto hover-switch csoon"><img src="assets/img/white_arrow-up-right.svg" alt="" /><img src="assets/img/akar-icons_arrow-up-right.svg" alt="" />&nbsp;&nbsp;Discover More</a>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 mt-3 mt-md-0">
						<div class="image-container animate__animated animate__fadeInUp" data-aos="zoom-in" data-aos-delay="100">
							<img src="assets/img/projects/furjan.jpg" class="img-fluid" alt="Image">
							<div class="overlay-text">
								<h2>ANAX<br />Tower</h2>
								<p>Furjan</p>
								<p class="csoon">COMING SOON</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 mt-3 mt-md-0">
						<div class="image-container animate__animated animate__fadeInRight" data-aos="zoom-in" data-aos-delay="100">
							<img src="assets/img/projects/meydan.jpg" class="img-fluid" alt="Image">
							<div class="overlay-text">
								<h2>ANAX<br />Tower</h2>
								<p>Meydan</p>
								<p class="csoon">COMING SOON</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- End Invest -->
		
		<!-- ======= Testimonials Section ======= -->
		<!--
		<section id="testimonials" class="testimonials">
			<div class="testimonials-bg">
				<div class="container" data-aos="fade-up">
					<div class="section-title">
						<h2>Press & Media</h2>
					</div>
				</div>
			</div>
			<div class="container" data-aos="fade-up" style="position:relative">
				<div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="testimonial-item">
								<img src="assets/img/testimonials/press1.png" class="testimonial-img" alt="">
								<div class="ms-1">
									<h3>Vento Tower</h3>
									<span>At vero eos et accusamus et iusto odio dignissimos ducimus</span>
									<div class="mt-3">
										<a href="ventotower.php" class="orange-circle">
											<img src="assets/img/testimonials/akar-icons_arrow-right-black.svg" class="" alt="...">
										</a>
										<a href="ventotower.php" class="sub-head-text text-black">Discover more</a>
									</div>
								</div>
							</div>
						</div><!-- End testimonial item -->
						<!--
						<div class="swiper-slide">
							<div class="testimonial-item">
								<img src="assets/img/testimonials/press1.png" class="testimonial-img" alt="">
								<div class="ms-1">
									<h3>Vento Tower</h3>
									<span>At vero eos et accusamus et iusto odio dignissimos ducimus</span>
									<div class="mt-3">
										<a href="ventotower.php" class="orange-circle">
											<img src="assets/img/testimonials/akar-icons_arrow-right-black.svg" class="" alt="...">
										</a>
										<a href="ventotower.php" class="sub-head-text text-black">Discover more</a>
									</div>
								</div>
							</div>
						</div><!-- End testimonial item -->
						<!--
						<div class="swiper-slide">
							<div class="testimonial-item">
								<img src="assets/img/testimonials/press1.png" class="testimonial-img" alt="">
								<div class="ms-1">
									<h3>Vento Tower</h3>
									<span>At vero eos et accusamus et iusto odio dignissimos ducimus</span>
									<div class="mt-3">
										<a href="ventotower.php" class="orange-circle">
											<img src="assets/img/testimonials/akar-icons_arrow-right-black.svg" class="" alt="...">
										</a>
										<a href="ventotower.php" class="sub-head-text text-black">Discover more</a>
									</div>
								</div>
							</div>
						</div><!-- End testimonial item -->
						
						<!--
					</div>
					<div class="swiper-pagination"></div>
				</div>
			</div>
		</section><!-- End Testimonials Section -->
		
	</main><!-- End #main -->
	<?php 
    @include './includes/footer.php';?>