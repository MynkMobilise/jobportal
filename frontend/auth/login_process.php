<?php include('../../config/dbconfig.php'); ?>
<?php
$password=$_POST['password'];
$match1 = mysqli_query($conn,"Select * from users where email='".$_POST['email']."'");
$fetch1 = mysqli_fetch_assoc($match1);

if (password_verify($password, $fetch1['password'])) {
    // Password is correct
    if(!empty($fetch1)){
        session_start();
        $_SESSION['email']=$_POST['email'];
        $_SESSION['role']='Candidate';
        $_SESSION['successmsg']="1";
        header('location:../candidate/dashboard');
    }else{
        session_start();
        $_SESSION['successmsg']="0";
        header('location:../index');
    }
} else {
    // Password is incorrect
}