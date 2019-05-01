  <!Doctype html>
    <head>
        <title>PHP program3 - Tutorialsduniya</title>
    </head>
    <body>
        <form method="POST" action="birthday.php">
            Enter Your Upcoming Birthday: <input type="date" name="bd" required><br/>
            <input type="Submit">
        </form>
      <?php
        $b=$_POST['bd'];
        $list=explode('-',$b);
        $ubd=mktime(0,0,0,$list[1],$list[2],$list[0]);

        $t=time();

        $diff=($ubd-$t);
        $days=(int)($diff/86400);
        
        echo "Number of days left->".$days;
    ?>
	</body>
    </html> 