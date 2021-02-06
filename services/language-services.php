<?php
$ds = DIRECTORY_SEPARATOR;
include($_SERVER['DOCUMENT_ROOT'] . 'theme' . $ds . 'header.php');
?>

<section class="page">
	<!-- ***** Page Top Start ***** -->
	<div class="cover" data-image="assets/images/photos/parallax-counter.jpg">
		<div class="page-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h1>Language Services</h1>
					</div>
					<div class="col-lg-12">
						<ol class="breadcrumb">
							<li><a href="/">Home</a></li>
							<li><a href="/services">Services</a></li>
							<li class="active">Language Services</li>
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
						<p>Proin pellentesque quam at quam aliquet, eget mattis quam euismod. Curabitur imperdiet suscipit facilisis. Maecenas diam quam, sodales eu est eu, posuere ultricies augue. </p>
						<p>Sed rhoncus facilisis risus, nec sagittis dui luctus in. Nunc eget ante odio. Suspendisse eu diam ut nisi ullamcorper interdum. Pellentesque sit amet quam risus. In a augue aliquam, venenatis tortor in, placerat purus. Donec rhoncus nisi sit amet convallis tempor. </p>

						<img src="assets/images/photos/about/3.jpg" class="img-fluid margin-bottom-30" alt="">

						<p>Sed rhoncus facilisis risus, nec sagittis dui luctus in. Nunc eget ante odio. Suspendisse eu diam ut nisi ullamcorper interdum. Pellentesque sit amet quam risus. In a augue aliquam, venenatis tortor in, placerat purus. Donec rhoncus nisi sit amet convallis tempor. </p>


						<p>Proin pellentesque quam at quam aliquet, eget mattis quam euismod. Curabitur imperdiet suscipit facilisis. Maecenas diam quam, sodales eu est eu, posuere ultricies augue. </p>
					</div>
				</div>
				<!-- ***** Page Content End ***** -->

				<!-- ***** Aside Start ***** -->
				<div class="col-lg-4 col-md-12 col-sm-12">
					<aside class="default-aside">
						<div class="sidebar">
							<?php include_once './side_nav.php'; ?>

							<div class="box">
								<img src="assets/images/photos/about/1.jpg" alt="">
								<div class="hovered align-self-center">
									<p>You can contact us for purchase, installation and customizations. </p>
									<a href="/contact" class="btn-white-line">Contact Us</a>
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
include($_SERVER['DOCUMENT_ROOT'] . 'theme' . $ds . 'footer.php');
?>