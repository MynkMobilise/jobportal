<?php include('../../config/dbconfig.php'); ?>
<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstname1 = $_POST["firstname1"];
    $lastname1 = $_POST["lastname1"];
    $email = $_POST["email"];
    $cmpnyName = $_POST["companyname"];
    $password = $_POST["password"];
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Validate form data (for example, check if fields are not empty)
    if( $_POST["password"] == '' || $_POST["email"] == '')
    {
        echo "Please Enter Required Fields";
    }
    else
    {
        if($_POST["is_company"] == 1)
        {
            // SQL query to insert data
            $sql = "INSERT INTO users (fname, lname , email , password,user_type,cmpnyname) VALUES ('$firstname1','$lastname1', '$email','$hashedPassword',1,'$cmpnyName')";
            $msg = "You Are Successfully Registered As Company";
        }
        else
        {
            // SQL query to insert data
            $sql = "INSERT INTO users (fname, lname , email , password) VALUES ('$firstname1','$lastname1', '$email','$hashedPassword')";
            $msg = "You Are Successfully Registered As Candidate";
            header('location:../login');
        }
        // Check if the query is executed successfully
        if ($conn->query($sql) === TRUE) {
            echo $msg;
            header('location:../login');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            header('location:../register');
        }
    }
    
    // Process the data (for example, save to a database or send an email)
    
} else {
    // If the form is not submitted, redirect back to the form page or display an error message
    echo "Internal Server Error";
    header('location:../register');
}
?>