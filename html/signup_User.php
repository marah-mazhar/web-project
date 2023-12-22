<?php 

include 'connection.php';
if(isset($_POST["signup"])){
$full_name=$_POST["full_name"];
$email=$_POST["email"];
$password=$_POST["password"];
$phone=$_POST["phone"];

$photo_name=$_FILES ['photo']['name']; 
$photo_path=$_FILES ['photo']['tmp_name'];

$sql = "SELECT `email` FROM `user` WHERE `email` ='$email'";
 $query=mysqli_query($conn, $sql);
 $row=mysqli_fetch_array($query);

 if (mysqli_num_rows($query)>0) {
    echo '<script>alert("the email used");window.location.assign("index.php");</script>';
 
}
else {
   
    
    $insert="INSERT INTO `user` (`name`, `email`, `password`, `phonenumber`, `pic`)
     VALUES ('$full_name', '$email', '$password', '$phone','$photo_name')";
    $query2=mysqli_query($conn,$insert);

    if($query2){
        $move=move_uploaded_file($photo_path,"../images/$photo_name");
        if($move){
   // echo '<script>alert("Done");window.location.assign("login.php");</script>';}
    }
 }
}
}


?>


<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="../CSS/to_signUp.css">
</head>
<body>
    
    <div class="signup">
        <h2 style="display:inline-block ;">Sign Up</h2>
        <p class="para" style="display:inline-block ; margin-left:170px ;">Are you Admin ? <a href="SignUp_Admin.php">signUp</a></p>
        <br>
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST" enctype="multipart/form-data">
            <div>
                <label for="full_name">Name</label>
                <br>
                <input type="text" id="full_name" name="full_name">
            </div>
            <br>
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
            <br>
            <div>
                <label for="phone">Phone Number</label>
                <input type="number" id="phone" name="phone">
            </div>
            <br>
            <label for="photo">Photo</label>
            <input type="file" id="photo" name="photo" accept=".png,.jpg,.jpeg">
            <br> <br> <br>
            <input type="submit" value="Sign Up" id="submit" name="signup">
            <br> <br>

           
        </form>

    </div>
</body>
</html>