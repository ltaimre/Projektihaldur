<?php

/*ühendub andmebaasiga*/
connect_db();

/*logib eksisteeriva kasutaja sisse */
if(isset($_POST['login']))
{
 $username = htmlspecialchars($_POST['username']);
 $password = htmlspecialchars($_POST['password']);
 $result=mysqli_query($GLOBALS['connection'],"SELECT * FROM ltaimre_users WHERE username='$username'");
 $row=mysqli_fetch_array($result);

 if($row['password']==SHA1($password))
  {
  $_SESSION['user'] = htmlspecialchars($row['user_ID']);
  $_SESSION['username'] = $username;
  
  echo $row['user_ID'];
	header("Location: ?page=mainview");
 }
 else
 {   
  ?>
	 
	 <script>alert('Vale kasutajanimi või parool');</script>
        <?php
 }
 
}
include("views/login.html");
/*sulgeb andmebaasiühenduse */
close_db()
?>


