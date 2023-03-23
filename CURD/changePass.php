<?php
    include '../connect.php';
    include 'head.php';

    if(isset($_POST['submit'])){
        $email = $_POST['nemail'];
        $pass = $_POST['npass'];
        $newpass = $_POST['pass'];
    
        $sql1 = "SELECT `password` FROM `login` WHERE email='$email'";
        $result = mysqli_query($conn,$sql1);
        if($result){
            $row=mysqli_fetch_assoc($result);
            $curentpass=$row['password'];
            if($curentpass===$pass){
                $sql2 = "UPDATE `login` SET `password`= '$newpass' WHERE email='$email'";
                $result = mysqli_query($conn,$sql2);
                if($result){
                    // header('location:passchange.php?currentpass='.$curentpass.'');
                }
                else{
                    echo "Password not updated";
                }
                exit;
            }
            else{
                echo "Current password doesnot match..";
            }
        }
        else{
            echo "Password not selected";
        }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/curd.css">
    <title>Change password</title>
</head>

<body>
    <div class="change_container">
        <div class="inputsDiv">
            <h2>Change Password</h2>
            <form action="" method="POST">
                <div class="current inputs">
                    <input type="email" placeholder="Enter your email" name="nemail">
                    <input type="password" placeholder="Enter current password" name="npass">

                </div>
                <div class="inputs">
                    <input type="password" placeholder="Enter new password" name="pass">
                    <input type="password" placeholder="Confirm new password" name="cpass">
                </div>
                <div class="change_button">
                    <input id="cadd" value="Change" name="submit" type="submit"></input>
                </div>
            </form>

        </div>

    </div>


    </main>

    <script src="main.js"></script>
</body>

</html>