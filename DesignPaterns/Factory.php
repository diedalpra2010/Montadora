<?php

namespace Ford\DesignPaterns;
use \Ford\Motor\Motor10;
use \Ford\Carro;
use \Ford\Motor\Motor20;
use \Ford\Sedan;

/**
 * Description of Factory
 *
 * @author aluno
 */
class Factory 
{
    private static $cor = "Azul";
    /**
     * Fabrica KA
     * @param type $cor
     * @return Carro
     */
   public static function MontarKa($cor)
   {
       $motor = new Motor10();
       $carro = new Carro($motor, $cor);
       return $carro;
   }
   /**
    * 
    * Fabrica Fiesta
    * @return Carro
    */
   public static function MontarFiesta($cor)
   {
       $motor = new Motor20();
       $carro = new Sedan($motor,  self::$cor, "sport");
       
       return $carro;
   }
}
