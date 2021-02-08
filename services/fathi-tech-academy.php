<?php
$ds = DIRECTORY_SEPARATOR;
if (file_exists('../theme/header.php')) {
	include_once '../theme/header.php';
} else {
	include($_SERVER['DOCUMENT_ROOT'] . 'theme' . $ds . 'header.php');
}
?>
<section class="page">
	<!-- ***** Page Top Start ***** -->
	<div class="cover" data-image="/assets/images/photos/parallax-counter.jpg">
		<div class="page-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h1>Fathi-Tech Academy</h1>
					</div>
					<div class="col-lg-12">
						<ol class="breadcrumb">
							<li><a href="/">Home</a></li>
							<li><a href="/services">Services</a></li>
							<li class="active">Fathi-Tech Academy</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ***** Page Top End ***** -->


	<!-- ***** Page Content Start ***** -->
	<div class="page-bottom">
		<div class="container">
			<div class="row">
				<!-- ***** Page Content Start ***** -->
				<div class="col-lg-8 col-md-12 col-sm-12">
					<div class="page-detail">
						<div class="card border-0 margin-bottom-30 shadow-sm">
							<img src="/assets/images/services/course.jpg" class="img-fluid margin-bottom-30" alt="">
						</div>
						<div class="row" id="courses">
							<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
								<div class="card border-0 shadow-sm margin-bottom-20">
									<div class="card-body">
										<div class="blog-post-thumb">
											<div class="img">
												<img src="/assets/images/courses/java.png" alt="Java Programming">
											</div>
											<div class="blog-content">
												<h3>
													<a href="javascript:void(0)">JAVA Programming</a>
												</h3>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
								<div class="card border-0 shadow-sm margin-bottom-20">
									<div class="card-body">
										<div class="blog-post-thumb">
											<div class="img icon">
												<img src="/assets/images/courses/python.png" alt="Python Programming">
											</div>
											<div class="blog-content">
												<h3>
													<a href="javascript:void(0)">Python Programming</a>
												</h3>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
								<div class="card border-0 shadow-sm margin-bottom-20">
									<div class="card-body">
										<div class="blog-post-thumb">
											<div class="img icon">
												<img src="/assets/images/courses/blockchain.png" alt="Blockchain">
											</div>
											<div class="blog-content">
												<h3>
													<a href="javascript:void(0)">Blockchain</a>
												</h3>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
								<div class="card border-0 shadow-sm margin-bottom-20">
									<div class="card-body">
										<div class="blog-post-thumb">
											<div class="img icon">
												<img src="/assets/images/courses/microservices.png" alt="Microservices">
											</div>
											<div class="blog-content">
												<h3>
													<a href="javascript:void(0)">Microservices</a>
												</h3>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
								<div class="card border-0 shadow-sm margin-bottom-20">
									<div class="card-body">
										<div class="blog-post-thumb">
											<div class="img icon">
												<img src="/assets/images/courses/mobile.jpg" alt="Mobile Application Development">
											</div>
											<div class="blog-content">
												<h3>
													<a href="javascript:void(0)">Mobile App Dev.</a>
												</h3>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
								<div class="card border-0 shadow-sm margin-bottom-20">
									<div class="card-body">
										<div class="blog-post-thumb">
											<div class="img icon">
												<img src="/assets/images/courses/website.png" alt="Web design">
											</div>
											<div class="blog-content">
												<h3>
													<a href="javascript:void(0)">Web design</a>
												</h3>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
								<div class="card border-0 shadow-sm margin-bottom-20">
									<div class="card-body">
										<div class="blog-post-thumb">
											<div class="img icon">
												<img src="/assets/images/courses/network.png" alt="Networking">
											</div>
											<div class="blog-content">
												<h3>
													<a href="javascript:void(0)">Networking</a>
												</h3>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
								<div class="card border-0 shadow-sm margin-bottom-20">
									<div class="card-body">
										<div class="blog-post-thumb">
											<div class="img icon">
												<img src="/assets/images/courses/computer engineer.png" alt="Computer Engineering">
											</div>
											<div class="blog-content">
												<h3>
													<a href="javascript:void(0)">Computer Engineering</a>
												</h3>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- ***** Page Content End ***** -->

				<!-- ***** Aside Start ***** -->
				<div class="col-lg-4 col-md-12 col-sm-12">
					<aside class="default-aside">
						<div class="sidebar">
							<?php include_once './side_nav.php'; ?>

							<div class="box">
								<img src="/assets/images/photos/about/1.jpg" alt="">
								<div class="hovered align-self-center">
									<p>You can contact us for purchase, installation and customizations. </p>
									<a href="contact.html" class="btn-white-line">Contact Us</a>
								</div>
							</div>
						</div>
					</aside>
				</div>
				<!-- ***** Aside End ***** -->
			</div>
		</div>
	</div>
	<!-- ***** Page Content End ***** -->

</section>

<?php

if (file_exists('../theme/footer.php')) {
	include_once '../theme/footer.php';
} else {
	include($_SERVER['DOCUMENT_ROOT'] . 'theme' . $ds . 'footer.php');
}
?>