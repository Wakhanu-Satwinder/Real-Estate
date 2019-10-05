<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
         <title>MyStore</title>
    
        <link rel="stylesheet" href="style.css" type="text/css"/>
		<link rel="stylesheet" href="bootstrap.css" type="text/css" />
		 <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		  <link rel="stylesheet" href="assets/demo.css"/>
	      <link rel="stylesheet" href="basic.css"/>
	      <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'/>
		  <style>
#form label.error {
		margin-left: 10px;
		width: auto;
		display: inline;
	}
  </style>
  <script>

	$().ready(function() {
		
		$("#form").validate({
			rules: {
				
				name: {
			  
				required:true,	
				minlength:3
				}
				yob: {
			  
				required:true	
				}
				
				}
				
			
			},
			messages: {
			
				name: {
					required: "Please enter child name",
					minlength: "Child name must consist of at least 3 characters"
				},
				yob: {
					required: "Please enter year of birth"
		
				}
			
			}
		});
	});
</script>
  </head>
  

   
   
   <body >
      <header class="header-basic">

	     <div class="header-limiter">

		  <h1><i><a href="#">My<span>Store</span></a></i></h1>

		<nav>
			<a href="index.php">Home</a>
			<a href="building.php" >Building Details</a>
			<a href="rooms.php">Room details</a>
			<a href="#">About</a>
			<a href="#">Contact</a>
		</nav>
	   </div>

     </header>  
	 
	 <br/>
<div class="container-fluid">
   <div class="row-fluid register_top">
        <div class="col-md-12 ">
		     <h3> Add Children</h3>
		</div>
		
	</div>
  </div>	
   <br />

<div class = "container-fluid">
  <div class="row-fluid ">
       <div class="col-md-3"></div>
	      <div class="col-md-6 form" >
		       <h3 style="text-align:center ;font-weight : bold">Add Children</h3>
			   <br /> <br />
			    <?=$error?>
		       <form role="form" method="post" action="" enctype="multipart/form-data" id="form">
			   
			   
			   
			   <div class="">
   				<label>Building:</label>
				<select name="building_id" id="building_id" class="form-control select" required></select> 
				<!-- <br /> -->
   			</div>
			       <div class="form-group">
				     
				      <p class="label">CHILD NAME :</p> 
					  
					    <input type="text" name="name" id="name" class=" input-lg" required/>
				   </div>
				   <br />
				   <div class="form-group">
				      <p class="label">Year Of Birth :</p> 
					    <input type="text" name="yob" id="yob" class=" input-lg" required/>
				   </div>
				     <br />
			         <div class="form-group">
				      <p class="label">Gender :</p>
					    <select name="gender" class="input-lg form-control">
						<option>Male</option>
						<option>Female</option>
						</select>
				   </div>
				   <br />
				   <div class="form-group">
				   <p class="label">Image :</p>  <br>                          
                            <input type="file" name="image" class="form-control input-lg" id="profile-img" required/><br>
                                    <img src="" id="profile-img-tag" width="100px" />

                                    <script type="text/javascript">
                                        function readURL(input) {
                                            if (input.files && input.files[0]) {
                                                var reader = new FileReader();
                                                
                                                reader.onload = function (e) {
                                                    $('#profile-img-tag').attr('src', e.target.result);
                                                }
                                                reader.readAsDataURL(input.files[0]);
                                            }
                                        }
                                        $("#profile-img").change(function(){
                                            readURL(this);
                                        });
                                    </script><br>
									</div>
				   
				   <br />
				   <input type="submit" name="submit" value="Add Child" class="btn btn-primary btn-block btn-lg">
			   </form>
		  </div>
	   <div class="col-md-3"></div>
  </div>
 </div>  
<br /> <br /><br /><br />
