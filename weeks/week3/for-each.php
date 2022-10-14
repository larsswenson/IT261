<?php
// array of wines
echo '<h2>This will be my wine list</h2>';

$wines = array(
    'Cabernet',
    'Merlot',
    'Syrah',
    'Malbec',
    'Red Blend'
);

// for each loop
echo '<ul>';
foreach($wines as $key) {
    echo '<li>'.$key.'</li>';
}
echo '</ul>';

echo '<h2>Movies and shows</h2>'; 
//key value pairs

$shows = array(
    'Apple TV' => ' Severance',
    'Apple TV' => ' For All Mankind',
    'Showtime' => ' City on a Hill',
    'Showtime' => ' Homeland',
    'Movie' => ' Top Gun',
    'HBO' => ' Hacks'
);

echo '<ul>';
foreach($shows as $key => $value) {
    echo '<li><b>'.$key.'</b>;'.$value.'</li>';
}
echo '</ul>';

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

echo '<h2>Time for navigation</h2>';

