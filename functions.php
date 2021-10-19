<?php

    function calculPrixTva($prix){
     return ($prix / 120) * 20;
    }

    function afficheLigneTableau($data){
        return '
        <tr>
          <td>' .  $data['marque'] .'</td>
          <td>' .  $data['model'] .'</td>
          <td> ' . getTaxFreePrice($data['prix']) .'</td>
          <td> ' .  number_format($data['prix'], 2, ',', ' ') .'</td>
        </tr>
        ';
    }

    function getTaxFreePrice($taxedPrice){
        $taxFreePrice = $taxedPrice - ($taxedPrice * 20/100);
        return number_format($taxFreePrice, 2, ',', ' ');
    }

    function generateCard($data){
        return
             '<div class="card col-3">
                  <img src="' . $data['image'] . '" style="width: 100%; height: 15vw; object-fit: cover;" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">' . $data['marque'] . '</h5>
                    <p class="card-text">' .  $data['model'] . '</p>
                    <p class="card-text">' .  number_format($data['prix'], 2, ',', ' ') . '</p>
                    <a href="list.php" class="btn btn-primary">Voir toutes les voitures</a>
                  </div>
                </div>';
    }

    include 'data.php';

    function verifLogin($login, $motDePasse) {
        if ($_POST && $_POST['password'] === $motDePasse && $_POST['login'] === $login) {
            $_SESSION['login'] = $_POST['login'];
            header("Location: index.php?connected=1");
        } else {
            header("Location: login.php?error=3");
        }
    }


?>