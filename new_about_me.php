<?php require_once("inc/db_connection.php"); ?>
<?php require_once("func/functions.php"); ?>
<?php require_once("func/functions2.php"); ?>

<?php  
	$page="new_about_me";
	$headline="Welcome to my hobbies!";
?>
<?php include("inc/header.php"); ?>

<?php
selected_page($page);
heading($headline);
?>

<form action="new_article.php" method="post">
<div class="article-wrapper">
	<div class="article-image-wrapper">
        <label for="file-upload" class="article-image" style= "background-image: url('img/art1.jpg')">
            <i class="fa fa-cloud-upload"></i>
        </label>
        <input id="file-upload" name="image" accept="image/*" type="file"/>
	</div>
    <div class="article-content">
	    <h2>Heading: <input type="text" name="article_title" value="" /></h2><br />
		<h2>Image link: <input type="text" name="article_link" value="" /></h2>

        <p><textarea name="text" style="width: 98%; height: 150px;">Hi! Type the article content here.</textarea></p>
		<p>Visible:
        <input type="radio" name="visible" value="0" /> No 
        &nbsp;
		<input type="radio" name="visible" value="1" /> Yes
        </p><br />
        Position:
        <select name="position">
        <?php /*
        $page_set = query_pages_for_subject($current_subject["id"], false);
        $page_count = mysqli_num_rows($page_set);
        for ($count = 1; $count <= ($page_count + 1); $count++) {
        echo "<option value=\"{$count}\">{$count}</option>";
        } */
        ?>
        </select><input type="submit" name = "submit" value="Add Article" />
    	<a href="new_about_me.php">Cancel</a>       
    </div>
</div>
</form>
<script>
  $('textarea').highlightTextarea({
    words: ['Hi! Type the article content.']
  });
</script>	
		
		
<?php
	$link = "http://www.myfitnesspal.com/Avensky";
	$heading = "Visual Art & Design";
	$image = "img/art1.jpg";
	$alt = "Photograph of Uriel Zacarias";
	$content = "word/drawing.html";
	article ($link, $heading, $image, $alt, $content);
?>

<?php include("inc/footer.php"); ?>