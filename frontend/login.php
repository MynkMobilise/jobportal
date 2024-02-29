<?php
session_start();
if($_SESSION != [])
{
    header('location:../candidate/dashboard');
}
?>
<?php include('layout/header.php');
?>


<div class="login-area mb-120" style="padding-top:20px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-wrapper">

                    <form action="auth/login_process.php" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-inner mb-25">
                                    <label for="email">Email*</label>
                                    <div class="input-area">
                                        <img src="assets/images/icon/email-2.svg" alt>
                                        <input type="email" id="email" name="email" placeholder="info@example.com">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-inner">
                                    <label for="email">Password*</label>
                                    <input type="password" name="password" id="password" placeholder="Password" />
                                    <i class="bi bi-eye-slash" id="togglePassword"></i>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-agreement form-inner d-flex justify-content-between flex-wrap">

                                </div>
                            </div>
                            <div class="col-lg-12"></div>
                            <div class="col-lg-12">
                                <div class="form-inner">
                                    <button class="primry-btn-2" type="submit">LogIn</button>
                                </div>
                            </div>
                            <h6>Don’t have an account? <a href="register">Sign Up</a></h6>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('layout/footer.php');?>

