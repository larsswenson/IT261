<?php

$name = "Lars";
$first_name = "Lars";
$last_name = "Swenson";
echo "<br>";
$name = "Lars";
$name .= " Swenson"; // .= concatenates strings
echo $name; 
echo "<br>";
$color = 'red';
echo $color;
echo "<br>";
echo 'Lars\' favorite color is '.$color.'.'; 
echo "<br>";
$x = 20;
$x += 5;
echo $x;
echo "<br>";
$x = 100;
$x *= 10;
echo $x;
echo "<br>";
echo "<h3>Our product, quantity, and tax</h3>";
$product = 120; // integer
$quantity = 5;
$total = $product * $quantity;
$total *= 1.097; //float representing tax
echo $total;
echo "<br>";
echo "<h3>Reflect 2 decimal points (floats) number_format function</h3>";
echo "<br>";
$product = 120;
$quantity = 5;
$total = $product * $quantity;
$total *= 1.105;
$total_friendly = number_format($total, 2); // preset function
echo 'We have a total of <b>$'.$total_friendly.'</b>.';
echo "<br>";
$product = 120;
$quantity = 5;
$total = $product * $quantity;
$total *= 1.098;
echo 'We have a total of <b>$'.number_format($total, 2).'</b>.';
echo "<br>";
echo "<h3>2nd preset function is date function</h3>";
echo "<br>";
echo date("Y");
echo "<br>";
echo date("l");
echo "<br>";
echo date("l jS \of F Y h:i:s A");
echo "<br>";
echo date("l jS \of F Y h:i:s A");
echo "<br>";
date_default_timezone_set("America/Los Angeles");
echo "<br>";
echo date("l jS \of F Y h:i:s A");
echo "<br>";
echo "<h3>Arrays</h3>";
echo "<br>";
echo "<h4>Below is an indexed array</h4>";
// arrays can't be echoed
echo "<br>";
$fruit[] = 'bananas';
$fruit[] = 'cherries';
$fruit[] = 'melon';
$fruit[] = 'kiwi';
$fruit[] = 'oranges';
$fruit[] = 'apples';
echo "<br>";
echo $fruit[2];
echo "<br>";
$fruit = array(
    'bananas',
    'cherries',
    'melon',
    'kiwi',
    'oranges',
    'apples'
);
echo "<br>";
print_r($fruit); // print_r works for arrays
echo "<br>";
var_dump($fruit); // var_dump works for arrays
echo "<br>";
echo "<h3>Associative arrays</h3>";
echo "<br>";
$nav = array(
    'index.php' => 'Home', // index is key, home is value (key/value pairs)
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'
);
echo "<pre>";
var_dump($nav);
echo "</pre>";

