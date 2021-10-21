
<div class="container">
<table class="table">
  <thead>
    <tr>
        <th scope="col">Marque</th>
        <th scope="col">Modele</th>
        <th scope="col">Prix HT</th>
        <th scope="col">Prix TTC</th>
        <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php require 'functions.php'; ?>
  <?php require 'data.php'; ?>
    <?php foreach($cars as $car => $data){
        echo afficheLigneTableau($data);
    }
?>
  </tbody>
</table>
</div>

<?php

    if (!empty($_GET['id'])) {
        if (isset($_SESSION['cart'][$_GET['id']])){
            $_SESSION['cart'][$_GET['id']]++;
        } else {
            $_SESSION['cart'][$_GET['id']] = 1;
        }
        header("Location: index.php?page=list");
    }

?>