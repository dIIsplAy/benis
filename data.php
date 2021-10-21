
<?php
$cars = [];

$car = new Car();
$car->setId(1);
$car->setMarque('Ferrari');
$car->setModel('italia gt');
$car->setPrix(250000);
$car->setPicture('https://live.staticflickr.com/1520/24155626965_98d7751b41_b.jpg');

$car2 = new Car();
$car2->setId(2);
$car2->setMarque('Lamborgini');
$car2->setModel('aventador');
$car2->setPrix(320000);
$car2->setPicture('https://www.italpassion.fr/wp-content/uploads/2021/07/lamborghini-aventador-lp-780-4-ultimae-3.jpg');

$cars[] = $car;
$cars[] = $car2;

// $cars = [
//     [
//         'id' => '1',
//         'marque' => 'ferrari',
//         'prix' => 250000,
//         'model' => 'italia gt',
//         'image' => 'https://live.staticflickr.com/1520/24155626965_98d7751b41_b.jpg'
//     ],
//     [
//         'id' => '2',
//         'marque' => 'lamborghini',
//         'prix' => 350000,
//         'model' => 'aventador',
//         'image' => 'https://www.italpassion.fr/wp-content/uploads/2021/07/lamborghini-aventador-lp-780-4-ultimae-3.jpg'
//     ],
//     [
//         'id' => '3',
//         'marque' => 'bugati',
//         'prix' => 900000,
//         'model' => 'veron',
//         'image' => 'https://www.largus.fr/images/images/bugveyron16-4.jpg'
//     ],
//     [
//         'id' => '4',
//         'marque' => 'fiat',
//         'prix' => 25000,
//         'model' => 'punto',
//         'image' => 'https://sf1.auto-moto.com/wp-content/uploads/sites/9/2016/12/ok-fiatpunto.jpg'
//     ],

// ];

$motDePasse = '123';
$login = 'sam';
