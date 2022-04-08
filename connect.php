<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=in_class_work", "root", "");
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>