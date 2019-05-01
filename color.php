  <?php
        $color=array('white','green','red');
        echo "Original Array<br/>";

        for($i=0; $i<3; $i++)
            echo $color[$i]." ";

        echo "<br/>";
        sort($color);

        echo "Sorted Array<br/>";

        for($i=0; $i<3; $i++)
            echo $color[$i]." ";
    ?>