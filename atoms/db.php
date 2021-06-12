<?php
// define connection params
$sever="localhost";
$username="root";
$password="";
$databse="discuss";


// make database connection 
$conn=mysqli_connect($sever,$username,$password,$databse);
if(!$conn){
    // if anything goes wrong, show error (what gone wrong)
    echo"Error".mysqli_connect_error();
}else{
    // echo "Success";
}
?>