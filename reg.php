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
</head>
<body>
    <div class="register">
        <h1>
            Register
        </h1>
        <form action="reg.php" method="POST">
            <input type="text" name="username" placeholder="insert your username" id="username" required>
            <input type="password" name="password" placeholder="insert your password" id="password" required>
            <input type="email" name="email" placeholder="insert your email" id="email" required>
<!--            <input type="text" name="invite" placeholder="insert your invite" id="invite" re>quired> -->
            <input type="submit" name="register" value = "register" id="button">
        </form>
        <?php
  if(isset($_POST['register']))
  {
   //geting the values from user input form index
   $username=$_POST['username'];
   $email=$_POST['email'];
   $password=$_POST['password'];
    //quary
    if($stmt = $conn->prepare('SELECT `usr` FROM `login` WHERE usr = ?')){
        $stmt->bind_param('s',$_POST['username']);
        $stmt->execute();
        $stmt->store_result();

        if($stmt->num_rows>0){
            echo 'Account name is already used';
        }
    else{
   
    if ($db->query("INSERT INTO `login` (`usr`, `pw`, `email`) VALUES ('$username', '$password', '$email');"))
    print "<script>window.location.href = 'acccreated.html';</script>";
	
	else {
		echo 'Error :(';
	}
  }}}
 ?>
    </div>
</body>
</html>