<?php
ob_start();

$first_name = '';
$last_name = '';
$email = '';
$phone = '';
$gender = '';
$wines = '';
$regions = '';
$comments = '';
$privacy = '';

$first_name_error = '';
$last_name_error = '';
$email_error = '';
$phone_error = '';
$gender_error = '';
$wines_error = '';
$regions_error = '';
$comments_error = '';
$privacy_error = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['first_name'])) {
        $first_name_error = 'Please enter your first name!';
    } else {
        $first_name = $_POST['first_name'];
    }
    if (empty($_POST['last_name'])) {
        $last_name_error = 'Please enter your last name!';
    } else {
        $last_name = $_POST['last_name'];
    }
    if (empty($_POST['email'])) {
        $email_error = 'Please enter your email!';
    } else {
        $email = $_POST['email'];
    }
    /*if (empty($_POST['phone'])) {
        $phone_error = 'Please enter your phone number!';
    } else {
        $phone = $_POST['phone'];
    }*/
    if(empty($_POST['phone'])) { // if empty, type in your number
        $phone_error = 'Your phone number please!';
    } elseif(array_key_exists('phone', $_POST)){
    if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
        { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
        $phone_error = 'Invalid format!';
    } else{
        $phone = $_POST['phone'];
    } // end else
    } // end main if
    if (empty($_POST['gender'])) {
        $gender_error = 'Please select your gender!';
    } else {
        $gender = $_POST['gender'];
    }
    if (empty($_POST['wines'])) {
        $wines_error = 'What, no wines?';
    } else {
        $wines = $_POST['wines'];
    }
    if (empty($_POST['comments'])) {
        $comments_error = 'Please share your thoughts with us!';
    } else {
        $comments = $_POST['comments'];
    }
    if (empty($_POST['privacy'])) {
        $privacy_error = 'Please agree to our privacy policy!';
    } else {
        $privacy = $_POST['privacy'];
    }
    if ($_POST['regions'] == NULL) {
        $regions_error = 'Please select your region!';
    } else {
        $regions = $_POST['regions'];
    }
