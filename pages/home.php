<?php

if (!empty($_GET['connected']) && $_GET['connected'] == 1) {
    echo "<div>Vous êtes connecté</div>";
} elseif (!empty($_GET['connected']) && $_GET['connected'] == 0) {
    echo  "<div>'Identifiants incorrects, veuillez résessayer'</div>";
}

?>

<div class="row p-5">

    <?php require 'data.php'; ?>
    <?php require 'functions.php'; ?>
    <?php
    for ($i = 0; $i < count($cars); $i++)
        echo generateCard($cars[$i]);
    ?>

</div>





<?php include 'includes/footer.php'; ?>