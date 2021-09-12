<?php
include_once './theme/header.php';
?>

<section class="page">
	<!-- ***** Page Top Start ***** -->
	<div class="cover" data-image="assets/images/photos/parallax-counter.jpg">
		<div class="page-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h1>Team</h1>
					</div>
					<div class="col-lg-12">
						<ol class="breadcrumb">
							<li><a href="/">Home</a></li>
							<li class="active">Team</li>
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
				<div class="col-lg-12">
					<div class="about">
						<?php include_once './components/teams.php'; ?>
					</div>
				</div>
			</div>
		</div>




	</div>
	<!-- ***** Page Content End ***** -->

</section>

<?php
include_once './theme/footer.php';
?>