// wines function
function my_wines($wines) {
    $my_return = '';
        if(!empty($_POST['wines'])) {
    $my_return = implode(', ', $_POST['wines']);
    } else {
        $wines_error = 'Please select your wines!';
    }
    return $my_return;
} // end function

    if(isset(
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['email'],
        $_POST['phone'],
        $_POST['gender'],
        $_POST['wines'],
        $_POST['regions'],
        $_POST['comments'],
        $_POST['privacy']
    )) {
        $to = 'lars.swenson@seattlecolleges.edu';
        $subject = 'Test Email on ' .date('m/d/y, h i A');
        $body = '
            First name: '.$first_name.' '.PHP_EOL.'
            Last name: '.$last_name.' '.PHP_EOL.'
            Email: '.$email.' '.PHP_EOL.'
            Phone: '.$phone.' '.PHP_EOL.'
            Gender: '.$gender.' '.PHP_EOL.'
            Wines: '.my_wines($wines).' '.PHP_EOL.'
            Regions: '.$regions.' '.PHP_EOL.'
            Comments: '.$comments.' '.PHP_EOL.'
        ';

    $headers = array(
        'From' => 'noreply@mystudentswa.com'
    );
        
    if(!empty($first_name && 
              $last_name && 
              $email && 
              $phone && 
              $gender && 
              $wines && 
              $regions && 
              $comments) &&
              preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {
        mail($to, $subject, $body, $headers);
        header('Location: thx.php');
        }
    } // end isset
} // end server request

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 3 in Week 7 - Phone Validation!</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <form action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method = "post">
        <fieldset>
            <legend>Contact Lars</legend>
                <label>First Name:</label>
                    <input type = "text" name = "first_name" value = 
                        "<?php if(isset($_POST['first_name'])) 
                            echo htmlspecialchars($_POST['first_name']); ?>">
                    <span class = "error"><?php echo $first_name_error; ?></span>
                <label>Last Name:</label>
                    <input type = "text" name = "last_name" value = 
                        "<?php if(isset($_POST['last_name'])) 
                            echo htmlspecialchars($_POST['last_name']); ?>">
                    <span class = "error"><?php echo $last_name_error; ?></span>
                <label>Email:</label>
                    <input type = "email" name = "email" value = 
                        "<?php if(isset($_POST['email'])) 
                            echo htmlspecialchars($_POST['email']); ?>"> 
                        <span class = "error"><?php echo $email_error; ?></span>
                <label>Gender:</label>
                    <ul>
                        <li>
                            <input type = "radio" name = "gender" value = "female"
                                <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female')
                            echo 'checked = "checked"'; ?>> Female
                        </li>
                        <li>
                            <input type = "radio" name = "gender" value = "male"
                                <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male')
                            echo 'checked = "checked"'; ?>> Male
                        </li>
                        <li>
                            <input type = "radio" name = "gender" value = "neither"
                                <?php if(isset($_POST['gender']) && $_POST['gender'] == 'neither')
                            echo 'checked = "checked"'; ?>> Neither
                        </li>
                    </ul>
                    <span class = "error"><?php echo $gender_error; ?></span>
                <label>Phone:</label>
                    <input type = "tel" name = "phone" placeholder = "xxx-xxx-xxxx" value = 
                        "<?php if(isset($_POST['phone'])) 
                            echo htmlspecialchars($_POST['phone']); ?>">
                    <span class = "error"><?php echo $phone_error; ?></span>
                <label>Favorite Wines:</label>
                    <ul>
                        <li>
                            <input type = "checkbox" name = "wines[]" value = "cab" 
                                <?php if(isset($_POST['wines']) && in_array('cab', $wines)) 
                            echo 'checked = "checked"'; ?>> Cabernet
                        </li>
                        <li>
                            <input type = "checkbox" name = "wines[]" value = "merlot" 
                                <?php if(isset($_POST['wines']) && in_array('merlot', $wines)) 
                            echo 'checked = "checked"'; ?>> Merlot
                        </li>
                        <li>
                            <input type = "checkbox" name = "wines[]" value = "syrah" 
                                <?php if(isset($_POST['wines']) && in_array('syrah', $wines)) 
                            echo 'checked = "checked"'; ?>> Syrah
                        </li>
                        <li>
                            <input type = "checkbox" name = "wines[]" value = "red_blend" 
                                <?php if(isset($_POST['wines']) && in_array('red_blend', $wines)) 
                            echo 'checked = "checked"'; ?>> Red Blend
                        </li>
                        <li>
                            <input type = "checkbox" name = "wines[]" value = "malbec" 
                                <?php if(isset($_POST['wines']) && in_array('malbec', $wines)) 
                            echo 'checked = "checked"'; ?>> Malbec
                        </li>
                    </ul>
                    <span class = "error"><?php echo $wines_error; ?></span>
                <label>Regions:</label>
                    <select name = "regions">
                        <option value = "" NULL <?php if(isset($_POST['regions']) && $_POST['regions'] == NULL)
                            echo 'selected = "unselected"'; ?>> Select One:
                        </option>
                        <option value = "nw" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'nw')
                            echo 'selected = "selected"'; ?>> Northwest
                        </option>
                        <option value = "sw" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'sw')
                            echo 'selected = "selected"'; ?>> Southwest
                        </option>
                        <option value = "mw" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'mw')
                            echo 'selected = "selected"'; ?>> Midwest
                        </option>
                        <option value = "ec" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'ec')
                            echo 'selected = "selected"'; ?>> East Coast
                        </option>
                        <option value = "ne" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'ne')
                            echo 'selected = "selected"'; ?>> Northeast
                        </option>
                    </select><br>
                    <span class = "error"><?php echo $regions_error; ?></span>
                <label>Comments:</label>
                    <textarea name = "comments"><?php if(isset($_POST['comments'])) 
                            echo htmlspecialchars($_POST['comments']); ?></textarea><br>
                    <span class = "error"><?php echo $comments_error; ?></span>
                <label>Privacy:</label>
                    <ul>
                        <li>
                            <input type = "radio" name = "privacy" value = "yes" 
                                <?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'yes')
                            echo 'checked = "checked"'; ?>> Privacy
                        </li>
                    </ul>  
                    <span class = "error"><?php echo $privacy_error; ?></span>
                <input type = "submit" value = "Send it!"> 
                <input type = "button" onclick = "window, location.href = 
            '<?php echo $_SERVER['PHP_SELF'] ;?>'" value = "Reset">
        </fieldset>
    </form>
</body>
</html>