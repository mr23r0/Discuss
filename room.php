<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="img/favicon.ico">

  <title>Discuss</title>
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
  <link href="css/chatapp.css" rel="stylesheet">
</head>
<?php
$room = $_GET['room'];
?>

<body style="font-family:sans-serif; background-color: black;">
  <?php include 'atoms/header.php'; ?>
  <div class="row mt-5">
    <?php include 'atoms/sidebar4room.php'; ?>
    <aside class="col-md-6  blog-sidebar">
      <div class="blog-post">
        <h2 class="blog-post-title" id="#room">Message Section</h2>
        <div class="conclass text-dark" id="conclass">
          <div class="container text-light mt-2">
            <p>Hello. How are you today?</p>

            <span class="time-right">11:00</span>
          </div>
        </div>
      </div>
    
      <input type="text" placeholder="Type your message here" class="form-control" required id="msg" name="msg">
      <br>
      <button type="submit" id="submitmsg" name="submitmsg" style="background-color:green;padding-top: 5px;padding-bottom: 5px;padding-left: 7px;padding-right: 7px;" class="rounded btn-success mb-3">Send</button>
      
    </aside>
  </div>
  <?php include 'atoms/footer.php'; ?>
  <script src="js/jquery.js"></script>
  <script type="text/javascript">
// check for new msgs 
setInterval(cmsg, 1000);
function cmsg(){
  $.post("cmsg.php",{room: '<?php echo $room ?>'},
  function(data, status)
  {
    document.getElementsByClassName("conclass")[0].innerHTML =data;
  })
}


    // allow to send msg via ENTER 
    var input = document.getElementById("msg");
    // Execute a function when the user releases a key on the keyboard
    input.addEventListener("keyup", function(event) {
      // Number 13 is the "Enter" key on the keyboard
      if (event.keyCode === 13) {
        // Cancel the default action, if needed
        event.preventDefault();
        // Trigger the button element with a click
        document.getElementById("submitmsg").click();
      }
    });
    // submit msg via ajax
    $("#submitmsg").click(function() {
      var clientmsg = $("#msg").val();
      $.post("postmsg.php", {
        text: clientmsg,
        room: '<?php echo $room ?>',
        ip: '<?php echo $_SERVER['REMOTE_ADDR'] ?>'
      }, function(data, status) {
        document.getElementsByClassName('conclass')[0].innerHTML =data;
      });
      $("#msg").val("");
      return false;
    });
  </script>
</body>

</html>