﻿<?php
require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: black;
        }

        * {
            box-sizing: border-box;
        }

        /* Add padding to containers */
        .container {
            padding: 16px;
            background-color: white;
        }

        /* Full-width input fields */
        input[type=text], input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

            input[type=text]:focus, input[type=password]:focus {
                background-color: #ddd;
                outline: none;
            }

        /* Overwrite default styles of hr */
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* Set a style for the submit button */
        .registerbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

            .registerbtn:hover {
                opacity: 1;
            }

        /* Add a blue text color to links */
        a {
            color: dodgerblue;
        }

        /* Set a grey background color and center the text of the "sign in" section */
        .signin {
            background-color: #f1f1f1;
            text-align: center;
        }
    </style>
</head>
<body>

    <form action="createaccount.php" method="post">
        <div class="container">
            <h1>Register</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            <label for="fname"><b>first name</b></label>
            <input name="fname" type="text" placeholder="first name" name="fname" required>

            <label for="lname"><b>last name</b></label>
            <input name="lname" type="text" placeholder="last name" name="lname" required>

            <label for="email"><b>Email</b></label>
            <input name="email" type="text" placeholder="Enter Email" name="email" required>

            <label for="psw"><b>Password</b></label>
            <input name="password" type="password" placeholder="Enter Password" name="psw" required>

            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input name="cpassword" type="password" placeholder="Repeat Password" name="psw-repeat" required>

            <label for="adr"><b>address</b></label>
            <input name="address" type="text" placeholder="current address" name="psw-repeat" required>

            <label for="num"><b>mobile numer</b></label>
            <input name="phone" type="number" placeholder="mobile number" name="psw-repeat" required>
            <hr>
            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

            <button name="register_btm" type="submit" class="registerbtn">Register</button>
        </div>

        <div class="container signin">
            <p>Already have an account? <a href="signup.php">Sign in</a>.</p>
        </div>
    </form>
	<?php
	if(isset($_POST['register_btm']))
	{
		//echo '<script type="text/javascript"> alert("ok") </script> '; 
		$username =$_POST['email'];
		$fname =$_POST['fname'];
		$lname =$_POST['lname'];
		$password=$_POST['password'];
		$cpassword=$_POST['cpassword'];
		$address =$_POST['address'];
		$phone =$_POST['phone'];
		if($password==$cpassword)
		{
			$query=" select * from user_info where email='$username'";
			$query_run=mysqli_query($con,$query);
			
			if(mysqli_num_rows($query_run)>0)
			{
				// email is registered before 
				echo '<script type="text/javascript"> alert("user aleardy exist try another email") </script> '; 
				
			}
			else
			{
				$query=" insert into user_info values('$username','$fname','$lname','$password','$address','$phone') ";
				$query_run=mysqli_query($con,$query);
				if($query_run)
				{
					echo '<script type="text/javascript"> alert("successfull registration") </script> '; 
				}
				else
				{
					echo '<script type="text/javascript"> alert("error, try again later") </script> '; 
				}
				
			}
		}
		else
		{
			echo '<script type="text/javascript"> alert("password doesnot match") </script> '; 
		}
	}
	?>

</body>
</html>
