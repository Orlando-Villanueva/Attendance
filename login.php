<?php
$title = 'User Login';
include 'includes/header.php';
require_once 'db/conn.php';

//If data was submitted with a POST request
if($_SERVER['RESQUEST_METHOD'] == 'POST'){
    
}
?>

<div id="containerLogin" class="container mt-3">
    <h1 class="h1 text-center"><?php echo $title ?></h1>

    <form method="POST" id="formLogin" action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" class="row mt-1">
        <div class="form-group col-12">

            <label for="username" class="form-label">Username :</label>
            <input type="text" class="form-control" id="username" name="username" value="<?php if($_SERVER['RESQUEST_METHOD'] == 'POST') echo $_POST['username'];?>" required>
            <?php //if(empty($username) && $_SERVER['REQUEST_METHOD'] === 'POST') {?>
            <!-- <p class="text-danger"> <?php //$username_error;?> </p> -->
            <?php //}?>
        </div>
        <div class="form-group col-12 mt-2">
            <label for="password" class="form-label">Mot de passe :</label>
            <input type="password" class="form-control" id="password" name="password" required>
            <?php //if(empty($password) && isset($password_error)) {?>
            <!-- <p class="text-danger"> <?php //$password_error;?> </p> -->
            <?php //}?>
        </div>
        <div class="form-group col-12 mt-3">
            <button id="btnConnecter" type="submit" class="btn btn-success bg-gradient">Se connecter</button>
        </div>
        <div class="col mt-1">
        <a href="#"  class="mt-1">Forgot Password?</a>
        </div>

    </form>
</div>