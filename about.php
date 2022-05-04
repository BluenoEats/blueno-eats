<?php include "config/setup.php"; ?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title> Blueno Eats Website </title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="styles/main.css" rel="stylesheet" type="text/css">
	<link href="styles/navigation.css" rel="stylesheet" type="text/css">
	<link href="styles/info.css" rel="stylesheet" type="text/css">
</head>

<body>
	<?php include D_TEMPLATE . "navigation.php" ?>

	<div class="about top-blank">
		<h2> Our Mission</h2>
		<p>
			Blueno Eats seeks to provide a convenient way that people can search for delicious dishes provided by
			the Brown dining services. We hope to create a space for the Brown community to share their opinions
			regarding on-campus dining services and have fun exploring the different food options.
		</p>
	</div>
	<div class="about">
		<h2> Diversity & Inclusion</h2>
		<p>
			We actively support the diversity of Brown University community members and consider an inclusive environment
			critical to serving the diverse perspectives of our website. Blueno Eats users should take into consideration
			that the reviews, comments, and images are opinions expressed by other users who are subject to biases.
			We uphold as an essential value a supportive, open, and tolerant environment in which users of Blueno Eats can
			respectfully discuss and make constructive comments.
		</p>
	</div>
	<div class="about" style="text-align: center">
		<h2> Development Team</h2>
		<p> Chayathorn Kulthonchalanan<br>
			Tanadol Lamlertprasertkul<br>
			Tianran Zhang</p>
	</div>

	<div class="additional-content">
		<p> Want to learn more about Dining Services at Brown?
			<a href="https://dining.brown.edu/" target="_blank">Click here...</a>
		</p>
	</div>

	<?php include D_TEMPLATE . "footer.php"; ?>
</body>

</html>