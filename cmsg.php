<?php
include'atoms/db.php';
$room = mysqli_real_escape_string($conn, $_POST['room']);
$sql = "select msg, dt, ip FROM msg where room = '$room'";
$html="";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        $html = $html . '<div class="containerr mx-2 py-3">';
        $html = $html . $row['ip'];
        $html = $html . ' ~ <p>'. $row['msg'];
        $html = $html . '</p><span class="time-right pb-4 mb-2">' . $row['dt'];
        $html = $html . '</span></div>';
    }
}
echo $html;
?>