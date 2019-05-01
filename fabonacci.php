<form action="fabonacci.php" method="post">
        Enter the number of terms of Fibonacci series to be diaplayed:
        <input type="number" name="n1" autofocus required>
        <input type="submit" name="submit" value="Print">
    </form>
	
	 <?php
        function fib($a,$b,$m)
        {
            if($m==2)
                return;

            if($m>2)
            {
                $c=$a+$b;
                echo " ".$c;
                fib($b,$c,$m-1);
            }
        }

        if(isset($_POST['submit']))
        {
            $m=$_POST['n1'];
            if($m>=0)
            {
                if($m==0)
                    echo " ";

                if($m==1)
                    echo "0 ";

                if($m>=2)
                {
                    echo "0 1";
                    fib(0,1,$m);
                }	
            }
            else
                echo $m." is not a Non-Negative Integer.";
        }
    ?>
