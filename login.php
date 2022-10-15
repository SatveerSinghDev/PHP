<html>
<head>
    <title>LOGIN DATABASE</title>
</head>
<body>
    <center>
<form action="" method="POST">
USER NAME <br>
<input type="text" name="v1" value=""><br>
PASSWORD<br>
<input type="password" name="v2" value=""><br>
<input type="submit" name="sm" value="SUBMIT">
</form>
</center>
</body>
</html>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="loginn";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(isset($_POST['sm']))
{
    $usr=$_POST['v1'];
    $pss=$_POST['v2'];
    if($usr!="" && $pss!="")
    {
        $sql="select * from users where username LIKE '%$usr%' and password LIKE '%$pss%'";
        $result=mysqli_query($conn,$sql);
        if($result->num_rows>0)
        {
            echo "<center><h1>Welcome!!Thanks for sign_in</h1></center>";
        }
        else
        {
            echo "<center><h1>User not registered</h1></center>";
        }
    }
    else
    {
        echo "<center>All fields are required</center>";
    }
}
 ?>
