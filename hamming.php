<?php
function ishamming($x)
{
    if($x==1)
    {
        return "Hamming Number";
    }
    if($x%2==0)
    {
        return ishamming($x/2);
    }
    if($x%3==0)
    {
        return ishamming($x/3);
    }
    if($x%5==0)
    {
        return ishamming($x/5);
    }
    return "not a hamming number";
}
echo ishamming(1);
echo "<br>";
echo ishamming(40);
echo "<br>";
echo ishamming(7);
function hammingseq($x)
{
    if($x==1)
    {
        return "Hamming Number";
    }
    hammingseq($x-1);
    if(ishamming($x)=="Hamming Number")
    {
        echo $x." ";
    }
}
hammingseq(5);
echo "<br>";
hammingseq(7);
?>
