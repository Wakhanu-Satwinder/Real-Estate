<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: cllogin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: cllogin.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <style>
            div.header{
                height: 50px;
                width: 410px;
                margin-top: 0%;
                background:rgb(37, 173, 236);
               /* margin-right: 0%;*/
            }
            div.footer{
                height: 50px;
                width: auto;
                margin-bottom: 0%;
                background: gray;
                padding: 0;
                position: fixed;
            }
            div.bg{
                background-image:url("banner.jpg");
  /*opacity:0.6;*/
                height: 120%;
                background-position:center;
                background-repeat:no-repeat;
                background-size:cover;
  /*filter:blur(8px);
  -webkit-filter: blur(8px);*/
           }
        </style>
	<link rel="stylesheet" type="text/css" href="style.css">
	
	<link rel="stylesheet" href="bootstrap.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/demo.css"/>
	<link rel="stylesheet" href="basic.css"/>
    <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'/>
</head>
<body>
<div class="bg">
   <header class="header-basic">

	     <div class="header-limiter">

		  <h1><i><a href="#">My<span>Store</span></a></i></h1>

		<nav>
            <a href="#" class="selected">Home</a>
			<a href="apartment.php" >Apartments</a>
			<a href="rooms.php">Bookinggs</a>
			<a href="adlogin.php" style="color: red;"">Login</a>
            <a href="adregister.php" style="color: red;"">Sign Up</a>
		</nav>
	   </div>

     </header>  <br/>

<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p> <a href="apartment.php">FILL DETAILS<a>
    	<p> <a href="clindex.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
<footer>
        <div class="col-md-12">
                <p style="color:white;">Copyright &copy; 2019 Real Estate</p>
     </footer>
    </div>	
 </div>
</body>
</html>