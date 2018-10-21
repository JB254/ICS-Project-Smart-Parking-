<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Motor Trend</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="assets/css/custom.css" rel="stylesheet" />
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM login";
$result = $conn->query($sql);

?>
<h1 class="header">Registered Users</h1>
<div class="table-responsive">
<table class="table">
        <tr class="header">
            <td>Delete</td>
            <td>Firstname</td>
            <td>Lastname</td>
            <td>Username</td>
            <td>Email</td>
            <td>Password</td>
        </tr>
        <?php
           while ($row =$result->fetch_assoc()) {
            $fm=$row['first_name'];
            $lm=$row['last_name'];
            $um=$row['username'];
            $em=$row['email'];
            $ph=$row['password'];
               echo "<tr class= info>";
               echo "<td><a class=\"btn btn-danger\" href=\"delete.php?username=".$um."\">Delete</a></td>";
               echo "<td>".$fm."</td>";
               echo "<td>".$lm."</td>";
               echo "<td>".$um."</td>";
               echo "<td>".$em."</td>";
               echo "<td>".$ph."</td>";
               echo "</tr>";
           }

$conn->close();
        ?>
    </table>
    </div>             
              <hr/>         
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>  
</body>
</html>
