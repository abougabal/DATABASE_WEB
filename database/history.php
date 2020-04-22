<?php
session_start(); 
require 'dbconfig/config.php';
$buyeremail=$_SESSION['username'];
$query="select *  from invoice where user_email_fk='$buyeremail' ";
$query_run=mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>HISTORY</title>
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
        div.relative {
            position: relative;
            border: double;
        }
    </style>
</head>
<body>
    <h1 style="font-size:40px; color:blue">this is the history of  <?php echo $_SESSION['fname'] ?> </h1>
    <hr />
    <div class="relative"  style="color:yellowgreen ; background-color:black ">
            <table>
             <t>
            <th>property num</th>
            <th>branch</th>
            <th>date</th>
			<th>price</th>
        </t>
    <?php 
        while($rows=mysqli_fetch_assoc($query_run))
        {
    ?>        
            <tr>
                <td><?php echo $rows['property_num_fk']; ?></td>
                <td><?php echo $rows['branch_name_fk']; ?></td>
                <td><?php echo $rows['invoice_date']; ?></td>
				<td><?php echo $rows['price']; ?></td>
            </tr>
    <?php     
        }
    ?>    
    </table>
    </div>
	    <div class="btn">
        <p><a href="index.php">GO HOME</a>.</p>
    </div>
</body>