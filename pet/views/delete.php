<?php
require_once "../db/connection.php";
require_once "../model/Pet.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    Pet::delete($id, $conn);
    header("Location: http://localhost/pet/search.php");
    exit;
}
?>