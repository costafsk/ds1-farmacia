<?php

    class DAO {
        private function connect() {
            $connection = mysqli_connect(
                "localhost", // URL
                "root", // User
                "", // Password
                "DS1_DRUGSTORE" // Database
            );

            if (!$connection) die('Could not connect: ' . mysqli_error());

            return $connection;
        }

        public function insert($drug) {
            $connection = $this -> connect();

            $id = mysqli_query(
                $connection,
                "INSERT INTO `DRUGSTORE` (`name`, `producer`, `controled`, `quantify`, `price`) VALUES (".$drug -> getName().", ".$drug -> getProducer().", ".$drug -> getControled().", ".$drug -> getQuantify().", ".$drug -> getPrice().") RETURNING `ID`;"
            );

            mysqli_close($connection);

            return $id;
        }

        public function delete($drug) {
            $connection = $this -> connect();
            
            mysqli_query("DELETE FROM `DRUGSTORE` WHERE `ID`=".$drug -> getID().";");

            mysqli_close($connection);
        }

        public function update($drug) {
            $connection = $this -> connect();

            mysqli_query(
                $connection,
                "UPDATE `DRUGSTORE` SET `name`=".$drug -> getName().", producer=".$drug -> getProducer().", controled=".$drug -> getControled().", quantify=".$drug -> getQuantify().", price=".$drug -> getPrice().";"
            );

            mysqli_close($connection);
        }

        public function selectAll() {
            $connection = $this -> connect();

            $rows = mysqli_fetch_array(mysqli_query("SELECT * FROM `DRUGSTORE`"));

            $drugs = [];

            foreach($rows as $row) {
                $drug = new Drug (
                    $row["name"],
                    $row["producer"],
                    $row["controled"],
                    $row["quantify"],
                    $row["price"]
                );

                $drug -> setID($row["ID"]);

                array_push($drugs, $drug);
            }

            mysqli_close($connection);
            
            return $drugs;
        }

        public function selectById($drug) {
            $connection = $this -> connect();

            $drug = mysqli_fetch_array(mysqli_query("SELECT * FROM `DRUGSTORE` WHERE `ID`=".$drug -> getID().";"));

            mysqli_close($connection);

            return $drug[0];
        }
    }
?>