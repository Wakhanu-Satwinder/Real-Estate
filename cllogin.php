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
                height: 60px;
                width: 280px;
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
                height: 110%;
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
                       <a href="RealEstate.php">Home</a>
                       <a href="building.php" >Apartments</a>
                       <a href="rooms.php">Bookings</a>
                       <!--<a href="cllogin.php" style="color: red;">Login</a>
                       <a href="clregister.php" style="color: red;">Sign Up</a>
                       <a href="index.php?logout='1'" style="color: red;">Login</a>
                       <a href="index.php?logout='1'" style="color: red;">Sign Up</a>-->
                    
                    
                       <!--<a>Welcome, <?php echo $_SESSION['username']?></a>
                       <a href="index.php?logout='1'" style="color: red;">logout</a>-->
                       
                   </nav>
                  </div>
           
                </header> 
        <br/>
        <div class="header">
                <h2>LOGIN</h2>
        </div>
          <!--div class="container" style="height:180px; width:200px;"-->
        <!---fieldset style="height:250px; width:250px;"-->
            <form  method="POST"  action="cllogin.php" class="form-horizontal" style="width:275px">
                <div style="margin-bottom: 25px" class="input-group">
                         <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                             <input id="login-username" type="text" class="form-control" name="name" value="" placeholder="username">                                        
                 </div>
                                      
                                   <!-- <div class="input-group">
                        <label>Username: </label> 
                           <input type="text" name="name" required>
                        </div> -->
                 <div style="margin-bottom: 25px" class="input-group">
                         <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                             <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                 </div>
                                               
                <div style="margin-top:10px" class="form-group">
                                               <!-- Button -->
                    <div class="col-sm-12 controls">
                        <button id="btn-login"  name="login_user"   class="btn btn-success">Login</button>

                    </div>
                </div>
                                        <div class="form-group">
                                               <div class="col-md-12 control">
                                                   <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                                       Don't have an account! 
                                                   <a href="clregister.php">
                                                       Sign Up Here
                                                   </a>
                                                   </div>
                <?php
                  /* if (isset($_SESSION['message'])){
                       echo $_SESSION['message'];
                   }
                   unset($_SESSION['message']);*/
               ?>
                                               </div>
                                           </div>    
                     
                   
               </form>
        <!--/fieldset-->
        <br/>

        
     <footer>
        <div class="col-md-12">
                <p style="color:white;">Copyright &copy; 2019 Real Estate</p>
     </footer>
    </div>
    </body>
</html>