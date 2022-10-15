<html>
<head>
    <title>factorial</title>
</head>
<body>
<form action="" method="POST">
NUMBER<br>
<input type="number" name="v1" value=""><br>
<input type="submit" name="fact" value="Factorial">
</form>
</body>
<?php

if($_POST['fact'])
{
    $a=$_POST['v1'];
    if(($a!="")&&($a>0))
    {
        fact($a);
    }
    else if($a<0)
    {
        echo "Number can't be negative";
        exit(0);
    }
    else
     echo "Number can't be empty";

}
function fact($a)
{
    $f=1;
    for($i=$a;$i>0;$i--)
    {
        $f=$f*$i;
    }
    echo "Factorial of a number is $f";
}
 ?>
