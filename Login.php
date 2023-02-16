<?php      
    include('connection.php'); 
    
    if(isset($_POST['submit'])){

    
    
    $email = $_POST['email'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from users where email = '$email' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>"; 
            header("Location: homepage.php"); 
        }  
        else{  
           
        } 
    }    
?>  


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
   <link rel="stylesheet" href="stylle.css">
   <style>
    .container{
    display: flex;
    
    padding: 0px;
    margin: 0px;
    background-color: aliceblue;
    margin-left:9%;
    height:700px;
    margin-top:2%;
    width:80%;
    margin-left: 130px;
}
body{
    background-color:azure;
    background-image: url("");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
img{
    width: 600px;
    height: 600px;
    margin-left: 200px;
    margin-top: 50px;
}
.login{
    margin-left: 150px;
    margin-top: 100px;
}
input{
    height:40px;
    width: 150%;
    margin-left:0%;
}
h1{
    font-size: 45px;
    margin-left: 30px;
}
input::placeholder{
    font-size: 20px;
}
.btn{
    background-color: rgb(190, 53, 190);
    font-size: 20px;
}
.btn2{
    height: 30px;
    width: 250px;
    font-size: 20px;
}
a{
    text-decoration: none;

}
   </style>
</head>
<body>
   <div class="container">
   <div class="login">
    <form id="login" method="POST" action="login.php">    
            
            <h1>WELCOME</h1>
            <input type="email" name="email" id="" placeholder="Email"><br><br>
               
            <input type="password" name="password" id="" placeholder="password"><br><br>
            <input type="submit" class="btn" name="submit" value="Log In Here">
            <h3>Forgot <a href="#">Password</a>    </h3>
               
            <footer>Don't have account <button class="btn2"><a href="register.php" class="logg">Sign Up here</a></footer></button>
          </form>  
</div>

<div>
        <img src="loginimg.jpg" alt="" srcset="" >
    </div>

   </div>
</body>
</html>
