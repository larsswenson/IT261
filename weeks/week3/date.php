<?php
// date function and if statement

echo date('Y');
echo '<br>';
echo date('l jS \of F Y h:i:s A');
echo '<br>';
date_default_timezone_set('America/Los_Angeles');
echo '<br>';
echo date('l jS \of F Y h:i:s A');
echo '<br>';
$name = 'Lars';
$our_time = date('H:i A');
echo $our_time;
echo '<br>';
// if the time is less than or equal to 11, it is morning
// if the time is less than or equal to 17(5PM), it is afternoon
// else means it is evening
if($our_time <= 11) {
    echo '<h2 style = "color: yellow">Good morning, '.$name.'!</h2>
    <img src = "./images/sun.jpg" alt = "sun">
    <p>It\'s time to get up!</p>';
} elseif($our_time <= 17) {
    echo '<h2 style = "color: red">Good afternoon, '.$name.'!</h2>
    <img src = "./images/afternoon.jpg" alt = "afternoon">';
} else {
    echo '<h2 style = "color: blue">Good evening, '.$name.'!</h2>
    <img src = "./images/evening.jpg" alt = "evening">';
}

