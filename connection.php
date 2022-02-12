<?php

try {
    $con = new PDO("mysql:host=us-cdbr-east-05.cleardb.net;dbname=heroku_be25953a2edc963", "bbe4c1d9ae5f22", "2c957ab4");
}
catch(Exception $e) {
    echo $e->getMessage();
}

?>