<?php

class Rota
{
    public $rotas = [
        'GET'=>[],
        'POST'=>[],
    ];

    public static function load($arquivo){
        $rotas = new static;

        require $arquivo;

        return $rotas;
    }

    public function get( $uri , $controle )
    {

        $this->rotas['GET'][$uri] = $controle;
    }

    public function post( $uri , $controle )
    {

        $this->rotas['POST'][$uri] = $controle;
    }



    public function direct($url, $requestType)
    {
        if (array_key_exists($url, $this->rotas[$requestType])){
            return $this->rotas[$requestType][$url];
        }

        throw new Exception('Sem rotas definidas para esse url');
        
    }
    
}
