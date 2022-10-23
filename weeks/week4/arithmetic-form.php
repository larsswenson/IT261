<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Form</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet"/>
</head>
<body>
    <h1>Arithmetic Form</h1>
    <form action = "" method = "post">
        <fieldset>
            <label>NAME</label>
            <input type = "text" name = "name">
            <label>PHONE</label>
            <input type = "tel" name = "phone">
            <label>How many LATTES?</label>
            <input type = "number" name = "lattes">
            <label>How many CAPPUCCINOS?</label>
            <input type = "number" name = "cappuccinos">
            <label>How many AMERICANOS?</label>
            <input type = "number" name = "americanos">
            <label>SPECIAL REQUESTS</label>
            <textarea name = "comments"></textarea>
            <input type = "submit" value = "Send my order!">
        </fieldset>
    </form>
    <p><a href = "">RESET</a></p>
    <?php

// date/time variables
    date_default_timezone_set('America/Los_Angeles');
    $our_time = date('H:i');

// begin isset
    if(isset($_POST['name'],
             $_POST['phone'],
             $_POST['lattes'],
             $_POST['cappuccinos'],
             $_POST['americanos'],
             $_POST['comments'])) {

// in case fields empty
    if(empty($_POST['name'] &&
             $_POST['phone'] &&
             $_POST['lattes'] &&
             $_POST['cappuccinos'] && 
             $_POST['americanos'] &&
             $_POST['comments'])) {
                echo '<p class = "error">Please fill out the fields!</p>';
               } else {
                    $name = $_POST['name'];
                    $phone = $_POST['phone'];
                    $lattes = $_POST['lattes'];
                    $cappuccinos = $_POST['cappuccinos'];
                    $americanos = $_POST['americanos'];
                    $comments = $_POST['comments'];
                    $total = $lattes + $cappuccinos + $americanos;

// if/elseif re: time
            if($our_time <= 11) {
                    $our_time = "Good morning";
               } elseif($our_time <= 17) {
                    $our_time = "Good afternoon";
               } else {
                    $our_time = "Good evening";
               }
                echo 
                    '<div class = "box">
                    <h2>'.$our_time.' '.$name.'!</h2>
                    <p>We have confirmed your order at this <b>phone number:</b> '.$phone.' 
                    <br>Your <b>total</b> is '.$total.' beverages:</p>
                    <ul>
                        <li>'.$lattes.' lattes</li>
                        <li>'.$cappuccinos.' cappuccinos</li>
                        <li>'.$americanos.' americanos</li>
                    </ul>
                    <p>Your <b>special request:</b> '.$comments.'</p>
                    <br>
                    <p><b>Thank you for choosing our establishment!</b></p>
                    </div>';
            }
        } //end isset
    ?>
</body>
</html>