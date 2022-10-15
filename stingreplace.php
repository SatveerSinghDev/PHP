<html>
<head>
    <title>string replace</title>
</head>
<body>
<form action="" method="POST">
STRING1<br>
<input type="text" name="v1" value=""><br>
STRING2(what you replace)<br>
<input type="text" name="v2" value=""><br>
STRING3(which word with replace)<br>
<input type="text" name="v3" value=""><br>
<input type="submit" name="ck" value="REPLACE">
</form>
</body>
<?php
if(isset($_POST['ck']))
{
    $str1=$_POST['v1'];
    $str2=$_POST['v2'];
    $str3=$_POST['v3'];
    if($str1!="" && $str2!="")
    {

        echo "After replacing";
        echo "<br>";
        echo preg_replace("/$str2/","$str3",$str1,1);
    }
    else
    echo "strings can't be empty";
}
?>
