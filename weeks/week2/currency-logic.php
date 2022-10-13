<?php
// understanding the logic

// 1 ruble = 0.017 dollars
// 1 pound = 1.15 dollars
// 1 canadian dollar = .76 dollars
// 1 euro = 1.10 dollars
// 1 yen = .0874 dollars

// rubles = 10007 = $117.11 
// pounds = 500 = $575.00 
// canadian = 5000 = $3800.00 
// euro = 1200 = $1320.00 
// yen = 2000 = 174.80 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Logic</title>
    <style>
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
#wrapper {
    width: 500px;
    margin: 30px auto;
}

table {
    border: 1px solid orange;
    border-collapse: collapse;
    width: 500px;
}

th, td {
    border: 1px solid orange;
    padding: 8px;
}

h1, h2, h3 {
    text-align: center;
}
    </style>
</head>
<body>
    <div id = "wrapper">
    <h1>After our worldwide travels, we have returned home with the following currencies</h1>
        <ul>
            <li>Rubles</li>
            <li>Pounds</li>
            <li>Canadian</li>
            <li>Euros</li>
            <li>Yen</li>
        </ul>
    <h2>What shall we do?</h2>
        <table>
            <tr>
                <th colspan = "2">Currency</th>
                <th>Dollars</th>
            </tr>
            <tr>
                <th>Rubles</th>
                <td>10007</td>
                <td>117.11</td>
            </tr>
            <tr>
                <th>Pounds</th>
                <td>500</td>
                <td>575.00</td>
            </tr>
            <tr>
                <th>Canadian</th>
                <td>5000</td>
                <td>3800.00</td>
            </tr>
            <tr>
                <th>Euros</th>
                <td>1200</td>
                <td>1320.00</td>
            </tr>
            <tr>
                <th>Yen</th>
                <td>2000</td>
                <td>174.80</td>
            </tr>
        </table>    
    </div>
    <!-- end wrapper -->
</body>
</html>