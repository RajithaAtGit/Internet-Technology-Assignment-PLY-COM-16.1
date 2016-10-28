<?php

require 'database.php';

$message= '';

if(!empty($_POST['uname']) && !empty($_POST['pass'])):

    //Add new user
    $sql = "INSERT INTO users(username, email, indexnumber, nic, password) VALUES (:username, :email, :indexnumber, :nic, :password)";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':username',$_POST['uname']);
    $stmt->bindParam(':email',$_POST['email']);
    $stmt->bindParam(':indexnumber',$_POST['index']);
    $stmt->bindParam(':nic',$_POST['nic']);
    $stmt->bindParam(':password',$_POST['pass']);

    if( $stmt->execute() ):
        $message = "Successfully created new user";
    else:
        
        $message = "Sorry please try again"; 
    endif;

    
endif;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel="stylesheet" type="text/css" href="CSS/Responsive.css">
</head>
<body>
    
    <div id="form1">

        <?php if(!empty($message)):?>
            <p class="message-text"><?= $message ?></p>
        <?php endif; ?>
        <h1 class="container blue">Register</h1>
        <form class="container" name="Register" action="register.php" method="post">
              <p>
              <label>Name</label>
              <input class="input" type="text" name="uname" required></p><p>
              <label>Email</label>
              <input class="input" type="email" name="email" required></p><p>
              <label>Index Number</label>
              <input class="input" type="text" name="index" required></p><p>
              <label>NIC</label>
              <input class="input" type="text" name="nic" required></p><p>
              <label>Password</label>
              <input class="input" type="password" name="pass" required></p><p>
          <input class="input blue" type="submit" value="Register"></p>
        </form>
        </div>
    
    
    <script src=""></script>
</body>
</html>