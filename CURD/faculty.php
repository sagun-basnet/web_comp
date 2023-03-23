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
    <title>faculty</title>
</head>

<body>
    <div class="divTop">
        <div class="facBtn">
            <button class="btn bcabtn on">BCA</button>
            <button class="btn bhmbtn">BHM</button>
            <button class="btn bswbtn">BSW</button>
            <button class="btn bbsbtn">BBS</button>
            <button class="btn bbabtn">BBA</button>
        </div>
    </div>
    <div class="facultyContainer bca display">
        <div class="divMiddle">
            <form action="" method="POST">
                <select name="semesterName" id="sem">
                    <option value="1st" selected>First Semester</option>
                    <option value="2st">Second Semester</option>
                    <option value="3st">Third Semester</option>
                    <option value="4st">Forth Semester</option>
                    <option value="5st">Fifth Semester</option>
                    <option value="6st">Sixth Semester</option>
                    <option value="7st">Seventh Semester</option>
                    <option value="8st">Eigth Semester</option>
                </select>
            </form>
            <div class="semTitle">
                <h3>BCA - First Semester</h3>
            </div>
                    
            <div class="search_container">
                <i class="uil uil-search"></i>
                <input id="searchId" type="search" name="searchbox" placeholder="Enter Name">
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
                            <th scope="col">Password</th>
                            <th scope="col">Address</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Action</th>
                        </tr>

                    </thead>
                    <tbody id="table-data">
                        <?php
                                $sql = "Select * from `registered` where faculty='BCA' ORDER BY name ASC";
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
                                        $pass=$row['password'];
                                        $address=$row['address'];
                                        $gender=$row['gender'];
                                        $contact=$row['contact'];
                                        echo '<tr>
                                            <td>'.++$index.'</td>
                                            <td>'.$name.'</td>
                                            <td>'.$email.'</td>
                                            <td>'.$pass.'</td>
                                            <td>'.$address.'</td>
                                            <td>'.$gender.'</td>
                                            <td>'.$contact.'</td>
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
        <footer>
            <h4>Copyright &copy; <?php echo date('Y') ?> Astra</h4>

        </footer>
    </div>
    <div class="facultyContainer bhm">
        <div class="divMiddle">
            <form action="">
                <select name="semester" id="sem">
                    <option value="1st" selected>First Semester</option>
                    <option value="2st">Second Semester</option>
                    <option value="3st">Third Semester</option>
                    <option value="4st">Forth Semester</option>
                    <option value="5st">Fifth Semester</option>
                    <option value="6st">Sixth Semester</option>
                    <option value="7st">Seventh Semester</option>
                    <option value="8st">Eigth Semester</option>
                </select>
            </form>
            <div class="semTitle">
                <h3>BHM - <span id=semName><span> Semester</h3>

            </div>
            <div class="search_container">
                <i class="uil uil-search"></i>
                <input id="searchId" type="search" name="searchbox" placeholder="Enter Name">
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
                            <th scope="col">Password</th>
                            <th scope="col">Address</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Action</th>
                        </tr>

                    </thead>
                    <tbody id="table-data">
                        <?php
                                $sql = "Select * from `registered` where faculty='BHM' ORDER BY name ASC";
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
                                        $pass=$row['password'];
                                        $address=$row['address'];
                                        $gender=$row['gender'];
                                        $contact=$row['contact'];
                                        echo '<tr>
                                            <td>'.++$index.'</td>
                                            <td>'.$name.'</td>
                                            <td>'.$email.'</td>
                                            <td>'.$pass.'</td>
                                            <td>'.$address.'</td>
                                            <td>'.$gender.'</td>
                                            <td>'.$contact.'</td>
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
        <footer>
            <h4>Copyright &copy; <?php echo date('Y') ?> Astra</h4>

        </footer>
    </div>
    <div class="facultyContainer bsw">
        <div class="divMiddle">
            <form action="">
                <select name="semester" id="sem">
                    <option value="1st" selected>First Semester</option>
                    <option value="2st">Second Semester</option>
                    <option value="3st">Third Semester</option>
                    <option value="4st">Forth Semester</option>
                    <option value="5st">Fifth Semester</option>
                    <option value="6st">Sixth Semester</option>
                    <option value="7st">Seventh Semester</option>
                    <option value="8st">Eigth Semester</option>
                </select>
            </form>
            <div class="semTitle">
                <h3>BSW - <span id=semName><span> Semester</h3>

            </div>
            <div class="search_container">
                <i class="uil uil-search"></i>
                <input id="searchId" type="search" name="searchbox" placeholder="Enter Name">
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
                            <th scope="col">Password</th>
                            <th scope="col">Address</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Action</th>
                        </tr>

                    </thead>
                    <tbody id="table-data">
                        <?php
                                $sql = "Select * from `registered` where faculty='BSW' ORDER BY name ASC";
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
                                        $pass=$row['password'];
                                        $address=$row['address'];
                                        $gender=$row['gender'];
                                        $contact=$row['contact'];
                                        echo '<tr>
                                            <td>'.++$index.'</td>
                                            <td>'.$name.'</td>
                                            <td>'.$email.'</td>
                                            <td>'.$pass.'</td>
                                            <td>'.$address.'</td>
                                            <td>'.$gender.'</td>
                                            <td>'.$contact.'</td>
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
        <footer>
            <h4>Copyright &copy; <?php echo date('Y') ?> Astra</h4>

        </footer>
    </div>
    <div class="facultyContainer bbs">
        <div class="divMiddle">
            <form action="">
                <select name="semester" id="sem">
                    <option value="1st" selected>First Semester</option>
                    <option value="2st">Second Semester</option>
                    <option value="3st">Third Semester</option>
                    <option value="4st">Forth Semester</option>
                    <option value="5st">Fifth Semester</option>
                    <option value="6st">Sixth Semester</option>
                    <option value="7st">Seventh Semester</option>
                    <option value="8st">Eigth Semester</option>
                </select>
            </form>
            <div class="semTitle">
                <h3>BBS - <span id=semName><span> Semester</h3>

            </div>
            <div class="search_container">
                <i class="uil uil-search"></i>
                <input id="searchId" type="search" name="searchbox" placeholder="Enter Name">
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
                            <th scope="col">Password</th>
                            <th scope="col">Address</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Action</th>
                        </tr>

                    </thead>
                    <tbody id="table-data">
                        <?php
                                $sql = "Select * from `registered` where faculty='BBS' ORDER BY name ASC";
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
                                        $pass=$row['password'];
                                        $address=$row['address'];
                                        $gender=$row['gender'];
                                        $contact=$row['contact'];
                                        echo '<tr>
                                            <td>'.++$index.'</td>
                                            <td>'.$name.'</td>
                                            <td>'.$email.'</td>
                                            <td>'.$pass.'</td>
                                            <td>'.$address.'</td>
                                            <td>'.$gender.'</td>
                                            <td>'.$contact.'</td>
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
        <footer>
            <h4>Copyright &copy; <?php echo date('Y') ?> Astra</h4>

        </footer>
    </div>
    <div class="facultyContainer bba">
        <div class="divMiddle">
            <form action="">
                <select name="semester" id="sem">
                    <option value="1st" selected>First Semester</option>
                    <option value="2nd">Second Semester</option>
                    <option value="3rd">Third Semester</option>
                    <option value="4th">Forth Semester</option>
                    <option value="5th">Fifth Semester</option>
                    <option value="6th">Sixth Semester</option>
                    <option value="7th">Seventh Semester</option>
                    <option value="8th">Eigth Semester</option>
                </select>
            </form>
            <div class="semTitle">
                <h3>BBA - <span id=semName><span> Semester</h3>

            </div>
            <div class="search_container">
                <i class="uil uil-search"></i>
                <input id="searchId" type="search" name="searchbox" placeholder="Enter Name">
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
                            <th scope="col">Password</th>
                            <th scope="col">Address</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Action</th>
                        </tr>

                    </thead>
                    <tbody id="table-data">
                        <?php
                                $sql = "Select * from `registered` where faculty='BBA' ORDER BY name ASC";
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
                                        $pass=$row['password'];
                                        $address=$row['address'];
                                        $gender=$row['gender'];
                                        $contact=$row['contact'];
                                        echo '<tr>
                                            <td>'.++$index.'</td>
                                            <td>'.$name.'</td>
                                            <td>'.$email.'</td>
                                            <td>'.$pass.'</td>
                                            <td>'.$address.'</td>
                                            <td>'.$gender.'</td>
                                            <td>'.$contact.'</td>
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
        <footer>
            <h4>Copyright &copy; <?php echo date('Y') ?> Astra</h4>

        </footer>
    </div>
    </main>
    <script src="main.js"></script>
    <script src="assets/js/main.js" type="text/javascript"></script>
    <script src="../js/search.js" type="text/javascript"></script>
    <script src="assets/js/replace.js"></script>
</body>

</html>