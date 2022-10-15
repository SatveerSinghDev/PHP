<html>
<head>
    <title>string reverse</title>
</head>
<body>
<form action="" method="POST">
STRING<br>
<input type="text" name="v1" value=""><br>
<input type="submit" name="rev" value="Reverse">
</form>
</body>
<?php

if($_POST['rev'])
{
    $a=$_POST['v1'];
    if($a!="")
    {
        echo "Reverse string is"."<br>".reverse($a);
    }
    else
     echo "String can't be empty";

}
function reverse($a)
{
        return strrev($a);
}
?>
