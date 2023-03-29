<?php
    include '../connect.php';
    include 'user.php';
    // $uname = $_GET[]
    $sql = "SELECT * FROM `registered` WHERE name='$uname'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)){
        $row= mysqli_fetch_assoc($result);
        $id=$row['id'];
        $faculty=$row['faculty'];
        $sem=$row['semester'];
        $email=$row['email'];
        $gender=$row['gender'];
        $address=$row['address'];
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

    <div class="profilMainDiv">
        <h1>Student Profile</h1>
        <div class="stdTopDiv">
            <div class="profileDivmain">

                <div class="profileDiv">
                    <div class="icone">
                        <i class="fa-sharp fa-solid fa-user"></i>
                    </div>
                    <div class="stdInfo">
                        <h4>Name: <?php echo $uname;?></h4>
                        <h4>Faculty: <?php echo $faculty;?></h4>
                        <h4>Semester: <?php echo $sem;?></h4>
                        <h4>Email: <?php echo $email;?></h4>
                        <h4>Address: <?php echo $address;?></h4>
                        <h4>Gender: <?php echo $gender;?></h4>
                    </div>
                </div>
                <div class="newsEvent">
                    <div class="left">
                        <h3>News & Events</h3>
                        <div class="newsDiv">
                            <div class="newMsg">First news</div>
                            <div class="newMsg">Second news</div>
                            <div class="newMsg">Third news</div>
                            <div class="newMsg">Fourth news</div>
                            <div class="newMsg">Fifth news</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="calender">
                <?php 
                    include 'calendarIndex.php';
                ?>
            </div>
        </div>
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