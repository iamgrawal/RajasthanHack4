<?php
session_start(); 
include('database.php');
$user=$_SESSION['user'];
$ses_sql="SELECT * from user WHERE username='$user_check'";
$result_ses=$con->query($ses_sql);
if(!isset($_SESSION['login_user']))
{
	header('location:../main2.php');
}
 ?>