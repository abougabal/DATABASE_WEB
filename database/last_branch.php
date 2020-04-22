<?php
session_start();
require 'dbconfig/config.php';;
$query=" select branch_name from branches";
$query_run=mysqli_query($con,$query); 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Milestone 2</title>
    <style>
        body {
            background-image: url('branchespic.png');
            background-attachment: fixed;
            background-position: center;
            color: black;
            background-color: blueviolet;
            background-repeat: no-repeat;
        }
        #next {
           color:white;
        }
        ol {
            background: #ff9999;
            padding: 10px;
            border: 1px solid black;
            width: 200px;
        }
       ol li {
                background: #ffe5e5;
                padding: 5px;
                margin-left: 35px;
            }
        
    </style>
</head>
<body>
    <h1 style="font-size:60px;">BRANCHES </h1>
    <hr />
    <p2>welcome to our real estate diffrent branches <br>
   please select the branch in which you would like to buy or sell a real state in  <br>
   after choosing the location you will find the available building in that area  <br> </p2>
<form action="" method="post">
<p>please choose your branch<br>
<select name="Pay_options">

<option value="No branch Options Selected">[Choose Option Below]</option>
<?php
while ($row = mysqli_fetch_array($query_run))
echo "<option value='".$row['branch_name']."'>" . $row['branch_name'] . "</option>";
?>
</select><br>
<input type="submit" name="button" value="Submit"/></form>
<?php
if(isset($_POST['button']))
{
$Pay_options=$_POST['Pay_options'];
$_SESSION['Pay_options']=$Pay_options;
}
echo '<b>The branch method that you have chose to use is:</b>' .'<br>' . $Pay_options;

?>

</body>

</html>
