<?php 
include('config.php');
include('./includes/header.php');?>

    <table>
        <?php foreach($ramones as $name => $image):?>
            <tr>
                <td><img src="./images/<?php echo substr($image, 0, 5); ?>.jpg" 
                         alt="<?php echo str_replace('_', ' ', $name); ?>"></td>
                <td><?php echo str_replace('_', ' ', $name); ?></td>
                <td><?php echo substr($image, 6); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
<?php include('./includes/footer.php'); ?>