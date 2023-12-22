
<?php
include 'connection.php';

if(isset($_GET['updateid'])){
$id=$_GET["updateid"];
if(isset($_GET["done"])){

    $name=$_GET["full_name"];
    $email=$_GET["email"];
    $password=$_GET["password"];
     $phone=$_GET["phone"];
     $update= "UPDATE `user` SET `name` = ' $name', `email` = '$email', `password` = '$password', `phonenumber` = '$phone' 
     WHERE `id` = '$id'";
          $query2=mysqli_query($conn,$update);
          
      
     if($query2){
        echo '<script>alert("the user is updated ");window.location.assign("admin.php");</script>';
     }

     else  echo "no";
    
    }
}

else {
   echo "error";
}
         ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link rel="stylesheet" href="../CSS/to_signUp.css">
</head>
<body>
    
    <div class="signup">
        <h2 style="display:inline-block ;">Sign Up</h2>
       
        <br>
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get">
            <div>
                <label for="full_name">Name</label>
                <br>
                <input type="text" id="full_name" name="full_name" >
            </div>
            <br>
            <div>
                <label for="email">Email</label>
                <br>
                <input type="email" id="email" name="email" >
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
            <input type="file" id="photo" name="photo">
            <br> <br> <br>
            <input type="submit" value="Done" id="submit" name="done">
            <br> <br>

           
        </form>

    </div>
</body>
</html>