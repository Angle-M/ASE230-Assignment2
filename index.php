<!DOCTYPE html>
<html lang="en">

<head>

	<!-- https://www.bootdey.com/snippets/view/single-advisor-profile#html -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/index.css">
	<!--I was unable to find a way to add images to arrays and setup them up if someone can take a look as that-->


	<?php
		$i=0;
		$group=[
    		[
        		'name'=>'Angel Munoz',
        		'Year'=>'Sophomore',
				'Symbol'=> str_repeat(' &#9734',2),
        		'picture'=>['images/munoza2.png']
    		],
    		[
        		'name'=>'Amaya Bryant',
        		'Year'=>'Sophomore',
				'Symbol'=> str_repeat(' &#9734',2),
        		'picture'=>['images/amayaBryant.jpg']
    		],
    		[
        		'name'=>'Quay Robinson',
        		'Year'=>'Junior',
				'Symbol'=>str_repeat(' &#9734',3),
        		'picture'=>['images/Quay.jpeg']
    		],
			[
        		'name'=>'Tami Farber',
        		'Year'=>'Senior',
				'Symbol'=> str_repeat(' &#9734',4),
        		'picture'=> ['TamiFarber.jpg']#a href;
    		],
		];
	?>
	<title>
		ASE 230 - class of Fall 2022
	</title>
</head>

<body>
	<div class="container text-center">
		<h1>
			This is ASE 230 - class of Fall 2022
		</h1>
	</div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-sm-8 col-lg-6">

				<!-- Section Heading-->
				<div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
					<h3>
						Our Creative
						<span>
							Team
						</span>
					</h3>
					<p>
						Appland is completely creative, lightweight, clean &amp; super responsive app landing page.
					</p>
					<div class="line"></div>
				</div>
			</div>
		</div>
		<div class="row">

			<!-- Single Advisor-->
			<div class="col-12 col-sm-6 col-lg-3">
				<div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">

					<!-- Team Thumb-->
					<div class="advisor_thumb">

							<?php
								$i=0;
								echo '<a href="details.php?id='.$i.'&name='.$group[0]['name'].'">
									<img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
								</a>';
							?>


						<!-- Social Info-->

						<div class="social-info">
							<?php
								$i=0;
								echo '<a href="details.php?id='.$i.'&name='.$group[0]['name'].'">
										<i class="fa fa-facebook"></i>
									</a>';

								echo '<a href="details.php?id='.$i.'&name='.$group[0]['name'].'">
										<i class="fa fa-twitter"></i>
									</a>';

								echo '<a href="details.php?id='.$i.'&name='.$group[0]['name'].'">
									<i class="fa fa-linkedin"></i>
								</a>';
								$i++;
							?>
						</div>
					</div>

					<!-- Team Details-->
					<div class="single_advisor_details_info">
						<h6>
							<?php
								echo $group[0]["name"];
							?>
						</h6>
						<p class="designation">
							<?php
								echo $group[0]["Year"];
								echo $group[0]["Symbol"];
							?>
						</p>
					</div>
				</div>
			</div>

			<!-- Single Advisor-->
			<div class="col-12 col-sm-6 col-lg-3">
				<div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">

					<!-- Team Thumb-->
					<div class="advisor_thumb">
						<a href="details.php">
							<?php
								$i=1;
								echo '<a href="details.php?id='.$i.'&name='.$group[1]['name'].'">
									<img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
								</a>';
							?>
						</a>

						<!-- Social Info-->
						<div class="social-info">
							<?php
								$i=1;
								echo '<a href="details.php?id='.$i.'&name='.$group[1]['name'].'">
										<i class="fa fa-facebook"></i>
									</a>';

								echo '<a href="details.php?id='.$i.'&name='.$group[1]['name'].'">
										<i class="fa fa-twitter"></i>
									</a>';

								echo '<a href="details.php?id='.$i.'&name='.$group[1]['name'].'">
									<i class="fa fa-linkedin"></i>
								</a>';
							?>
						</div>
					</div>

					<!-- Team Details-->
					<div class="single_advisor_details_info">
						<h6>
							<?php
								echo $group[1]["name"];
							?>
						</h6>
						<p class="designation">
							<?php
								echo $group[1]["Year"];
								echo $group[1]["Symbol"];
							?>
						</p>
					</div>
				</div>
			</div>

			<!-- Single Advisor-->
			<div class="col-12 col-sm-6 col-lg-3">
				<div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">

					<!-- Team Thumb-->
					<div class="advisor_thumb">
						<a href="details.php">
							<?php
							$i=2;
								echo '<a href="details.php?id='.$i.'&name='.$group[2]['name'].'">
									<img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
								</a>';
							?>
						</a>

						<!-- Social Info-->
						<div class="social-info">
							<?php
								$i=0;
								echo '<a href="details.php?id='.$i.'&name='.$group[2]['name'].'">
										<i class="fa fa-facebook"></i>
									</a>';

								echo '<a href="details.php?id='.$i.'&name='.$group[2]['name'].'">
										<i class="fa fa-twitter"></i>
									</a>';

								echo '<a href="details.php?id='.$i.'&name='.$group[2]['name'].'">
									<i class="fa fa-linkedin"></i>
								</a>';
							?>
						</div>
					</div>

					<!-- Team Details-->
					<div class="single_advisor_details_info">
						<h6>
							<?php
								echo $group[2]["name"];
							?>
						</h6>
						<p class="designation">
							<?php
								echo $group[2]["Year"];
								echo $group[2]["Symbol"];
							?>
						</p>
					</div>
				</div>
			</div>

			<!-- Single Advisor-->
			<div class="col-12 col-sm-6 col-lg-3">
				<div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">

					<!-- Team Thumb-->
					<div class="advisor_thumb">
						<a href="details.php">
							<?php
								$i=3;
								echo '<a href="details.php?id='.$i.'&name='.$group[3]['name'].'">
									<img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
								</a>';
							?>
						</a>

						<!-- Social Info-->
						<div class="social-info">
							<?php
								$i=3;
								echo '<a href="details.php?id='.$i.'&name='.$group[3]['name'].'">
										<i class="fa fa-facebook"></i>
									</a>';

								echo '<a href="details.php?id='.$i.'&name='.$group[3]['name'].'">
										<i class="fa fa-twitter"></i>
									</a>';

								echo '<a href="details.php?id='.$i.'&name='.$group[3]['name'].'">
									<i class="fa fa-linkedin"></i>
								</a>';
							?>
						</div>
					</div>

					<!-- Team Details-->
					<div class="single_advisor_details_info">
						<h6>
							<?php
								echo $group[3]["name"];
							?>
						</h6>
						<p class="designation">
							<?php
								echo $group[3]["Year"];
								echo $group[3]["Symbol"];
							?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
