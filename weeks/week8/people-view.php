<?php
// people-view page, include pointing to config but not header
include('config.php');

// is get set - isset
if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location: people.php');
}

// select from table where people_id = id
$sql = 'SELECT * FROM people WHERE people_id = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql)
or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $first_name = stripcslashes($row['first_name']);
        $last_name = stripcslashes($row['last_name']);
        $email = stripcslashes($row['email']);
        $birthdate = stripcslashes($row['birthdate']);
        $occupation = stripcslashes($row['occupation']);
        $blurb = stripcslashes($row['blurb']);
        $details = stripcslashes($row['details']);
        $feedback = '';
    } // end while
} else { // end if statement
    $feedback = 'There is a problem!';
} // end else

include('./includes/header.php');
?>

<div id = "wrapper">
<main>
    <h1>Welcome to the People View page!</h1>
        <h2>Introducing you to <?php echo $first_name; ?>'s Page</h2>

</main>
    <aside>
        <h3>This is the aside!</h3>
    </aside>
</div> 
<!-- end wrapper -->