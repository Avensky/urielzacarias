<?php require_once("inc/session.php"); ?>
<?php require_once("inc/db_connection.php"); ?>
<?php require_once("func/functions.php"); ?>
<?php require_once("func/functions2.php"); ?>
<?php require_once("func/validation_functions.php"); ?>


<?php
if (isset($_POST['submit'])){
	$image = mysql_prep($_POST["image"]);
	$article_title = mysql_prep($_POST["article_title"]);
	$text = mysql_prep($_POST["text"]);
	
	$visible   = (int) $_POST["visible"];
	//validations
	$required_fields = array("image", "article_title", "text", "visible");
	validate_has_presence($required_fields);
	
	$fields_with_max_lengths = array("article_title" => 30);
	validate_max_lengths($fields_with_max_lengths);
	
	if (!empty($errors)) {
		$_SESSION["errors"] = $errors;
		redirect_to("new_about_me.php");
	}

	$query  = "INSERT INTO article (";
	$query .= " image, article_title, text, visible";
	$query .= ") VALUES (";
	$query .= " '{$image}', '{$article_title}', '{$text}', {$visible}";
	$query .= ")";
	$result = mysqli_query($connection, $query);

	if ($result) {
		$_SESSION["message"] = "Subject created. Good job.";
		redirect_to("about_me.php");
	} else {
		$_SESSION["message"] = "Subject creation failed.";
		redirect_to("new_about_me.php");
	}
} else {
	redirect_to("new_about_me.php");
}
?>
<?php 
	if (isset($connection)) {mysqli_close($connection);}
?>

<?php include("inc/footer.php"); ?>