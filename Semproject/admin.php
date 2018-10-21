<?php include('function.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Motor Trend</title>
	<link rel="icon" type="image/ico" href="logo1.png">
	<style type="text/css">
		body
		{
			margin: 0;
			padding: 0;
			font-family: sans-serif;
			background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),
            url(5.png);
            height: 100vh;
            background-size: cover;

		}
		.avatar
		{
			width: 90px;
			height: 90px;
			border-radius: 50%;
			position: absolute;
			top: -50px;
			left: calc(50% - 50px);
		}
		.box
		{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			width: 400px;
			padding: 40px;
			background: rgba(0,0,0,.8);
			box-sizing: border-box;
			box-shadow: 0 15px 25px rgba(0,0,0,.5);
			border-radius: 10px;

		}
		.box h2
		{
			margin: 0 0 30px;
			padding: 0;
			color: #fff;
			text-align:center;

		}
		.box .inputBox
		{
			position: relative;

		}
		.box .inputBox input
		{
			width: 100%;
			padding: 10px 0;
			font-size: 16px;
			color: #fff;
			letter-spacing: 1px;
			margin-bottom: 30px;
			border: none;
			border-bottom: 1px solid #fff;
			outline: none;
			background: transparent;
		}
		.box .inputBox label
		{
			position: absolute;
			top:0;
			left: 0;
			padding: 10px 0;
			font-size: 16px;
			color: #fff;
			pointer-events: none;
			transition: .5s;
		}
		.box .inputBox input:focus ~ label,
		.box .inputBox input:valid ~ label
		{
			top: -18px;
			left: 0;
			color: #03a9f4;
			font-size: 12px;
		}
		.box input[type="submit"]
		{
			background: transparent;
			border: none;
			outline: none;
			color: #fff;
			background: #03a9f4;
			padding: 10px 20px;
			cursor: pointer;
			border-radius: 5px;

		}
		.box a
		{
			text-decoration: none;
			font-size: 12px;
			line-height: 20px;
			color: darkgrey;
		}
		nav
      {
         position: fixed;
         top: 0;
         left: 0;
         width: 100%;
         height: 100px;
         padding: 10px 100px;
         box-sizing: border-box;
         transition: .3s;
         color: #fff;
      }
      nav.black
      {
           background: rgba(0,0,0,0.8);
           height: 100px;
           padding: 10px 100px;
           color: #fff;
      }
      nav ul
      {
         list-style: none;
         float: right;
         margin: 0;
         padding: 0;
         display: flex;
         color: #fff;

      }
      nav ul li
      {
         list-style: none;
         color: #fff;
      }
      nav ul li a
      {
          line-height: 80px;
          color: #151515;
          padding: 12px 30px;
          text-decoration: none;
          text-transform: uppercase;
          transition: .3s;
          color: #fff;
          font-size: 20px;
      }
        nav.black ul li a
        {
         color: #fff;
        }
        nav ul li a:focus
        {
         outline: none;
        }
        nav ul li a.active 
        {
         background: #E2472F;
         color: #fff;
         border-radius: 6px;
        }
	</style>
</head>
<body>
  <div class="box">
  	<img src="avatar.png" class="avatar">
  	<h2>LOGIN</h2>
  	<form action="admin.php" method="post">
  		<?php echo display_error(); ?>
  		<div class="inputBox">
  			<input type="text" name="username" required="">
  			<label>Username</label>
  		</div>
  		<div class="inputBox">
  			<input type="password" name="password" required="">
  			<label>Password</label>
  		</div>
  		<input type="submit" name="login_btn" value="Login"><br>
  	</form>
  </div>
  <div class="wrapper">
      <nav>
         <div class="logo"></div>
         <ul>
            <li><a href="Home.html">HOME</a></li>
            <li><a href="about us.html">ABOUT US</a></li>
            <li><a href="gallery.html">GALLERIES</a></li>
            <li><a href="contactus.html">CONTACT US</a></li>
         </ul> 
      </nav>   
    </div>
</body>
</html>