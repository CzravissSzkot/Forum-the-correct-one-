<?php
    include("connection.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Night's Gallery</title>
    <link rel="stylesheet" href="style1.css"/>
</head>
<body>
    <section class="header">
        <h1 class="">This site contains <a class = "a">R-18</a> please be caucius visiting our site</h1>
    </section>
    <section class = "content">
        <div class="box1">
            <h1>Login Panel</h1>
            <form name = "form" method="POST" class="bbc" action="login.php">
                <label>Login</label><br>
                <input type="text" id="user" name="user" placeholder="username"><br>
                <label>Password</label><br>
                <input type = "password" name = "pass" id="pw" placeholder="Password"><br>
                <input type="submit" id="btn" value="Login" name = "submit"/>
            </form>
        </div>
    </section>
    <div class="box">
            <a href="reg.php">Click here to register</a>
        </div>
        <div class="anigger">
            <p>Forgot passowrd ? Contact me on discord <br>Nightstalker#4397</p>
        </div>
    <script>
            function isvalid(){
                var user = document.form.user.value;
                var pass = document.form.pass.value;
                if(user.length=="" && pass.length==""){
                    alert(" Username and password field is empty");
                    return false;
                }
                else if(user.length==""){
                    alert(" Username field is empty");
                    return false;
                }
                else if(pass.length==""){
                    alert(" Password field is empty");
                    return false;
                }
                
            }
        </script>
</body>
</html>