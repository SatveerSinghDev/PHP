<html>
<head>
    <title>email</title>
</head>
<body>
<form action="" method="POST">
EMAIL <br>
<input type="text" name="v1" value=""><br>
<input type="submit" name="ck" value="Check">
</form>
</body>
</html>
<?php
if(isset($_POST['ck']))
{
    $em=$_POST['v1'];
    if($em!="")
    {
        $str="(^[a-zA-Z0-9_-])+(@[a-zA-Z0-9-])+(\.[a-zA-Z.]{2-3}$)";
    if(preg_match("/$str/",$em))
    {
        echo "$em is valid";
    }
    else
        echo "$em is not valid";

    }
    else
    echo "email can't be empty";
    }
 ?>
