<?php
// coffee exercise

//$variable = 'This is our variable';
/*if(isset($variable)) {
    echo 'Variable has been set';
} else 
    echo 'Variable has not been set';
echo '<br>';

if(isset($_GET['today'])) {
    echo 'Today has been set';
} else {
    echo 'NOT!';
}*/


if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l'); 
}

switch($today) {
    case 'Friday':
    $coffee = '<h2>Friday is our pumpkin spice latte day</h2>';
    $pic = 'pumpkin.jpg';
    $alt = 'Pumpkin Spice Latte';
    $content = '<p><b>The Pumpkin Spice Latte</b> is a coffee drink made with a mix of traditional autumn spice flavors
    (cinnamon, nutmeg, and clove), steamed milk, espresso, and often sugar, topped with whipped cream and pumpkin pie 
    spice.</p>';
break;
    case 'Saturday':
    $coffee = '<h2>Saturday is our green tea latte day</h2>';
    $pic = 'greentea.jpg';
    $alt = 'Green Tea Latte';
    $content = '<p><b>The Green Tea Latte</b> is simply a latte made with green tea instead of 
    espresso.</p>';
break;
    case 'Sunday':
    $coffee = '<h2>Sunday is our regular joe day</h2>';
    $pic = 'joe.png';
    $alt = 'Regular Joe';
    $content = '<p><b>Regular Joe</b> is just regular medium roast brewed coffee.</p>';
break;
    case 'Monday':
    $coffee = '<h2>Monday is our regular latte day</h2>';
    $pic = 'latte.jpg';
    $alt = 'Regular Latte';
    $content = '<p>The Latte<b></b> or caffè latte is a milk coffee that is a made up of one or two shots of 
    espresso, steamed milk and a final, thin layer of frothed milk on top. If you don\'t drink dairy milk, you can easily 
    swap it for a plant-based alternative like soy, oat or coconut milk.</p>';
break;
    case 'Tuesday':
    $coffee = '<h2>Tuesday is our doppio day</h2>';
    $pic = 'doppio.jpg';
    $alt = 'Doppio';
    $content = '<p><b>The Doppio</b> is a double shot, extracted using a double handle and basket. This results in 60 ml of 
    drink, double the amount of a single shot espresso. More commonly called a standard double. Doppio is Italian, meaning
     "double".</p>';
break;
    case 'Wednesday':
    $coffee = '<h2>Wednesday is our Caramel Latte day</h2>';
    $pic = 'caramel.jpg';
    $alt = 'Caramel Latte';
    $content = '<p><b>The Caramel Latte</b> is a coffee drink that contains espresso coffee, steamed and frothed milk, and
     caramel sauce. The espresso and milk are combined, and then the caramel syrup is mixed in.</p>';
break;
    case 'Thursday':
    $coffee = '<h2>Thursday is our Cappuccino day</h2>';
    $pic = 'cap.jpg';
    $alt = 'Cappuccino';
    $content = '<p><b>The Cappuccino</b> is the perfect balance of espresso, steamed milk and foam. This coffee is all 
    about the structure and the even splitting of all elements into equal thirds. An expertly made cappuccino should be 
    rich, but not acidic and have a mildly sweet flavouring from the milk.</p>';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Classwork Exercise</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        #wrapper {
            width: 940px;
            margin: 20px auto;
        }
        h1, h2, img {
            margin-bottom: 10px;
        }
        p {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
   <div id = "wrapper">
        <h1>Switch classwork exercise</h1>
        <?php
        echo $coffee;
        ?>
        <img src="./images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
        <?php echo $content; ?>
        <h2>Check out our daily specials!</h2>
        <ul>
            <li><a href="switch.php?today=Sunday">Sunday</a></li>
            <li><a href="switch.php?today=Monday">Monday</a></li>
            <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
            <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
            <li><a href="switch.php?today=Thursday">Thursday</a></li>
            <li><a href="switch.php?today=Friday">Friday</a></li>
        </ul>
   </div>
    <!--end wrapper-->
</body>
</html>