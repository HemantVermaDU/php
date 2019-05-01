    /* Create a login page having user name and password. On clicking submit, a welcome message should be displayed if the user is already registered (i.e. name is present in the database) otherwise error message should be displayed.*\
	<html>
    <head>
        <title>PHP program7 - tutorialsduniya</title>
    </head>
    <body>
        <form method="post" action="welcome.php">
            <h1>LOGIN PAGE</h1>
            Username:<input type="text" name="user" placeholder="user" required><br/>
            Password:<input type="password" name="pass" required><br/>
            <input type="Submit">
        </form>
   
<?php
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="users";
        $conn=new mysqli($servername,$username,$password,$dbname);

        if($conn->connect_error)
        {
            die("Connection failed".$conn->connect_error);
        }

        $u=mysqli_real_escape_string($conn,$_POST['user']);
        $p=mysqli_real_escape_string($conn,$_POST['pass']);
        $sql="SELECT * FROM user WHERE uname='$u' AND password='$p'";

        if($r=mysqli_query($conn,$sql))
        {
            if(mysqli_num_rows($r)==1)
            { 
                echo "Welcome ".$u;
            }
        }
		  else
        {
            echo "Invalid User Credentials";
        }

        mysqli_close($conn);
    ?>
 </body>
    </html>