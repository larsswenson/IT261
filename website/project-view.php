<?php
include('config.php');

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location: project.php');
}
$sql = 'SELECT * FROM singers WHERE singers_id = '.$id.'';
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
    or die(myError(__FILE__, __LINE__, mysqli_connect_error()));
$result = mysqli_query($iConn, $sql)
    or die(myError(__FILE__, __LINE__, mysqli_error($iConn)));

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $first_name = stripslashes($row['first_name']);
        $last_name = stripslashes($row['last_name']);
        $birthdate = stripslashes($row['birthdate']);
        $description = stripslashes($row['description']);
        $feedback = '';
    }
} else {
        $feedback = 'There is a problem!';
}
include('includes/header.php');
?>
<div id="wrapper">
    <main>
        <h1><?php echo $headline; ?></h1>
        <h1>Welcome to <?php echo $first_name; ?>'s page!</h1>
<?php
        if ($feedback == '') {
            echo '<ul>';
            echo '<li><b>First Name:</b> '.$first_name.'</li>';
            echo '<li><b>Last Name:</b> '.$last_name.'</li>';
            echo '<li><b>Birthdate:</b> '.$birthdate.'</li>';
            echo '</ul>';
            echo '<p>Return to the <a href="project.php">other singers!</a></p>';
        }
?>
    </main>
        <aside>
<?php
        if ($feedback == '') {
            echo '<img src="./images/image'.$id.'.jpg" alt="'.$first_name.' '.$last_name.'">';
            echo '<p>'.$description.'</p>';
        }
?>
        </aside>



<?php
    mysqli_free_result($result);
    mysqli_close($iConn);

    include('includes/footer.php');