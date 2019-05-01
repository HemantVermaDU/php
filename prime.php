 <form action="prime.php" method="post">
        Enter a Number:<input type="number" name="n1" autofocus required>
        <input type="submit" name="submit" value="Check Prime">
    </form>
<?php
        if(isset($_POST['submit']))
        {
            $m=$_POST['n1'];
            if($m>1)
            {
                $f=-1;
                for($i=2; $i<=$m/2; $i++)
                {
                    if($m % $i==0)
                    {
                        $f=1;break;
                    }
                }

                if($f==1)
                    echo "It is not a Prime Number<br/>";
                else
                    echo "It is a Prime Number<br/>";
            }
            else
                echo $m." is not a Non-Negative Integer Greater than 1.";
        }
    ?>