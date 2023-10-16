<?php 
//database connect

class Dbh {

    protected function connect() {

        try {
            $username = 'root';
            $password = '';

            $dbh = new PDO('mysql:host=localhost;dbname=login_system_oop', $username, $password);
            return $dbh;
        } catch (PDOException $e) {
            echo 'Error!: ' . $e->getMessage() . '<br>';
            die();
        }
    }
}