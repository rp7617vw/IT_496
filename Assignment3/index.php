<?php
//Import Class
require 'person.php';
require 'address.php';

// Create instance oa a Person class
$person = new Person();
$vars = array("firstName" => "Roshan", "lastName" => "Shrestha", "age"=> "16");
set_object_vars($person, $vars);

//Echo name and age 
echo$person ->firstName.'<br/>';
echo$person ->lastName.'<br/>';
echo ($person ->age).'<br/>';

// Create an object of address class
$address = new Address;
$varsAdd = array('street1' => '1001 Campus Rd.', 'street2' =>'Apt# 1234', 'city'=>'Mankato', 'state'=> 'MN','zipcode'=>'56001');
set_object_var($address, $varsAdd);

//Echo address
echo$address ->street1.'<br/>';
echo$address ->street2.'<br/>';
echo$address ->city.'<br/>';
echo$address ->state.'<br/>';
echo$address ->zipcode.'<br/>';


$servername = "localhost";
$username = "roshan";
$password = "password";
$dbName ="mysql";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// sql to create Person table
$sql = "CREATE TABLE PERSON ( 
		firstName VARCHAR(30) NOT NULL,
		lastName VARCHAR(30) NOT NULL,
		age VARCHAR(30) NOT NULL)";

// sql to create Address table
$sql = "CREATE TABLE ADDRESS ( 
		STREET1 VARCHAR(30) NOT NULL,
		STREET2 VARCHAR(30) NOT NULL,
		CITY VARCHAR(30) NOT NULL,
		STATE VARCHAR(2) NOT NULL,
		ZIPCODE VARCHAR(30) NOT NULL)";

// Insert into person and address table
$sql = "INSERT INTO person (firstName, lastName, age) VALUES ('Roshan', 'Shrestha', '16')";
$sql = "INSERT INTO address (STREET1,STREET2,CITY,STATE,ZIPCODE) VALUES ('1001 Campus Rd.','Apt# 1234','Mankato','MN','56001')";

// Close connection
$conn->close();

?>
