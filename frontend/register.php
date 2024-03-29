<?php include('layout/header.php');?>

<div class="register-area mb-120" style="padding-top:20px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-wrapper">

                    <div class="register-tab">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                    aria-selected="true" >Candidate</button>
                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                    aria-selected="false">Company</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                aria-labelledby="nav-home-tab">
                                <form action="auth/register_process.php" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-inner mb-25">
                                                <label for="firstname1">First Name*</label>
                                                <div class="input-area">
                                                    <img src="assets/images/icon/user-2.svg" alt>
                                                    <input type="text" id="firstname1" name="firstname1"
                                                        placeholder="Mr. Robert">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-inner mb-25">
                                                <label for="lastname1">Last Name*</label>
                                                <div class="input-area">
                                                    <img src="assets/images/icon/user-2.svg" alt>
                                                    <input type="text" id="lastname1" name="lastname1"
                                                        placeholder="Jonson">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-inner mb-25">
                                                <label for="username">User Name*</label>
                                                <div class="input-area">
                                                    <img src="assets/images/icon/user-2.svg" alt>
                                                    <input type="text" id="username" name="username"
                                                        placeholder="robertjonson">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-inner mb-25">
                                                <label for="email">Email*</label>
                                                <div class="input-area">
                                                    <img src="assets/images/icon/email-2.svg" alt>
                                                    <input type="text" id="email" name="email"
                                                        placeholder="info@example.com">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-inner mb-25">
                                                <label for="password">Password*</label>
                                                <input type="password" name="password" id="password"
                                                    placeholder="Password" />
                                                <i class="bi bi-eye-slash" id="togglePassword"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-inner">
                                                <label for="password2">Confirm Password*</label>
                                                <input type="password" name="confirmpassword" id="password2"
                                                    placeholder="Confirm Password" />
                                                <i class="bi bi-eye-slash" id="togglePassword2"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div
                                                class="form-agreement form-inner d-flex justify-content-between flex-wrap">
                                                <div class="form-group two">
                                                    <input type="checkbox" id="html1">
                                                    <label for="html1">Here, I will agree company terms &
                                                        conditions.</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-inner">
                                                <button class="primry-btn-2" type="submit">Sign Up</button>
                                            </div>
                                        </div>
                                        <h6>Already have an account? <a href="login"> Login</a> Here</h6>
                                        <input type="hidden" id="isCompanyCheck" name="is_company" value="0">
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                aria-labelledby="nav-profile-tab">
                                <form action="auth/register_process.php" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-inner mb-25">
                                                <label for="firstname">First Name*</label>
                                                <div class="input-area">
                                                    <img src="assets/images/icon/user-2.svg" alt>
                                                    <input type="text" id="firstname" name="firstname1"
                                                        placeholder="Mr. Robert">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-inner mb-25">
                                                <label for="lastname">Last Name*</label>
                                                <div class="input-area">
                                                    <img src="assets/images/icon/user-2.svg" alt>
                                                    <input type="text" id="lastname" name="lastname1"
                                                        placeholder="Jonson">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-inner mb-25">
                                                <label for="username">User Name*</label>
                                                <div class="input-area">
                                                    <img src="assets/images/icon/user-2.svg" alt>
                                                    <input type="text" id="username1" name="username"
                                                        placeholder="robertjonson">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-inner mb-25">
                                                <label for="email">Email*</label>
                                                <div class="input-area">
                                                    <img src="assets/images/icon/email-2.svg" alt>
                                                    <input type="text" id="email1" name="email"
                                                        placeholder="info@example.com">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-inner mb-25">
                                                <label for="companyname">Company Name*</label>
                                                <div class="input-area">
                                                    <img src="assets/images/icon/company-2.svg" alt>
                                                    <input type="text" id="companyname" name="companyname"
                                                        placeholder="Mr. Robert">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-inner mb-25">
                                                <label for="password">Password*</label>
                                                <input type="password" name="password" id="password3"
                                                    placeholder="Password" />
                                                <i class="bi bi-eye-slash" id="togglePassword3"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-inner">
                                                <label for="password4">Confirm Password*</label>
                                                <input type="password" name="confirmpassword" id="password4"
                                                    placeholder="Confirm Password" />
                                                <i class="bi bi-eye-slash" id="togglePassword4"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div
                                                class="form-agreement form-inner d-flex justify-content-between flex-wrap">
                                                <div class="form-group two">
                                                    <input type="checkbox" id="html">
                                                    <label for="html">Here, I will agree company terms &
                                                        conditions.</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-inner">
                                                <button class="primry-btn-2" type="submit">Sign Up</button>
                                            </div>
                                        </div>
                                        <h6>Already have an account? <a href="login"> Login</a> Here</h6>

                                    </div>
                                    <input type="hidden" id="isCompanyCheck" name="is_company" value="1">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('layout/footer.php');?>