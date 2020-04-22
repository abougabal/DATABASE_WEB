<?php
session_start(); 
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
    </style>
</head>


<body>

    <h1>Show File-select Fields</h1>

    <h3>Show a file-select field which allows only one file to be chosen:</h3>
    <form action="seller.php" method="post">
	
        <label for="desc"><b>description</b></label>
        <input name="desc" type="text" placeholder="appartment description" required>

        <label for="price"><b>price</b></label>
        <input name="price" type="month" placeholder="price" name="price" required>

        <label for="num"><b>mobile numer</b></label>
        <input name="number" type="number" placeholder="mobile number" required>

        <input name="submit" type="submit">
    </form>
	<?php
	if(isset($_POST['submit']))
	{
		$description=$_POST['desc'];
		$price=$_POST['price'];
		$number=$_POST['number'];
		$branch=$_SESSION['Pay_options'];
		$username=$_SESSION['username'];
		$query=" insert into property (describtion,price,mobile_num,branch_name_fk,emai_fk) 
		values('$description','$price','$number','$branch','$username') ";
		$query_run=mysqli_query($con,$query);
		if($query_run)
			{
				echo '<script type="text/javascript"> alert("successfull registration") </script> '; 
				header('location:seller_final.html');
			}
		else
			{
				echo '<script type="text/javascript"> alert("error, try again later") </script> '; 
			}
	}
	?>
	


</body>
</html>