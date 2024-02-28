<?php include('layout/header.php');?>
<?php
$sql = mysqli_query($conn,"SELECT users.*, cand_detail.*,locations.* FROM users
LEFT JOIN cand_detail ON users.id = cand_detail.cand_id
LEFT JOIN locations ON locations.id = cand_detail.loc_id
WHERE users.email = '".$_SESSION['email']."'");
$fetch = mysqli_fetch_assoc($sql);
?>
<div class="dashboard-area mb-120" style="padding-top:20px;">
    <div class="container-fluid">
        <?php include('layout/sidebar.php');?>

    </div>
</div>
<div class="col-lg-9">
    <div class="my-profile-inner">
        <div class="form-wrapper mb-60">
            <div class="section-title">
                <h5>My Profile </h5>
            </div>
            <form action="auth/update_cand_process.php" method="post" class="profile-form">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-inner mb-25">
                            <label>First Name*</label>
                            <div class="input-area">
                                <img src="assets/images/icon/user-2.svg" alt>
                                <input type="text" value="<?php echo $fetch['fname'] ?>" placeholder="Mr. Robert">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-inner mb-25">
                            <label>Your Age*</label>
                            <div class="input-area">
                                <img src="assets/images/icon/clock-2.svg" alt>
                                <input type="text" value="<?php echo $fetch['age'] ?>" placeholder="21 Years">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-inner mb-25">
                            <label>Current Location*</label>
                            <div class="input-area">
                                <img src="assets/images/icon/map-2.svg" alt>
                                <input type="text" placeholder="Mirpur, Dhaka">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-inner mb-25">
                            <label>Phone Number*</label>
                            <div class="input-area">
                                <img src="assets/images/icon/phone-2.svg" alt>
                                <input type="text" value="<?php echo $fetch['phone'] ?>" placeholder="+880-17 *** *** **">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-inner mb-25">
                            <label>Email*</label>
                            <div class="input-area">
                                <img src="assets/images/icon/email-2.svg" alt>
                                <input type="email" value="<?php echo $fetch['email'] ?>" placeholder="info@example.com">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-inner mb-25">
                            <label>Website Link*</label>
                            <div class="input-area">
                                <img src="assets/images/icon/website-2.svg" alt>
                                <input type="text" placeholder="https://example.com/">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-inner mb-25">
                            <label>Current Job Place*</label>
                            <div class="input-area">
                                <img src="assets/images/icon/company-2.svg" alt>
                                <input type="text" value="<?php echo $fetch['curr_job'] ?>" placeholder="Company Name">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-inner mb-25">
                            <label>Designation*</label>
                            <div class="input-area">
                                <img src="assets/images/icon/designation-2.svg" alt>
                                <input type="text" value="<?php echo $fetch['designation'] ?>" placeholder="UI/UX Engineer">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-inner mb-25">
                            <label>Qualification*</label>
                            <div class="input-area">
                                <img src="assets/images/icon/qualification-2.svg" alt>
                                <select class="select1">
                                    <option selected><?php echo $fetch['qual'] ?></option>
                                    <option value="0">Bachelor Degree in CSE</option>
                                    <option value="1">IGCSE</option>
                                    <option value="2">AS</option>
                                    <option value="4">A Level</option>
                                    <option value="5">Matriculated</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-inner mb-25">
                            <label>Language*</label>
                            <div class="input-area">
                                <img src="assets/images/icon/language-2.svg" alt>
                                <select class="select1">
                                    <option value="0">Bangla</option>
                                    <option value="1">English</option>
                                    <option value="2">Spanish</option>
                                    <option value="4">Italian</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-inner mb-50">
                            <label>Description*</label>
                            <textarea placeholder="Write something about yourself.........."><?php echo $fetch['desc'] ?></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-inner">
                            <button class="primry-btn-2 lg-btn w-unset" type="submit">Update Profile</button>
                        </div>
                    </div>
                </div>
                <input type="hidden" value="<?php echo $fetch['cand_id'] ?>">
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
<?php include('layout/footer.php');?>