<?php
spl_autoload_register(function ($class) {
    require_once "classes/$class.php";
});

include 'includes/header.php';

if (!empty($_GET['page'])) {
    include 'pages/' . $_GET['page'] . '.php';
} else {
    include 'pages/home.php';
}

include 'includes/footer.php';
