<?php
if (!empty($_POST)) {
    $uname = $_POST['uname'];
    $pwd = $_POST['pswd'];
    
    $db_user = 'root';
    $db_pass = "";
    $db = 'project'; // Replace 'test' with your actual database name
    
    $con = mysqli_connect('localhost', $db_user, $db_pass) or die('Unable to connect to the database');
    
    mysqli_select_db($con, $db) or die("Cannot select the database");
    
    $sql = "INSERT INTO login (uname, pwd) VALUES ('$uname', '$pwd')";
    
    $result = mysqli_query($con, $sql);
    
}
?>

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
        
        .message {
            text-align: center;
            color: #fff;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>CREATE NEW ACCOUNT</h1>
        <form method="POST" action="">
            <input name="uname" type="text" required id="uname" placeholder="Username">
            <input name="pswd" type="password" required id="pswd" placeholder="Password">
            <button type="submit">Submit</button>
        </form>
        <p>&nbsp;</p>
        <p><a href="login.php">Back!</a></p>
    </div>
    <?php if(isset($result) && $result): ?>
    <div class="message">
        You have successfully created a new account
    </div>
    <?php elseif(isset($result) && !$result): ?>
    <div class="message">
        Operation Failure, please try again
    </div>
    <?php endif; ?>
</body>
</html>
