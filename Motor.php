<?php

/**
 * Classe generica de motor
 * @author Edir
 * @link URL description
 */
abstract class Motor 
{
    const POTENCIA = 1.0;
    const TIPOCOMBUSTIVEL = "FLEX";
    
    private $aceleracao = 0;
    private $ligado = false;

    /**
     * Acelera o motor
     * @param int $valor
     */
    public function acelerar($valor)
    {
        $this->aceleracao = $valor;
    }
    
    /**
     * Liga o motor
     */
    public function ligar()
    {
        $this->ligado = true;
    }
    
    /**
     * Desliga o Motor
     */
    public function desligar()
    {
        $this->ligado = false;
    }
    
    /**
     * Informa o estado do motor
     * @return bool
     */
    public function estaLigado()
    {
        return $this->ligado;
    }
    
    /**
     * Retorna a potencia do motor
     * @return float
     */
    public function getPotencia()
    {
        return static::POTENCIA;
    }
    
}
