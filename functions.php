<?php

function calculPrixTva($prix)
{
    return ($prix / 120) * 20;
}

function afficheLigneTableau(Car $data)
{
    return '
        <tr>
          <td>' .  $data->getMarque() . '</td>
          <td>' .  $data->getModel() . '</td>
          <td> ' . getTaxFreePrice($data->getPrix()) . '</td>
          <td> ' .  number_format($data->getprix(), 2, ',', ' ') . '</td>
          <td><a href="index.php?page=list&id=' . $data->getId() . '" class="btn btn-outline-primary">Ajouter au panier</a></td>
        </tr>
        ';
}

function generateLineCart(Car $data, $quantity)
{
    $prixTotal = $data->getPrix() * $quantity;

    return '
        <tr>
          <td>' .  $data->getMarque() . '</td>
          <td>' .  $data->getModel() . '</td>
          <td> ' .  number_format($data->getPrix(), 2, ',', ' ') . '</td>
          <td>' . $quantity . '</td>
          <td> ' . number_format($prixTotal, 2, ',', ' ') . '</td>
          <td>
            <a href="index.php?page=cart&action=minus&id=' . $data->getId() . '" class="btn btn-danger"> ➖ </a>
            <a href="index.php?page=cart&action=plus&id=' . $data->getId() . '" class="btn btn-success"> ➕ </a>
          </td>
        </tr>
        ';
}

function getTaxFreePrice($taxedPrice)
{
    $taxFreePrice = $taxedPrice - ($taxedPrice * 20 / 100);
    return number_format($taxFreePrice, 2, ',', ' ');
}

function generateCard(Car $data)
{
    return
        '<div class="card col-3">
                  <img src="' . $data->getPicture() . '" style="width: 100%; height: 15vw; object-fit: cover;" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">' . $data->getMarque() . '</h5>
                    <p class="card-text">' .  $data->getModel() . '</p>
                    <p class="card-text">' .  number_format($data->getPrix(), 2, ',', ' ') . '</p>
                    <a href="index.php?page=list" class="btn btn-primary">Voir toutes les voitures</a>
                  </div>
                </div>';
}

include 'data.php';

function verifLogin($login, $motDePasse)
{
    if ($_POST && $_POST['password'] === $motDePasse && $_POST['login'] === $login) {
        $_SESSION['login'] = $_POST['login'];
        header("Location: index.php?page=home&connected=1");
    } else {
        header("Location: index.php?page=login&error=3");
    }
}

/**
 * @param array<Car> $array
 */
function getElementById($id, $array)
{
    foreach ($array as $element) {
        if ($element->getId() == $id) {
            return $element;
        }
    }
}
