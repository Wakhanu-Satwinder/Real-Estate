<?php
include('server.php')
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Real Estate</title>
        <style>
            div.header{
                height: 65px;
                width: 230px;
                margin-top: 0%;
                background:rgb(37, 173, 236);
                padding:0;
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
            .button{
                background-color:#1c87c9;
                border:none;
                color:white;
                padding:20px 34px;
                text-align:center;
                display:inline-block;
                font-size:20px;
                margin:4px 2px;
                cursor:pointer;
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
                       <a href="RealEstate.php">Home</a>
                       <a href="apartment.php" >Apartments</a>
                       <a href="bookings.php">Bookings</a>
                       <a href="inter.php" style="color: red;"">Login</a>
                       <a href="intereg.php" style="color: red;"">Sign Up</a>
                      <!-- <a href="index.php?logout='1'" style="color: red;">Login</a>
                       <a href="index.php?logout='1'" style="color: red;">Sign Up</a>-->
                    
                    
                       <!--<a>Welcome, <?php echo $_SESSION['username']?></a>
                       <a href="index.php?logout='1'" style="color: red;">logout</a>-->
                       
                   </nav>
                  </div>
           
                </header> 
        <br/>
        
            <div style="margin-left:40%; margin-top:10%;">
                     <a href="http:adregister.php" class="button">ADMIN</a>
                     <a href="http:clregister.php" class="button">CLIENT</a>
            </div>       
              
         
        
     <footer>
        <div class="col-md-12">
                <p style="color:white;">Copyright &copy; 2019 Real Estate</p>
     </footer>
    </div>
    </body>
</html>