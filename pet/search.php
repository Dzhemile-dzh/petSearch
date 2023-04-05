<?php
require_once "controller/PetController.php";
require_once "db/connection.php";
require_once 'model/Pet.php';

$processor = new PetController($conn);
?>
<html>

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <h2>Search for a Pet</h2>
    <form action="search.php" method="post">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name">
      </div>
      <div class="form-group">
        <label for="type">Type:</label>
        <select class="form-control" id="type" name="type">
          <option value="">Select a type</option>
          <option value="cat">Cat</option>
          <option value="dog">Dog</option>
          <option value="bird">Bird</option>
          <option value="frog">Frog</option>
          <option value="turle">Turtle</option>
        </select>
      </div>
      <button type="submit" class="btn btn-success">Search</button>
      <a href="views/add.php" class="btn btn-primary mt-5">Add New Pet</a>
    </form>
  </div>
  <?php $processor->searchPet(); ?>
  <?php $processor->displayPets(); ?>
</body>

</html>