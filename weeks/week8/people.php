<?php
include('config.php');

$sql = 'SELECT * FROM people';

// connect to database
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql)
or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

// ask if number of rows > 0

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo '
        <h2>Information about: '.$row['first_name'].'</h2>
            <ul>
                <li><b>First Name:</b>'.$row['first_name'].'</li>
                <li><b>Last Name:</b>'.$row['last_name'].'</li>
                <li><b>Birthdate:</b>'.$row['birthdate'].'</li>
            </ul>
        <p>For more information about '.$row['first_name'].', 
        click <a href = "people-view.php?id = '.$row['people_id'].'">here</a></p>
        ';
    } // end while
} // end if number of rows > 0
