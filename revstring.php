  <!Doctype html>
    <head>
        <title>PHP program1 - Tutorialsduniya</title>
    </head>
    <body>
        <form method="POST" action="revstring.php">
            Enter a String:
            <input type="text" name="str" required>
            <input type="submit" value="SUBMIT">
        </form>
		 <?php
        $s=$_POST['str'];
        echo "Original String = ".$s."<br/>";

        $u=strrev($s);
        echo "REVERSE String = ".$u."<br/>";
    ?>
    </body>
    </html>