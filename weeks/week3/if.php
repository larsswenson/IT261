<?php
// if statements
// if else statements
// if elseif statement

$temp = 60;

if($temp == 60) {
    echo 'It is a semi-warm day!';
} else {
    echo 'It may be getting warmer!';
}
echo '<br>';

$new_temp = 81;
if($new_temp <= 60) {
    echo 'Not a very warm day!';
} elseif($new_temp <= 70) {
    echo 'It\'s getting warmer!';
} elseif($new_temp <= 80) {
    echo 'We might be going to the beach!';
} else {
    echo 'We will <b>definitely</b> go to the beach!';
} 
echo '<br>';

echo '<h2>This exercise will be about a salary, a bonus and sales</h2>';
// a salary of $95,000 - annual
// sales above $100,000 makes a bonus
// $100,000 = 5%
// $120,000 = 10%
// $140,000 = 15%
// $150,000 = 20%

$salary = 95000;
$sales = 148000;
// if sales are equal to or less than $99,999 no bonus
// if sales are equal to or less than $119,999 5% bonus
// if sales are equal to or less than $139,999 10% bonus
// if sales are equal to or less than $149,999 15% bonus
if($sales <= 99999) {
    echo 'Sorry you didn\'t make your bonus.';
} elseif($sales <= 119999) {
    $salary *= 1.05;
    echo '$'.number_format($salary, 2).' dollars'; 
} elseif($sales <= 139999) {
    $salary *= 1.10;
    echo '$'.number_format($salary, 2).' dollars';
} elseif($sales <= 149999) {
    $salary *= 1.15;
    echo '$'.number_format($salary, 2).' dollars';
} else {
        $salary *= 1.20;
    echo 'Awesome! You made 20% bonus! Your annual salary including bonus totals $'.number_format($salary, 2).' dollars';
}