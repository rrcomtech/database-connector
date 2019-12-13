<?php

/**
 * Meant to connect to a database.
 * Needs the following details about the database:
 *      - ServerAddress (server)
 *      - Username (name)
 *      - Password (password)
 *      - Database Name (database)
 *
 * Returns a Database-Connection object on calling
 *      getDBConn();
 *
 * Expects an existing database!
 *
 * TODO Use prepared statements
 *
 * This class is not safe of SQL injections until the prepared statements are not used! Please note that.
 *
 */
class Database_Connection {

    // Database Connection Details
    private $server = "";
    private $password = "";
    private $name = "";
    private $database = "";

    // Database Connection
    private $db_conn;

    // Defines the state of the database connection
    // Results from the state of db_conn.
    private $connection_established = false;

    /**
     * Establishes a connection. New values can be used here.
     * Overwrites former values if connection succeeds.
     *
     * @param $server
     *          Server adress to connect to.
     * @param $name
     *          Username to log into the database.
     * @param $password
     *          Password to be used to log into the database.
     * @param $database
     *          Name of the database to be used.
     */
    function __construct($server, $name, $password, $database)
    {
        // Set details
        $this->server = $server;
        $this->password = $password;
        $this->name = $name;
        $this->database = $database;

        // Create database connection object
        $this->db_conn = new mysqli($server, $name, $password, $database);

        // Did the connection work?
        if ($this->db_conn -> connect_error) {
            // This is a redundant call, but shows, that the connection did not establish
            $this->connection_established = false;
        } else {
            $this->connection_established = true;
        }


    }

    /**
     * @return bool
     *          true    ==>     Connection is established
     *          false   ==>     Connection could not be established
     */
    function getConnectionState() {
        return $this->connection_established;
    }

    /**
     * VOID
     * Closes database connection.
     * Sets state of database connection to false.
     */
    function closeConnection() {
        $this->db_conn -> close();
        $this->connection_established = false;
    }

    /**
     * Executes a given SQL statement.
     *
     * @param $sql
     *          The statement to be executed.
     * @return
     *          bool            ==>     Process fails (returns false)
     *          mysqli_result   ==>     Process succeeds (returns result of SQL statement)
     */
    function executeQuery($sql) {

        if ($this->connection_established) {
            $result = mysqli_query($this->db_conn, $sql);
            if ($result) {
                return $result;
            }
        }
        // No connection successfully established
        return false;
    }

    /**
     * Converts a mysqli_result to a PHP array.
     *
     * @param $result
     *          Expected type: mysqli_result. Fails in other cases.
     *
     * @return array
     *          An array holding the values of the given mysqli_result.
     */
    function queryResultToArray($result) {

        $rows = [];

        $i = 0;
        while($row = mysqli_fetch_array($result)) {
            $rows[$i] = $row;
            $i++;
        }

        return $rows;
    }

    /**
     * Establishes a connection. New values can be used here.
     * Overwrites former values if connection succeeds.
     *
     * @param $server
     *          Server adress to connect to.
     * @param $name
     *          Username to log into the database.
     * @param $password
     *          Password to be used to log into the database.
     * @param $database
     *          Name of the database to be used.
     */
    function establishConnection($server, $name, $password, $database) {

        // Create database connection object
        $this->db_conn = new mysqli($server, $name, $password);

        // Did the connection work?
        if ($this->db_conn -> connect_error) {
            // This is a redundant call, but shows, that the connection did not establish
            $this->connection_established = false;
        } else {
            $this->connection_established = true;

            // Set details
            $this->server = $server;
            $this->password = $password;
            $this->name = $name;
            $this->database = $database;
        }
    }

}