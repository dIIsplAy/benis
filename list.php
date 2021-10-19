
<?php include 'includes/header.php'; ?>
<div class="container">
<table class="table">
  <thead>
    <tr>
        <th scope="col">Marque</th>
        <th scope="col">Modele</th>
        <th scope="col">Prix HT</th>
        <th scope="col">Prix TTC</th>
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
<?php include 'includes/footer.php'; ?>
</body>
</html>