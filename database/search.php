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
    <form action="search.php" method="post">
	
        <label for="search"><b>search</b></label>
        <input name="search" type="text" placeholder="user email" required>

        <input name="submit" type="submit">
    </form>
	
	   <table>
        <t>
            <th>property num</th>
            <th>branch</th>
            <th>date</th>
			<th>price</th>
        </t>
    <?php 
	if(isset($_POST['submit']))
	{
		$user_search=$_POST['search'];
		$query="select *  from invoice where user_email_fk='$user_search' ";
		$query_run=mysqli_query($con,$query);
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
	}
    ?>    
    </table>
	
	

    </div>
	    <div class="btn">
        <p><a href="index.php">GO HOME</a>.</p>
    </div>
</body>
</html>