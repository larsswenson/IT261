<?php 
include('config.php');
include('./includes/header.php');?>
<?php
switch ($today) {
    case 'Monday':
        $guitar = 'Monday: Gibson Les Paul';
        $pic = 'images/lespaul.jpg';
        $alt = 'Gibson Les Paul';
        $content = 'The Gibson Les Paul is a solid body electric guitar that was first sold by the Gibson Guitar Corporation 
        in 1952. The guitar was designed by factory manager John Huis and his team with input from and endorsement by guitarist 
        Les Paul. Its typical design features a solid mahogany body with a carved maple top and a single cutaway, a mahogany set-in 
        neck with a rosewood fretboard, two pickups with independent volume and tone controls, and a stoptail bridge, although 
        variants exist.';
        break;

    case 'Tuesday':
        $guitar = 'Tuesday: Fender Telecaster';
        $pic = 'images/tele.jpg';
        $alt = 'Fender Telecaster';
        $content = 'The Fender Telecaster, colloquially known as the Tele, is an electric guitar produced by Fender. Together 
        with its sister model the Esquire, it is the world\'s first mass-produced, commercially successful solid-body electric
         guitar. Its simple yet effective design and revolutionary sound broke ground and set trends in electric guitar 
         manufacturing and popular music.';
        break;

    case 'Wednesday':
        $guitar = 'Wednesday: Gibson SG';
        $pic = 'images/sg.jpg';
        $alt = 'Gibson SG';
        $content = 'The Gibson SG is a solid-body electric guitar model introduced by Gibson in 1961 as the Gibson Les Paul 
        SG. It remains in production today in many variations of the initial design. The SG (where "SG" refers to Solid 
        Guitar) Standard is Gibson\'s best-selling model of all time.';
        break;

    case 'Thursday':
        $guitar = 'Thursday: Fender Stratocaster';
        $pic = 'images/strat.png';
        $alt = 'Fender Stratocaster';
        $content = 'The Fender Stratocaster, colloquially known as the Strat, is a model of electric guitar designed from 1952 
        into 1954 by Leo Fender, Bill Carson, George Fullerton, and Freddie Tavares. The Fender Musical Instruments Corporation 
        has continuously manufactured the Stratocaster since 1954. It is a double-cutaway guitar, with an extended top "horn" 
        shape for balance.';
        break;

    case 'Friday':
        $guitar = 'Friday: Guild Starfire';
        $pic = 'images/starfire.jpg';
        $alt = 'Guild Starfire';
        $content = 'The Guild Starfire made its way onto the scene in 1960. The Starfire I had one DeArmond single-coil, 24 3/4″ scale, 
        20 fret rosewood fingerboard and a cherry finish. The II model was much the same but included two DeArmond pickups 
        instead of one. The Starfire III saw the addition of a Bigsby tremolo as opposed to the simple hardtail pieces of 
        the previous models.';
        break;

    case 'Saturday':
        $guitar = 'Saturday: Danelectro Shorthorn';
        $pic = 'images/danelectro.jpg';
        $alt = 'Danelectro Shorthorn';
        $content = 'The Danelectro Shorthorn line of guitars are a dual cutaway hollow bodied design, made of Masonite and 
        poplar. The original models were introduced in 1959 to replace the U model guitars, and were in production until the 
        closure of the Danelectro company in 1969.';
        break;

    case 'Sunday':
        $guitar = 'Sunday: Rickenbacker 330';
        $pic = 'images/rickenbacker.jpg';
        $alt = 'Rickenbacker 330';
        $content = 'The Rickenbacker 330 is part of Rickenbacker\'s 300 series of guitars, the series for which Rickenbacker 
        is perhaps best known. The 330 entered the Rickenbacker product line in 1958, though at the time the 300 series of 
        guitars was known as the "Capri" series. It was designed by the German luthier Roger Rossmeisl. The guitar is associated 
        by many players with the jangle-rock sounds of bands from the 1960s and 1980s.';
        break;
}
?>

<div id= "wrapper">

    <main>
        <h1 class= "headline"><?php echo $headline; ?></h1>
        <h2 class= "guitar"><?php echo $guitar; ?></h2>
        <p class= "content"><?php echo $content; ?></p>
        <h2 class= "headline">Daily Electric Guitar</h2>
        <ul>
            <li><a href= "daily.php?today=Monday">Monday</a></li>
            <li><a href= "daily.php?today=Tuesday">Tuesday</a></li>
            <li><a href= "daily.php?today=Wednesday">Wednesday</a></li>
            <li><a href= "daily.php?today=Thursday">Thursday</a></li>
            <li><a href= "daily.php?today=Friday">Friday</a></li>
            <li><a href= "daily.php?today=Saturday">Saturday</a></li>
            <li><a href= "daily.php?today=Sunday">Sunday</a></li>
        </ul>
    </main>

    <aside>
        <img src= "<?php echo $pic; ?>" alt= "<?php echo $alt; ?>" />
    </aside>
    
    <?php include('includes/footer.php'); ?>