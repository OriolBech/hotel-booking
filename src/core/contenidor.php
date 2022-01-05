<?php

namespace Core;

/**
    * Contenidor: Classe contenidor.
    * @author: Oriol Bech.
    * @author: Adrián Pons.
    *
    * Classe contenidor, la responsabilitat d'instaciar els models i altres objectes.
    *
**/
class Contenidor
{
    public $config = [];

    /**
     * __construct:  Crear contenidor
     *
     * @param $config paràmetres de configuració de l'aplicació.
     *
    **/
    public function __construct($config)
    {
        $this->config = $config;
    }

    public function resposta(){
        return new \Core\Resposta();
    }

    public function peticio(){
        return new \Core\Peticio();
    }

    public function habitacions(){
        return new \Models\Habitacions($this->config['db']);
    }

    public function usuaris(){
        return new \Models\Usuaris($this->config['db']);
    }

    public function reserves(){
        return new \Models\Reserves($this->config['db']);
    }

}