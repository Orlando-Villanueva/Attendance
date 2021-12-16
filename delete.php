<?php
require_once 'includes/auth_check.php';
require_once 'db/conn.php';

if (!isset($_GET['id'])) {
    echo "<h1 class='text-danger'> Please try again later.</h1>";
    header("Location: viewrecords.php");

} else {
    // get ID values
    $id = $_GET['id'];
    // call delete function
    $result = $crud->deleteAttendee($id);
    // redirect to list
    if ($result) {
        header("Location: viewrecords.php");
    } else {
        echo '';
    }
}
