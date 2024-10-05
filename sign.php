<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet"  href="signup.css">

<title>TechNook</title>
</head>
<body>
<div class="wrapper">
<form  id="form" action="register.php" method="post">
    <h2>Sign Up</h2>
    <div class="input-box">
        <input type ="text" id="name" placeholder="Username" required>
    </div>
    <div class="input-box">
        <input type="email" id ="email" placeholder="Email" required>
    </div>
    <div class="input-box">
        <input type="password" id="password" placeholder="Password" required>
    </div>
    <div class="input-box">
        <input type="password" id="confirm_password" placeholder="Confirm Password" required>
   
    <input type="submit" class="btn" value="Sign Up" name="signUp">

<div class="Login-Link">
<p>Already Have an Account?<a href="login.php">Log In</a></p>
</div>   
<script src="js/sign.js"></script>
</form>


</div>
</body>
</html>