<?php 
$title = 'Edit error';
include 'includes/header.php';
require_once 'db/conn.php';
// get values from post operation
if (isset($_POST['submit'])) {
    // extract values from the $_POST array
    $id = $_POST['id'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $contact = $_POST['phone'];
    $specialty = $_POST['specialty'];

    // call CRUD function
    $result = $crud->editAttendee($id,$fname, $lname, $dob, $email, $contact, $specialty);

    // redirect to viewrecords.php
    if($result){
        header("Location: viewrecords.php");
    } else {
        echo '<h1 class="text-center text-danger mb-4">There was an error in processing.</h1>';
    }
} else {
    echo '<h1 class="text-center text-danger mb-4">You shouldn\'nt be here...</h1>';
}

?>