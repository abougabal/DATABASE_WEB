<?php
session_start(); 
require 'dbconfig/config.php';
$branch=$_SESSION['Pay_options'];
$query="select *  from property where branch_name_fk='$branch' ";
$query_run=mysqli_query($con,$query);
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

    <h2><?php echo $_SESSION['Pay_options'] ?> properties</h2>

    <table>
             <t>
            <th>property num</th>
            <th>description</th>
            <th>buy</th>
            <th>Contact</th>
        </t>
    <?php 
        while($rows=mysqli_fetch_assoc($query_run))
        {
    ?>        
            <tr>
                <td><?php echo $rows['property_num']; ?></td>
                <td><?php echo $rows['describtion']; ?></td>
                <td><?php echo $rows['price']; ?></td>
                <td><?php echo $rows['mobile_num']; ?></td>
            </tr>
    <?php     
        }
    ?>    
    </table>

<form action="zamalek.php" method="post">
<p>please choose the property number you wish to purchase<br>
<select name="purchase_options">
<option value="No propirty Selected">[Choose Option Below]</option>

<?php
$query="select *  from property where branch_name_fk='$branch' ";
$query_run=mysqli_query($con,$query);
while ($row= mysqli_fetch_array($query_run))
echo "<option value='".$row['property_num']."'>" . $row['property_num'] . "</option>";
?>
</select><br>
<input type="submit" name="button" value="Submit"/></form>
<?php
if(isset($_POST['button']))
{
	echo'ok2';
$purchase_options=$_POST['purchase_options'];
$_SESSION['purchase_options']=$purchase_options;

echo '<b>The property you chose to purchase is::</b>' .'<br>' . $purchase_options;




$query=" select * from property where property_num='$purchase_options' ";
$query_run=mysqli_query($con,$query); 	
$purchasetemp=mysqli_fetch_row($query_run);

$propertydescription=$purchasetemp[0];
$selleremail=$purchasetemp[1];
$sellerbranch=$purchasetemp[4];
$sellingprice=$purchasetemp[2];
$buyeremail=$_SESSION['username'];

$_SESSION['propertydescription']=$propertydescription;
$_SESSION['selleremail']=$selleremail;
$_SESSION['sellerbranch']=$sellerbranch;
$_SESSION['sellingprice']=$sellingprice;


$query=" insert into invoice (property_num_fk ,user_email_fk ,branch_name_fk, price) 
values('$purchase_options','$buyeremail','$sellerbranch','$sellingprice')";
$query_run=mysqli_query($con,$query);

$purchase_options=$_SESSION['purchase_options'];
$query="DELETE FROM  property WHERE property_num='$purchase_options'";
$query_run=mysqli_query($con,$query);

header('location:bank.html');
}
?>


</body>
</html>
