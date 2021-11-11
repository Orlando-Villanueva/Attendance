<?php
$title = 'User Login';
include 'includes/header.php';
require_once 'db/conn.php';

?>

<div id="containerLogin" class="container mt-3">
    <h1 class="h1"><?php echo $title ?></h1>

    <form method="POST" id="formLogin" class="row mt-1" action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>">

        <div class="form-group col-12">

            <label for="email" class="form-label">Username</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Username">
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>

        <div class="form-group col-12">
            <label for="mdp" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Password">
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>

        <div class="form-group col-12 mt-3">
            <button id="btnConnecter" type="submit" class="btn btn-danger bg-gradient">Se connecter</button>
        </div>
        <div class="col mt-1">
        <a href="<?php echo $root?>index.php?idContenu=1" style="color:red"  class="mt-1">Pas de compte? Enregistrez-vous</a>
        </div>

    </form>
</div>