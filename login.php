<?php
    include 'includes/header.php';
?>

<div class="container">
    <div class="row">
        <div class="col-5">
            <form method="post">
                <div class="mb-3">
                    <label for="login" class="form-label">Login</label>
                    <input type="text" class="form-control" id="login" name="login">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password"  name="password" class="form-control" id="exampleInputPassword1">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>

                <?php
                    if (!empty($_GET['error']) && $_GET['error'] == 3) {
                        echo "<div class='text-danger'>
                                Identifiants incorrects, veuillez réessayer
                            </div>";
                    }
                ?>
                
            </form>
        </div>
    </div>
</div>

<?php

    include 'data.php';
    include 'functions.php';

    if ($_POST) {
        verifLogin($login, $motDePasse);
    }
?>
