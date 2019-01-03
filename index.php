<!--
    Mike Prelesnik
    1/3/19
    http://mprelesnik.greenriverdev.com/328/cupcakes
    A homepage for a cupcake shop allowing customers to order cupcakes
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cupcakes</title>
</head>
<body>

    <?php
        //If form is submitted, process the data

        $isValid = true;

        $flavors = "";
        $orders = array();
        $cupcakes = array("grasshopper"=>"The Grasshopper", "maple"=>"Whiskey Maple Bacon",
            "carrot"=>"Carrot Walnut", "caramel"=>"Salted Caramel Cupcake", "velvet"=>"Red Velvet",
            "lemon"=>"Lemon Drop", "tiramisu"=>"Tiramisu");

        if (!empty($_POST))
        {
            //determine if the user entered valid data

            //checking the name field
            if (!empty($_POST['namex']))
            {
                $namex = $_POST['namex'];
            }

            else
            {
                print "<p>Please enter a name</p>";
                $isValid = false;
            }

            //checking that at least one checkbox was checked

            $validFlavors = array('grasshopper', 'maple', 'carrot', 'caramel', 'velvet', 'lemon', 'tiramisu');

            if (isset($_POST['orders']))
            {
                for ($i = 0; $i <= count($_POST['orders']); $i++)
                {
                    if (in_array($_POST['orders'][$i], $validFlavors))
                    {
                        $flavors .= $_POST['orders'][$i] . " ";
                    }

                }
            }

            else
            {
                print "<p>Please choose at least one flavor</p>";
                $isValid = false;
            }
        }

        //if all the data is valid, display the requested information
        if($isValid)
        {

        }
    ?>

    <form id="cupcakesForm" method="post" action="#">

        <label>Name:&nbsp;<br>
            <input type="text" size="30" maxlength="30"
                   name="namex" id="namex">
        </label><br>

        <br>
        <label>Cupcake Options</label><br>
        <?php
            //display cupcake flavors as checkboxes
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