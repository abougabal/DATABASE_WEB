<?php
require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Milestone 2</title>
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
    </style>
</head>
<body>
    <h1 style="font-size:60px;">welcome </h1>
    <hr />
    <p2>welcome to our real estate website <br>
    in this site we can help you buy , sell , or even rent your real estate <br>
    we make everything easier for you so call us and let's start organizing and helping you in what you need <br> </p2>
    <div>
        <ul class="right">
            <li id="next"><a href="signup.php">LOG IN</a></li>
            <li class=""><a href="createaccount.php">REGISTER</a></li>
			<li class=""><a href="search.php">history search</a></li>
        </ul>
    </div> 

</body>

</html>
