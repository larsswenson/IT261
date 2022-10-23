<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celsius Document</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet"/>
</head>
<body>
    <h1>Celsius Form Converter</h1>
    <form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "post">
        <fieldset>
            <label>Enter Celsius value:</label>
            <input type = "number" name = "cel">
            <input type = "submit" name = "Convert it!">
        </fieldset>
        <p><a href = "">RESET</a></p>
    </form>
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['cel'])) {
        $cel = $_POST['cel'];
// new integer conversion function:
        $cel_int = intval($cel);
        $far = ($cel_int * 9/5) + 32;
// if no value is entered:
    if($cel == NULL) {
        echo '<p class = "error">Please enter the Celsius value!</p>';
    } elseif($far <= 32) {
        echo '<p>'.$cel_int.' degrees Celsius equals '.$far.' degrees Fahrenheit<br>
        and it is pretty cold out!</p>';
    } elseif($far <= 45) {
            echo '<p>'.$cel_int.' degrees Celsius equals '.$far.' degrees Fahrenheit<br>
            and it is getting warmer!</p>';  
    } elseif($far <= 60) {
        echo '<p>'.$cel_int.' degrees Celsius equals '.$far.' degrees Fahrenheit<br>
        and it is sweater weather!</p>';  
    } elseif($far <= 75) {
        echo '<p>'.$cel_int.' degrees Celsius equals '.$far.' degrees Fahrenheit<br>
        and we\'re going to the park!</p>';  
    } elseif($far <= 90) {
        echo '<p>'.$cel_int.' degrees Celsius equals '.$far.' degrees Fahrenheit<br>
        and we may be going to the beach!</p>';  
    } else {
        echo '<p>'.$cel_int.' degrees Celsius equals '.$far.' degrees Fahrenheit<br>
        and we are at the beach!</p>';
    }

    } // end isset
} // end post

?>
</body>
</html>