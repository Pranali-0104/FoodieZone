
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signup.css" type="text/css">
    <script src="src/password.js" defer></script>
	<title>FOODIEZONE</title>
</head>
<body>
 
            <h2>Create an Account</h2>
            <form  method="POST" action="signupdb.php">
              <div class="box">
                  <div class="name">
                    <input type="text" placeholder="ENTER YOUR NAME" id="name" name="name" required>
                  </div>
                 <div class="mail">
                   <input type="email" placeholder="ENTER EMAIL" id="mail" name="mail" required>
                 </div>
                  <div class="password">
                    <input type="password" placeholder="CREATE PASSWORD" id="password" name="password" required>
                  </div>
                  <div class="confirm">
                    <input type="password" placeholder="CONFIRM PASSWORD" id="confirm" onkeyup='check();'> 
                  </div>
                  <span id='message'></span>
                  <button type="submit">SignUp</button>
                  <h3>Already have an account? <a href="login.php">Login</a> instead</h3>
              </div>
            </form>
 
    </body>
    </html>

    