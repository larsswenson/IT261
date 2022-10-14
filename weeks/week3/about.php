<?php
// array of wines

echo '<h2>Time for navigation</h2>';
//key value pairs

$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'
);

echo '<ul>';
foreach($nav as $key => $value) {
    echo '<li><a href = "'.$key.'">'.$value.'</a></li>';
}
echo '</ul>';

echo '<h2>Navigation will display a different color when on the index.php page</h2>';

// define a constant
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

//for each with if statement
echo '<ul>';
foreach($nav as $key => $value) {
    if(THIS_PAGE == $key) {
        echo '<li><a style = "color: red" href = "'.$key.'">'.$value.'</a></li>';
    } else {
        echo '<li><a style = "color: green" href = "'.$key.'">'.$value.'</a></li>';
    }
}
// end foreach
echo '</ul>';


