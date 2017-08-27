<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Movie Recommendation</title>
	<link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/colorbox.css" type="text/css" media="all" />
	<script src="js/jquery-1.8.0.min.js" type="text/javascript"></script>
	<script src="js/jquery.colorbox-min.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript"></script>
</head>
<body>
	<!-- wrapper -->
	<div id="wrapper">
		<div class="light-bg">
			<!-- shell -->
			<div class="shell">
				<!-- header -->
				<div class="header">
					<!-- socials -->
					<div class="socials">
						<a href="#" class="facebook-ico">facebook-ico</a>
						<a href="#" class="twitter-ico">twitter-ico</a>
						<a href="#" class="you-tube-ico">you-tube-ico</a>
					</div>
					<!-- end of socials -->
					<h1 id="logo"><a href="#">Movie</a></h1>
					<!-- navigation -->
					<nav id="navigation">
						<ul>
							<li><a href="index.php">MOVIE REVIEWS</a></li>
							<li><a href="update.php">MOST COMMENTED REVIEW LIST</a></li>
							<li><a href="#">LATEST MOVIES <span>20</span></a></li>
						</ul>
					</nav>
					<!-- end of navigation -->
					<div class="cl">&nbsp;</div>
				</div>
				<!-- end of header -->
				<!-- main -->
				<div class="main">
					<!-- content -->
					<section class="content">
						<!-- post -->
						<div class="post">
							<!-- post-inner -->
							<div class="post-inner">
								<header>
									<h2><a href="#">Movie Recommendations</a></h2>
									<div class="cl">&nbsp;</div>
								</header>
								<div class="post-cnt">
									<form action="thankyou.php" method="post">
										  Title:<br>
										  <input type="text" name="title" required><br>
										  Release Date:<br>
										  <input type="date" name="release_date" required><br>
										  Duration:<br>
										  <input type="text" name="duration" required><br>
										  Genre:<br>
										  <input type="text" name="genre" required><br>
										  Synopsis:<br>
										  <textarea type="text" name="synopsis" required></textarea><br>
										  <input type="submit" value="Submit"><br>
									</form>
								</div>
								<!-- end of post-cnt -->
							</div>
							<!-- post-inner -->
						</div>
					</section>
					<!-- end of content -->
					<!-- sidebar -->
					<aside class="sidebar">
						<div class="widget">
							<h3 class="widgettitle">Opening This Week</h3>
							<ul>
								<li><a href="#">The Hunter Games <strong>$98 Mil</strong></a></li>
								<li><a href="#">American Reunion <strong>$50 Mil</strong></a></li>
								<li><a href="#">Titanic <strong>$23 Mil</strong></a></li>
								<li><a href="#">Wrath of the Titans <strong>$50 Mil</strong></a></li>
								<li><a href="#">Mirror Mirro  <strong>$7 Mil</strong></a></li>
							</ul>
						</div>
					</aside>
					<!-- end of sidebar -->
					<div class="cl">&nbsp;</div>
				</div>
				<br>
				<br>
				<br>
				<br>
				<!-- end of main -->
				<div class="footer">
					<p class="copy">Student @ UTS <span>|</span> 2017 </p>
				</div>
			</div>
			<!-- end of shell -->
		</div>	
	</div>
	<!-- end of wrapper -->
</body>
</html>