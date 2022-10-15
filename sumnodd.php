<html>
<head>
    <title>sum of first n odd no.</title>
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
        echo "First $n odd numbers are";
        echo "<br>";
        $sum=0;
        for($i=1;$i<$n*2;$i=$i+2)
        {
            echo $i." ";
            $sum=$sum+$i;
        }
        echo "<br>";
        echo "Sum of first $n odd numbers is= $sum";
    }
    else
    echo "Number can't be empty";
}
?>
