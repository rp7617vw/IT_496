<?php
class Address{
	public $street1;
	public $street2;
	public $city;
	public $state;
	public $zipcode;
}

function set_object_var($object, array $vars) {
    $has = get_object_vars($object);
    foreach ($has as $name => $oldValue) {
        $object->$name = isset($vars[$name]) ? $vars[$name] : NULL;
    }
}
?>