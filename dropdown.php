<html>
<head>
    <title>dropdown</title>
</head>
<body>
    <form action="" method="post">
        SELECT YOUR LANGUAGE <br>
        <select name="sel" value="">
        <option value="select" >--SELECT ANY ONE OF THEM--</option>
        <option value="english">ENGLISH</option>
        <option value="spanish">SPANISH</option>
        <option value="german">GERMAN</option>
        <option value="french">FRENCH</option>
    </select><br>
    <input type="submit" name="sub" value="Submit">
    </form>
    </body>
</html>
<?php
if(isset($_POST['sub']))
{
    $lang=$_POST['sel'];
    if($lang!="")
    {
     switch ($lang)
    {
        case "spanish" :echo "In SPANISH";
                        echo "<br>";
                        echo "HOLA";
                        break;
        case "german"  :echo "In GERMAN";
                        echo "<br>";
                        echo "HALLO";
                        break;
        case "english" :echo "In ENGLISH";
                        echo "<br>";
                        echo "HELLO";
                        break;
        case "french" : echo "In FRENCH";
                        echo "<br>";
                        echo "BONJOUR";
                        break;
            default :echo "Please select";
                        break;
    }
    }

}

 ?>
