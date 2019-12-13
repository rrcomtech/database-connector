<?php

// Use class in Test Page
include 'database_connect.php';

class Main {

    public $db_conn;

    function execute() {

        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "login-system";

        // Our own db connection object
        $this->db_conn = new Database_Connection($server,$username,$password,$database);

        $this->testDatabaseConnection();

    }

    function testDatabaseConnection() {

        $sql = "SELECT Name FROM Account;";
        $result = $this->db_conn->queryResultToArray($this->db_conn->executeQuery($sql));
        var_dump($result);

    }

}

$main = new Main();
$main->execute();