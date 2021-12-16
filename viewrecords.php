<?php
    $title = 'Attendees List';
    require_once 'includes/header.php';
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';

    $result = $crud->getAttendees();
?>

<h1 class="h1 text-center ">Attendees List</h1>
<div class="container mt-3" id="recordsContainer">

    <table class="table table-hover table-striped table-borderless">
        <thead class="table-primary">
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <!-- <th scope="col">Date of Birth</th>
            <th scope="col">Email Address</th>
            <th scope="col">Contact</th> -->
            <th scope="col">Specialty</th>
            <th scope="col">Actions</th>
        </thead>
        <tbody>
            <?php while($r = $result->fetch(PDO::FETCH_ASSOC)) { ?>

            <tr>
                <th score="row"> <?php echo $r['attendee_id']?> </td>
                <td> <?php echo $r['firstname']?> </td>
                <td> <?php echo $r['lastname']?> </td>
                <!-- <td> <?php //echo $r['birthdate']?> </td>
                <td> <?php //echo $r['email']?> </td>
                <td> <?php //echo $r['contact']?> </td> -->
                <td> <?php echo $r['name']?> </td>

                <td>
                    <div class="btn-group">
                        <a href="view.php?id=<?php echo $r['attendee_id']?> " class="btn bg-gradient btn-primary">Details</a>
                        <a href="edit.php?id=<?php echo $r['attendee_id']?> " class="btn bg-gradient btn-warning">Update</a>
                        <a onclick="return confirm('Are you sure want to delete this record?')" href="delete.php?id=<?php echo $r['attendee_id']?> " class="btn bg-gradient btn-danger">Delete</a>
                    </div>
                </td>

            </tr>
            <?php }  ?>
        </tbody>
    </table>
</div>



<?php include 'includes/footer.php'; ?>