<?php

$book = 'Handmaid\'s Tale';
$author = 'Margaret Atwood';
$character = 'June';
$actor = 'Elisabeth Moss';

$content = <<< BYPASS
One of my favorite books is the $book, written by $author, and is presently a miniseries on HULU. Hulu's viewing audience is
extremely excited about the miniseries and looks forward to the 5th season of the award-winning "$book!" 
$actor's rendition as $character is right on! I liked the show's first 2 seasons!
BYPASS;

echo $content;
?>
