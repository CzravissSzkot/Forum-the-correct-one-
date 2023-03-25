<?php
    include("connection.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Night's Forum</title>
    <link rel="stylesheet" href="style1.css"/>
    <meta http-equiv="Cache-control" content="no-cache">
</head>
<body>
    <section class="header">
        <h1>This website is a private forum, if you want to join ask me on discord Nightstalker#4397 or <a href="reg.php">Register</a></h1>
    </section>
    <section class = "content">
        <div class="box1">
            <h1>Nights Forum</h1>
            <form name = "form" method="POST" class="bbc" action="login.php">
                <input type="text" id="user" name="user" placeholder="Enter Username"><br>
                <input type = "password" name = "pass" id="pw" placeholder="Enter Password"><br>
                <input type="submit" id="btn" value="Login" name = "submit"/>
            </form>
        </div>
    </section>
    <section class="footer">
        <div>
            <p>Author of this forum does not take any responsibility of what is happening on forum unless its highly illegal</p>
            <p>for list of rules click <a href = "rule.pdf">here</a></p>
        </div>
    </section>
</body>
</html>