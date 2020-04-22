<?php
session_start(); 
require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>SUCCESS</title>
    <style>
        body {
            background-image: url('congratulations8.jpg');
            background-attachment: fixed;
            color: black;
            background-color: blueviolet;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        #next {
           color:white;
        }
        ul {
            background: #3399ff;
            padding: 20px;
            width: 200px;
        }
        ul li {
            background: #cce5ff;
            margin: 5px;
        }
        div.relative {
            position: relative;
            border: double;
        }
    </style>
</head>
<body>
    <h1 style="font-size:60px; color:blue">CONGRATULATION <?php echo $_SESSION['fname'] ?> </h1>
    <hr />
    <div class="relative"  style="color:yellowgreen ; background-color:black ">
        <p2>
            CONGRATULATION ON YOUR NEW HOME  <br>
         SOME ONE WILL CONTACT YOU SOON TO TELL YOU ALL THE INFORMATION ABOUT YOUR RECENT PURCHASE <br>
        </p2>
    </div>
	<p style=" color:white">
	buyer email:<?php echo $_SESSION['username'] ?> <br>
	seller email:<?php echo $_SESSION['selleremail'] ?><br>
	purchase price:<?php echo $_SESSION['sellingprice'] ?><br>
	bought from <?php echo $_SESSION['sellerbranch'] ?> branch<br>
	description of bough house is: <?php echo $_SESSION['propertydescription'] ?> <br>
	</p>

    <div class="btn">
        <p><a href="index.php">GO HOME</a>.</p>
    </div>
	<div class="btn">
        <p><a href="history.php">see history</a>.</p>
    </div>
</body>

</html>
