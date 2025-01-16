<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #26284e;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        
        .container {
    border: thin solid;
    background-color: #fff;
    border-radius: 30px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 200px;
    width: 400px;
    max-width: 100%;
    text-align: center;
        }
        
        h1 {
            text-align: center;
            font-family: Arial, sans-serif;
        }
        
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border-radius: 10px;
            border: 1px solid #ccc;
            margin-bottom: 15px;
            box-sizing: border-box;
        }
        
        button[type="submit"] {
            width: 100%;
            padding: 10px;
            border-radius: 100px;
            border: none;
            background-color: #26284e;
            color: #fff;
            cursor: pointer;
        }
        
        button[type="submit"]:hover {
            background-color: #946014;
        }
    </style>
</head>
<body>
<div class="container">
        <h1>Login</h1>
        <form method="POST" action="login.php">
            <input name="username" type="text" required id="uname" placeholder="Username">
			
            <input name="password" type="password" required id="pswd" placeholder="Password">
			
          <button formaction="Submit.php" type="submit">Login</button>
      </form>
        <p>&nbsp;</p>
        <p><a href="create.php">Create New Account!</a></p>
</div>
</body>
</html>
