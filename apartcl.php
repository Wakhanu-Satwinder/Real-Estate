<?php
//include('server.php');
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
     <?php
     $servername ="localhost";
     $username ="username";
     $password ="";
     $dbname ="realestate";

     //connection
     $db = mysqli_connect('localhost', 'root', '', 'realestate');
     //connect check
     if ($db->connect_error){
         die("connection failed:".$db->connect_error);
     }
     $query="SELECT id,name,location,descr,price FROM apartment";
     $result=$db->query($query);
     if($result->num_rows>0){
         while($row=$result->fetch_assoc()){
             echo "<br>id:".$row["id"]." "."  ".$row["name"]." ".$row["location"]." ".$row["descr"]." ".$row["price"]."<br>";
         }
     }else{
         echo "0 results";
     }
     $db->close();
     ?>
     </body>
     </html>