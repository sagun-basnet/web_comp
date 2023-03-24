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

        <div class="main_body">
            <div class="top_container">
                <div class="top_btn">
                    <a href="insert.php"><button class="add" id="add" name="add"><i class="uil uil-plus"></i> Add
                            Student</button></a>
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
                    <table class="table" id="myTable">
                        <thead>
                            <tr>
                                <th scope="col">SN</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <!-- <th scope="col">Password</th> -->
                                <th scope="col">Address</th>
                                <th scope="col">Gender</th>
                                <th  scope="col">Contact</th>
                                <th  scope="col">Faculty</th>
                                <th class="action"  scope="col">Action</th>
                            </tr>
                            
                        </thead>
                        <tbody id="table-data">
                            <?php
                                $sql = "Select * from `registered` ORDER BY name ASC";
                                $result=mysqli_query($conn,$sql);
                                $index=0;
                                
                                if($result){
                                    if(isset($_POST['search'])){
                                        $search=$_POST['search'];
                                        $searchtext=$_POST['searchbox'];
                                        echo "$searchtext";
                                    }
                                    while($row = mysqli_fetch_assoc($result)){
                                        $id=$row['id'];
                                        $name=$row['name'];
                                        $email=$row['email'];
                                        $faculty=$row['faculty'];
                                        $pass=$row['password'];
                                        $address=$row['address'];
                                        $gender=$row['gender'];
                                        $contact=$row['contact'];
                                        echo '<tr>
                                            <td>'.++$index.'</td>
                                            <td>'.$name.'</td>
                                            <td>'.$email.'</td>
                                            <td>'.$address.'</td>
                                            <td>'.$gender.'</td>
                                            <td>'.$contact.'</td>
                                            <td>'.$faculty.'</td>
                                            <td class="td_btn">
                                                <a href="update.php?updateid='.$id.'"><button class="view"><i class="uil uil-edit"></i></button></a>
                                                <a href="delete.php?deleteid='.$id.'"><button class="delete"><i class="uil uil-trash-alt"></i></button></a>
                                            </td>
                                        </tr>';
                                    }
                                }
                        ?>
                        </tbody>
                    </table>
                    <div id="noData" class="noData">
                            <h4 style="color: #8f8d8d;">Sorry, No data found</h4>
                        </div>
                </div>
            </div>
        </div>
        <footer >
            <h4>Copyright &copy; <?php echo date('Y') ?> Astra</h4>
            
        </footer>
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