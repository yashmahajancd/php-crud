<?php include('dbconfig.php')?>

<?php

if (isset($_POST['register_btn'])) {
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $contact = $_POST['contact'];

    $query = "INSERT INTO register (fname, lname, email, password, contact) VALUES ('$fname', '$lname', '$email', '$password', '$contact')";

    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        // echo "Registered Successfully.";
        header('Location: index.php');
    } else {
        // echo "Something Went Wrong!";
        header('Location: register.php');
    }
}

?>