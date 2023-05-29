<?php
class Bike
{ //<<製造bike
    protected $speed; //bike有speed屬性了
//private只有此類別可用 >> protected繼承子類別也可用 >> public(var)都可用

    function __construct()
    { //建構式/建構方法: 物件初始化
        $this->speed = 0;
        echo 'Bike()';
    }
    function upSpeed()
    {
        $this->speed = $this->speed < 1 ? 1 : $this->speed * 1.2;
    }
    function downSpeed()
    {
        $this->speed = $this->speed < 0 ? 0 : $this->speed * 0.7;
    }

    function getSpeed()
    {
        return $this->speed;
    }
}


class Scooter extends Bike
{
    private $gera;
    //^^複製^^
    function __construct()
    {
        echo 'Scooter';
    }
    function upSpeed(){
        $this-> speed = $this->speed <1 ? 1:$this->speed *3*$this->gera;
    }
    function change($gear=0){
        $this-> gera = $gear;
    }
}

$b1 = new Bike(); //<<使用bike
$b2 = new Bike(); //<<使用bike
$b3 = new Bike(); //<<使用bike
// $b1->speed = 12.3;
// $b2->speed = 145;
// $b3->speed = 484;
echo $b1->getSpeed().'<br>';
$b1->upSpeed();
$b1->upSpeed();
$b1->upSpeed();
$b1->upSpeed();
$b1->upSpeed();
$b1->upSpeed();
$b1->upSpeed();
echo $b1->getSpeed() . '<br>';
// echo $b1 -> getSpeed();



$s1 = new Scooter;
$s1->upSpeed();
$s1->upSpeed();
echo $s1->getSpeed();
?>