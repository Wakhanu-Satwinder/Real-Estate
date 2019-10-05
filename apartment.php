<?php
    session_start();
     if(!isset($_SESSION['username'])){
     die(header("location: adlogin.php"));
  }
 ?>
 <!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Real Estate</title>
        <style>
            div.header{
                height: 75px;
                width: 405px;
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
                       <!--<a href="adlogin.php" style="color: red;"">Login</a>
                       <a href="clregister.php" style="color: red;"">Sign Up</a>
                       <a href="index.php?logout='1'" style="color: red;">Login</a>
                       <a href="index.php?logout='1'" style="color: red;">Sign Up</a>-->
                    
                    
                       <a>Welcome, <?php echo $_SESSION['username']?></a>
                       <a href="index.php?logout='1'" style="color: red;">logout</a>
                       
                   </nav>
                  </div>
           
                </header> 
        <br/>
        <!--fieldset-->
        <div class="header">
            <h2>Register Apartment</h2>
          </div>
         <form method="POST" enctype="multipart/form-data" action="apaartreg.php" id="form">
             
                  <div class="input-group">
                   <!--<label>Apartment Name:</label>-->
                      <input type="text" name="name" placeholder="Apartment Name" maxlength="25" required>
                  </div>
                 <div class="input-group">
                   <!--<label>Location:</label>-->
                   <input type="text" name="location" placeholder="Location" maxlength="10" required>
                 </div>
                 <div class="input-group">
                   <!--<label>Description:</label>-->
                   <input type="text" name="descr"placeholder=" Brief Description" maxlength="300"required>
                   </div>
                 <div class="input-group">
                   <!--<label>Price:</label>-->
                   <input type="text" name="price" placeholder="Price" maxlength="20"required>
                   </div>
                  <div class="form-group">
                      <p class="label">Choose Image :</p>                         
                           <input type="file" name="image" class="form-control input-lg" id="apartment-img" required/><br/>
                           <img src="" id="apartment-img-tag" width="100px" />
      
                                    <script type="text/javascript">
                                         function readURL(input) {
                                          if (input.files && input.files[0]) {
                                             var reader = new FileReader();
                                                      
                                             reader.onload = function (e) {
                                             $('#apartment-img-tag').attr('src', e.target.result);
                                             }
                                             reader.readAsDataURL(input.files[0]);
                                           }
                                         }
                                        $("#apartment-img").change(function(){
                                          readURL(this);
                                         });
                                    </script>
                 </div>
              <div class="input-group">
                 <button name="submit">Submit</button>
              </div>
            </form>  
    <!--/fieldset-->
         <br/>
        
    
    <div class="col-md-12">
       <footer>
                <p style="color:white;">Copyright &copy; 2019 Real Estate</p>
       </footer>
    </div>
    </body>
</html>