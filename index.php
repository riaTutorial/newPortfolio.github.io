<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Portfolio</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<script src="script.js"></script>	
</head>
<body>
	<a id="top"></a>
	<section id="Home">
		<!-- nav bar -->
	<div class="nav">
		<div class="nav-item">
			<input type="checkbox" id="chk" name="chk">
			<img src="images/logo.png">
			<div class="menu scale-up-center">
			<ul>
				<li><a href="#Home">Home</li>
				<li><a href="#About">About</li>
                <li><a href="#Service">Services</li>
                <li><a href="#Portfolio">Portfolio</li>
                <li><a href="#Contact">Contact</li>
			</ul>
			<input type="button" id="downloadButton" class="button" value="Download CV">
			</div>
			<label for="chk" class="lbl"><i class="fa fa-bars" style="font-size: 30px; color: white;"></i></label>
		</div>
	</div>
	<!-- nav bar complete -->
    
    <!-- ------Hero section start ----------- -->
		<div class="hero-section">
			<div class="inner inner-box">
				<h5>RIYA VARYANI</h5>
				<h1>A Creative Designer And Developer</h1>
				<p>I’m creative designer and developer based in Morocco, and I’m very passionate and dedicated to my work.</p>
				<a href="#Portfolio"><input type="button" class="btn-primary" value="SEE MY WORK"></a>
				
			</div>

			<div class="inner img-box">
				<img src="images/pic1.png" class="image">
			</div>
		</div>
	</section>

	<!-- ------Hero section end ----------- -->

	<div class="feature">
		<div class="feature-head">
			<h2>Give your site a new look</h2>
		</div>
		<div class="feature-body">

		 <div class="feature-inner">
		 	<div class="circle">
		 		<img src="images/target.png">
		 	</div>
		 	<h3>Pixel Perfect</h3>
		 	<p>Most common methods for designing websites that work well on desktop is responsive and adaptive design.</p>
		 </div>

		 <div class="feature-inner">
		 	<div class="circle">
		 		<img src="images/artist.png">
		 	</div>
		 	<h3>High Quality</h3>
		 	<p>Most common methods for designing websites that work well on desktop is responsive and adaptive design.</p>
		 </div>	

		 <div class="feature-inner">
		 	<div class="circle">
		 		<img src="images/ligh.png">
		 	</div>
		 	<h3>Awesome Idea</h3>
		 	<p>Most common methods for designing websites that work well on desktop is responsive and adaptive design.</p>
		 </div>

		</div>
	</div>

	<!-- feature section ends -->

	<section id="About">
		<div class="about-container">
			<div class="about-part">
				<div class="image1">
					<img src="images/2.png">
				</div>
			</div>

			<div class="about-part">
				<h2>I'm a Designer and Developer</h2>
				<h1>I Can Design and Develop Any Kind Of Website</h1>
				<p>Hello there! I’m a web designer and a developer, and I’m very passionate and dedicated to my work.  I have acquired the skills and knowledge necessary to make your project a success. I enjoy every step of the design process, from discussion and collaboration.</p>
				<!-- <button onclick="goToPortfolio()" class="btn-primary btn-hire">Hire me</button> -->
			</div>
		</div>
	</section>

	<div class="about-head">
			<img src="images/star.png" class="star">
			<div class="about-head-part">
				<div class="about-head-inner">
					<h5>Get Started</h5>
					<h4>I Help Companies Move Faster</h4>
					<!-- <button class="btn-hire">Hire me</button> -->
					<a href="#Contact"><input type="button" class="btn-hire" value="Hire me"></a>
				</div>

				<div class="about-head-inner">
						<p>"Web design is not just about creating pretty layouts. It's about understanding the marketing challenge behind your business."</p>
				</div>

				<div class="about-head-inner">
						<img src="images/cloud.png">
				</div>
			</div>
		</div>	

		<!-- ------------------- about section ends -------------------- -->

		<section id="Service">
			<div class="service-head"><h3>SERVICE</h3></div>
			<div><h2>How i can help you with</h2></div>
			<div class="service-container">
				<div class="service-inner">
					<div class="service-inner-head">
					<img src="images/des.png">
					<h4>Design</h4>
					</div>
					<ul>
						<li>I develop the user interface</li>
						<li>Web page development</li>
						<li>I create ux element interactions</li>
						<li>Front-end development</li>
						<li>Back-end development</li>
					</ul>
				</div>

				<div class="service-inner">
					<div class="service-inner-head">
					<img src="images/dev.png">
					<h4>Development</h4>
					</div>
					<ul>
						<li>I develop the user interface</li>
						<li>Web page development</li>
						<li>I create ux element interactions</li>
						<li>Front-end development</li>
						<li>Back-end development</li>
					</ul>
				</div>

				<div class="service-inner">
					<div class="service-inner-head">
					<img src="images/ux.png">
					<h4>UI/UX Design</h4>
					</div>
					<ul>
						<li>I develop the user interface</li>
						<li>Web page development</li>
						<li>I create ux element interactions</li>
						<li>Front-end development</li>
						<li>Back-end development</li>
					</ul>
				</div>
			</div>
		</section>

		<!-- -------------- portfolio section starts -------------------- -->
		
		<section id="Portfolio">
			<div class="port-container">
				<div class="port-head">
				<h5>Portfolio</h5>
				<h2>Latest Work</h2>
				</div>
				<div class="port-btn">
					<button>Explore more</button>
				</div>
				
			</div>
			<div class="port-list">
				<div class="port-work">
					<img src="images/image.png">
					<div class="layer">
						<h3>Travel Agency Website Design</h3>
						<a href="https://www.figma.com/file/gpK1wiTUAEAyz4OjDN7EM1/tourism-web-design?type=design&node-id=0%3A1&mode=design&t=IHyj6eWRHSrEuQXe-1"><i class="fa fa-external-link"></i></a>
					</div>
				</div>

				<div class="port-work">
					<img src="images/french.png">
					<div class="layer">
						<h3>French Restaurant Website Design</h3>
						<a href="https://www.figma.com/file/aUvjefm95e5jX15lezOrTV/french-restaurant?type=design&node-id=0%3A1&mode=design&t=gNtSaUHmQ05pKLZ0-1"><i class="fa fa-external-link"></i></a>
					</div>
				</div>

				<div class="port-work">
					<img src="images/image2.jpg">
					<div class="layer">
						<h3>Business Analytics Website Design</h3>
						<a href="https://www.figma.com/file/kb2lzM4pgn7ZwQJz1F5Q4n/analytics?type=design&node-id=1%3A2&mode=design&t=e61uhBzKa8dNcoHb-1"><i class="fa fa-external-link"></i></a>
					</div>
				</div>

				<div class="port-work">
					<img src="images/react1.png">
					<div class="layer">
						<h3>Website Designed through React</h3>
						<a href="https://graceful-croissant-39c6e0.netlify.app/"><i class="fa fa-external-link"></i></a>
					</div>
				</div>

				<div class="port-work">
					<img src="images/bs2.png">
					<div class="layer">
						<h3>Simple Portal created for a Client</h3>
						<a href="https://businessanalyticsolutions.com/"><i class="fa fa-external-link"></i></a>
					</div>
			    </div>

				<div class="port-work">
					<img src="images/school.png">
					<div class="layer">
						<h3>Pre-school Website Design</h3>
						<a href="https://www.figma.com/file/j4jDZSATqhObuS7Mt3jtpj/preschool?type=design&node-id=1%3A2&mode=design&t=I4RoGv5xMemUH6Ot-1"><i class="fa fa-external-link"></i></a>
					</div>
				</div>
			</div>
		</section>

		<!----------------------- Contact form ---------------------->

		<section id="Contact">
			<div class="contact-container">
				<div class="contact-part">
					<div class="contact-form">
						

						<form action="insert.php" method="post">
							<h4>Get In Touch</h4>
							<div class="form-row">
								<div class="input-data">
						        <input type="text" name="name" required>
						        <div class="underline"></div>
						        <label for="name">Name</label>
					            </div>
							</div>

							<div class="form-row">
								<div class="input-data">
						        <input type="text" name="email" required>
						        <div class="underline"></div>
						        <label for="email">Email</label>
					            </div>
							</div>

							<div class="form-row">
								<div class="input-data">
						        <input type="text" name="subject" required>
						        <div class="underline"></div>
						        <label for="subject">Subject</label>
					            </div>
							</div>

							<div class="form-row">
								<div class="input-data textarea">
					            <textarea rows="8" cols="80" name="message" required></textarea>
					            <div class="underline"></div>
					            <label for="message">Write your message</label>
					            </div>
							</div>

							<div class="form-row sub-btn">
					            <div class="input-data">
						        <!-- <div class="inner"></div> -->
						        <input type="submit" value="submit">
						        </div>
				            </div>
							
						</form>
						
					</div>
				</div>

				<div class="contact-part">
					<h5>Contact</h5>
					<h2>Contact Me</h2>
					<p> Please fill out the form on this section to contact with me. Or call between 9:00 a.m. and 8:00 p.m. GMT+1, Monday to Saturday.</p>
					<div class="contact-icons">
						<div class="contact-address">
							<a href="mailto:riyasakhrani724@gmail.com"><i class="fa fa-envelope"></i></a>
							<p>riyasakhrani724@gmail.com</p>
						</div>

						<div class="contact-address">
							<a href="https://api.whatsapp.com/send?phone=212666247039"><i class="fa fa-whatsapp"></i></a>
							<p>Whatsapp me at +212 666 247039</p>
						</div>

						<div class="contact-address">
							<a href="https://www.instagram.com/riyasakhrani724/"><i class="fa fa-instagram"></i></a>	
							<p>riyasakhrani724</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		
		<footer>
			<div class="footer-text">
				<p>Copyright © 2023. Developed with love by Riya Varyani.</p>
			</div>
		</footer>

</body>
</html>