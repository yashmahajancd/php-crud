<?php

require 'dbconfig.php';   // Database connection

// File Name
$filename = "Register_Data_" . date("Y-m-d") . ".csv";

// CSV Download Headers
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="' . $filename . '"');

// Output Stream
$output = fopen("php://output", "w");

// Column Headings
fputcsv($output, array(
    'ID',
    'First Name',
    'Last Name',
    'Email',
    'Contact'
));

// Fetch Data
$query = "SELECT * FROM register";
$query_run = mysqli_query($conn, $query);

// Write Data
while($row = mysqli_fetch_assoc($query_run))
{
    fputcsv($output, array(
        $row['id'],
        $row['fname'],
        $row['lname'],
        $row['email'],
        $row['contact']
    ));
}

fclose($output);
exit;

?>