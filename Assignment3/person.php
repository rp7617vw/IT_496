<?php
class Person{

	public $firstName;
	public $lastName;
	public $age;

}

function set_object_vars($object, array $vars) {
    $has = get_object_vars($object);
    foreach ($has as $name => $oldValue) {
        $object->$name = isset($vars[$name]) ? $vars[$name] : NULL;
    }
}
?>