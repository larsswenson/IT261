<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency 3 sticky form</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet"/>
</head>
<body>
    <form action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method = "post">
        <fieldset>
            <label>NAME</label>
            <input type = "text" name = "name" value = 
            "<?php if(isset($_POST['name'])) 
                echo htmlspecialchars($_POST['name']); ?>">
            <label>EMAIL</label>
            <input type = "email" name = "email" value = 
            "<?php if(isset($_POST['email'])) 
                echo htmlspecialchars($_POST['email']); ?>">
            <label>How much money do you have?</label>
            <input type = "number" name = "amount" value = 
            "<?php if(isset($_POST['amount'])) 
                echo htmlspecialchars($_POST['amount']); ?>">
            <!-- radio button w/ additional attribute of VALUE -->
            <label>Choose your currency:</label>
                <ul>
                    <li><input type = "radio" name = "currency" value = "0.017" 
                    <?php if(isset($_POST['currency']) && $_POST['currency'] == 0.017) 
                        echo 'checked = "checked"'; ?>> Rubles</li>
                    <li><input type = "radio" name = "currency" value = "0.76" 
                    <?php if(isset($_POST['currency']) && $_POST['currency'] == 0.76) 
                        echo 'checked = "checked"'; ?>> Canadian Dollars</li>
                    <li><input type = "radio" name = "currency" value = "1.15" 
                    <?php if(isset($_POST['currency']) && $_POST['currency'] == 1.15) 
                        echo 'checked = "checked"'; ?>> Pounds</li>
                    <li><input type = "radio" name = "currency" value = "1.00" 
                    <?php if(isset($_POST['currency']) && $_POST['currency'] == 1.00) 
                        echo 'checked = "checked"'; ?>> Euros</li>
                    <li><input type = "radio" name = "currency" value = "0.0074" 
                    <?php if(isset($_POST['currency']) && $_POST['currency'] == 0.0074) 
                        echo 'checked = "checked"'; ?>> Yen</li>
                </ul>
            <label>Choose your banking institution:</label>
                <select name = "bank">
                    <option value = "" NULL 
                    <?php if(isset($_POST['bank']) && $_POST['bank'] == NULL) 
                        echo 'selected = "unselected"'; ?>>Select one:</option>
                    <option value = "Bank of America" 
                    <?php if(isset($_POST['bank']) && $_POST['bank'] == 'Bank of America') 
                        echo 'selected = "selected"'; ?>>Bank of America</option>
                    <option value = "Chase Bank"                     
                    <?php if(isset($_POST['bank']) && $_POST['bank'] == 'Chase Bank') 
                        echo 'selected = "selected"'; ?>>Chase Bank</option>
                    <option value = "Banner Bank"                     
                    <?php if(isset($_POST['bank']) && $_POST['bank'] == 'Banner Bank') 
                        echo 'selected = "selected"'; ?>>Banner Bank</option>
                    <option value = "Wells Fargo"                     
                    <?php if(isset($_POST['bank']) && $_POST['bank'] == 'Wells Fargo') 
                        echo 'selected = "selected"'; ?>>Wells Fargo</option>
                    <option value = "BECU"                     
                    <?php if(isset($_POST['bank']) && $_POST['bank'] == 'Boeing Credit Union') 
                        echo 'selected = "selected"'; ?>>Boeing Credit Union</option>
                </select>
            <input type = "submit" value = "Convert it!">
            <p><a href = "">RESET</a></p>
        </fieldset>
    </form>
    <?php
    // begin server request
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                if(empty($_POST['name'])) {
                    echo '<p class = "error">Please fill out your name!</p>';
            }
                if(empty($_POST['email'])) {
                echo '<p class = "error">Please fill out your email!</p>';
            }
                if(empty($_POST['amount'])) {
                echo '<p class = "error">Please fill out your amount!</p>';
            }
                if(empty($_POST['currency'])) {
                echo '<p class = "error">Please check your currency!</p>';
            }
                if($_POST['bank'] == NULL) {
                echo '<p class = "error">Please select your banking institution!</p>';
            }
        }       if(isset($_POST['name'],
                         $_POST['email'],
                         $_POST['amount'],
                         $_POST['currency'],
                         $_POST['bank'])) {
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $amount = floatval($_POST['amount']);
                            $currency = floatval($_POST['currency']);
                            $bank = $_POST['bank'];
                            $dollars = $amount * $currency;
                if(!empty($name && $email && $amount && $currency && $bank)) {
                echo '<div class="box">
                        <h2>Hello '.$name.',</h2>
                        <p>You now have <b>$'.number_format($dollars, 2).' American dollars</b> and we will
                        email you at <b>'.$email.'</b> with your information and will also deposit your 
                        funds at <b>'.$bank.'!</b></p>
                    </div>';
            }
        }


    ?>
    
</body>
</html>