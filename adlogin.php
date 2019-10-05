<?php
include('server.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        
        <title>Real Estate</title>
        <style>
            div.header{
                height: 75px;
                width: 315px;
                margin-top: 0%;
                background:rgb(37, 173, 236);
                padding:0;
                /*margin-right: 0%;*/
            }
            div.footer{
                height: 50px;
                width: auto;
                margin-bottom: 0%;
                background: gray;
                padding: 0;
                position: fixed;
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
                       <a href="#" class="selected">Home</a>
			           <a href="apartment.php" >Apartments</a>
			           <a href="bookings.php">Bookings</a>
                       
                   </nav>
                  </div>
           
                </header>  
     <br/>
     
    <div class="header">
  	    <h2>Login</h2>

    </div>
<form method="POST"  action="adlogin.php"  style="width:275px;">
	       <!--<div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                         <input id="login-username" type="text" class="form-control" name="name" placeholder="username">                                        
            </div>-->
            <div class="input-group" style="margin-bottom: 25px">
             <!--<label>Username:</label>-->
                <input type="text" name="name" placeholder="Username" maxlength="25"  required>
           </div>

           <div class="input-group" style="margin-bottom: 25px">
             <!--<label>Password:</label>-->
             <input type="password" name="password" placeholder="Password" maxlength="10"  required>
            </div>
						   <!-- <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                            </div>-->
            <div class="input-group" style="margin-top:10px">
		         <button type="submit" class="btn" name="login_user" id="btn-login" class="btn btn-success">Login</button>
		   </div>                 
		  
								<!--<div style="margin-top:10px" class="form-group">
                                     Button 

                                     <div class="col-sm-12 controls">
                                      <button id="btn-login"  name="login_user" type="submit"  class="btn btn-success">Login</button>
                                      <div class="input-group">
                                          <button name="login_user">Login</button>
                                      </div>

                                    </div>
                                </div>-->
								<div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Don't have an account! 
                                        <a href="adregister.php">
                                            Sign Up Here
                                        </a>
                                        </div>
                                        <!--<?php
		                                  /* if (isset($_SESSION['message'])){
			                                  echo $_SESSION['message'];
		                                      }
		                                      unset($_SESSION['message'])*/
	?>-->
                                    </div>
                                </div>    
		  
		
    </form> 
    <div class="col-md-12">
        <footer>
       
                <p style="color:white;">Copyright &copy; 2019 Real Estate</p>
       </footer>
    </div>
  </body>
</html>