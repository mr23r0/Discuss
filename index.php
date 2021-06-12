
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

  <body style="font-family:sans-serif; background-color: black;">
  <?php include'atoms/header.php';?>
      <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5" id="#room">
          <h1 class="display-4 font-weight-normal">Book Your ChatRoom Now!</h1>
          <p class="lead font-weight-normal">And Start your Conversation. Trust us, Discuss will automatically delete all your Conversation after closing the room.</p>
          <form action="atoms/claim.php" method="post" target="blank">
            <div class="row">
                <span class="text-sm text-dark">Discuss/</span><input type="text" class="ml-1 justify-content-center textarea" name="room" id="room">
            </div>
                <button class="btn  justify-content-center btn-outline-secondary">Claim</button>
          </form>
        </div>
        <div class="product-device box-shadow d-none d-md-block"></div>
        <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
      </div>
    <?php include 'atoms/footer.php';?>
  </body>
</html>
