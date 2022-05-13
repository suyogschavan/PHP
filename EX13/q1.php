<?php 

// setting the cookie
setcookie("name", "Suyog Chavan");

// checking cookie is set or not
echo "Checking cookie is set or not.... : ";
if (isset($_COOKIE["name"])) {
    echo " <b>Cookie is allset! </b>";
}

echo "<br>Printing the cookie value... : <b>", $_COOKIE["name"], "</b>";

echo "<br>Removing the Cookie .... : ";
setcookie("name", "", time()-3600);

echo "<b>Cookie Removed !!!</b>";


?>