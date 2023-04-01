<?php
    include('connection.php')
?>
<?php
$db=new mysqli("$servername","$username","$password");
$db->select_db("$db_name");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register :3</title>
    <link rel="stylesheet" href="reg.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
</head>
<body>
    <section class="register">
    <div class="text">  
                <h1>Please Register</h1>
                <p>Create your free account and enjoy Nights gallery :3</p>
                <img src="img/12.png"/>
        </div>
        <div class ="form">
        <h1>
            <h1 class="a">Enter your credentials</h1>
            <form action="reg.php" method="POST" name="form">
                <input type="text" name="username" placeholder="Insert your username" id="username" required><br>
                <input type="password" name="password" placeholder="Insert your password" id="password" required><br>
                <input type="email" name="email" placeholder="Insert your email" id="email" required><br>
<!--            <input type="text" name="invite" placeholder="insert your invite" id="invite" re>quired> -->
                <input type="submit" name="register" value = "register" id="button">
            </form>
            <div class="nigger">
            <a class="back" href="index.php">Login</a>
            </div>
        </h1>
        </div>
        <?php
  if(isset($_POST['register']))
  {
   //geting the values from user input form index
   $username=$_POST['username'];
   $email=$_POST['email'];
   $password=$_POST['password'];
    //quary
    if($stmt = $conn->prepare('SELECT `username` FROM `login` WHERE username = ?')){
        $stmt->bind_param('s',$_POST['username']);
        $stmt->execute();
        $stmt->store_result();

        if($stmt->num_rows>0){
            echo 'Account name is already used';
        }
    else{
   
    if ($db->query("INSERT INTO `login` (`username`, `password`, `email`) VALUES ('$username', '$password', '$email');"))
    print "<script>window.location.href = 'acccreated.html';</script>";
	
	else {
		echo 'Error :(';
	}
  }}}
 ?>
    </section>
</body>
</html>