<?php 

include 'connection.php';
if(isset($_GET["signup_admin"])){
$full_name1=$_GET["full_name1"];
$email1=$_GET["email1"];
$password1=$_GET["password1"];
$phone1=$_GET["phone1"];



  $insert="INSERT INTO `admins` (`name`, `email`, `password`, `phonenumber`) 
  VALUES ('$full_name1', '$email1', '$password1', '$phone1')";
  $query2=mysqli_query($conn,$insert);

 if($query2)
echo '<script>alert("Done");window.location.assign("login.php");</script>';
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp Admin</title>
    <link rel="stylesheet" href="../CSS/to_signUp.css">
</head>
<body>
    <div class="signup">
        <h2>Sign Up</h2>
        <br>
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="GET" enctype="multipart/form-data">
            <div>
                <label for="full_name">Name</label>
                <br>
                <input type="text" id="full_name" name="full_name1">
            </div>
            <br>
            <div>
                <label for="email">Email</label>
                <br>
                <input type="email" id="email" name="email1">
            </div>
            <br> 
            <div>
                <label for="pass">Password</label>
                <br>
                <input type="password" id="pass" name="password1">
            </div>
            <br>
            <div>
                <label for="phone">Phone Number</label>
                <input type="number" id="phone" name="phone1">
            </div>
            <br>
            <label for="photo">Photo</label>
            <input type="file"name="photo" accept=".png,.jpg,.jpeg">
            <br> <br> <br>
            
            <input type="submit" value="Sign Up" id="submit" name="signup_admin" >
            <br> <br>
        </form>

    </div>
</body>
</html>