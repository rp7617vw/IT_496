<?php 
$side1 = 14.8;
$side2 = 20.3;
$side3 = 25.3;

$angle1 = 36;
$angle2 = 53;
$angle3 = 91;
$param = Parameter($side1,$side2,$side3);
$area = Area ($side1,$side2,$side3);
$sine = Sine($angle1);
$cosine = Cosine($angle1);
$tangent = Tangent($angle1);
echo "Parameter = ".$param."<br/>";
echo "Area = ".$area."<br/>";
echo "Sine = ".$sine."<br/>";
echo "Cosine = ".$cosine."<br/>";
echo "Tangent = ".$tangent;
function Parameter($side1, $side2, $side3){
	return $side1 +$side2 + $side3;

}
function Area($side1, $side2, $side3){
	$param = ($side1 + $side2 +$side3)/2;
	return sqrt($param * ($param - $side1)*($param - $side2)*($param - $side3));
}

function Sine($angle){
	return sin(deg2rad($angle));
}
function Cosine($angle){
	return cos(deg2rad($angle));
}
function Tangent($angle){
	return sin(deg2rad($angle))/cos(deg2rad($angle));
}

?>