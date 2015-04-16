<?php
require 'person.php';
require 'address.php';

$person = new Person;
$address = new Address;

$person ->firstName="Roshan";
$person ->lastName = "Shrestha";

$address ->street1 = "1012 Main St.";
$address ->street2 = "Apt# 889900";
$address ->city = "Mankato";
$address ->state = "MN";
$address ->zipcode = "56001";

echo$person ->firstName.'<br/>';
echo$person ->lastName.'<br/>';
echo$address ->street1.'<br/>';
echo$address ->street2.'<br/>';
echo$address ->city.'<br/>';
echo$address ->state.'<br/>';
echo$address ->zipcode.'<br/>';
?>