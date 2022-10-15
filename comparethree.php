<html>
<head>
    <title>comparing three</title>
</head>
<body>
<form action="" method="POST">
VARIABLE1<br>
<input type="number" name="v1" value=""><br>
VARIABLE2<br>
<input type="number" name="v2" value=""><br>
VARIABLE3<br>
<input type="number" name="v3" value=""><br><br>
<input type="submit" name="submit" value="GREATER">
</form>

</body>

    <?php
            if($_POST['submit'])
                {
                            $a=$_POST['v1'];
                            $b=$_POST['v2'];
                            $c=$_POST['v3'];

                    if($a!="" && $b!="" && $c!="")
                        {
                            compare($a,$b,$c);


                        }
                        else
                        echo "All fields are required";
                }
                else
                exit();

                      function compare($a,$b,$c)
                            {
                                if($a>$b)
                                    {
                                        if($a>$c)
                                        {
                                            echo "$a is greater";
                                        }
                                        else
                                        {
                                            echo "$c is greater";
                                        }
                                    }
                                else if($b>$c)
                                {
                                    echo "$b is greater";
                                }
                                else
                                echo "$c is greater";
                            }
    ?>

