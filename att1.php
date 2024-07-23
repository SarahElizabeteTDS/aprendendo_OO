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

//programa principal

//criei um objeto
$monitor0 = new Monitor(); 
//defini os atributos do objeto
$monitor0 -> cor = "preto";
$monitor0 -> resolucao = "1080x1920";
$monitor0 -> marca = "AOC";
//chamei os metodos
$monitor0->ligar();
$monitor0->mostrarImagem();
$monitor0->desligar();
