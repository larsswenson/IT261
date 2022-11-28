<?php
include('config.php');
include('./includes/header.php');
?>
<div id = "wrapper">
<main>
    <h1>French Singers of the 1960s!</h1>
<?php
$sql = 'SELECT * FROM singers';
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
or die(myError(__FILE__,__LINE__,mysqli_connect_error()));
$result = mysqli_query($iConn, $sql)
or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    echo '
    <h2>Information about: '.$row['first_name'].'</h2>
        <ul>
            <li><b>First Name: </b>'.$row['first_name'].'</li>
            <li><b>Last Name: </b>'.$row['last_name'].'</li>
            <li><b>Birthdate: </b>'.$row['birthdate'].'</li>
        </ul>
    <p>For more information about '.$row['first_name'].', click <a href="project-view.php?id='.$row['singers_id'].'">here</a></p>
    ';
    } // end while
} else { 
    echo 'Nobody is home!';
} // end else

@mysqli_free_result($result);
@mysqli_close($iConn);
?>
</main>
</div>
<!-- end wrapper -->
<?php include('./includes/footer.php');