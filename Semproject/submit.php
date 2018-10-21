<?php
$mysqli = new mysqli("localhost", "root", "", "registration");
$sql = "INSERT INTO messages (email, message) VALUES ('$_POST[post_email]', '$_POST[post_message]');");
$mysqli->query($sql) === true)
$mysqli->close();
    header('location: submit.html');
?>
