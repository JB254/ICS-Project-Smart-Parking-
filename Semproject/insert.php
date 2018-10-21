<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "semproject");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Escape user inputs for security
$first_name = $mysqli->real_escape_string($_REQUEST['first_name']);
$last_name = $mysqli->real_escape_string($_REQUEST['last_name']);
$username = $mysqli->real_escape_string($_REQUEST['username']);
$email = $mysqli->real_escape_string($_REQUEST['email']);
$password = $mysqli->real_escape_string($_REQUEST['password']);
 
// attempt insert query execution
$password = md5($password);
$sql = "INSERT INTO users (first_name, last_name, username, email, password) VALUES ('$first_name', '$last_name', '$username', '$email', '$password')";
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
    header('location: login.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>