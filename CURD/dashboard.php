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
    <!-- link for iconscout CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Document</title>
</head>

<body>
    <div class="mainDashDiv">
        <div class="topDashDiv">
            <?php
                 $sql = "Select * from `registered` ORDER BY name ASC";
                 $result=mysqli_query($conn,$sql);
                 $index=0;
                 
                 if($result){
                     while($row = mysqli_fetch_assoc($result)){
                        ++$index;
                            
                     }
                 }

                 $sql = "Select * from `teacher`";
                 $result=mysqli_query($conn,$sql);
                 $teach=0;
                 
                 if($result){
                     while($row = mysqli_fetch_assoc($result)){
                        ++$teach;
                            
                     }
                 }
            ?>
            <div class="faculty dashbordDivs">
                <div class="left">
                    <h4>5</h4>
                    <h5>Faculty</h5>
                </div>
                <div class="icon">
                    <i class="fa-sharp fa-solid fa-users"></i>
                </div>
            </div>
            <div class="student dashbordDivs">
                <div class="left">
                    <h4><?php echo $index; ?></h4>
                    <h5>Student</h5>
                </div>
                <div class="icon">
                    <i class="fa-solid fa-user"></i>
                </div>
            </div>
            <div class="teacher dashbordDivs">
                <div class="left">
                    <h4><?php echo $teach; ?></h4>
                    <h5>Teacher</h5>
                </div>
                <div class="icon">
                    <i class="fa-solid fa-chalkboard-user"></i>
                </div>
            </div>
            <div class="message dashbordDivs">
                <div class="left">
                    <h4>0</h4>
                    <h5>New message</h5>
                </div>
                <div class="icon">
                    <i class="fa-solid fa-message"></i>
                </div>
            </div>
        </div>
        <div class="downDashboard">
            <div class="left">
                 <h3>News & Events</h3>
                 <div class="newsDiv">
                    <div class="newMsg">First news</div>
                    <div class="newMsg">Second news</div>
                    <div class="newMsg">Third news</div>
                 </div>
            </div>
            <div class="right">
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