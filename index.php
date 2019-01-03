<!--
    Mike Prelesnik
    1/3/19
    http://mprelesnik.greenriverdev.com/328/cupcakes
    A homepage for a cupcake shop allowing customers to order cupcakes
-->

<?php
    $orders = array();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cupcakes</title>
</head>
<body>
    <form id="cupcakesForm" method="post" action="#">

        <label>Name:&nbsp;<br>
            <input type="text" size="30" maxlength="30"
                   name="namex" id="namex">
        </label><br>

        <br>
        <label>Cupcake Options</label><br>
        <?php
            $cupcakes = array("grasshopper"=>"The Grasshopper", "maple"=>"Whiskey Maple Bacon",
                "carrot"=>"Carrot Walnut", "caramel"=>"Salted Caramel Cupcake", "velvet"=>"Red Velvet",
                "lemon"=>"Lemon Drop", "tiramisu"=>"Tiramisu");

            foreach ($cupcakes as $option => $text)
            {
                echo "<label><input type='checkbox' ";
                if(in_array($option, $orders))
                    echo "checked='checked'";
                echo "value='$option' name='orders[]'>$text</label><br>";

            }
        ?>

        <br>
        <input type="submit" value="Order">


    </form>
</body>
</html>