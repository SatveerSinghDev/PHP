<html>
<head>
    <title>palindrome</title>
</head>
<body>
<form action="" method="POST">
STRING<br>
<input type="text" name="v1" value=""><br>
<input type="submit" name="palin" value="Palindrome">
</form>
</body>
<?php

if($_POST['palin'])
{
    $a=$_POST['v1'];
    if($a!="")
    {
        palindrome($a);
    }
    else
     echo "String can't be empty";
}
function palindrome ($a)
{
    $j=strlen($a)-1;
    $p=1;
    for($i=0;$i!=$j;$i++)
    {
        if($a[$i]==$a[$j])
        {
            $p=0;
            $j--;
        }
        else
        {
            $p=1;
            break;
        }
    }
    if($p==1)
    echo "String is not a palindrome";
    else
    echo "String is a palindrome";
}
?>
