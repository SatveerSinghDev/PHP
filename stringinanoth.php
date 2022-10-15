<html>
<head>
    <title>string check</title>
</head>
<body>
<form action="" method="POST">
STRING1<br>
<input type="text" name="v1" value=""><br>
STRING2<br>
<input type="text" name="v2" value=""><br>
<input type="submit" name="ck" value="CHECK">
</form>
</body>
<?php
if(isset($_POST['ck']))
{
    $str1=$_POST['v1'];
    $str2=$_POST['v2'];
    if($str1!="" && $str2!="")
    {
        if(preg_match("/$str2/",$str1))
        {
            echo "String1 have string2 ";
        }
        else
        echo "String1 doesn't have string2";
    }
        else
        echo "Strings can't be empty";
}
 ?>
