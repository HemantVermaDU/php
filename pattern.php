 <form action="pattern.php" method="post">
        Enter the number of Rows of Pattern to print:
        <input type="number" name="n1" required>
        <input type="submit" name="submit" value="Print">
    </form>
	
	 <?php
        if(isset($_POST['submit']))
        {
            $m=$_POST['n1'];
            if($m>0)
            {
                for($i=1; $i<=$m; $i++)
                {
                    for($j=1; $j<=$i; $j++)
                    {
                        echo "* ";
                    }
                    echo "<br/>";
                }
            }
            else
                echo $m." is not a Non-Negative Integer.";
        }
    ?>