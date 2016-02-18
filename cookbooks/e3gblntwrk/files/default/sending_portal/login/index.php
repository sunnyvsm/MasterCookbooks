<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login......</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>



<div class="login_box">
<img src="img/logo.png">


<form method="post" action="login-process-auth.php">


        <div class="username">
            <img src="svg/circle25.svg">
            <input type="text" placeholder="Username" name="UserName">
        </div>
        
        
        <div class="password">
            <img src="svg/lock13.svg">
            <input type="password" placeholder="Password" name="PassWord">
        </div>

 		 <div class="captcha">
         <img src="captcha.php">
            <input type="text" placeholder="Enter Captcha" name="captcha">
            
        </div>
        
        
		<input type="submit" value="LOGIN"  name="loginAuthentication">


</form>

<p class="fp">Forgot Password</p>



</div>













</body>
</html>
