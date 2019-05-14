<?php $class="mage"; $class2="common";?>
<?php include('func/function.php');?>
<?php include('inc/header.php');?>

<div class="tier">
<h1>Tier 1: Excellent</h1>
</div>

<div class="tier">
<h1>Tier 2: Great</h1><?php
$card="Pyroblast"; 							card($class, $card);
$card="Piloted_Sky_Golem"; 					card($class2, $card);
$card="Sea_Giant"; 							card($class2, $card);
?></div>

<div class="tier">
<h1>Tier 3: Good</h1><?php 
$card="Big_Game_Hunter"; 					card($class2, $card);
$card="Blood_Knight"; 						card($class2, $card);
$card="Faceless_Manipulator"; 				card($class2, $card);
$card="Grand_Crusader"; 					card($class2, $card);
$card="Kodorider"; 							card($class2, $card);
$card="Recombobulator"; 					card($class2, $card);
?></div>

<div class="tier">
<h1>Tier 4: Above Average</h1><?php 
$card="Arcane_Blast"; 						card($class, $card);
$card="Coldarra_Drake"; 					card($class, $card);
$card="Fel_Reaver"; 						card($class2, $card);
$card="Frost_Giant"; 						card($class2, $card);
$card="Garrison_Commander"; 				card($class2, $card);
$card="Shade_of_Naxxramas";					card($class2, $card);
?></div>

<div class="tier">
<h1>Tier 5: Average</h1><?php
$card="Echo_of_Medivh"; 					card($class, $card);
$card="Spellbender"; 						card($class, $card);
$card="Echoing_Ooze"; 						card($class2, $card);
$card="Molten_Giant"; 						card($class2, $card);
?></div>

<div class="tier">
<h1>Tier 6: Below Average</h1><?php
$card="Crowd_Favorite"; 					card($class2, $card);
$card="Enhance-o_Mechano"; 					card($class2, $card);
$card="Master_of_Ceremonies"; 				card($class2, $card);
$card="Mini-Mage"; 							card($class2, $card);
$card="Murloc_Warleader"; 					card($class2, $card);	
$card="Recruiter"; 							card($class2, $card);
$card="Sideshow_Spelleater"; 				card($class2, $card);
$card="Southsea_Captain"; 					card($class2, $card);
$card="Twilight_Guardian"; 					card($class2, $card);
?></div>

<div class="tier">
<h1>Tier 7: Bad</h1><?php
$card="Ice_Block";							card($class, $card);
$card="Wee_Spellstopper"; 					card($class, $card);
$card="Clockwork_Giant"; 					card($class2, $card);
$card="Doomsayer"; 							card($class2, $card);
$card="Hobgoblin"; 							card($class2, $card);
$card="Junkbot"; 							card($class2, $card);
$card="Mountain_Giant"; 					card($class2, $card);
?></div>

<div class="tier">
<h1>Tier 8: Terrible</h1><?php
$card="Hungry_Crab"; 						card($class2, $card);
?></div>

<?php include('inc/footer.php');?>