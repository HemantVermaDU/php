   <form action="prog2.php" method="post">
        Number 1:<input type="number" name="n1" required>
        Number 2:<input type="number" name="n2">
        Number 3:<input type="number" name="n3">
        <input type="submit" name="submit">
    </form>
	
	 <?php
        if(isset($_POST['submit']))
        {
            $m=$_POST['n1'];
            $n=$_POST['n2'];
            $o=$_POST['n3'];

            if($m>$n && $m>$o)
            {
                $max=$m;
            }
            else
            {
                if($n>$o)
                    $max=$n;
                else
                    $max=$o;
            }
            echo "Largest Number is ".$max;
        }
    ?>