<?php
    include '../connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="../CSS/curd.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/fstyle.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/5daa8eb347.js" crossorigin="anonymous"></script>
    <title>Dashboard</title>
</head>

<body>
    <header>
    
        <div class="logo">
            <a href="dashboard.php">
                <h2>Gyandarpan Academy</h2>
            </a>

        </div>
        <div class="headerRight">
            <div class="noti" onclick="notiDropdownlist()">
            <?php
                $sql_get = mysqli_query($conn,"SELECT * FROM notification WHERE status=0");
                $count = mysqli_num_rows($sql_get);
            ?>
                <div class="dropdown-toggle text-light" id="noti_count">
                    <span class="counter text-danger"><?php echo $count;?></span>
                    <i class="fa-sharp fa-solid fa-bell"></i>
                </div>
                <div class="dropdownNoti">
                    <?php
                        $sql_get = mysqli_query($conn,"SELECT * FROM notification WHERE status=0");
                        if(mysqli_num_rows($sql_get)>0){
                            while($result = mysqli_fetch_assoc($sql_get)){
                                echo '<div class="notification">
                                <h5>'.$result['date'].'&nbsp;&nbsp;&nbsp;'.$result['subject'].'</h5>
                                <p>'.$result['message'].'</p>
                                </div>';
                            }
                        }
                        else{
                            echo '<h5 style="color: red;text-align: center;">Sorry! No messages</h5>';
                        }
                    ?>
                        
                </div>
            </div>
            
            <?php
                if(isset($_GET['userName'])){
                    $uname = $_GET['userName'];
                    // $uid=$_GET['userid'];

            ?>         
                            <div class="side">Welcome <?php echo $uname;?> &nbsp;<ion-icon name="chevron-down-outline"></ion-icon>
                            </div>
            <?php
                }
            ?>
        </div>
    </header>
    <div class="navigation">
        <div class="icon">
            <i class="uil uil-align-justify togglebtn"></i>
        </div>
        <ul>
            <h2><span class="title"> MENU</span></h2>
            <li class="list">
                <a href="studentProfile.php">
                    <span class="title">Profile</span>
                </a>
            </li>
            <li class="student dlist" onclick="dropdownlist(0)">
                <a href="#">
                    <span>Student <i class="uil uil-angle-down"></i></span>
                </a>
                <ul class="dropdown">
                    <li><a href="display.php">Add Student</a></li>
                    <li><a href="faculty.php">View Student</a></li>
                </ul>
            </li>
            <!-- <li class="list">
                <a href="DisplayTeacher.php">
                    <span class="title">Teacher</span>
                </a>
            </li> -->
            <li class="facultylist dlist" onclick="dropdownlist(1)">
                <a href="#">
                    <span>Faculty and subject <i class="uil uil-angle-down"></i></span>
                </a>
                <ul class="dropdown">
                    <li><a href="addFaculty.php">Add Faculty</a></li>
                    <li><a href="addSubject.php">Add Subject</a></li>
                </ul>
            </li>
            <li class="list">
                <a href="#">
                    <span class="title">Classes</span>
                </a>
            </li>
            <li class="list">
                <a href="result.php">
                    <span class="title">Result</span>
                </a>
            </li>
            <!-- <li class="list">
                <a href="notification.php">
                    <span class="title">Notification</span>
                </a>
            </li> -->
            <!-- <li class="list">
                <a href="request.php">
                    <span class="title">Request</span>
                </a>
            </li> -->
            <li class="list">
                <a href="changePass.php">
                    <span class="title">Change password</span>
                </a>
            </li>
        </ul>
    </div>
    <main>

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script src="../js/dropdown.js"></script>
</body>

</html>