<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Celsius Table</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        table {
            width: 500px;
            margin: 20px auto;
            border-collapse: collapse;
            border: 1px solid lightblue;
        }
        td, th {
            border: 1px solid lightblue;
            border-collapse: collapse;
            padding: 5px; 
        }
        h1, h2 {
            text-align: center;
            margin: 10px 0;
            color: green;
        }
    </style>
</head>
<body>
    <h1>My Celsius/Fahrenheit Table!</h1>
    <table>
        <tr>
            <th>Celsius</th>
            <th>Fahrenheit</th>
        </tr>
        <?php 
        for($cel = 0; $cel <=100; $cel += 5) {
            $far = ($cel * 9/5) + 32;
            echo '<tr>';
            echo '<td>'.$cel.' degrees</td>';
            echo '<td>'.$far.' degrees</td>';
            echo '</tr>';
        };
        
        ?>
    </table>
    <h2>Kilometer/Mileage Table</h2>
    <table>
        <tr>
            <th>Mileage</th>
            <th>Kilometers</th>
        </tr>
        <?php 
        for($kilo = 0; $kilo <=100; $kilo += 5) {
            $mile = $kilo / 0.62137;
            echo '<tr>';
            echo '<td>'.$kilo.' miles</td>';
            echo '<td>'.number_format($mile, 2).' kilometers</td>';
            echo '</tr>';
        };
        
        ?>
    </table>

</body>
</html>