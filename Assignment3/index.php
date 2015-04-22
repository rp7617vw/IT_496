<?php
require 'person.php';
require 'address.php';

$person = new Person();
$vars = array("firstName" => "Roshan", "lastName" => "Shrestha", "age"=> "16");
set_object_vars($person, $vars);
echo ($person ->firstName);
echo ($person ->lastName);
echo ($person ->age);


$address = new Address;
$varsAdd = array('street1' => '1001 Campus Rd.', 'street2' =>'Apt# 1234', 'city'=>'Mankato', 'state'=> 'MN','zipcode'=>'56001');
set_object_var($address, $varsAdd);
echo $address ->street1;

$servername = "localhost";
$username = "roshan";
$password = "password";
$dbName ="mysql";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// sql to create table
$sql = "CREATE TABLE PERSON ( 
		firstName VARCHAR(30) NOT NULL,
		lastName VARCHAR(30) NOT NULL,
		age VARCHAR(30) NOT NULL)";

$sql = "CREATE TABLE ADDRESS ( 
		STREET1 VARCHAR(30) NOT NULL,
		STREET2 VARCHAR(30) NOT NULL,
		CITY VARCHAR(30) NOT NULL,
		STATE VARCHAR(2) NOT NULL,
		ZIPCODE VARCHAR(30) NOT NULL)";

$sql = "INSERT INTO person (firstName, lastName, age) VALUES ('Roshan', 'Shrestha', '16')";
$sql = "INSERT INTO address (STREET1,STREET2,CITY,STATE,ZIPCODE) VALUES ('1001 Campus Rd.','Apt# 1234','Mankato','MN','56001')";


$conn->close();

?>
