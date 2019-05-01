 <form method="post">
        Enter a String:<input type="text" name="s1" autofocus required>
        <input type="submit" name="submit" value="Check Palindrome">
    </form>
	
	    <?php
        if(isset($_POST['submit']))
        {
            $m=$_POST['s1'];
            $r=strrev($m);

            if(strcasecmp($m,$r)==0)
            {
                echo "It is a Palindrome.";
            }
            else
                echo "It is not a Palindrome.";	
        }
    ?>