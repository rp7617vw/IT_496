<?php
//Open input.txt file and read.
$file = fopen("input.txt","r");
// Create and initialize array
$array_all = array();
$array_string= array();
$array_int = array();

// Read the file and add each line into an array
while(! feof($file)){
  	$array_all[]=fgets($file);
  }
  //Cast the string into integer
  $array_all[0]=(int)$array_all[0];
  $array_all[2]=(int)$array_all[2];
  $array_all[4]=(int)$array_all[4];
  $array_all[7]=(int)$array_all[7];
  $array_all[9]=(int)$array_all[9];

// Append to string and integer array
foreach ($array_all as $elem) {
	echo("This is element from array_all: ".$elem."<br/>");
	if(is_int($elem)){
		array_push($array_int,$elem);
	}
	else{
		array_push($array_string,$elem);

	}
	
	
}
echo("<br/>");
// Sort array in descending order
rsort($array_int);
rsort($array_string);
// Print element from array
foreach ($array_int as $elem){
	echo("This is element from array_int: ".$elem."<br/>");
}
echo("<br/>");
foreach ($array_string as $elem){
	echo("This is element from array_string: ".$elem."<br/>");
	}
?>