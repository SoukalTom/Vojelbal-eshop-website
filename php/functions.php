<?php
function pdo_connect_mysql() {
    // Update the details below with your MySQL details
    $HOST = 'localhost';
    $USER = 'root';
    $PASSWORD = '';
    $DB_NAME = 'productsdb';
    try {
    	return new PDO('mysql:host=' . $HOST . ';dbname=' . $DB_NAME . ';charset=utf8', $USER, $PASSWORD);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Nepovedlo se připojit k databázi!');
    }
}
// Template header, feel free to customize this
function template_header() {

}
?>