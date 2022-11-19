<?php 
include('config.php');
include('./includes/header.php');?>
<?php
$ramones['Joey_Ramone'] = 'joeyr_Lead Singer of The Ramones.';
$ramones['Johnny_Ramone'] = 'johnn_Guitarist of The Ramones.';
$ramones['Dee_Dee_Ramone'] = 'deede_Bassist of The Ramones.';
$ramones['Tommy_Ramone'] = 'tommy_Drummer of The Ramones.';
// variable    key           value
// $name                    $image

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery of The Ramones</title>
    <style>
        table {
            border: 1px solid black;
            border-collapse: collapse:
        }
        td {
            border: 1px solid red; 
        }
    </style>
</head>
<body>
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