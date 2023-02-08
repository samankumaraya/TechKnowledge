<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body{
    background-color:azure;
    background-image: url("regbackground.png");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
    .container{
justify-content: center;
width:35%;
height: 38%;
background-color: aliceblue;
justify-content: center;
margin-top: 13%;
margin-left: 30%;
}
input{
    height:30px;
    width: 63%;
    margin-left: 18%;
    margin-bottom:3%;
}

h1{
    margin-left: 33%;  
    padding-top:30px;
}
h3{
    margin-left: 38%;
    padding-bottom:30px
}
hr{
    width: 100%;
    color: rgb(190, 53, 190);
    height: 10px;
    background-color:rgb(190, 53, 190);
    
    font-size: 15px;
}
.btn{
    
    height: 35px;
    width: 63%;
    background-color: rgb(190, 53, 190);
    font-size: 20px;
    cursor: pointer;
}
input::placeholder{
    font-size:17px;
}
footer{
    margin-left: 20%;
    font-size:20px;
}
.logg{
    text-decoration: none;
    font-size: 25px;
}
.btn2{
    cursor: pointer;
}
</style>
<body>

<div class="container">
    <hr>
<form id="login" method="get" action="login.php">    
        
        <h1>WELCOME</h1>
        <input type="email" name="email" id="" placeholder="Email"><br><br>
           
        <input type="password" name="password" id="" placeholder="password"><br><br>
        <input type="submit" class="btn" value="Log In">
        <h3>Forgot <a href="#">Password</a>    </h3>
           
        <footer>Don't have account <button class="btn2"><a href="register.php" class="logg">Sign Up here</a></footer></button>
    
       
      </form>  
      <hr>
</div>
    
</body>
</html>