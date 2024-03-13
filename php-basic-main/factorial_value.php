<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factoril-number</title>
</head>
<body>
    <center>
<fieldset>
<legend><h2>Factorial Value</h2></legend>
    <form method = "post">  
            <input type="number" name = "N1">
            <input type="submit" name = "submit">
    </form>



<?php
    if(isset($_POST["submit"])){ 
        $num1 = $_POST["N1"];
    function factorial($num1) {
        if ($num1 == 0 || $num1 == 1) {
            return 1;
        } else {
            return $num1 * factorial($num1 - 1);
        }
    }


    $result = factorial($num1);
    echo "Factorial of $num1 is: $result";
    }
    ?>
</fieldset>
</center>
</body>
</html>