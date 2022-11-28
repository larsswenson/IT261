<?php
ob_start();

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
  
  case 'index.php':
  $title = 'Home Page of our Website Project';  
  $body = 'home';
  break;

  case 'about.php':
  $title = 'About Page of our Website Project';  
  $body = 'about inner';
  $headline = 'About Page of our Website Project';
  break;

  case 'daily.php':
  $title = 'Daily Electric Guitar Page';  
  $body = 'daily inner';
  $headline = 'Daily Electric Guitar';
  break;

  case 'project.php':
  $title = 'Project Page of our Website Project';  
  $body = 'project inner';
  $headline = 'Project Page of our Website Project';
  break;

  case 'project-view.php':
  $title = 'Project View Page of our Website Project';  
  $body = 'project-view inner';
  $headline = 'Project View Page of our Website Project';
  break;
      
  case 'contact.php':
  $title = 'Contact Page of our Website Project';  
  $body = 'contact inner';
  break;

  case 'gallery.php':
  $title = 'Gallery Page of our Website Project';  
  $body = 'gallery inner';
  break;

  case 'thx.php':
    $title = 'Thank You Page of our Website Project';
    $body = 'thx inner';
    $headline = 'Thank you...';
    break;

};

if (isset($_GET['today'])) {
  $today = $_GET['today'];
} else {
  $today = date('l');
}

switch ($today) {
  case 'Monday':
      $color = 'pink';
      $none = '';
      break;
  case 'Tuesday':
      $color = 'orange';
      $none = '';
      break;
  case 'Wednesday':
      $color = 'lightblue';
      $none = '';
      break;
  case 'Thursday':
      $color = 'peachpuff';
      $none = '';
      break;
  case 'Friday':
      $color = 'violet';
      $none = '';
      break;
  case 'Saturday':
      $color = 'lightgreen';
      $none = '';
      break;
  case 'Sunday':
      $color = 'cyan';
      $none = '';
      break;
}

//navigational array
$nav = array(
  'index.php' => 'Home',
  'about.php' => 'About',
  'daily.php' => 'Daily',
  'project.php' => 'Project',
  'contact.php' => 'Contact',
  'gallery.php' => 'Gallery'
);

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

// email form
$first_name = '';
$last_name = '';
$email = '';
$phone = '';
$gender = '';
$tacos = '';
$salsas = '';
$comments = '';
$privacy = '';

$first_name_error = '';
$last_name_error = '';
$email_error = '';
$phone_error = '';
$gender_error = '';
$tacos_error = '';
$salsas_error = '';
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
    if(empty($_POST['phone'])) { // if empty, type in your number
        $phone_error = 'Your phone number please!';
    } elseif(array_key_exists('phone', $_POST)){
    if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
        { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
        $phone_error = 'Invalid format!';
    } else {
        $phone = $_POST['phone'];
    }
    }
    if (empty($_POST['gender'])) {
        $gender_error = 'Please select your gender!';
    } else {
        $gender = $_POST['gender'];
    }
    if (empty($_POST['tacos'])) {
        $tacos_error = 'Please select your tacos!';
    } else {
        $tacos = $_POST['tacos'];
    }
    if ($_POST['salsas'] == NULL) {
        $salsas_error = 'Please select your salsa!';
    } else {
        $salsas = $_POST['salsas'];
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

// tacos function
function my_tacos($tacos) {
    $my_return = '';
        if(!empty($_POST['tacos'])) {
    $my_return = implode(', ', $_POST['tacos']);
    } else {
        $tacos_error = 'Please select your tacos!';
    }
    return $my_return;
} // end function

    if(isset(
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['email'],
        $_POST['phone'],
        $_POST['gender'],
        $_POST['tacos'],
        $_POST['salsas'],
        $_POST['comments'],
        $_POST['privacy']
    )) {
        $to = 'szemeo@mystudentswa.com';
        $subject = 'Test Email on ' .date('m/d/y, h i A');
        $body = '
            First name: '.$first_name.' '.PHP_EOL.'
            Last name: '.$last_name.' '.PHP_EOL.'
            Email: '.$email.' '.PHP_EOL.'
            Phone: '.$phone.' '.PHP_EOL.'
            Gender: '.$gender.' '.PHP_EOL.'
            Tacos: '.my_tacos($tacos).' '.PHP_EOL.'
            Salsas: '.$salsas.' '.PHP_EOL.'
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
              $tacos && 
              $salsas && 
              $comments) &&
              preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {
        mail($to, $subject, $body, $headers);
        header('Location: thx.php');
        }
    } // end isset
}// end server request

// random photos
$photos[0] = 'photo1';
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';

function rand_pics($photos) {
    $i = rand(0, 4);
    $selected_image = ''. $photos[$i].'.jpg';
    echo '<img src = "./images/'.$selected_image.'" alt = "'.$photos[$i].'">';      
}

// image gallery
$ramones['Joey_Ramone'] = 'joeyr_Lead Singer of The Ramones.';
$ramones['Johnny_Ramone'] = 'johnn_Guitarist of The Ramones.';
$ramones['Dee_Dee_Ramone'] = 'deede_Bassist of The Ramones.';
$ramones['Tommy_Ramone'] = 'tommy_Drummer of The Ramones.';
// variable    key           value
// $name                    $image


// database 
ob_start();  
define('DEBUG', 'TRUE');

include('credentials.php');

function myError($myFile, $myLine, $errorMsg)
{
    if (defined('DEBUG') && DEBUG) {
        echo 'Error in file: <b> ' . $myFile . ' </b> on line: <b> ' . $myLine . ' </b>';
        echo 'Error message: <b> ' . $errorMsg . '</b>';
        die();
    } else {
        echo ' Houston, we have a problem!';
        die();
    }
}
?>

