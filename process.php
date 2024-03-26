<?php
include ("connection.php");
if(isset($_POST['btn']));
{
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $birthday=$_POST['birthday'];
    $result=mysqli_query($con,"Insert into beauty values('$firstname','$lastname','$email','$birthday') ");
}
    if($result){
        echo "Register Successfully.....";
    }
    else{
        echo "Failed!!";
    }

?>