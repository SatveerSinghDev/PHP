<html>
<head>
    <title>removes white spaces</title>
</head>
<body>
<form action="" method="POST">
STRING <br>
<input type="text" name="v1" value=""><br>
<input type="submit" name="out" value="OUTPUT">
</form>
</body>
</html>
<?php
if(isset($_POST['out']))
{
    $str=$_POST['v1'];
    $str1="";
    echo "Before removal of white spaces";
    echo "<br>";
    echo "<h3>$str</h3>";
    if($str!="")
    {   $j=0;
        for($i=0;$i<strlen($str);$i++)
            {
                if($str[$i]==chr(32))
                {
                    continue;
                }
                else
                {
                    $str1[$j]=$str[$i];
                    $j++;
                }
            }
    echo "String without spaces is";
    echo "<br>";
    echo "<h3>$str1</h3>";
    }
    else
    {
        echo "String field can't be empty";
    }
}
?>
