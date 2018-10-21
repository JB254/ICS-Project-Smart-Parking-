<!DOCTYPE html>
<html lang="en">
<head>
  <title>Motor Trend</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
      background-color: #1abc9c; 
      color: #ffffff;
  }
  .bg-2 { 
      background-color: #474e5d;
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff; 
      color: #555555;
  }
  .bg-4 { 
      background-color: #2f2f2f; 
      color: #fff;
  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
  .navbar {
      padding-top: 15px;
      padding-bottom: 15px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
      color: #1abc9c !important;
  }
  .Julie
  {
     position: absolute;
  }
  </style>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
  </div>
</nav>

<div class="container-fluid bg-3 text-center">    
  <h3 class="margin">Registered Users</h3><br>
  <div class="row">
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
<h1>Registered Users</h1>
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
  </div>
</div>
<a class="Julie" href="logout.php">LogOut</a>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
 <p>© 2018 MOTOR TREND | MOTOR TREND GROUP, LLC. ALL RIGHTS RESERVED.</p>
</footer>

</body>
</html>
