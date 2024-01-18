<?php

class shape
{
    //start Square
    public $AreaSquare = 0 ;
    public $EnvironmentSquare = 0 ;

    public function SquareArea($valeu)
    {
        $resalt = $valeu * $valeu ;
        $this -> AreaSquare = $resalt ;
        return $this ;
    }

    public function SquareEnvironment($valeu)
    {
        $resalt = $valeu * 4 ;
        $this -> EnvironmentSquare = $resalt ;
        return $this ;
    }

    //start Circle
    public $AreaCircle = 0 ;
    public $EnvironmentCircle = 0 ;
    public function CircleArea($Radius)
    {
        $resalt =($Radius * $Radius)* 3.14 ;
        $this -> AreaCircle = $resalt ;
        return $this ;
    }

    public function CircleEnvironment($Radius)
    {
        $resalt = ($Radius + $Radius) * 3.14 ;
        $this -> EnvironmentCircle = $resalt ;
        return $this ;
    }

}

$Sampel = new shape ;

//Area && Environment Square
$Sampel->SquareArea(6)->SquareEnvironment(3);
echo "AreaSquare : " . $Sampel->AreaSquare ."<br/>". "EnvironmentSquare : " . $Sampel->EnvironmentSquare . "<br/><br/>";

//Area && Environment Circle
$Sampel->CircleArea(8)->CircleEnvironment(4);
echo "AreaCircle : " . $Sampel->AreaCircle ."<br/>". "EnvironmentCircle : " . $Sampel->EnvironmentCircle;


