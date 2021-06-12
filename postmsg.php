<?php
 include'atoms/db.php';
 $msg=mysqli_real_escape_string($conn,$_POST['text']);
 $room=mysqli_real_escape_string($conn,$_POST['room']);
 $ip=mysqli_real_escape_string($conn,$_POST['ip']);
 $sql="INSERT INTO `msg` (`msg`, `room`, `ip`, `dt`) VALUES ('$msg', '$room', '$ip', current_timestamp());";
 mysqli_query($conn, $sql);
 mysqli_close($conn);
?>