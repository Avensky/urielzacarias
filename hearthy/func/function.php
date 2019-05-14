<?php

function card($classes, $card) {
	echo "<div class=\"card-wrapper\">";
	echo "<li><img src=\"img/{$classes}/{$card}.png\"></li>";
	echo "</div>";
}

function rare_bar($class) {
	echo "<div id=\"nav-wrapper\">";
	echo "<div id=\"nav\">";
	echo "<ul>";
	echo "<li class=\"li\" id=\"common\"><a href=\"{$class}.php\">Common</a></li>";
	echo "<li class=\"li\" id=\"rare\"><a href=\"{$class}_rare.php\">Rare</a></li>";
	echo "<li class=\"li\" id=\"epic\"><a href=\"{$class}_epic.php\">Epic</a></li>";
	echo "<li class=\"li\" id=\"legendary\"><a href=\"{$class}_legendary.php\">Legendary</a></li>";
	echo "</ul>";
    echo "</div>";
	echo "</div>";
}


?>