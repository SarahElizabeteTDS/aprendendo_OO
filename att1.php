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
        print "Monitor ligado\n";
    }

    function desligar()
    {
        print "Monitor desligado\n";
    }

    function mostrarImagem()
    {
        print "Monitor mostrando imagem\n";
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

//criei mais um objeto
$monitor1 = new Monitor(); 
//defini os atributos do objeto
$monitor1 -> cor = "azul";
$monitor1 -> resolucao = "1080x1920";
$monitor1 -> marca = "LENOVO";
//chamei os metodos
$monitor1->ligar();
$monitor1->mostrarImagem();
$monitor1->desligar();
