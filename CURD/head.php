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
   <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <!-- link for iconscout CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
</head>
<body>
        <header>
            <div class="logo">
                <a href="display.php"><h2>Gyandarpan Academy</h2></a>
                
            </div>
            <div class="side">Welcome Admin &nbsp;<ion-icon name="chevron-down-outline"></ion-icon></div>
        </header>
        <div class="navigation">
            <div class="icon">
                <i class="uil uil-align-justify togglebtn"></i>
            </div>
            <ul>
                <h2><span class="title"> MENU</span></h2>
                <li class="student dlist" onclick="dropdownlist()">
                    <a href="#" >
                        <span>Student <i class="uil uil-angle-down"></i></span>
                    </a>
                    <ul class="dropdown">
                        <li><a href="display.php">Add Student</a></li>
                        <li><a href="faculty.php">View Student</a></li>
                    </ul>
                </li>
                <li class="list">
                    <a href="DisplayTeacher.php">
                        <span class="title">Teacher</span>
                    </a>
                </li>
                <li class="list">
                    <a href="#">
                        <span class="title">Courses and syllabus</span>
                    </a>
                </li>
                <li class="list">
                    <a href="#">
                        <span class="title">Classes</span>
                    </a>
                </li>
                <li class="list">
                    <a href="#">
                        <span class="title">Result</span>
                    </a>
                </li>
                <li class="list">
                    <a href="request.php">
                        <span class="title">Request</span>
                    </a>
                </li>
                <li class="list">
                    <a href="changePass.php">
                        <span class="title">Change password</span>
                    </a>
                </li>
            </ul>
        </div>
        <main>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="../js/dropdown.js"></script>
</body>
</html>