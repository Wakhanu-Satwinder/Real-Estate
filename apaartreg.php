<?php 
$error = "";
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $location = $_POST['location'];
        $descr = $_POST['descr'];
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        
		$price = $_POST['price'];
		
		

        move_uploaded_file($image_tmp,"upload_images/$image");

        $con = mysqli_connect("localhost","root","","realestate");

        $sql_u = "SELECT * FROM apartment WHERE name='$name'";
        $res_u = mysqli_query($con, $sql_u);

        if (mysqli_num_rows($res_u) > 0) 
        {
            echo "Sorry... building already exists";
        }
        
        else
         {
        
             $query = "insert into apartment(name,location,descr,price,image) values ('$name','$location','$descr','$price','$image')";

             $result = mysqli_query($con, $query);

                if($result==1)
                 {       

                   echo  "Building Added succesfull";
        
                  }
                 else
                  {       

                   echo "There was an error trying to add the apartment";

                  }
            }

    }
?>