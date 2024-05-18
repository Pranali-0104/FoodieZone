<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
    <link rel="stylesheet" href="css/login.css" type="text/css">
    
</head>
<body>

	
	<div class="outer-box">
        <header class="header-name">
        <!-- <h1>Food Chat</h1> -->
    	<h1>Log In <span>to start ordering</span></h1>
		
        </header>
    <main class="container">
	<form  method="POST" action="logindb.php">
        	<label for="user" method="post" >Username
            	<br>
                <input type="text" name="user" id="user" placeholder="Enter Username" required>
        	</label>
        	<br>
        	<label for="password">Password
            	<br>
                <input type="password" name="password" id="password" placeholder="Enter Password" required>
        	</label>
        	<br>
        	<!-- <input type="submit" value="Submit"> -->
            <button type="submit">Log in</button>
            
            <p>Don't have an account? <a href="signup.php">Sign Up</a> instead.</p>
    	</form>
	</main>
    </div>
</body>
</html>