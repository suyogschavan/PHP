<?php 

class Suyog{}

$object = new Suyog();
$Boolean = True;
$String = "Hi my name is Suyog! ";
$Integer = 345;
$Array = array('Suyog', 'Chavan', 71, 'MSBTE');

echo ("Original Object - ");
print_r($object);
echo"<br>Original Boolean - ", $Boolean;
echo"<br>Original String - ", $String;
echo "<br>Original Integer - ", $Integer;
echo("<br>Original Array - ");
print_r($Array);
echo "<br><br>-------------------------------------------<br>";

$s_object = serialize($object);
$s_Boolean = serialize($Boolean);
$s_String = serialize($String);
$s_Integer = serialize($Integer);
$s_Array = serialize($Array);

echo ("<br>Serialized Object : ");
print_r($s_object);
echo "<br> Serialized Boolean : ",$s_Boolean;
echo "<br> Serialized String : ", $s_String;
echo "<br> Serialized Integer : ", $s_Integer;
echo "<br> Serialized Array : ";
print_r($s_Array);
echo "<br><br>-------------------------------------------<br>";
echo ("<br>Unserialized Object : ");
print_r(unserialize($s_object));
echo "<br> Unserialized Boolean : ", unserialize($s_Boolean);
echo "<br> Unserialized String : ", unserialize($s_String);
echo "<br> Unserialized Integer : ", unserialize($s_Integer);
echo "<br> Unserialized Array : ";
print_r(unserialize($s_Array));

?>