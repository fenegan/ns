<?php

require_once 'autoload.php';

use Characters\Boule;
use Pets\Bill;
use Characters\Specials\Puck;

echo '<pre>';
echo "Hello World !\n";

$b = new Boule();
$b->sayHello();

$bp = new Bill();
$bp->sayHello();

$p = new Puck();
$p->sayHello();
