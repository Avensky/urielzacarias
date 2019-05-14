<?php $page="projects";?>
<?php $headline="Current Projects";?>
<?php require_once("func/functions.php");?>
<?php require_once("func/functions2.php");?>
<?php require_once("inc/header.php");?>

<?php
selected_page($page);
heading($headline);
?>

<?php
$link = "http://www.urielzacarias.com/hearthy";
$heading = "Hearthy";
$image = "img/hearthy.png";
$alt = "Photograph of Uriel Zacarias";
$content = "word/hearthy.html";
article ($link, $heading, $image, $alt, $content);
?>

<?php require_once("inc/footer.php");?>

