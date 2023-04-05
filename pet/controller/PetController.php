<?php

class PetController
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function searchPet()
    {
        $name = isset($_POST["name"]) ? trim($_POST["name"]) : '';
        $type = isset($_POST["type"]) ? trim($_POST["type"]) : '';
    
        if (empty($name) && empty($type)) {
            return;
        }
    
        try {
            $results = Pet::SearchResult($name, $type, $this->conn);
            require_once 'views/search.php';
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function displayPets()
    {
        try {
            $pets = Pet::getAll($this->conn);
            require_once 'views/pets.php';
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    public function insertPet()
    {
        if (isset($_POST['submit'])) {
            try {
                $name = $_POST['name'];
                $info = $_POST['info'];
                $type = $_POST['type'];
                Pet::insert($name, $info, $type, $this->conn);
                header("Location: http://localhost/pet/search.php ");
                exit;
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    }
}
