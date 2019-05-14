<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Uriel Zacarias | Web Designer</title>
	<link rel="stylesheet" href="css/normal_style.css" type="text/css">
	<link rel="stylesheet" href="css/resume.css" type="text/css">
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="wrapper">  <?php //wrapper div ?>  
		<div id="parallax_wrapper">
			<div id="parallax">
                <img src="img/img13.jpg" id="img">
            </div>
        </div>
        <div id="container"><?php //container div; ?>
            <div id="heading-wrapper">
                <div id="heading">
                	<a href="index.php">
	                    <h3>Uriel&nbsp;Zacarias</h3>
    	                <h4>Web&nbsp;Developer</h4>
                	</a>
                </div>
            </div>
            <div id="anchor"></div>
            <div id="nav-wrapper">
                <nav id="nav">
                	<ul>
						<li class="li" id="home">
							<a href="index.php">Home</a>
                           <!--
                            <ul class="stuff">
                                <li><a href="#">Stuff 1</a></li>
                                <li><a href="#">Stuff 2</a></li>
                                <li><a href="#">Stuff 3</a></li>
                            </ul>
                            -->
                        </li>
                        
                        <li class="li" id="about_me">
                        	<a href="about_me.php">About&nbsp;Me</a>
                            <!--
                               <ul class="stuff">
                                <li><a href="#">Stuff 1</a></li>
                                <li><a href="#">Stuff 2</a></li>
                                <li><a href="#">Stuff 3</a></li>
                            </ul>
                            -->
                        </li>
                        <li class="li" id="resume">
                        	<a href="resume.php">Resume</a>
                            <!--
                            <ul class="stuff">
                                <li><a href="#">Stuff 1</a></li>
                                <li><a href="#">Stuff 2</a></li>
                                <li><a href="#">Stuff 3</a></li>
                            </ul>
                            -->
                        </li>
                        <li class="li" id="projects">
                        <a href="projects.php">Projects</a>
                            <!--
                            <ul class="stuff">
                                <li><a href="#">Stuff 1</a></li>
                                <li><a href="#">Stuff 2</a></li>
                                <li><a href="#">Stuff 3</a></li>
                            </ul>
                            -->                       
                        </li>
						<li class="li" id="contact">
                        	<a href="contact.php">Contact</a>
                            <!--
                            <ul class="stuff">
                                <li><a href="#">Stuff 1</a></li>
                                <li><a href="#">Stuff 2</a></li>
                                <li><a href="#">Stuff 3</a></li>
                            </ul>                           
                        	-->
                        </li>
                    </ul>
                </nav>
            </div>
            <div id="content-wrapper"><?php //content-wrapper div ?>
            	<div id="content"><?php //content div ?>


					<?php $page="home";?>

					<?php $headline="Welcome to my site!";?>
					<?php include("func/functions.php");?>
					<?php 
					selected_page($page);
					?>
					<script type="text/javascript">
					/*****************************************
					******************************************
					Declare Slide Images
					******************************************
					*****************************************/
						var slideimages = new Array() 
						slideimages[0] = new Image()
						slideimages[0].src = "img/slide0.jpg"
						slideimages[1] = new Image()
						slideimages[1].src = "img/slide1.jpg"
						slideimages[2] = new Image()
						slideimages[2].src = "img/slide2.jpg"
					</script>

					<div class="post">
						<div class="preview-wrapper">
							<div class="preview">
								<img src="img/slide0.jpg" id="slide">
							</div>
						</div>
					</div>

					<?php 
					heading($headline);
					include("word/cover-letter.html");
					?>

                    </div> <?php //content div ?>
              </div> <?php //content-wrapper div ?>
              <div id="footer-wrapper">
                    <div id="footer">
                        <a href="https://www.facebook.com/avenskypro"><img src="img/facebook.png" class="social_icons"></a>
                        <a href="http://avenskypro.blogspot.com/"><img src="img/blogger.png" class="social_icons"></a>
                        <a href="https://www.youtube.com/user/Avenskypro"><img src="img/youtube.png" class="social_icons"></a>
                        <p id="demo"></p>
                    </div>
                </div>
            </div> <?php //container div; ?>
		</div><?php //wrapper div ?>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
		<script type="text/javascript" src="js/stuff.js"></script>
	</body>
</html>

