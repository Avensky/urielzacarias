<?php
function heading($headline) {
	echo "<div class=\"header-title\">";
	echo "<h1>";
	echo $headline;
	echo "</h1>";
	echo "</div>";
}

function selected_page($page) {
	if (isset($page)) {
		//chages blue color to white
		echo "<style> ul #" . $page . " {";
		echo "background: rgba(255,255,255,1);";
		echo "background: rgba(255,255,255,1);";
		echo "background: -moz-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(242,252,255,1) 100%);";
		echo "background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(255,255,255,1)), color-stop(47%, rgba(246,246,246,1)), color-stop(100%, rgba(242,252,255,1)));";
		echo "background: -webkit-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(242,252,255,1) 100%);";
		echo "background: -o-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(242,252,255,1) 100%);";
		echo "background: -ms-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(242,252,255,1) 100%);";
		echo "background: linear-gradient(to bottom, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(242,252,255,1) 100%);";
		echo "filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#f2fcff', GradientType=0 );";
		echo "} </style>";
	}
}

function article($link, $heading, $image, $alt, $content) {
	echo "<div class=\"article-wrapper\">";
	echo "<a href=\"{$link}\">";
	echo "<div class=\"article-image-wrapper\">";
	echo "<div class=\"article-image\" style=\"background-image: url('{$image}');\"";
	echo " alt=\"{$alt}\">";
	echo "</div>";
	echo "</div>";
	echo "</a>";
    echo "<div class=\"article-content\">";
    echo "<h2>{$heading}</h2>";
	include("$content");
    echo "</div>";
	echo "</div>";
}

function article2($link, $heading, $image, $alt, $content) {
	echo "<div class=\"article-wrapper\">";
	echo "<a href=\"{$link}\">";
	echo "<div class=\"article-image-wrapper\">";
	echo "<div class=\"article-image\" style=\"background-image: url('{$image}');\"";
	echo " alt=\"{$alt}\">";
	echo "</div>";
	echo "</div>";
	echo "</a>";
    echo "<div class=\"article-content\">";
    echo "<h2>{$heading}</h2>";
	echo "$content";
    echo "</div>";
	echo "</div>";
}

function video($heading, $image, $alt, $content) {
	echo "<div class=\"article-wrapper\">";
	echo "<div class=\"article-image-wrapper\">";
	echo "<iframe class=\"article-image\" src=\"{$image}\">";
	echo "</iframe>";
	echo "</div>";
    echo "<div class=\"article-content\">";
    echo "<h2>{$heading}</h2>";
	include("$content");
    echo "</div>";
	echo "</div>";
}





function blank($blank) {
	if (isset($blank)) {
		//chages blue color to white
		echo "<style> ul #" . $blank . " {";
		echo "background: rgba(255,255,255,1);";
		echo "";
		echo "";
		echo "";
		echo "";
		echo "";
		echo "";
		echo "";
		echo "} </style>";
		
	}
}





















?>