<?php
$title = 'Update Attendee';
include 'includes/header.php';
require_once 'includes/auth_check.php';
require_once 'db/conn.php';

$results = $crud->getSpecialities();

if(!isset($_GET['id'])){
    include 'includes/error.php';
    header("Location: viewrecords.php");
} else {
    $id = $_GET['id'];
    $attendee = $crud->getAttendeeDetails($id);
?>

<h1 class="text-center">Update Attendee</h1>

<!-- form container  -->
<div class="container" id="registerContainer">

    <form method="post" action="editpost.php" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $attendee['attendee_id'] ?>">
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input required value="<?php echo $attendee['firstname'] ?>" type="text" class="form-control" id="firstname"
                name="firstname">
        </div>
        <div class="form-group mt-2">
            <label for="lastname">Last Name</label>
            <input required value="<?php echo $attendee['lastname'] ?>" type="text" class="form-control" id="lastname"
                name="lastname">
        </div>
        <div class="form-group mt-2">
            <label for="dob">Date Of Birth</label>
            <input value="<?php echo $attendee['birthdate'] ?>" type="text" class="form-control" id="dob" name="dob">
        </div>
        <div class="form-group mt-2">
            <label for="specialty">Area of Expertise</label>
            <select class="form-control" id="specialty" name="specialty">

                <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
                    <option value="<?php echo $r['specialty_id'] ?>"
                        <?php if($r['specialty_id'] == $attendee['specialty_id']) echo 'selected'  ?>>
                        <?php echo $r['name']; ?>
                    </option>
                <?php }?>

            </select>
        </div>
        <div class="form-group mt-2">
            <label for="email">Email address</label>
            <input required value="<?php echo $attendee['email'] ?>" type="email" class="form-control" id="email"
                name="email" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group mt-2">
            <label for="phone">Contact Number</label>
            <input value="<?php echo $attendee['contact'] ?>" type="text" class="form-control" id="phone" name="phone"
                aria-describedby="phoneHelp">
            <small id="phoneHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
        </div>
        <br />
     
        <button id="btnUpdate" type="submit" name="submit" class="btn btn-warning bg-gradient">Save Changes</button>
        <a id="btnBack" href="viewrecords.php" class="btn bg-gradient btn-primary">Go back</a>
    </form>
</div>



<?php
}
include 'includes/footer.php';
?>