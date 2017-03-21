<pre>
<?php


require("Carro.php");
require 'Motor/InterfaceMotor.php';
require 'Motor/Motor.php';
require 'Motor/Motor20.php';
require 'Motor/Motor20Turbo.php';
require 'Diesel/Motor.php';
require 'IEException.php';
require 'DesignPaterns/Factory.php';
require 'Sedan.php';

use Ford\Motor\Motor20;
use Diesel\Motor as MotorDiesel;

$motor = new Motor20();
$motor2 = new Motor20();
$diesel = new MotorDiesel(true);


$carro1 = new Ford\Carro($motor, "Verde", "sport");


$novo = \Ford\DesignPaterns\Factory::MontarFiesta("Azul");
$novo->acelerar(10);

var_dump($novo);