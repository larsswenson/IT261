<?php
session_start();
include('config.php');

// check for correct user login
if(!isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'You must login first!';
    header('Location:login.php');
}

// terminate session & return user to login
if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location:login.php');
}

include('./includes/header.php');

// check session success
if(isset($_SESSION['success'])) : ?>
    <div class="success">
        <h3>
            <?php echo $_SESSION['success'];
            unset($_SESSION['success']); ?>
        </h3>
    </div>
<!--end success-->
<?php endif; ?>
<?php
// check session username
if(isset($_SESSION['username'])) :?>
    <div class="welcome-logout">
        <h3>Welcome,
            <?= $_SESSION['username'] ?>
        </h3>
        <p><a href="index.php?logout='1'">Logout</a></p>
    </div>
<!--end welcome logout-->
<?php endif; ?>

<div id="wrapper">
    <h1>Welcome to our home page!</h1>
</div>
<?php
include('./includes/footer.php');
?>