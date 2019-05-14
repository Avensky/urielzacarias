<!DOCTYPE>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Hearthy! A Hearthstone App</title>
<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
    <div id="wrapper">  
        <div id="parallax_wrapper">
            <div id="parallax">
                <img src="img/hearthstone.jpg" id="img">
            </div>
        </div>
        <div id="container">
            <div id="heading-wrapper">
                <div id="heading">
                	<a href="index.php">
	                    <h3>Hearthy!</h3>
    	                <h4>Card Tracker!</h4>
                	</a>
                </div>
            </div>
            <div id="hero-wrapper">
                <div id="hero">
                	<ul>
						<li class="button"><a href="druid.php"><img src="img/portrait/druid.jpg"></a></li>
                        <li class="button"><a href="hunter.php"><img src="img/portrait/hunter.jpg"></a></li>
						<li class="button"><a href="mage.php"><img src="img/portrait/mage.jpg"></a></li>
						<li class="button"><a href="paladin.php"><img src="img/portrait/paladin.jpg"></a></li>
						<li class="button"><a href="priest.php"><img src="img/portrait/priest.jpg"></a></li>
                        <li class="button"><a href="rogue.php"><img src="img/portrait/rogue.jpg"></a></li>
						<li class="button"><a href="shaman.php"><img src="img/portrait/shaman.jpg"></a></li>
						<li class="button"><a href="warlock.php"><img src="img/portrait/warlock.jpg"></a></li>
						<li class="button"><a href="warrior.php"><img src="img/portrait/warrior.jpg"></a></li>		
                    </ul>
                </div>
            </div>
            <div id="anchor"></div>
            <?php rare_bar($class);?>
				<div id="content-wrapper">
					<div id="content">