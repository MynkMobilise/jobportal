<?php include('../../../config/dbconfig.php'); ?>
<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $cand_id = $_POST["cand_id"];
    $company_id = $_POST['company_id'];

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];

    $age = $_POST["age"];
    $curr_loc = $_POST["curr_loc"];
    $phone = $_POST["phone"];
    $curr_job = $_POST["curr_job"];
    $designation = $_POST["designation"];
    $qual = $_POST["qual"];
    $lang = $_POST["lang"];
    $desc = $_POST["desc"];

    if($cand_id > 0)
    {
        // SQL query to insert data
        // $sql = "INSERT INTO users (fname, lname , email , password,user_type,cmpnyname) VALUES ('$firstname1','$lastname1', '$email','$hashedPassword',1,'$cmpnyName')";
        // $sql = "UPDATE `users` SET `id`='[value-1]',`fname`='$fname',`lname`='$lname',`email`='$email',`password`='[value-5]',`user_type`='[value-6]',`cmpnyname`='[value-7]',`cand_id`='[value-8]',`created_at`='[value-9]' WHERE 1";
        $usersql = "UPDATE `users` SET`fname`='$fname',`lname`='$lname',`email`='$email' WHERE `id` = $cand_id";
        $candDetailsSql = "UPDATE `cand_detail` SET `age`='$age',`phone`='$phone',`loc_id`='$curr_loc',`curr_job`='$curr_job',`designation`='$designation',`lang`='$lang',`qual`='$qual',`desc`='$desc' WHERE `cand_id` = $cand_id";
        if($conn->query($usersql) == TRUE)
        {
            $msg = "Your Profile Updated Successfully";
        }
        if($conn->query($candDetailsSql))
        {
            $msg = "Your Profile Details Updated Successfully";
        }
        header('location:../my-profile.php');
    }
    elseif($company_id > 0)
    {
        // SQL query to insert data
        // $sql = "INSERT INTO users (fname, lname , email , password) VALUES ('$firstname1','$lastname1', '$email','$hashedPassword')";
        $msg = "You Are Successfully Registered As Candidate";
        header('location:../login');
    }
    // Check if the query is executed successfully
    // if ($conn->query($sql) === TRUE) {
    //     echo $msg;
    //     header('location:../login');
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    //     header('location:../register');
    // }
    
} else {
    // If the form is not submitted, redirect back to the form page or display an error message
    echo "Internal Server Error";
    header('location:../register');
}
?>