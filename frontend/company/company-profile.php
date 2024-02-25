<?php include('layout/header.php');?>
<div class="dashboard-area mb-120" style="padding-top:20px;">
<div class="container-fluid">
<?php include('layout/sidebar.php');?>

</div>
</div>
<div class="col-lg-9">
<div class="dashboard-inner">
<div class="form-wrapper">

<form class="profile-form">
<div class="section-title2">
<h5>Company Information:</h5>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-inner mb-25">
<label for="companyname">Company Name*</label>
<div class="input-area">
<img src="assets/images/icon/company-2.svg" alt>
<input type="text" id="companyname" name="companyname" placeholder="Elite Hangstroman">
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-inner mb-25">
<label>Company Type*</label>
<div class="input-area">
<img src="assets/images/icon/category-2.svg" alt>
<select class="select1">
<option value="0">Digital Agency</option>
<option value="1">Digital Marketing Agency</option>
<option value="2">Software Company</option>
</select>
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-inner mb-25">
<label for="company">Company Size*</label>
<div class="input-area">
<img src="assets/images/icon/person-2.svg" alt>
<input type="text" id="company" name="company" placeholder="40 Person">
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-inner mb-25">
<label for="email">Email*</label>
<div class="input-area">
<img src="assets/images/icon/email-2.svg" alt>
<input type="text" id="email" name="email" placeholder="info@example.com">
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-inner mb-25">
<label for="location">Location*</label>
<div class="input-area">
<img src="assets/images/icon/map-2.svg" alt>
<input type="text" id="location" name="location" placeholder="Type Location">
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-inner mb-25">
<label for="website">Website Link*</label>
<div class="input-area">
<img src="assets/images/icon/website-2.svg" alt>
<input type="text" id="website" name="website" placeholder="https://example.com/">
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-inner mb-25">
<label for="facebook">Facebook</label>
<div class="input-area">
<img src="assets/images/icon/facebook-2.svg" alt>
<input type="text" id="facebook" name="facebook" placeholder="https://example-facebook.com/">
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-inner mb-25">
<label for="twitter">Twitter</label>
<div class="input-area">
<img src="assets/images/icon/twiter-2.svg" alt>
<input type="text" id="twitter" name="twitter" placeholder="https://example-twitter.com/">
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-inner mb-25">
<label for="linkedin">LinkedIn</label>
<div class="input-area">
<img src="assets/images/icon/linkedin-2.svg" alt>
<input type="text" id="linkedin" name="linkedin" placeholder="https://example-linkedin.com/">
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-inner mb-25">
<label for="pinterest">Pinterest</label>
<div class="input-area">
<img src="assets/images/icon/pinterest-2.svg" alt>
<input type="text" id="pinterest" name="pinterest" placeholder="https://example-pinterest.com/">
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-inner mb-25">
<label for="dribble">Dribbble</label>
<div class="input-area">
<img src="assets/images/icon/dribble-2.svg" alt>
<input type="text" id="dribble" name="dribble" placeholder="https://example-dribbble.com/">
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-inner mb-25">
<label for="behance">Behance</label>
<div class="input-area">
<img src="assets/images/icon/behance-2.svg" alt>
<input type="text" id="behance" name="behance" placeholder="https://example-behance.com/">
</div>
</div>
</div>
<div class="col-lg-12">
<div class="company-images-area mb-50">
<div class="row g-lg-4 gy-5">
<div class="col-lg-6 devaider1 position-relative">
<div class="company-logo-area">
<h5>Company Logo: </h5>
<div class="drag-area">
<p>Upload Logo</p>
<button type="button" class="upload-btn"><i class="bi bi-plus-lg"></i></button>
<input type="file" hidden>
</div>
<span>Maximum File Upload: 2 MB</span>
</div>
</div>
<div class="col-lg-6">
<div class="company-cover-photo-area">
<h5>Company Cover Photo: </h5>
<div class="drag-area" id="dragArea2">
<p>Upload Photo</p>
<button type="button" class="upload-btn"><i class="bi bi-plus-lg"></i></button>
<input type="file" hidden>
</div>
<span>Maximum File Upload: 5 MB</span>
</div>
</div>
</div>
</div>
</div>
<div class="section-title2">
<h5>Working Area:</h5>
</div>
<div class="work-area-row">
<div class="row">
<div class="col-md-6">
<div class="form-inner mb-25">
<label for="working-field">Working Field*</label>
<div class="input-area">
<img src="assets/images/icon/company-2.svg" alt>
<input type="text" id="working-field" name="working-field" placeholder="Frontend Developer">
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-inner mb-25">
<label>Add Icon*</label>
<div class="input-area">
<img src="assets/images/icon/company-2.svg" alt>
<input type="file">
</div>
</div>
</div>
<div class="col-md-12">
<div class="form-inner mb-40">
<label for="description">Short Description*</label>
<textarea name="description" id="description" placeholder="Company Details*"></textarea>
</div>
</div>
</div>
</div>
<div class="add-remove-btn d-flex align-items-center justify-content-between mb-50">
<div class="add-row">
<button type="button" class="addwork-area-row">Add Working Area+</button>
</div>
</div>
<div class="col-md-12">
<div class="form-inner">
<button class="primry-btn-2 lg-btn w-unset" type="submit">Update Change</button>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<?php include('layout/footer.php');?>

