<?php
   include('session.php');
?>
<html">
   
   <head>
      
      <meta charset="UTF-8"/>
      <title>Welcome </title>
        <style>
            div.header{
                height: 30px;
                width: 500px;
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
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css" type="text/css"/>
        <link rel="stylesheet" href="bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="assets/demo.css"/>
         <link rel="stylesheet" href="basic.css"/>
         <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.min.css"/>
         <script src="gaddafi/jquery.min.js"></script>
   </head>
   
   <body>
   <div class="bg">

    <header class="header-basic">

        <div class="header-limiter">

         <h1><i><a href="#">Real<span>Estate</span></a></i></h1>

       <nav>
           <a href="RealEstate.html">Home</a>
           <a href="apartment.php" >Apartments</a>
           <a href="bookings.php">Bookings</a>
           <a href="adlogin.php" style="color: red;"">Login</a>
           <a href="clregister.php" style="color: red;"">Sign Up</a>
          <!-- <a href="index.php?logout='1'" style="color: red;">Login</a>
           <a href="index.php?logout='1'" style="color: red;">Sign Up</a>-->
        
        
           <!--<a>Welcome, <?php echo $_SESSION['username']?></a>
           <a href="index.php?logout='1'" style="color: red;">logout</a>-->
           
       </nav>
      </div>

    </header> 
<br/>
      <h1>Welcome <?php echo $login_session; ?></h1> 
      <h2><a href = "adlogout.php">Sign Out</a></h2>

      <div class="col-md-12">
       <footer>
                <p style="color:white;">Copyright &copy; 2019 Real Estate</p>
       </footer>
    </div>
   </body>
   
</html>