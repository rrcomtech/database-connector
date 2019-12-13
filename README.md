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

### _Class: `Database_Connection`_
#### `Constructor`: Expects 4 Parameters:
`server`: String, server URI to connect to<br>
`name`: String, username to log into the database<br>
`password`: String, password to log into the database<br>
`database`: String, name of the database to be used<br>

#### `getConnectionState()`
