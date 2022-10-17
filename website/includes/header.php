<?php
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

?>
<!DOCTYPE html>
<html class= "<?php
    if(basename($_SERVER['PHP_SELF']) !== 'daily.php') {
        echo $none;
    } else {
        echo $color;
    }
?>" lang= "en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/styles.css" type="text/css" rel="stylesheet" />
    <title><?php echo $title; ?></title>
  </head>

  <body class = "<?php echo $body; ?>">
    <header>
      <div class="header-inner">
        <a href="index.php">
          <img id="logo" src="images/logo.jpg" alt="logo"/>
        </a>
        <!-- <nav>
          <ul>
            <li><a href="">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Daily</a></li>
            <li><a href="">Project</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Gallery</a></li>
          </ul>
        </nav> -->
        <nav>
          <ul>
            <?php 
            foreach($nav as $key => $value) {
              if(THIS_PAGE == $key) {
                  echo '<li><a style = "color: red" href = "'.$key.'">'.$value.'</a></li>';
              } else {
                  echo '<li><a style = "color: green" href = "'.$key.'">'.$value.'</a></li>';
              }
            }
            ?>
          </ul>
        </nav>
      </div> <!-- end header-inner -->
    </header>