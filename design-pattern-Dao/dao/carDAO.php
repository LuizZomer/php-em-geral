<?php

use carDAO as GlobalCarDAO;

    include_once("models/Car.php");

    class CarDAO implements CarDAOinterface {

        private $conn;

        public function __construct(PDO $conn){
            $this->conn = $conn;
        }

        public function findAll(){

        }

        public function create(Car $car){

            $stmt = $this->conn->prepare("INSERT INTO cars (brand, km, color) VALUES (:brand, :km, :color)");

            $stmt->bindParam(":brand", $car->getBrand());
            $stmt->bindParam(":km", $car->getKm());
            $stmt->bindParam(":color", $car->getColor());

            $stmt->execute();
        }

    }

?>