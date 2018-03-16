<!DOCTYPE html>
<?php
include ('server.php');
session_start();
		if (isset($_POST['Login'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			$qry = "SELECT * FROM user WHERE `username` = '$username' AND `password`='$password';";
			$sql = mysqli_query($conn,$qry);
				 	
				 		 if(mysqli_num_rows($sql)>0) {
    			    	    		$row=mysqli_fetch_assoc($sql);
    			    	    		$_SESSION['uid'] = $row['uid']; 
    			    	    		$_SESSION['username'] = $row['username'];
    			    	    		$_SESSION['password'] = $row['password'];    			    	 
									$_SESSION['success'] = "You are now logged in";
        			   		 		header('location:index.php');
        				}
				
		}
?>

<html>
<style>
.div3{
border:3px;
margin:50px;
padding:5px;
color:black;
background:green;
}
</style>
<head>
<title>PRODUCT REVIEW</title>
</head>
  <body>
      <h1>LOGIN PAGE</h1>
      
        <ul class=".div3">
        <form action="login_auth.php" method="GET">

  <li>username:<input type="text" name="username" placeholder="enter ur name"/></li>
            <br><br>
   <li>password:<input type="password" name="password" placeholder="enter the password"/></li>
   <br><br>
            <input type="submit"/>
            
        </form>
        </ul>
</body>
</html>
