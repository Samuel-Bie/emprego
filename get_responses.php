<?php
require_once("database.php");



$sql = "SELECT * FROM `contacts`   ORDER BY `contacts`.`date` DESC;";

if ($result = $conn->query($sql)) {
    $contacts = $result->fetch_all(MYSQLI_ASSOC);
    $result->free();

    echo json_encode($contacts, JSON_UNESCAPED_UNICODE);

}