<?php
if(isset($_POST["submit"])){

if(!empty($_POST['user']) && !empty($_POST['pass'])) {
    $user=$_POST['user'];
    $pass=$_POST['pass'];

    $con=mysql_connect('localhost','root','') or die(mysql_error());
    mysql_select_db('nsbmlms') or die("cannot select DB");

    $query=mysql_query("SELECT * FROM login WHERE username='".$user."' AND password='".$pass."'");
    $numrows=mysql_num_rows($query);
    if($numrows!=0)
    {
    while($row=mysql_fetch_assoc($query))
    {
    $dbusername=$row['username'];
    $dbpassword=$row['password'];
    }

    if($user == $dbusername && $pass == $dbpassword)
    {
    session_start();
    $_SESSION['sess_user']=$user;

    /* Redirect browser */
    header("Location: member.php");
    }
    } else {
    echo "Invalid username or password!";
    }

} else {
    echo "All fields are required!";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel="stylesheet" type="text/css" href="CSS/Responsive.css">
    <title></title>
</head>

<body>
    
        
         <div id="form1">

            
             <h1 class="container blue">Loing</h1>
             <form class="container" action="login.php" method="post" >
                 
            
                <p>
                <label>User Name</label>
                <input class="input" type="text" name="user"></p>
                <p>
                <label>Password</label>
                <input class="input" type="password"  name="pass"></p>
                 <P>
                    <input class="input blue" type="submit" value="Login" name="submit">
                 </P>
                
           </form>
        </div>
</body>
</html>

