<?php
include 'connection.php';

if(isset($_GET['deletedid'])){
    
    $id=$_GET['deletedid'];
$sql="DELETE FROM `user` where `id`='$id'";
$query=mysqli_query($conn,$sql);
if ($query){
    echo '<script>alert("the user is deleted");window.location.assign("admin.php");</script>';

}

}
?>








