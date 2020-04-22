<?php
session_start(); 
require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-image: url('indexpic.jpg');
            background-attachment: fixed;
            color: black;
            background-color: blueviolet;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>

    <h2>how do you wish to use our services  <?php echo $_SESSION['fname'] ?></h2>

    <table>
        <tr>
            <th>choose</th>
            <th>type</th>
        </tr>
        <tr>
            <td><a href="zamalek.php">t1</a></td>
            <td>buyer</td>
        </tr>

        <tr>
            <td><a href="seller.php">t2</a></td>
            <td>seller</td>
        </tr>

        <tr>
            <td><a href="branches.html">t3</a></td>
            <td>renting</td>
        </tr>

        <tr>
            <td><a href="seller.html">t4</a></td>
            <td>renter</td>
        </tr>
		<tr>
            <td><a href="history.php">t5</a></td>
            <td>history</td>
        </tr>
    </table>

</body>
</html>
