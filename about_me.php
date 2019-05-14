<?php $page="about_me";?>
<?php $headline="Welcome to my hobbies!";?>
<?php require_once("func/functions.php");?>
<?php require_once("func/functions2.php");?>
<?php require_once("inc/header.php");?>

<?php
selected_page($page);
heading($headline);
?>

<p> I have always been a very passionate person, but only towards things that puzzle me. I am practicing code on my own, learning and problem solving. Othere than programming these are some of my interests.p>

<?php


$link = "http://www.myfitnesspal.com/Avensky";
$heading = "Visual Art & Design";
$image = "img/art1.jpg";
$alt = "Photograph of Uriel Zacarias";
$content = "word/drawing.html";
article ($link, $heading, $image, $alt, $content);

$link = "";
$heading = "Exercise";
$image = "img/jog.jpg";
$alt = "Photograph of Uriel Zacarias";
$content = "word/drawing.html";
article ($link, $heading, $image, $alt, $content);

$heading = "Gaming Videos";
$image = "https://www.youtube.com/embed/3hZFsf0BgRM";
$alt = "";
$content = "word/drawing.html";
video ($heading, $image, $alt, $content);
	
$heading = "Blogging";
$image = "http://avenskypro.blogspot.com/";
$alt = "";
$content = "word/drawing.html";
video ($heading, $image, $alt, $content);
	
	
?>

<?php require_once("inc/footer.php");?>
