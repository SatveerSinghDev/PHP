<html>
<head>
    <title> first n even no.</title>
</head>
<body>
<form action="" method="POST">
TOTAL NUMBERS<br>
<input type="number" name="v1" value=""><br>
<input type="submit" name="sm" value="SUM">
</form>
</body>
</html>
<?php
if(isset($_POST['sm']))
{
    $n=$_POST['v1'];
    if($n!="")
    {
        echo "First $n even numbers are";
        echo "<br>";
        $sum=0;
        for($i=0;$i<$n*2;$i=$i+2)
        {
            echo $i." ";
        }
    }
    else
        echo "Number can't be empty";
}
