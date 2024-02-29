<?php include('../../config/dbconfig.php'); ?>
<?php
$password=$_POST['password'];
$match1 = mysqli_query($conn,"Select * from users where email='".$_POST['email']."'");
$fetch1 = mysqli_fetch_assoc($match1);

if (password_verify($password, $fetch1['password'])) {
    // Password is correct
    if(!empty($fetch1)){
        if($fetch1['user_type'] == 1)
        {
            session_start();
            $_SESSION['email']=$_POST['email'];
            $_SESSION['name']=$fetch1['fname']. ' ' .$fetch1['lname'];
            $_SESSION['cmpny_id']=$fetch1['id'];
            $_SESSION['role']='Company';
            $_SESSION['successmsg']="1";
            header('location:../company/dashboard');
        }
        elseif($fetch1['user_type'] == 0)
        {
            session_start();
            $_SESSION['email']=$_POST['email'];
            $_SESSION['name']=$fetch1['fname']. ' ' .$fetch1['lname'];
            $_SESSION['cand_id']=$fetch1['id'];
            $_SESSION['role']='Candidate';
            $_SESSION['successmsg']="1";
            header('location:../candidate/dashboard');
        }
    }else{
        session_start();
        $_SESSION['successmsg']="0";
    }
} else {
    $_SESSION['successmsg']="Email Or Password Is Incorrect";
    header('location:../login');
    // Password is incorrect
}