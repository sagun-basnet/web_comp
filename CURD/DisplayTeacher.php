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
<!DOCTYPE html>
<html lang="en">

<head>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../CSS/curd.css">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous" /> -->

    <!-- link for iconscout CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Document</title>
</head>

<body>
        <div class="main_body">
            <div class="top_container">
                <div class="top_btn">
                    <a href="insert.php"><button class="add" id="add" name="add"><i class="uil uil-plus"></i> Add
                            Teacher</button></a>
                </div>
                <div class="search_container">
                    <i class="uil uil-search"></i>
                    <input id="searchId" type="search" name="searchbox" placeholder="Enter Name">
                    <!-- <a href="search.php"><button name="search" class="search">Search</button></a> -->
                    <button name="search" class="search">Search</button>
                </div>
            </div>
            <div class="bottom_container">
                <div class="table_container">
                    <table class="table">
                        <thead>
                            <tr>
                              <th scope="col">SN</th>
                              <th scope="col">Name</th>
                              <th scope="col">Email</th>
                              <th scope="col">Phone</th>
                              <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody id="table-data">
                            <?php
                                $sql = "SELECT * FROM `teacher` ORDER BY fname ASC";
                                $result=mysqli_query($conn,$sql);
                                $index=0;
                                
                                if($result){
                                //     if(isset($_POST['search'])){
                                //         $search=$_POST['search'];
                                //         $searchtext=$_POST['searchbox'];
                                //         echo "$searchtext";
                                //     }
                                    while($rows = mysqli_fetch_assoc($result)){
                                      $tid= $rows['tid'];
                                      $fname=$rows['fname'];
                                      $lname=$rows['lname'];
                                      $name = $fname . " " . $lname;
                                      $email=$rows['email'];
                                      $phone=$rows['phone'];
                                        echo '<tr>
                                            <td>'.++$index.'</td>
                                            <td>'.$name.'</td>
                                            <td>'.$email.'</td>
                                            <td>'.$phone.'</td>
                                            <td class="td_btn">
                                                <a href="UpdateTeacher.php?tid= '.$tid.'"><button class="view"><i class="uil uil-edit"></i></button></a>
                                                <a href="DeleteTeacher.php?tid='.$tid.'"><button class="delete"><i class="uil uil-trash-alt"></i></button></a>
                                            </td>
                                        </tr>';
                                    }
                                }
?>
                        </tbody>
                    </table>
                    <div id="noData" class="noData">
                            <h4>Sorry, No data found</h4>
                        </div>
                </div>
            </div>
        </div>
        <footer >
            <h4>Copyright &copy; <?php echo date('Y') ?> Astra</h4>
            
        </footer>
    </m>
    <!-- link for sweet alert -->
    <script src="../js/sweetalert.min.js"></script>
    <script src="main.js"></script>

    <script src="assets/js/vendor/jquery-2.1.4.min.js" type="text/javascript"></script>
      <script src="assets/js/popper.min.js" type="text/javascript"></script>
      <script src="assets/js/plugins.js" type="text/javascript"></script>
      <script src="assets/js/main.js" type="text/javascript"></script>
      <script src="../js/search.js" type="text/javascript"></script>
</body>

</html>