<?php include('dbconfig.php')?>

<?php

// INSERT OPERATION
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


// UPDATE OPERATION
if(isset($_POST['update_btn'])) {
    $update_id = $_POST['update_id'];
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $contact = $_POST['contact'];

    $update_query = "UPDATE register SET fname = '$fname', lname = '$lname', email = '$email', password = '$password', contact = '$contact' WHERE id = '$update_id'";

    $update_query_run = mysqli_query($conn, $update_query);

    if($update_query_run) {
        // echo "Data Updated.";
        header('Location: index.php');
    } else {
        // echo "Data Not Updated!";
        header('Location: index.php');
    }
}


// DELETE OPERATION
if(isset($_POST['delete_btn'])) {
    $delete_id = $_POST['delete_id'];
}

?>