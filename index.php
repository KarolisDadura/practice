<?php

pitagor (10, 7);
rectangleArea (3, 5);
squareArea (5);
circleArea (5);
trapezoidArea (2, 3, 4);
pentagonArea (10);
VidAlga (2,2000,3000,6000);

function pitagor ($a, $b)
{
 echo "Pitagor: $a, $b . Answer " . sqrt($a**2+$b**2). "<br/>";
}

///////////////

function rectangleArea ($a, $b)
{
	echo "Area of rectangle: $a, $b" . ($a*$b). "<br/>";
}

////////////////

function squareArea ($a)
{
	echo "Area of square:" . $a**2 . "<br/>";
}

////////////////

function circleArea ($a)
{
	echo "Area of circle:" . pi()*$a**2 . "<br/>";
}

/////////////

function trapezoidArea ($a,$b,$h)
{
	echo "Area of Trapeze:" . ($a+$b)/2*$h . "<br/>";
}

////////////

function pentagonArea ($a)
{
	echo "Area of Pentagon:" . (1/4)*(sqrt(5*(5+2*sqrt(5))))*$a**2 . "<br/>";
} 

//////////

function VidAlga ($a,$b,$c,$d)
//$a - žmonių skaičius, $b - viso algoms, $c - sąnaudos, $d - pajamos
{
	echo "Vidutinė alga:" . $b/$a . "<br/>";
	echo "Pelnas:" .  ($d - $c - $b) . "<br/>";
}