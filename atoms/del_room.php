<?php
    require'db.php';
$room = $_GET['room'];
$sql = "DELETE FROM `rooms` WHERE `room` = '$room'";

if(mysqli_query($conn, $sql)){
    echo"1";
    $sql =  "DELETE FROM `msg` WHERE `msg`.`room` = '$room'";
    
    if(mysqli_query($conn,$sql)){
        $message = "Successfully DELETED";
        echo"<script language='javascript'>";
        echo"alert('.$message.');";
        echo"window.location='http://localhost/discuss/';";
        echo"</script>";
    }
}
else{
$message = "Room does not exist";
echo $message;
echo"<script language='javascript'>";
echo"alert('.$message.');";
echo"window.location='http://localhost/discuss/';";
echo"</script>";
}
?>
