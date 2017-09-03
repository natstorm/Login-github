<?php

session_start();

require 'database.php';

if( isset($_SESSION['user_id']) ){

	$records = $conn->prepare('SELECT id,email,password FROM users WHERE id = :id');
	$records->bindParam(':id', $_SESSION['user_id']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	$user = NULL;

	if( count($results) > 0){
		$user = $results;
	}

}

?>


<!doctype html>
<?php if( !empty($user) ): ?>



<br><br><br>
		<br />Hi <?= $user['email']; ?> 
		<br /><br />You managed to log in!!!
		<br /><br />
       <br /><br />
		

	<?php else: ?>

		<h1>Please Login or Register</h1>
		<a href="login.php">Login</a> or
		<a href="register.php">Register</a>

	<?php endif; ?>


<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>


    
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">

<body>

	<a href="logout.php">Log out?</a>
</body>
</html>

