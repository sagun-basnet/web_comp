<?php
    session_start(); // start a new session or resume an existing one

    if(!isset($_SESSION['uname']) || !isset($_SESSION['pass']) || !isset($_SESSION['type'])){
      // if the user is not logged in, redirect to the login page
      header("Location: main.php");
      exit();
    }
?>
<?php
    include '../connect.php';
    include 'head.php';
?>
<?php
    if(isset($_POST['msgSubmit'])){
        $sub = $_POST['msgSub'];
        $msg = $_POST['message'];
        $date = date('y-m-d');

        $sql="INSERT INTO `notification`(`subject`, `message`, `date`) VALUES ('$sub','$msg','$date')";
        $result = mysqli_query($conn,$sql);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../CSS/curd.css">
    <!-- link for iconscout CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Document</title>
</head>

<body>

        <div class="send_body">
            <div class="alertBox">
                <h4>Notification send</h4>
                <i class="fa-solid fa-x"></i>
            </div>
            <form action="" method="POST">
                <h2>Send Notification</h2>
                <input type="text" placeholder="Subject" name="msgSub">
                <textarea name="message" id="msg" cols="30" rows="10" placeholder="Enter message"></textarea>
                <div class="submitMsg">
                    <input type="submit" name="msgSubmit" value="Send">
                </div>
            </form>
            
        </div>
    </main>
    <!-- link for sweet alert -->
    <script src="../js/sweetalert.min.js"></script>
    <script src="main.js"></script>

    <!-- <script src="assets/js/vendor/jquery-2.1.4.min.js" type="text/javascript"></script> -->
      <!-- <script src="assets/js/popper.min.js" type="text/javascript"></script> -->
      <!-- <script src="assets/js/plugins.js" type="text/javascript"></script> -->
      <script src="assets/js/main.js" type="text/javascript"></script>
      <script src="../js/search.js" type="text/javascript"></script>
</body>

</html>