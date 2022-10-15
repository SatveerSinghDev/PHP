<html>
<head>
    <title>fibonacci </title>
</head>
<body>
<form action="" method="POST">
NUMBER<br>
<input type="number" name="v1" value=""><br>
<input type="submit" name="fib" value="Fibonacci">
</form>
</body>
<?php

if(isset($_POST['fib']))
{
    $k=$_POST['v1'];
    if(($k!="")&&($k>0))
    {   $i=0;
        for($c=1;$c<=$k;$c++)
        {
            echo fib($i)." ";
            $i++;
        }

    }
    else if($k<0)
    {
        echo "Number can't be negative";

    }
    else
     echo "Number can't be empty";

}
function fib($n)
{
    if(($n==0)||($n==1))
    return $n;
    else
    return (fib($n-1)+fib($n-2));
}
?>
