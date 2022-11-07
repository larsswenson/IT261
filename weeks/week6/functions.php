<?php
// function page

function sayHello() {
    echo 'Hello PHP FUNCTION!';
}
sayHello();

    echo '<h2>Arithmetic Problems - Cube</h2>';
function cube($num) {
    $cubing = $num * $num * $num;
    echo $cubing;
}
cube(5);

    echo '<h2>Area - Length * Width</h2>';
function area($length, $width) {
    $get_area = $length * $width;
        return $get_area;
}
$get_area = area(5, 12);
    echo $get_area;

    echo '<h2>Celsius Converter</h2>';
function celsius_conv($cel) {
    $far = ($cel * 9/5) + 32;
    echo $far;
}
celsius_conv(100);

    echo '<h2>Dealing with Arrays - Indexed</h2>';
function area_volume($length, $width, $height) {
    $area = $length * $width;
    $volume = $length * $width * $height;
        return array($area, $volume);
}
$my_array = area_volume(10, 5, 20);
    echo '<b>This is my area:</b> '.$my_array[0].'<br>';
    echo '<b>This is my volume:</b> '.$my_array[1].'<br>';

    echo '<h2>List Function</h2>';
function area_volume2($length, $width, $height) {
    $area = $length * $width;
    $volume = $length * $width * $height;
        return array($area, $volume);
    }
list($area, $volume) = area_volume2(5, 10, 30);
    echo '<b>This is my area:</b> '.$area.'<br>';
    echo '<b>This is my volume:</b> '.$volume.'<br>';

    echo '<h2>Navigation</h2>';
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

function make_links($nav) {
    $my_return = '';
        foreach($nav as $key => $value) {
            if(THIS_PAGE == $key) {
                $my_return .= '<li><a class = "current" href = "'.$key.'">'.$value.'</a></li>';
            } else {
                $my_return .= '<li><a href = "'.$key.'">'.$value.'</a></li>';
        } 
    } // end foreach
    return $my_return;
} // end function
    echo '<h2>Navigation Created with a Function</h2>';
    echo make_links($nav);

    echo '<h2>Implode Function</h2>';
$cars = array('toyota', 'ford', 'subaru', 'audi', 'bmw', 'mercedes', 'lexus');
$my_cars = implode(', ', $cars);
    echo $my_cars;

    echo '<h2>Wine Logic</h2>
<p>If POST wines is not empty, implode POST wines & create new variable $my_wines</p>    
';
