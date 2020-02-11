<?php
	$name = ['name'];
	$age = ['age'];
	$pass = ['pwd'];
	$color = ['color'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title><? php echo $name ?>'s Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
	background-color:<?php echo $color ?>
  </style>
  
</head>
<body>

<div class="jumbotron text-center">
  <h1><? php echo $name ?>'s First Bootstrap Page</h1>
  <p>Your age is: <? php echo $age ?> and your password is: <? php echo $pass ?></p> 
</div>
  
<div class="container">
  <div class="row">
    <form action="index.php" method="post">
		<input type="text" name="name" placeholder="enter name">
		<input type="text" name="age" placeholder="enter age">
		<input type="password" name="pwd" placeholder="enter password">
		<input type="text" name="color" placeholder="enter color">
		<input type="submit">
	</form>
  </div>
</div>

</body>
</html>
