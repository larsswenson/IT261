<!DOCTYPE html>
<html class= "<?php
    if(basename($_SERVER['PHP_SELF']) !== 'daily.php') {
        echo $none;
    } else {
        echo $color;
    }
?>" lang = "en">
  <head>
    <meta charset = "UTF-8" />
    <meta name = "viewport" content = "width = device-width, initial-scale = 1.0" />
    <link href = "css/styles.css" type = "text/css" rel = "stylesheet" />
    <title><?php echo $title; ?></title>
  </head>

  <body class = "<?php echo $body; ?>">
    <header>
      <div class = "header-inner">
        <a href = "index.php">
          <img id="logo" src="images/logo.jpg" alt = "logo"/>
        </a>
        <nav>
          <ul>
            <?php 
              echo make_links($nav);
            ?>
          </ul>
        </nav>
      </div> 
    </header>