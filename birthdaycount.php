<html>
<head>
    <title>count down</title>
</head>
<body>
<form action="" method="POST">
BIRTHDATE<br>
<input type="date" name="v1" value=""><br>
<input type="submit" name="ck" value="CHECK">
</form>
</body>
<?php
if(isset($_POST['ck']))
{
    $bdate=$_POST['v1'];
    if($bdate!="")
    {
        $temp=explode("-",$bdate);
    $bd=mktime(0,0,0,$temp[1],$temp[2],$temp[0]);
    $curr=time();
    echo "<br>";
    $diff=$bd-$curr;
    $days=(int)($diff/86400); #(total second in a day)
    echo $days." Days left";

    }
    else
    echo "Date can't be null";
    }
?>
