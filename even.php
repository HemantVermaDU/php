   <form action="even.php" method="post">
        Enter the number of first even numbers you want to print:
        <input type="number" name="n1" required>
        <input type="submit" name="submit" value="Print">
    </form>
	
	    <?php
        if(isset($_POST['submit']))
        {
            $m=$_POST['n1'];
            
            if($m>0)
            {
                for($i=0,$j=1; $j<=$m; $j++,$i=$i+2)
                {
                    echo $i." ";
                }
            }
            else
                echo $m." is not a Non-Negative Integer.";
        }
    ?>