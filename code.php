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
        $_SESSION['status'] = "Registered Successfully.";
        $_SESSION['status_code'] = "success";
        header('Location: index.php');
    } else {
        // echo "Something Went Wrong!";
        $_SESSION['status'] = "Something Went Wrong!";
        $_SESSION['status_code'] = "error";
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
        $_SESSION['status'] = "Data Updated.";
        $_SESSION['status_code'] = "success";
        header('Location: index.php');
    } else {
        // echo "Data Not Updated!";
        $_SESSION['status'] = "Data Not Updated!";
        $_SESSION['status_code'] = "error";
        header('Location: index.php');
    }
}


// DELETE OPERATION
if(isset($_POST['delete_btn'])) {
    $delete_id = $_POST['delete_id'];

    $delete_query = "DELETE FROM register WHERE id = '$delete_id'";

    $delete_query_run = mysqli_query($conn, $delete_query);

    if($delete_query_run) {
        // echo "Data Deleted.";
        $_SESSION['status'] = "Data Deleted.";
        $_SESSION['status_code'] = "success";
        header('Location: index.php');
    } else {
        // echo "Data Not Deleted!";
        $_SESSION['status'] = "Data Not Deleted!";
        $_SESSION['status_code'] = "error";
        header('Location: index.php');
    }
}


// DELETE OPERATION
if(isset($_POST['delete_btn_set'])) {
    $del_id = $_POST['delete_id'];

    $delete_query = "DELETE FROM register WHERE id = '$del_id'";

    $delete_query_run = mysqli_query($conn, $delete_query);
}

?>