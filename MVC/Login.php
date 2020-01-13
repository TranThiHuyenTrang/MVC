<!DOCTYPE html>
<html>
<head>
	<title></title>

	<?php
	require "database.php";
 	if (isset($_POST["login"])){                                      
        $username = $_POST['username'];                                      
        $password = $_POST['password'];                                                              
        $sql = "SELECT * from user1 where username='".$username."' and password='".$password."'";
        $user = $db->query($sql)->fetch_all();
        echo $sql;

        if(count($user)>0){
        	echo "thanh cong";
        }  else{
        	echo "That bai";
        }
    }
	?>
</head>
<body>
	<form action="#" method="post">
		<input type="" name="username">
		<input type="" name="password">
		<button name="login">Login</button>
	</form>
</body>
</html>