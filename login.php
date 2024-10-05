<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="login.css"> 
  
    <title>TechNook</title>
</head>
<body> 
     <div class="wrapper">
       <form id="myform" action="Signin.php" method="post">

        
        <h1>Log In </h1>
        <div class="input-box">
            <input type ="text" id="username" placeholder="Username" required>
        </div>
        <div class="input-box">
            <input type="password" id="password" placeholder="Password" required>
        </div>
        <div class ="remember-forgot">
           <label> <input type="checkbox">Remember me</label>
        <a href ="#">Forget Password?</a>
        </div>
        <button type="submit" class="btn" value="login" name="login">Login</button>
    
<div class="Signup-Link">
    <p>Don't Have an account?<a href="sign.php">Sign Up</a></p>
   
</div>   
<script src="js/login.js"></script>
 </form>

    </div>
</body>
</html>