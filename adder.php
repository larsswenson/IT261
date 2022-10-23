<!DOCTYPE html>
<html lang="en">
<head>
<title>My Adder Assignment</title>
<style>
p {
color: red;
}
.error {
    color: red;
    font-style: italic;
    font-size: .9em;
    margin-top: 15px;
}
</style>
</head>
<body> 
<form action="" method = "post">
<h1>Adder.php</h1>
<label>Enter the first number:</label>
<input type="number" name="num1"><br>
<label>Enter the second number:</label>
<input type="number" name="num2"><br>
<input type="submit" value="Add Em!!"> 
</form>
<?php     //adder-wrong.php

if (isset($_POST['num1'], $_POST['num2'])){
$num1 = intval($_POST['num1']);
$num2 = intval($_POST['num2']);
$myTotal = $num1 + $num2;

if(empty($_POST['num1'] &&
         $_POST['num2'])) {
            echo '<p class = "error">Please enter numbers!</p>';
            echo '<p><a href = "">Reset page</a></p>';
         } else {
            echo '<h2>You added '. $num1 .' and '.$num2.'';
            echo '<p>and the answer is </p><br> '.$myTotal.'!';
            echo '<p><a href = "">Reset page</a></p>';
         }
}
?>

</body>
</html>

<!-- NOTE: I initially included line numbers for each error but after much copying & pasting, 
the line numbers no longer correlated to the original errors, so I removed them for clarity. 
Hope this is OK! -->

<!-- moved php closing tag to end of php code -->
<!-- removed ';{ from end of html closing tag -->
<!-- removed subtraction symbol from equation -->
<!-- replaced capital N with n for variable $num2 -->
<!-- switched double quotes to single quotes for php -->
<!-- added $_POST['num2'] to if statement -->
<!-- moved style tag into correct place-->
<!-- added <!DOCTYPE html> & <html lang="en"> above html head-->
<!-- fixed incorrect closing form tag, added method-->
<!-- moved Adder.php into form tags-->
<!-- added opening label tag -->
<!-- corrected capital N in Num1 on -->
<!-- changed input types to number -->
<!-- added closing label tag, removed closing tag at beginning of phrase-->
<!-- moved closing form tag -->
<!-- added ending quote -->
<!-- moved php into html body-->
<!-- added styles for p & error tags-->
<!-- added intval() function on lines 30 & 31-->
<!-- added if else statement and error message in case no values are entered-->
