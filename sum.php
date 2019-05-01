<form action="sum.php" method="post">
        Enter the number of first odd numbers you want to get sum of:
        <input type="number" name="n1" required>
        <input type="submit" name="submit" value="Print">
    </form>
	
	   <?php
        if(isset($_POST['submit']))
        {
            $m=$_POST['n1'];

            if($m>0)
            {
                $s=0;
                for($i=1,$j=1;$j<=$m;$j++,$i=$i+2)
                {
                    $s+=$i;
                }
                echo "Sum is ".$s;
            }
            else
                echo $m." is not a Non-Negative Integer.";
        }
    ?>