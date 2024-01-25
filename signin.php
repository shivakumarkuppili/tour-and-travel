<?php
$connection = mysqli_connect('localhost','root','','signup');
if(isset($_POST['send'])){
    
    $email=$_POST['email'];
    $password=$_POST['password'];
    $user_check_query = "SELECT * FROM sign_form WHERE password='$password' OR email='$email' LIMIT 1";
    $result = mysqli_query($connection, $user_check_query);
    $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
   

    if ($user['email'] != $email) {
        $err = "signup first";
      
    }
    if ($user['password'] != $password) {
        $err = "signup first";
        
    }
  }
   
    
    
   


  
    header("location:signup.php");
}
else{
    echo 'something went wrong ';
} 
?>
