<?php
session_start();
$uname = $_POST['username'];
$pwd = $_POST['password'];
$_SESSION['usern'] = $uname;
$_SESSION['pswd'] = $pwd;
$host = "localhost";
$user = "root";
$password = "";
$db = "project";

$con = mysqli_connect( 'localhost', $user, $password )or die( 'Unable to connect database' );

mysqli_select_db( $con, $db )or die( 'cannot' );

if ( isset( $_POST[ 'username' ] ) ) {
	$uname = $_POST[ 'username' ];
	$password = $_POST[ 'password' ];

	$sql = "select * from login where uname='" . $uname . "' AND pwd='" . $password . "'
	limit 1";

	$result = mysqli_query( $con, $sql );

	if ( mysqli_num_rows( $result ) > 0 ) {
		//$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_array( $result ); {
			header( 'location: car.html' );
		}
	} else {
		header( 'location: exit.php' );
	}
	mysqli_close();
}