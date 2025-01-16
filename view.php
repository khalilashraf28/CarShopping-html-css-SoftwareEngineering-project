<!DOCTYPE html>
<html>
<head>
    <title>Login Data</title>
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
    padding: 50px;
    width: 400px;
    max-width: 100%;
    text-align: center;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        th, td {
            padding: 10px;
            text-align: left;
        }
        
        th {
            background-color: #26284e;
            color: #fff;
        }
        
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        
        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        $db_user = 'root';
        $db_pass = "";
        $db = 'project'; //test

        $conn = mysqli_connect('localhost', $db_user, $db_pass) or die('Unable to connect database');

        mysqli_select_db($conn, $db) or die("cannot connect database practice");


        if (!$conn) {
            die('Could not connect: ' . mysql_error());
        }
        $sql = 'SELECT uname, pwd FROM login';

        $retval = mysqli_query($conn, $sql);

        if (!$retval)
            die('Could not get data: ' . mysql_error()); {

            echo "<table>";
            echo "<tr>";
            echo "<th>Username</th>";
            echo "<th>Password</th>";

            echo "</tr>";
            while ($row = mysqli_fetch_array($retval, MYSQL_NUM)) {
                echo "<tr>";
                echo "<td>" . $row[0] . "</td>";
                echo "<td>" . $row[1] . "</td>";

                echo "</tr>";
            }
            echo "</table>";
        }
        ?><p><a href="car.html">Back</a>
		</p>
        <p><a href="login.php">Login</a></p>
		<p><a href="update.php">Update Account!</a></p>
		<p><a href="delete.php">Delete Account!</a></p>
    </div>
</body>
</html>
