<?php
require_once "../db/connection.php";
require_once "../model/Pet.php";
require_once "../controller/PetController.php";

$processor = new PetController($conn);
$processor->insertPet();

?>

<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
  <div class="container">
  <h2>Add a New Pet</h2>
  <form action="add.php" method="post">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
      <label for="type">Type:</label>
      <select class="form-control" id="type" name="type" required>
        <option value="cat">Cat</option>
        <option value="dog">Dog</option>
        <option value="bird">Bird</option>
        <option value="frog">Frog</option>
        <option value="turle">Turtle</option>
      </select>
    </div>
    <div class="form-group">
      <label for="info">Information:</label>
      <textarea class="form-control" id="info" name="info" rows="5" required></textarea>
    </div>
    <button type="submit" name="submit" class="btn btn-success">Add Pet</button>
  </form>
</div>
