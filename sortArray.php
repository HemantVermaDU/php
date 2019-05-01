 <!Doctype html>
    <head>
        <title>PHP program2 - Tutorialsduniya</title>
    </head>
    <body>
        <form method="POST" action="sortArray.php">
            Enter 5 Numbers:<br/>
            Number 1:<input type="text" name="num[]" required><br/>
            Number 2:<input type="text" name="num[]" required><br/>
            Number 3:<input type="text" name="num[]" required><br/>
            Number 4:<input type="text" name="num[]" required><br/>
            Number 5:<input type="text" name="num[]" required><br/>
            <input type="submit" value="SUBMIT">
        </form>
		<?php
        $i=0;
        foreach($_POST['num'] as $v)
        {
            $array[$i]=$v;
            $i++;
        }

        sort($array);

        $i=0;
        while($i!=5)
        {
            echo $array[$i]." ";
            ++$i;
        }
    ?>
    </body>
    </html>