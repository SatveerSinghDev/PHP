<html>
<head>
    <title>color array</title>
</head>
<body>
<form action="" method="POST">
COLORS<br>
<input type="text" name="v1" value="">(Ex-red green blue)<br>
SORT(ASC|DSC)<br>
<input type="text" name="srt" value=""><br>
<input type="submit" name="print" value="Print">
</form>
</body>
</html>
<?php
if(isset($_POST['print']))
{

    $a=$_POST['v1'];
    $str=$_POST['srt'];
    if($a!="" && $str!="")
    {
        $arr=explode(" ",$a);
        $aftrsort=$arr;
        $c=count($arr);
        echo "Total number of elements is=".$c;
        echo "<br>";
        echo "Your array before sorting is";
        echo "<br>";
        for($i=0;$i<$c;$i++)
        {

            echo $arr[$i]." ";

        }
                if($str=="ASC")
                {
                    sort($aftrsort);
                    echo "<br>";
                    echo "Your array after $str order";
                    echo "<br>";
                    for($i=0;$i<$c;$i++)
                    {
                        echo "<ul><li>$aftrsort[$i]</li></ul>";

                    }
                }
            else if ($str=="DSC")
                {
                    rsort($aftrsort);
                    echo "<br>";
                    echo "Your array after $str order";
                    echo "<br>";
                    for($i=0;$i<$c;$i++)
                    {
                         echo "<ul><li>$aftrsort[$i]</li></ul>";

                    }
                }
            else
                {
                    echo "String mismatch";
                }

        }
        else
            {
                echo "All fields are required";
            }
}
?>
