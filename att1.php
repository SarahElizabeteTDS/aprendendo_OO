<?php

class Monitor
{
    //atributos
    public $cor;
    public $resolucao;
    public $marca;

    //metodos
    function ligar()
    {
        print "Monitor ligado";
    }

    function desligar()
    {
        print "Monitor desligado";
    }

    function mostrarImagem()
    {
        print "Monitor mostrando imagem";
    }
}
