<html>
<head>
<title>
		DATABASE INSERTION
</title>
</head>
<body>
<form action="" method="POST">
FIRSTNAME
<input type="text" name="fname" value=""><br><br>
LASTNAME
<input type="text" name="lname" value=""><br><br>
ID
<input type="number" name="ids" value=""><br><br>
<input type="submit" name="submit1" value="SUBMIT">
<input type="submit" name="show" value="SHOW">
<input type="submit" name="upd" value="UPDATE">
<input type="submit" name="del" value="DELETE">
<input type="submit" name="src" value="SEARCH">
</form>
</body>
</html>


<?php
$servername="localhost";
$username="root";
$password="";
$dbname="satveer";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(isset($_POST['submit1']))
	{
		$fnamee=$_POST['fname'];
		$lnamee=$_POST['lname'];
		$ids=$_POST['ids'];

		if(($fnamee!="") &&( $lnamee!="") && ($ids!=""))
			{
				$sql="INSERT INTO  singh VALUES ($ids,'$fnamee','$lnamee')";
				$q=mysqli_query($conn, $sql);
				if($q)
				{
					echo "INSERTIED";
				}
				else
				{
					echo "NOT INSERTED!!!!";
				}
			}
		else

		{
			echo "All fields are required insertion not possible";
		}
	}


	if(isset($_POST['show']))
	{
		$sql1="SELECT * FROM singh";
		$result=mysqli_query($conn,$sql1);
			if($result->num_rows>0)
			{echo "<table><tr><th>ID</th><th>FIRSTNAME</th><th>LASTNAME</th></tr>";
				while($row=mysqli_fetch_assoc($result))
				{
					echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td></tr>";
				}
				echo "</table>";
			}
			else
			echo "0 results";
	}
	//$conn->close();
    if(isset($_POST['upd']))
    {
        $fnamee=$_POST['fname'];
		$lnamee=$_POST['lname'];
		$ids=$_POST['ids'];


        if($fnamee!="" && $lnamee!="" && $ids!="")
        {
        $sql2="UPDATE singh SET firstname='$fnamee',lastname='$lnamee' where id=$ids";
        if(mysqli_query($conn,$sql2))
        echo "Updated";
        else
        echo "Not Updated";
        }
        else if($fnamee!="" && $lnamee=="" && $ids!="")
        {
         $sql2="UPDATE singh SET firstname='$fnamee' where id=$ids";
        if(mysqli_query($conn,$sql2))
        echo "Updated";
        else
        echo "Not Updated";
        }
        else if($fnamee=="" && $lnamee!="" && $ids!="")
        {
        $sql2="UPDATE singh SET lastname='$lnamee' where id=$ids";
        if(mysqli_query($conn,$sql2))
        echo "Updated";
        else
        echo "Not Updated";

        }
        else
            echo "fields  required updation not possible";
    }
    if(isset($_POST['del']))
    {
        $ids=$_POST['ids'];
        $sql3="DELETE FROM singh where id=$ids";
        if($ids!="")
        {
            if(mysqli_query($conn,$sql3))
            echo "Deleted";
            else
            echo "Not Deleted";
        }
        else
        echo "ID field required deletion is not possible";
    }
    if(isset($_POST['src']))
    {
        $fnamee=$_POST['fname'];
		$lnamee=$_POST['lname'];
		$ids=$_POST['ids'];

		if($ids!="" && $fnamee=="" && $lnamee=="")
		{
        $sql="select * from singh where id=$ids";
        $result=mysqli_query($conn,$sql);
        if($result->num_rows>0)
        {
            echo "yes it is in database";
            echo "<table><tr><th>ID</th><th>FIRSTNAME</th><th>LASTNAME</th></tr>";
            	while($row=mysqli_fetch_assoc($result))
				{
					echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td></tr>";
				}
				echo "</table>";
        }
        else
        {
            echo "it's not in database";
        }
		}
		else if($ids=="" && $fnamee!="" && $lnamee!="")
		{
		$sql="select * from singh where firstname LIKE '%$fnamee%' and lastname LIKE '%$lnamee%'";
        $result=mysqli_query($conn,$sql);
        if($result->num_rows>0)
        {
            echo "yes $result->num_rows rows in database";
				echo "<table><tr><th>ID</th><th>FIRSTNAME</th><th>LASTNAME</th></tr>";
            	while($row=mysqli_fetch_assoc($result))
				{
					echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td></tr>";
				}
				echo "</table>";

		}
		else
		{
		    echo "it's not in database ";
		}
		}
		else if($fnamee!="" && $lnamee=="" && $id!="")
		{
		     $sql="select * from singh where id=$ids";
        $result=mysqli_query($conn,$sql);
        if($result->num_rows>0)
        {
            echo "yes it is in database";
            echo "<table><tr><th>ID</th><th>FIRSTNAME</th><th>LASTNAME</th></tr>";
            	while($row=mysqli_fetch_assoc($result))
				{
					echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td></tr>";
				}
				echo "</table>";
        }
        else
        {
            echo "it's not in database";
        }
		}
		else
		echo " fields are required searching is not possible";
    }

?>
