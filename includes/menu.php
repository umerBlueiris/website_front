<!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
			<div class="container d-flex align-items-center justify-content-between">
				<a href="index.php" class="logo d-flex align-items-center me-xl-0"><img src="assets/img/anaxlogo.svg" alt="" ></a>
				<nav id="navbar" class="navbar">
					<ul>
					<li><a href="about.php" <?php if (strpos($_SERVER['PHP_SELF'], 'about.php')) echo 'class="active"' ?> >About Us</a></li>
					<!--
						<li class="dropdown"><a href="#about" class="scrollto"><span>About Us</span></i></a>
						<ul>
							<li><a href="#">ANAX</a></li>
							<li><a href="#">Vision</a></li>
							<li><a href="#">Mission</a></li>
							<li><a href="#">Core Values</a></li>
						</ul>
						</li>
						-->
					<li class="dropdown "><a href="our-destinations.php" <?php if (strpos($_SERVER['PHP_SELF'], 'our-destinations.php') || strpos($_SERVER['PHP_SELF'], 'business-bay.php')
					||strpos($_SERVER['PHP_SELF'], 'meydan.php') || strpos($_SERVER['PHP_SELF'], 'maritime-city.php') || strpos($_SERVER['PHP_SELF'], 'furjan.php')
			
					) echo 'class="active"';?>>Destinations</a>
						<ul>
							<li><a href="business-bay.php">Business Bay</a></li>
							<li><a href="meydan.php">Meydan</a></li>
							<li><a href="furjan.php">Furjan</a></li>
							<li><a href="maritime-city.php">Dubai Maritime City</a></li>
							<li><a href="#">Coming Soon</a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="#projects"  <?php if (strpos($_SERVER['PHP_SELF'], 'ventotower.php')) echo 'class="scrollto active"'  ?>>Projects</a>
						<ul>
							<li><a href="ventotower.php" >Vento Tower</a></li>
							<li><a href="#">Coming Soon</a></li>
							<li><a href="#">Coming Soon</a></li>
						</ul>
					</li>
					<li><a href="#">Offers</a></li>
					<!--<li><a href="#testimonials" class="scrollto">Press & Media</a></li>-->
					<li><a href="contact.php"  <?php if (strpos($_SERVER['PHP_SELF'], 'contact.php')) echo 'class="active"' ?> >Contact Us</a></li>
					<li class="d-none d-lg-block logincls"><a href="https://power-business-6195--deepcloud.sandbox.my.salesforce-sites.com/ANAX/AgencyRegistration" target="_blank">Broker Registration&nbsp;&nbsp;<img src="assets/img/akar-icons_person.svg" alt="" /></a>
					</li>
					<!--<li class="dropdown d-none d-lg-block logincls"><a href="#" class="dropdown-toggle">Login&nbsp;&nbsp;<img src="assets/img/akar-icons_person.svg" alt="" /></a>
						<ul>
							<li><a href="https://power-business-6195--deepcloud.sandbox.my.salesforce-sites.com/ANAX/AgencyRegistration" target="_blank">Broker Registration</a></li>
						</ul>
					</li>-->
					<li class="dropdown d-none d-lg-block">
						<a href="#" class="dropdown-toggle">
						<img src="assets/img/akar-icons_globe.svg" alt="" />&nbsp;&nbsp;En
						</a><ul>
						<li><a href="#">English</a></li>
						<li><a href="#">Arabic</a></li>
					</ul>
					</li>
				</ul>
				<div class="d-lg-none d-block mobile-login-div">
				<div class="langbtn">
				<a href="https://power-business-6195--deepcloud.sandbox.my.salesforce-sites.com/ANAX/AgencyRegistration">Broker Registration&nbsp;&nbsp;<img src="assets/img/akar-icons_person.svg" alt="" /></a>
				</div>
				<!--
					<div class="dropdown langbtn">
					<a class="dropdown-toggle" aria-expanded="false">
						Login&nbsp;&nbsp;<img src="assets/img/akar-icons_person.svg" alt="" />
					</a>
					<ul>
						<li><a href="#">Customer Login</a></li>
						<li><a href="https://power-business-6195--deepcloud.sandbox.my.salesforce-sites.com/ANAX/AgencyRegistration">Broker Login</a></li>
					</ul>
				 </div>
				 -->
				</div>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav><!-- .navbar -->
		</div>
	</header><!-- End Header -->