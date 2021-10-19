<?php

    function calculPrixTva($prix){
     return ($prix / 120) * 20;
    }

    function afficheLigneTableau($data){
        return '
        <tr>
          <th scope="row">' .  $data['marque'] .'</th>
          <td colspan="2"> ' .  $data['prix'] .'</td>
          <td>' .  $data['model'] .'</td>
        </tr>
        ';
    }

    function generateCard($data){
        return
             '<div class="card col-3 m-3">
                  <img src="' . $data['image'] . '" style="width: 100%; height: 15vw; object-fit: cover;" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">' . $data['marque'] . '</h5>
                    <p class="card-text">' .  $data['model'] . '</p>
                    <p class="card-text">' .  $data['prix'] . '</p>
                    <a href="list.php" class="btn btn-primary">Voir toutes les voitures</a>
                  </div>
                </div>';

    }


?>