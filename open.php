<?php
session_start(); //alustab sessiooni
require_once('functions.php'); 
connect_db(); //ühedub andmebaasiga

if(isset($_SESSION['user'])!="") //kontrollib, ega kasutaja pole juba sisse logitud
{
 header("Location: home.php");
}

if(isset($_POST['signup']))
{
 $username = mysqli_real_escape_string($GLOBALS['connection'], $_POST['username']);
 $password = SHA1(mysqli_real_escape_string($GLOBALS['connection'], $_POST['password']));
 
 if(mysqli_query($GLOBALS['connection'], "INSERT INTO ltaimre_users(username,password) VALUES('$username','$password')"))
 {
  ?>
        <script>alert('successfully registered ');</script>
        <?php
 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }
}

if(isset($_POST['login']))
{
 $username = mysqli_real_escape_string($GLOBALS['connection'], $_POST['username']);
 $password = mysqli_real_escape_string($GLOBALS['connection'], $_POST['password']);
 $result=mysqli_query($GLOBALS['connection'],"SELECT * FROM ltaimre_users WHERE username='$username'");
 $row=mysqli_fetch_array($result);
 
 if($row['password']==SHA1($password))
 {
  $_SESSION['user'] = $row['user_ID'];
  
  echo $row['user_ID'];
  header("Location: home.php");
 }
 else
 {   
  ?>
	 
	 <script>alert('wrong details');</script>
        <?php
 }
 
}
include "Views/Login.html";
  ?>


