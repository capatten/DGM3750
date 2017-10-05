<!DOCTYPE HTML>
<html>
	<head>
		<title>The BOM Games</title>
		<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<!--[if lte IE 8]>
            <script src="assets/js/ie/html5shiv.js"></script>
        <![endif]-->

		<link rel="stylesheet" href="assets/css/style.css" />

        <script>
            $(document).ready(function(){
                $(".nav-button").click(function () {
                    $(".nav-button,.primary-nav").toggleClass("open");
                });
            });
        </script>
	</head>
	<body>
		<!-- NAVIGATION -->
        <header>
            <div class="header_logo-container">
                <img src="#" alt="logo" />
                <h1>BOM Games</h1>
                <h2>We play to have fun. Winning is just a bonus.</h2>
            </div>

            <ul class="social_media-list">
                <li><a href="https://www.facebook.com/"><img src="images/social_face.png"  alt=""/></a></li>
                <li><a href="https://twitter.com/"><img src="images/social_twit.png"  alt=""/></a></li>

            </ul>

            <nav>
                <!-- phone nav button -->
                <button class="nav-button">
                    <span>Menu</span>
                </button>
                <ul class="primary-nav">
                    <li class="selected"><a href="#">Home</a></li>
                    <li><a href="#">Games</a></li>
                    <li><a href="#">Instructions</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </nav>
        </header>

		<!-- Signup Form -->
			<!--<form id="signup-form" method="post" action="#">
				<input type="email" name="email" id="email" placeholder="Email Address" />
				<input type="submit" value="Sign Up" />
			</form>-->

		<!-- Footer -->
			<!--<footer id="footer">
				<ul class="icons">
					<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
					<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
				</ul>
				<ul class="copyright">
					<li>&copy; 2017 Chad Patten</li>
                </ul>
			</footer>-->

		<!-- Scripts -->
			<!--[if lte IE 8]>
                <script src="assets/js/ie/respond.min.js"></script>
            <![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>