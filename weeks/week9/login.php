<?php
// login page
include('server.php');
include('./includes/header.php');
?>
<div id="wrapper">
<h1 class="center">Login Page</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <fieldset>
            <label>User Name</label>
                <input type="text" name="username" value="<?php if(isset($_POST['username'])) echo htmlspecialchars($_POST['username']); ?>">
            <label>Password</label>
                <input type="password" name="password">
                    <button type="submit" class="btn" name="login_user">Login</button>
                    <button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>'">Reset</button>
                <?php include('errors.php'); ?>
        </fieldset>
    </form>
<p class="center">Haven't registered? Please visit the <a href="register.php">registration page!</a></p>
</div>
<!--end wrapper-->
<?php include('./includes/footer.php'); ?>
