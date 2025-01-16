<!DOCTYPE html>
<html>
<head>
	<title>Delete User</title>
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
		
		th,
		td {
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
		
		button[type="submit"] {
			width: 100%;
			padding: 10px;
			border-radius: 100px;
			border: none;
			background-color: #E7E0D6;
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
		<?php
		$db_user = 'root';
		$db_pass = "";
		$db = 'project'; //test    
		$conn = mysqli_connect( 'localhost', $db_user, $db_pass )or die( 'Unable to connect database' );
		mysqli_select_db( $conn, $db )or die( "Cannot connect database practice" );
		if ( !$conn ) {
			die( 'Could not connect: ' . mysql_error() );
		}

		$sql = 'SELECT Id, uname, pwd FROM login';
		$retval = mysqli_query( $conn, $sql );
		if ( !$retval )
			die( 'Could not get data: ' . mysql_error() );

		echo "<table>";
		echo "<tr>";
		echo "<th>Username</th>";
		echo "<th>Password</th>";
		echo "<th>Action</th>";
		echo "</tr>";

		while ( $row = mysqli_fetch_array( $retval, MYSQL_NUM ) ) {
			echo "<tr>";
			echo "<td>" . $row[ 1 ] . "</td>";
			echo "<td>" . $row[ 2 ] . "</td>";
			echo "<td><a href='delete.php?id=" . $row[ 0 ] . "'>Delete</a></td>";
			echo "</tr>";
		}

		echo "</table>";

		if ( isset( $_GET[ 'id' ] ) ) {
			$id = $_GET[ 'id' ];
			$sql = "DELETE FROM login WHERE Id = $id";
			$result = mysqli_query( $conn, $sql );

			if ( $result ) {
				echo "<p>User with ID $id has been deleted successfully.</p>";
			} else {
				echo "<p>Failed to delete user with ID $id. Please try again.</p>";
			}
		}
		?><p><a href="view.php">Back</a>
		</p><p><a href="login.php">Login</a>
		</p>
	</div>
</body>
</html>