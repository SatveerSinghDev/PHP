<html>
<head>
    <title>string reverse</title>
</head>
<body>
<form action="" method="POST">
STRING<br>
<input type="text" name="v1" value=""><br>
<input type="submit" name="check" value="CheckAllLowerCase">
</form>
</body>
<?php

if($_POST['check'])
{
    $a=$_POST['v1'];
    if($a!="")
    {
        check_all_lower_case($a);
    }
    else
     echo "String can't be empty";

}
function check_all_lower_case($a)
{
    if(ctype_lower($a))
    echo "All character in a string is lower";
    else
    echo "All character in a string is not lower";
}
?>
