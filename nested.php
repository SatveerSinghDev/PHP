<html>
<head>
    <title>nested loop pattern</title>
</head>
<body>
    <?php
            for($i=1;$i<=6;$i++)
            {
                for($j=1;$j!=$i;$j++)
                {
                    echo "* ";
                }
                echo "<br>";
            }
     ?>
</body>
</html>
