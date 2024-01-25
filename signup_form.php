<?php
$connection = mysqli_connect('localhost','root','','signup');
if(isset($_POST['sent'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
   
    
    
    $request="insert into sign_form(name,email, password) values('$name','$email','$password')";


    mysqli_query($connection, $request);
    header("location:signup.php");
}
else{
    echo 'something went wrong ';
} 
?>