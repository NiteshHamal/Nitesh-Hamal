<?php
if(isset($_POST['submit'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password1=$_POST['password720'];
    include 'connection.php';
    $sql="INSERT INTO test VALUES('','$name','$email','$password1')";
    $query=mysqli_query($conn,$sql);


    if($query){
header("Location: register.php ");

    }
    else {


    }

}

?>