<?php

use carDAO as GlobalCarDAO;

    include_once("models/Car.php");

    class CarDAO implements CarDAOinterface {

        private $conn;

        public function __construct(PDO $conn){
            $this->conn = $conn;
        }

        public function findAll(){

            $cars = [];

            $stmt = $this->conn->query("SELECT * FROM cars");

            $data = $stmt->fetchAll();

            foreach($data as $item){
                $car = new car();

                $car->setId($item['id']);
                $car->setBrand($item['brand']);
                $car->setKm($item['km']);
                $car->setColor($item['color']);

                $car[] = $car;

            }

            return $cars;

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