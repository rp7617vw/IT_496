<?php 

// initaiize sides of a triangle
$side1 = 14.8;
$side2 = 20.3;
$side3 = 25.3;

// initialize angle of a triangle
$angle1 = 36;
$angle2 = 53;
$angle3 = 91;

// array of angle 
$angleArray = array($angle1,$angle2,$angle3);

// Function Call
$param = Parameter($side1,$side2,$side3);
$area = Area ($side1,$side2,$side3);
$sine = Sine($angle1);
$cosine = Cosine($angle1);
$tangent = Tangent($angle1);

// Print parameter and area
echo "Parameter = ".$param."<br/>";
echo "Area = ".$area."<br/>";

/**	iterate through array of angle to calculate
  	Sine, Cosine, and Tangent of corresponding angle1.
**/
foreach ($angleArray as $elem) {
	echo"Sine(".$elem.") = ".Sine($elem)."<br/>";
	echo"Cosine(".$elem.") = ".Cosine($elem)."<br/>";
	echo"Tangent(".$elem.") = ".Tangent($elem)."<br/>";
}


/*	Function name Parameter
	Takes three side of a triangle as variable
	returns parameter of a triangle.
*/

function Parameter($side1, $side2, $side3){
	return $side1 +$side2 + $side3;
}

/*	Function name Area
	Takes three side of a triangle as variable
	returns area of a triangle.
*/
function Area($side1, $side2, $side3){
	$param = ($side1 + $side2 +$side3)/2;
	return sqrt($param * ($param - $side1)*($param - $side2)*($param - $side3));
}

/*	Function name Sine
	Takes angle as a variable
	returns Sine of corresponding angle.
*/
function Sine($angle){
	return sin(deg2rad($angle));
}

/*	Function name Cosine
	Takes angle as a variable
	returns Cosine of corresponding angle.
*/
function Cosine($angle){
	return cos(deg2rad($angle));
}

/*	Function name Tangent
	Takes angle as a variable
	returns Tangent of corresponding angle.
*/
function Tangent($angle){
	return sin(deg2rad($angle))/cos(deg2rad($angle));
}

?>