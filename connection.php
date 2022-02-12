<?php

try {
    $con = new PDO("mysql:host=localhost;dbname=contact_form", "root", "");
}
catch(Exception $e) {
    echo $e->getMessage();
}

?>