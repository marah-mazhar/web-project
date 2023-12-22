<?php
include 'connection.php';
?>

<body>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <title>Sign up</title>
    <link rel="stylesheet" href="../CSS/admin.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
       
        <button class="btn btn-info "><a href="signup_user.php"> add user</a> </button>
    
     <table class="table">
<thead>
    <tr >
        <th>id</th>
<th>fullname</th>
<th>email</th>
<th>password</th>
<th>phonnumper</th>
<th>Photo</th>
<th>oparation</th>
    </tr> </thead>
  
     

    <tbody>
    <?php 
$sql= "SELECT * from `user`";
$select=mysqli_query($conn,$sql);



if($select){
    while( $row=mysqli_fetch_assoc($select)){  // give row after row from database and eah one store ir in $row
  $id=$row["id"];
      $name=$row["name"];
      $email=$row["email"];
      $password=$row["password"];
       $phone=$row["phonenumber"]; 
       $p=$row["pic"];
    
       echo '<tr>
       <td> '.$id.'</td> 
       <td> '.$name.'</td> 
       <td> '.$email.'</td>
       <td> '.$password.'</td> 
       <td> '.$phone.'</td>  
       <td > <img src="../images/'.$p.'"  ></td>  
      <td>
      
      <button  class="btn btn-danger" > <a href="delete.php?deletedid='.$id.'">delete</a></button>
      <button  class="btn btn-success"><a href="update.php?updateid='.$id.'">update</a> </button>
  </td>
     </tr>';
    } 
  }
    ?>
     
    </tbody>



    </table>
    </div>
</body>
</html>