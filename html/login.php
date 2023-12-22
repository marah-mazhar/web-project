<?php 
require 'connection.php';
if(isset($_GET["login"])){
    
$password=mysqli_real_escape_string($conn,$_GET["password"]);
$email=mysqli_real_escape_string($conn,$_GET["email"]);
 
 //where conition and condition
$select="SELECT `email`,`password` from `user` where  `email`='$email' ";
$query=mysqli_query($conn, $select);
 $row=mysqli_fetch_array($query);// خزن العائد من الداتا بيس في اري

//$x=mail($to, $subject, $message);
$s="SELECT `email`,`password` from `admins` where  `email`='$email' ";
$q=mysqli_query($conn, $s);
 $r=mysqli_fetch_array($q);

 if(mysqli_num_rows($query)>0){   
       
     
   if($row["password"]=="$password") {
echo '<script>alert("welcome");window.location.assign("ptuk.php");</script>';
        
   } 
   else{
 echo '<script>alert("wrong password");</script>';

   }
    
 }
elseif(mysqli_num_rows($q)>0){
 if($r["password"]=="$password"){
    echo '<script>alert("welcome admin");window.location.assign("admin.php");</script>';
 }
else  echo '<script>alert("wrong password");</script>';
}
 else{
     
         echo '<script>alert("email does not exist plz sign up");window.location.assign("signup_User.php");</script>';    
 }   
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign IN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/to_login.css">
</head>
<body>
    <div class="login">
        <h2>Log in</h2>
        <br>
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="GET">
            <div>
                <label for="email">Email</label>
                <br>
                <input type="email" id="email" name="email">
            </div>
            <br> 
            <div>
                <label for="pass">Password</label>
                <br>
                <input type="password" id="pass" name="password">
            </div>

            <br> <br> <br>
            <input type="submit" value="Log in" id="submit" name="login">
            <br> <br>
            <p style="padding-left:80px ;">Need an account? <a href="signup_User.php">Sign up</a> </p>
        </form>

    </div>
    
</body>
</html>