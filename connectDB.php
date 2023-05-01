<?php
try {
    $conn = new PDO('mysql:host=localhost;dbname=restaurantDB', "root", "");
} catch (PDOException $e) {
    echo "Error";
    echo "Error!: ". $e->getMessage(). "<br/>";
    die();
}
?>