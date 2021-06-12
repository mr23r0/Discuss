<?php
    // add database connection 
     require('db.php');
    $room=mysqli_real_escape_string($conn,$_POST['room']);
    // check room name size or redirect
    if(strlen($room)>20 or strlen($room)<2){
        $message= "not valid!, Please Choose Room Name between 2 to 20 characters";
        echo"<script language='javascript'>";
        echo"alert('.$message.');";
        echo"window.location='http://localhost/discuss/';";
        echo"</script>";
    // check room name or redirect
    }
    
    else if(!ctype_alnum($room)){
        $message= "not valid!, Please Choose an Alphanumeric Room Name";
        echo"<script language='javascript'>";
        echo"alert('.$message.');";
        echo"window.location='http://localhost/discuss/';";
        echo"</script>";
    }
    
    else{
      
        $sql="select * from `rooms` where `room` = '$room' ";
        $result=mysqli_query($conn, $sql);


        if($result){
            if(mysqli_num_rows($result)==0){
                $author=$_SERVER['REMOTE_ADDR'];
                $sql="INSERT INTO `rooms` (`room`, `author`) VALUES ('$room','$author');";
                mysqli_query($conn,$sql);
                $message= "Room is Deployed!,You can talk now";
                echo"<script language='javascript'>";
                echo"alert('.$message.');";
                echo"window.location='http://localhost/discuss/room.php?room=$room&author=$author';";
                echo"</script>";
            }
            
            else{
               
                $message= "Room is already taken!, Please choose another room";
                echo"<script language='javascript'>";
                echo"alert('.$message.');";
                echo"window.location='http://localhost/discuss/';";
                echo"</script>";
            }
        }
        

        
    }
    // echo"success";

?>