<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Calculator</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h1>Travel Calculator</h1>
    <form action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "post">
        <fieldset>
            <label>Name:</label>
            <input type = "text" name = "name" value = 
            "<?php if(isset($_POST['name'])) 
                echo htmlspecialchars($_POST['name']); ?>">
            <label>Total miles driving?</label>
            <input type = "number" name = "miles" value = 
            "<?php if(isset($_POST['miles'])) 
                echo htmlspecialchars($_POST['miles']); ?>">
            <label>How fast do you typically drive?</label>
            <input type = "number" name = "speed" value = 
            "<?php if(isset($_POST['speed'])) 
                echo htmlspecialchars($_POST['speed']); ?>">
            <label>How many hours per day do you plan on driving?</label>
            <input type = "number" name = "hours" value = 
            "<?php if(isset($_POST['hours'])) 
                echo htmlspecialchars($_POST['hours']); ?>">
            <label>Price of gas</label>
                <ul>
                    <li><input type = "radio" name = "amount" value= "3.00"
                    <?php if(isset($_POST['amount']) && $_POST['amount'] == '3.00') 
                        echo 'checked = "checked"'; ?>> $3.00</li>
                    <li><input type = "radio" name = "amount" value= "3.50"
                    <?php if(isset($_POST['amount']) && $_POST['amount'] == '3.50') 
                        echo 'checked = "checked"'; ?>> $3.50</li>
                    <li><input type= "radio" name = "amount" value= "4.00"
                    <?php if(isset($_POST['amount']) && $_POST['amount'] == '4.00') 
                        echo 'checked = "checked"'; ?>> $4.00</li>
                </ul>
            <label>Fuel Efficiency</label>
                <select name = "efficiency">
                    <option value = "" NULL
                    <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == NULL) 
                        echo 'selected = "unselected"'; ?>>Select fuel efficiency</option>
                    <option value = "10"
                    <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == '10') 
                        echo 'selected = "selected"'; ?>>Terrible @ 10mpg</option>
                    <option value = "20"
                    <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == '20') 
                        echo 'selected = "selected"'; ?>>Getting Better @ 20mpg</option>
                    <option value = "30"
                    <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == '30') 
                        echo 'selected = "selected"'; ?>>Good @ 30mpg</option>
                    <option value = "40"
                    <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == '40') 
                        echo 'selected = "selected"'; ?>>Great @ 40mpg</option>
                </select>
            <input type= "submit" value = "Calculate">
            <p><a href = "">Reset</a></p>
        </fieldset>
    </form>
<?php // begin server request
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (empty($_POST['name'])) {
            echo '<p class = "error">Please fill out your name!</p>';
    }
        if (empty($_POST['miles'])) {
            echo '<p class = "error">Please fill out your total mileage!</p>';
    }
        if (empty($_POST['speed'])) {
        echo '<p class = "error">Please fill out how fast you will be driving!</p>';
    }
        if (empty($_POST['hours'])) {
            echo '<p class="error">Please fill out how many hours of driving per day!</p>';
    }
        if (empty($_POST['amount'])) {
            echo '<p class="error">Please check the gas price!</p>';
    }
        if ($_POST['efficiency'] == NULL) {
            echo '<p class="error">Please select the efficiency of the vehicle!</p>';
    }
        if (isset($_POST['name'],
                  $_POST['miles'],
                  $_POST['hours'],
                  $_POST['speed'],
                  $_POST['amount'],
                  $_POST['efficiency'])) {
                        $name = $_POST['name'];
                        $miles = intval($_POST['miles']);
                        $speed = intval($_POST['speed']);
                        $hours = intval($_POST['hours']);
                        $amount = floatval($_POST['amount']);
                        $efficiency = intval($_POST['efficiency']);
            if($_POST['efficiency'] > 0) {           
                        $total_hours = $miles / $speed;
                        $days = $total_hours / $hours;
                        $gallon = intval($miles) / intval($efficiency);
                        $cost = $gallon * $amount;
            }
            if ($hours == 0) {
                $hours = 1;
            }
            if(!empty($name && $miles && $hours && $speed && $amount && $efficiency)) {
                echo '<div class = "box">
                    <h2>Results:</h2>
                    <p>Hello <b>'.$name.'</b>, you will be traveling a total of 
                    <b>'.number_format($total_hours, 2).'</b> hours, 
                    taking <b>'.number_format($days).'</b> days.</p>
                    <p>You will be using <b>'.$gallon.'</b> gallons of gas, 
                    costing you <b>$'.number_format($cost, 2).'</b> dollars.</p>
                </div>';
            }
        } 

    }
?>
</body>
</html>