@include('layouts.header')

<section class="banner_top" style="height: 600px">
		<div class="slider" style="height: 600px">
			<div class="wrapper" style="height: 600px">
				
				<!-- Slideshow 3 -->
				<ul class="rslides" id="slider" style="height: 130%">
					<li>
						<div class="agile_banner_text_info">
							<h3>Making Events Easy</h3>
							<p>EASE provides a universal platform for participants and the event organizers to collaborate for various events together, by easing the job for both the parties</p>
							<br>
							<a href="#intro">
							<button class="btn btn-info btn-lg" style="border-radius: 50px;width: 200px;">Let's Start</button></a>
						</div>
					</li>
					<li>
						<div class="agile_banner_text_info">
							<h3>Making Events Easy</h3>
							<p>EASE provides a universal platform for participants and the event organizers to collaborate for various events together, by easing the job for both the parties.</p>
							<br>
							<a href="#intro">
							<button class="btn btn-info btn-lg" style="border-radius: 50px;width: 200px;">Let's Start</button></a>
						</div>
					</li>
					
				</ul>
				<!-- Slideshow 3 Pager -->
				{{-- <ul id="slider3-pager">
					<li><a href="#"><img src="images/bg0.jpg" data-selector="img" alt=""></a></li>
					<li><a href="#"><img src="images/bg11.jpg" data-selector="img" alt=""></a></li>
					<li><a href="#"><img src="images/bg12.jpg" data-selector="img" alt=""></a></li>
					<li><a href="#"><img src="images/bg13.jpg" data-selector="img" alt=""></a></li>

				</ul> --}}
			</div>
		</div>
	</section>
	<!-- //banner -->

	<!-- classes -->
	<section class="w3-services"  style="padding-top: 300px; background-image: url(../images/bgsection1.jpg)">
			<section id="intro" style="padding-top: 50px">
				<div class="container">
				<div class="wthree_head_section">
					<h3 class="w3l_header w3_agileits_header two" style="color: black">Are You a...</h3>
				</div>
					<div class="row w3l-info" style="padding-left: 70px">
							<div class="col-lg-6 ser-lef-agile" >
								<a href="#organizers">
									<div class="grid1"style="height: 400px;width: 400px">
										<img src="../../images/student.png" style="height: 200px;width: 200px">
										<h4>Organizer</h4>
										<h6>A place to call for participants in your event</h6>
									</div>
								</a>
							</div>
							<div class="col-lg-6 ser-lef-agile">
								<a href="#participant">
									<div class="grid1" style="height: 400px;width: 400px;">
										
										<img src="../../images/tutor.png" style="height: 200px;width: 200px">
										<h4>Participant</h4>
										<h6>Collaborate with top organizers for partipants</h6>
									</div>
								</a>
							</div>
							
					</div>
				</div>
			</section>>
			
	</section>
	<!-- //classes -->
	<hr size="5" style="color: black;height: 1px;background-color: #919396; width: 300px">
	<!-- /services -->
	<section class="w3-services" id="participant" style="padding-top: 50px">
		<div class="container">
				<div class="wthree_head_section">
					<h2 class="w3l_header">Participant Section</h2>
					<p>A place where you get exceptional opportunities</p>
				</div>
				<div class="row w3-services-grids">
							
					<div class="col-lg-4 w3-services-left-grid">
						<img src="images/1.jpg" class="img-fluid" alt=""  style="width: 400px;height:300px;">
					</div>
					<div class="col-lg-8 w3-services-right-grid">
					<div class="row w3-icon-grid-gap1">
						<div class="col-md-6 w3-icon-grid1">
							<i class="fas fa-paint-brush"></i>
							<div class="Supp">
								<h3>One Click Appication</h3>
								<p>Create your profile and simply participate for event by once click</p>
							</div>
						</div>
						<div class="col-md-6 w3-icon-grid1">
							<i class="fas fa-book"></i>
							<div class="Supp">
								<h3>Follow Ups</h3>
								<p>Get Status of your application throughout the screening steps.</p>
							</div>
						</div>
					</div>
					<div class="row w3-icon-grid-gap1">
						<div class="col-md-6 w3-icon-grid1">
							<i class="fas fa-user"></i>
							<div class="Supp">
								<h3>Profile Builder</h3>
								<p>Customize your profile on your website to improve application</p>
							</div>
						</div>
						<div class="col-md-6 w3-icon-grid1">
							<i class="fas fa-comments"></i>
							<div class="Supp">
								<h3>Chat Support</h3>
								<p>Get to chat with your colleagues over various topic discussion</p>
							</div>
							
						</div>
					</div>
					<div class="row w3-icon-grid-gap1">
						<div class="row" style="text-align: center; padding-left: 15%">
							<a href="/login">
							<button class="btn btn-info btn-lg" style="border-radius: 50px;width: 200px;margin-right: 4px">Login</button></a>
							<a href="/register">
							<button class="btn btn-info btn-lg" style="border-radius: 50px;width: 200px;">Register</button></a>
						</div>
					</div>
					</div>
					
			</div>
		</div>
	</section>
	<!-- //services -->
	<hr size="5" style="color: black;height: 1px;background-color: #919396; width: 300px">

	<!-- what we do -->
	<section class="what_you" id="organizers" style="padding-top: 20px">
	<div class="container">
		<div class="wthree_head_section">
				<h3 class="w3l_header">Organizers Section</h3>
				<p>Become a organizer, Improve your tasks of Screening!</p>
			</div>
			
			<div class="row about-info-grids">
				<div class="col-md-4 about-info about-info1">
					<i class="far fa-gem"></i>
					<h4>Earn Money</h4>
					<div class="h4-underline"></div>
					<p>Educate students and earn money.</p>
				</div>
				<div class="col-md-4 about-info about-info2">
					<i class="fas fa-book"></i>
					<h4>Give Coaching</h4>
					<div class="h4-underline"></div>
					<p>Guide and mentor the students</p>
				</div>
				<div class="col-md-4 about-info about-info3">
					<i class="fab fa-codepen"></i>
					<h4>Inspire Students</h4>
					<div class="h4-underline"></div>
					<p>Help students expand their views.</p>
				</div>
			</div>
			<div class="bord"></div>
			<div class="row about-info-grids">
				<div class="col-md-4 about-info about-info1">
					<i class="fas fa-university"></i>
					<h4>Company</h4>
					<div class="h4-underline"></div>
					<p>Create your own little company.</p>
				</div>
				<div class="col-md-4 about-info about-info2">
					<i class="fas fa-folder"></i>
					<h4>Share knowledge</h4>
					<div class="h4-underline"></div>
					<p>Share your knowledge with everyone.</p>
				</div>
				<div class="col-md-4 about-info about-info3">
					<i class="fas fa-graduation-cap"></i>
					<h4>Career</h4>
					<div class="h4-underline"></div>
					<p>Build your own career.</p>
				</div>
			</div>
			<br>
			<div class="row" style="text-align: center; padding-left: 32%">
				<a href="/organizers/login">
				<button class="btn btn-info btn-lg" style="border-radius: 50px;width: 200px;margin-right: 20px">Login</button></a>
				<a href="/organizers/register">
				<button class="btn btn-info btn-lg" style="border-radius: 50px;width: 200px;">Register</button></a>
			</div>
	</div>
	</section>
	<!-- //what we do -->
	<!-- testimonials -->
	<section class="test" id="test" style="padding-top: 20px">
		<div class="container">
			<div class="wthree_head_section">
					<h3 class="w3l_header w3_agileits_header two">Testimonals</h3>
				</div>
			<div class=" test-gr">
				<div class=" test-gri1">
					<div id="owl-demo2" class="owl-carousel">
						<div class="row agile">
							<div class="col-md-6 test-grid">
								<div class="test-grid1-agileinfo hrms">
									<img src="images/ts1.jpg" alt="" class="img-r">
									<p>I like the precision of the instructor's trading strategies, which is also reflected in his teaching style. He's obviously passionate about the subject, well informed, focused, and diligent. 
									He clearly expresses his techniques, strategies, and the software platform he uses. An excellent course thus far, I intend to open my first live Forex account due to what I've been learning here. Thank you, Kirill, for sharing your enthusiasm!</p>
									<h4>Shane Watson</h4>
									<span>Student</span>
								</div>
							</div>
							<div class="col-md-6 test-grid">
								<div class="test-grid1-agileinfo">
									<img src="images/ts2.jpg" alt="" class="img-r">
									<p>This course is just amazing. Its exactly what I was looking for. If you know a very little bit basics of Python, that will definitely 
									be awesome for you to follow this course. The code and concepts are explained very slowly and perfectly. Anyone interested in learning Deep Learning should definitely take this course. And for this Machine Learning course is not required to do before. So it deserves 5 stars :)</p>
									<h4>Mitchel Starc</h4>
									<span>Student</span>
								</div>
							</div>
						</div>
						<div class="row agile">
							<div class="col-md-6 test-grid">
								<div class="test-grid1-agileinfo hrms">
									<img src="images/ts3.jpg" alt="" class="img-r">
									<p>Launching my first course on StudyLink allowed me to quit my full-time job and start my own company. I went from working 60+ hour weeks to setting my own hours and schedule being passionate about the subject, focused, and diligent.</p>
									<h4>Steve Smith</h4>
									<span>Tutor</span>
		
								</div>
							</div>
							<div class="col-md-6 test-grid">
								<div class="test-grid1-agileinfo">
									<img src="images/ts1.jpg" alt="" class="img-r">
									<p>There's no greater success on the StudyLink marketplace than hearing that you've helped a student achieve their goals. Teaching on StudyLink has brought me new relationships from wonderful and insatiably curious students.</p>
									<h4>James Franklin</h4>
									<span>Tutor</span.>
								</div>
							</div>
						</div>
						<!-- <div class="row agile">
							<div class="col-md-6 test-grid">
								<div class="test-grid1-agileinfo hrms">
									<img src="images/ts2.jpg" alt="" class="img-r">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
										aliqua. Ut enim ad minim veniam, quis. Lorem ipsum dolor .</p>
									<h4>Colling Wood</h4>
									<span>Student</span>
								</div>
							</div>
							<div class="col-md-6 test-grid">
								<div class="test-grid1-agileinfo">
									<img src="images/ts3.jpg" alt="" class="img-r">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
										aliqua. Ut enim ad minim veniam, quis. Lorem ipsum dolor .</p>
									<h4>Mark Henry</h4>
									<span>Student</span>
								</div>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- testimonials -->
	
	@include('layouts.footer')