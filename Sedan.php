<?php

namespace Ford;

/**
 * Description of Sedan
 *
 * @author aluno
 */
class Sedan extends Carro
{
    public function acelerar($quantidade)
    {
        if ($this->versao == "sport")
        {
             $this->motor->acelerar($quantidade* 2);
        }else
            {
            parent::acelerar($quantidade);
    
            }
     }

}
