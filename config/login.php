<?php
include('dbconfig.php');
$password=md5($_POST['password']);
$match1 = mysqli_query($conn,"Select * from admin_login where username='".$_POST['username']."' and password='".$password."'");
$fetch1 = mysqli_fetch_assoc($match1);
if(!empty($fetch1)){
    session_start();
	$_SESSION['username']=$_POST['username'];
	$_SESSION['role']='SUPER ADMIN';
	$_SESSION['successmsg']="1";
	header('location:../dashboard');
}else{
	session_start();
	$_SESSION['successmsg']="0";
	header('location:../index');
}
if(empty($fetch1)){
$match = mysqli_query($conn,"Select * from staff where email='".$_POST['username']."' and password='".$password."'");
$fetch = mysqli_fetch_assoc($match);
if(!empty($fetch)){
    session_start();
	$_SESSION['username']=$_POST['username'];
	$_SESSION['role']=$fetch['roleid'];
	$_SESSION['successmsg']="1";
	header('location:../dashboard');
}else{
	session_start();
	$_SESSION['successmsg']="0";
	header('location:../index');
}
}