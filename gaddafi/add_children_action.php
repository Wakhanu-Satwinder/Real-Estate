<?php 
$error = "";
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $yob = $_POST['yob'];
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $gender = $_POST['gender'];
		

        move_uploaded_file($image_tmp,"childrenimages/$image");

        $con = mysqli_connect("localhost","root","","childcare");

        $query = "insert into children (name,yob,image,gender,homeid) values ('$name','$yob','$image','$gender','$user')";

        $result = mysqli_query($con, $query);

        if($result==1)
        {       

        $error .='<p class="alert alert-success">Child Added succesfully</p>';
        
        }
        else {       

         $error .='<p class="alert alert-danger">Child Addition failed. Try Again</p>';

             }
    }
?>