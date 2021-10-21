<div class="container">
    <table class="table">

        <thead>
            <tr>
                <th scope="col">Marque</th>
                <th scope="col">Modele</th>
                <th scope="col">Prix unitaire</th>
                <th scope="col">Quantité</th>
                <th scope="col">Prix total</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>

        <tbody>

        <?php

            include 'functions.php';
            include 'data.php';

            foreach ($_SESSION['cart'] as $id => $quantity) {
                echo generateLineCart(getElementById($id, $cars), $quantity);
            }

        ?>

        </tbody>

    </table>
</div>

<?php

    if (!empty($_GET['action'])) {
        if ($_GET['action'] == 'minus') {
            $_SESSION['cart'][$_GET['id']]--;
            if ($_SESSION['cart'][$_GET['id']] <= 0 ) {
                unset($_SESSION['cart'][$_GET['id']]);
                header("Location: index.php?page=cart");
            }
            header("Location: index.php?page=cart");
        } elseif ($_GET['action'] == 'plus') {
            $_SESSION['cart'][$_GET['id']]++;
            header("Location: index.php?page=cart");
        }
    }

    