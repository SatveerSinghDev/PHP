<html>
<head>
<title>CALCULATOR</title>
</head>
<body>
    <form method="post" action="">
        VALUE1<br>
        <input type="number" name="v1" value=""><br>
        OPERATION(+,-,/,*,%)<br>
        <input type="text" name="chr" value=""><br>
        VALUE2<br>
        <input type="number" name="v2" value=""><br>
        <input type="submit" name="sub" value="SUBMIT">
    </form>
</body>
</html>
<?php
if(isset($_POST['sub']))
{
    $val1=$_POST['v1'];
    $val2=$_POST['v2'];
    $opr=$_POST['chr'];
    if($val1!="" && $val2!="" &&$opr!="")
    {
        switch($opr)
        {
            case "+":   $r=$val1+$val2;
                        echo "$val1 + $val2=".$r;
                        break;
            case "*":   $r=$val1*$val2;
                        echo "$val1 * $val2=".$r;
                        break;
            case "/":   $r=$val1/$val2;
                        echo "$val1 / $val2=".$r;
                        break;
            case "-":   $r=$val1-$val2;
                        echo "$val1 - $val2=".$r;
                        break;
            case "%":   $r=$val1%$val2;
                        echo "$val1 % $val2=".$r;
                        break;
            default :   echo "Not a operator";
                        break;
        }

    }
    else
    {
        echo "All field are required";
    }
}

?>
