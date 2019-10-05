<div class="container-fluid">
   <div class="row-fluid">
      <div class="col-md-12">
<?php include "header_home.php"?>
<?php include "add_children_action.php" ?>
       </div>
     </div>
  </div>
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
                         `        <script type="text/javascript">
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
