<?php  

if(isset($_POST['submit'])){
    $name =    $_POST['name'];
    $email =   $_POST['email'];
    $phone =   $_POST['phone'];
    $address =   $_POST['address'];
    
    $connection = mysqli_connect('localhost','root','','arinalogin');
    if(!$connection){
        echo "you are connection failed";
    }
    
    $query = "INSERT INTO signup(name,email,phone,address) VALUES ('$name','$email','$phone','$address')";
    $result = mysqli_query($connection,$query);
    if(!$result){
        die('query failed');
    }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="style.css">
    <title>Arina login form</title>
</head>
<body class="first">
    <div class="container">
        
    <h1>Welcome to Hotel Arina</h1>
     <h4>Sign up buddy</h4>


    <form action="formlogin.php" method ="post">
     <div class="form-group">
        <label for="name"></label>
        <input type="text" name ="name" class="form-control" placeholder="Name">
     </div>

     <div class="form-group">
        <label for="email"></label>
        <input type="email" name ="email" class="form-control" placeholder="Email">
     </div>

     <div class="form-group">
        <label for="phone"></label>
        <input type="phone" name ="phone" class="form-control" placeholder="Phone">
     </div>

     <div class="form-group">
        <label for="address"></label>
        <input type="text" name ="address" class="form-control" placeholder="Address">
     </div>
     <div class="checkbox-item">
     <input type="checkbox" name="check" id="" class="check">
     <p class="checkbox-text">I agree the terms & conditions</p>
     </div>
     <input type="submit" class="btn " name="submit" value="Send Request">
     
     </form>
    
    </div>
</body>
</html>