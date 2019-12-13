# Connects to a MySQL database

## Tested On

phpMyAdmin SQL Dump <br>
version 4.7.4<br>

Last Update: December 13, 2019<br>
Server-Version: 10.1.29-MariaDB<br>
PHP-Version: 7.2.0<br>

## Directed to

This software is made to provide a safe PHP class to connect to an according MySQL database. An example is given in the file `test.php`.

## TODO

Use prepared statements to prevent SQL injection. HIGH PRIORITY

## Lookup

### Class: `Database_Connection`
#### `Constructor`: 
Parameters: <br>
`server`: String, server URI to connect to<br>
`name`: String, username to log into the database<br>
`password`: String, password to log into the database<br>
`database`: String, name of the database to be used<br>

#### `getConnectionState()`
Returns the current state of the connection.

No Parameters;<br>
Return types:<br>
`bool`: Return current state of the connection

#### `closeConnection()`
Closes the connection to the database.

No Parameters;<br>
No Return type;

#### `executeQuery(sql)`
Executes a given SQL command using the connection setup earlier.

Parameters: <br>
`sql`: String, contains a sql command

Return type:<br>
`bool`: The query has failed or the query resulted in a true<br>
`mysqli_result`: The query delievers a result other then a boolean.

#### `queryResultToArray(result)`
Converts a query result into a PHP array.

Parameters: <br>
`result`: mysqli_result, a query result from an earlier query

Return type:<br>
`array`: An equivalent array, holding the values of the query.

#### `establishConnection(server, name, password, database)`
Establishes a new connection to a database.

Parameters: <br>
`server`: String, server URI to connect to<br>
`name`: String, username to log into the database<br>
`password`: String, password to log into the database<br>
`database`: String, name of the database to be used<br>

Return type:<br>
`bool`: If the connection fails, it will result in false, else in true.



