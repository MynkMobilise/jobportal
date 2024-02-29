<?php include('layout/header.php');?>
<div class="dashboard-area mb-120" style="padding-top:20px;">
    <div class="container-fluid">
        <?php include('layout/sidebar.php');?>

    </div>
</div>
<?php 
$msg = '';
$cand_id = $_SESSION['cand_id'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $password = $_POST['password'];
   $confirmPassword = $_POST['confirmpassword'];
   $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
   if($password == $confirmPassword)
   {
    $usersql = "UPDATE `users` SET `password` = '$hashedPassword' WHERE `id` = $cand_id";
    $conn->query($usersql);
    $msg = "Password updated successfully";
    $color = "success";
   }
   else
   {
    $msg = "Password and confirm password does not match";
    $color = "danger";
   }
}
?>
<div class="col-lg-9">
    <div class="form-wrapper">
        <form class="profile-form" action="" method="POST">
            <div class="section-title2">
                <h5 class="d-flex align-items-baseline gap-1"><img src="assets/images/icon/profile-settings.svg" alt>
                    Profile Settings </h5>
            </div>
            <div class="change-password-area mb-40">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="info-title">
                            <h6>Change Your Password</h6>
                            <div class="dash"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-inner mb-25">
                            <label for="password">New Password*</label>
                            <div class="input-area">
                                <img src="assets/images/icon/lock-2.svg" alt>
                                <input type="password" name="password" id="password" placeholder="Password">
                                <i class="bi bi-eye-slash" id="togglePassword"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-inner mb-25">
                            <label for="password2">Confirm Password*</label>
                            <div class="input-area">
                                <img src="assets/images/icon/lock-2.svg" alt>
                                <input type="password" name="confirmpassword" id="password2"
                                    placeholder="Confirm Password" />
                                <i class="bi bi-eye-slash" id="togglePassword2"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <p class="text-<?php echo $color ?>"><?php echo $msg ?></p>
                    </div>
                    <div class="col-md-12 pt-10">
                        <div class="form-inner">
                            <button class="primry-btn-1 lg-btn w-unset" type="submit">Update Change</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="privacy-security-area">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="info-title">

                            <div class="dash"></div>
                        </div>
                    </div>
                    <div class="col-lg-12">


                    </div>
                    <div class="single-permission mb-30">


                    </div>
                    <div class="single-permission mb-3">


                    </div>
                    <div class="single-permission align-items-start">


                    </div>
                </div>
            </div>
    </div>
    <div class="col-md-12 pt-50">

    </div>
    </form>
</div>
</div>
</div>
</div>
</div>
<?php include('layout/footer.php');?>