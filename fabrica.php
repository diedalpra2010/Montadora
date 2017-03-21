<pre>
<?php


require("Carro.php");
require 'Motor/InterfaceMotor.php';
require 'Motor/Motor.php';
require 'Motor/Motor20.php';
require 'Motor/Motor20Turbo.php';
require 'Diesel/Motor.php';
require 'IEException.php';

use Ford\Motor\Motor20;
use Diesel\Motor as MotorDiesel;

$motor = new Motor20();
$motor2 = new Motor20();
$diesel = new MotorDiesel(true);


$carro1 = new Ford\Carro($motor, "Verde", "GLX");

try{

    $carro1->abastecer(10);
    $carro1->ligar();
    $carro1->abastecer(-20);
  
    $carro1->acelerar(50);


}  catch (Ford\IEException $e)
{
    echo "Problema na IE: ".$e->getMessage()."\n";

    
} 

var_dump($carro1);





