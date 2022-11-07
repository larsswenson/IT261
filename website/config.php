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
  break;

  case 'daily.php':
  $title = 'Daily Electric Guitar Page';  
  $body = 'daily inner';
  $headline = 'Daily Electric Guitar';
  break;

  case 'project.php':
  $title = 'Project Page of our Website Project';  
  $body = 'project inner';
  break;
      
  case 'contact.php':
  $title = 'Contact Page of our Website Project';  
  $body = 'contact inner';
  break;

  case 'gallery.php':
  $title = 'Gallery Page of our Website Project';  
  $body = 'gallery inner';
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

// my form's php

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
    if (empty($_POST['phone'])) {
        $phone_error = 'Please enter your phone number!';
    } else {
        $phone = $_POST['phone'];
    }
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
              $comments)) {
        mail($to, $subject, $body, $headers);
        header('Location: thx.php');
        }
    } // end isset
} // end server request

?>