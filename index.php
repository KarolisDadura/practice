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

///////////

declare(strict_types=1);

calculatePrices (250000, 0.3);

function calculatePrices ($costs, $margin)
{
	$FIRST_CLASS = 10;
	$BUSINESS_CLASS = 30;
	$ECONOMY_CLASS = 280;

	$PRICE_FIRST = 10000;
	$PRICE_BUSINESS = 4000;
	$PRICE_ECONOMY = 500;

	$FILL_FIRST = 1;
	$FILL_BUSINESS = 0.8;
	$FILL_ECONOMY = 0.68;

	$costs = calculateClass ($FIRST_CLASS, $PRICE_FIRST, $FILL_FIRST);
	$costs += calculateClass ($BUSINESS_CLASS, $PRICE_BUSINESS, $FILL_BUSINESS);
	$costs += calculateClass ($ECONOMY_CLASS, $PRICE_ECONOMY, $FILL_ECONOMY);

	$costs = $costs * (1 + $margin);

	echo $income - $costs;
}

function calculateClass(int $seats, int $price, float $fill) : float
{
	return $seats * $price * $fill;
}
