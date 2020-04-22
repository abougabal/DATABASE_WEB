<?php
session_start(); 
require 'dbconfig/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>log in</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
    <div class="container">
        <section id="content">
			<form action="signup.php" method="post">
                <h1>Login Form</h1>
                <div>
                    <input name="username" type="text" placeholder="Username" required="" id="username" />
                </div>
                <div>
                    <input name="password" type="password" placeholder="Password" required="" id="password" />
                </div>
                <div>
                    <input name="log_in" type="submit" value="Login" />
                    <a href="#">Lost your password?</a>
                    <a href="createaccount.php">Register</a>
                </div>
            </form>
        </section>
		<?php
		if(isset($_POST['log_in']))
		{
			$username=$_POST['username'];
			$password=$_POST['password'];
			$query=" select * from user_info where email='$username' AND user_pass='$password'";
			$query_run=mysqli_query($con,$query); 
			if(mysqli_num_rows($query_run)>0)
			{
				//valid
			$query=" select * from user_info where email='$username' AND user_pass='$password'";
			$query_run=mysqli_query($con,$query); 	
			$fname1=mysqli_fetch_row($query_run);
			$fname=$fname1[1];
			echo fname;
			$_SESSION['username']=$username;
			$_SESSION['fname']=$fname;
			header('location:branches.php');
				
			}

			else
			{
				echo '<script type="text/javascript"> alert("error, invalid user") </script> '; 
			}
		}
		$_post=NULL;
		?>
    </div>

</body>
</html>

