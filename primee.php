<html>
<head>
    <title>prime</title>
</head>
<body>
<form action="" method="POST">
NUMBER<br>
<input type="number" name="v1" value=""><br>
<input type="submit" name="prime" value="Prime">
</form>
</body>
</html>
<?php

if($_POST['prime'])
{
    $a=$_POST['v1'];
    if(($a!="")&&($a>0))
    {
        prime($a);
    }
    else if($a<0)
    {
        echo "Number can't be negative";
        exit(0);
    }
    else
     echo "Number can't be empty";

}
function prime($a)
{$p=1;
    for($i=2;$i<=$a/$i;$i++)
    {
        if($a%$i==0)
        {
            $p=0;
            break;
        }
        else
        $p=1;
    }
    if($p==0)
    echo "$a is not prime";
    else
    echo "$a is  prime";
}
?>
