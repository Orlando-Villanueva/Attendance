<?php
    $title = 'View Record';
    include 'includes/header.php';
    require_once 'db/conn.php';

    // Get attendee by id
    if(!isset($_GET['id'])){
        echo "<h1 class='text-danger'> Please check details and try again </h1>";

    } else {
        $id = $_GET['id'];
        $result = $crud->getAttendeeDetails($id);
?>

    <div id="cardDetail" class="card " style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
                <?php echo $result['firstname'] . ' ' . $result['lastname']; ?>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                <?php echo $result['name']; ?>
            </h6>
            <p class="card-text">
                Date Of Birth: <?php echo $result['birthdate']; ?>
            </p>
            <p class="card-text">
                Email Adress: <?php echo $result['email']; ?>
            </p>
            <p class="card-text">
                Contact Number:
                <?php 
                echo $result['contact']; 
            ?>
            </p>
        </div>
        <div class="btn-group">
            <a href="viewrecords.php" class="btn bg-gradient btn-primary btnView">Go back</a>
            <a href="edit.php?id=<?php echo $result['attendee_id']?> " class="btn bg-gradient btn-warning btnView">Update</a>
            <a onclick="return confirm('Are you sure want to delete this record?')"
                href="delete.php?id=<?php echo $result['attendee_id']?> " class="btn bg-gradient btn-danger btnView">Delete</a>
        </div>
    </div>


    <?php } ?>

    <?php include 'includes/footer.php'; ?>