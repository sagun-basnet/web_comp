<?php
    include '../connect.php';
    include 'head.php';

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
                <div class="inputs">
                    <input type="password" placeholder="Enter new password" name="pass">
                    <input type="password" placeholder="Confirm new password" name="cpass">
                </div>

            </div>

        </div>


    </main>

    <script src="main.js"></script>
</body>
</html>