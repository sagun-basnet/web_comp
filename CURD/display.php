<?php
    include '../connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../CSS/curd.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous" />

    <!-- link for iconscout CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Document</title>
</head>

<body>
    <main>
        <div class="main_body">
            <div class="top_container">
                <div class="top_btn">
                    <a href="insert.php"><button class="add" id="add" name="add"><i class="uil uil-plus"></i> Add
                            Student</button></a>
                </div>
                <div class="search_container">
                    <i class="uil uil-search"></i>
                    <input id="searchId" type="search" placeholder="Enter user id">
                    <button class="search">Search</button>
                </div>
            </div>
            <div class="bottom_container">
                <div class="table_container">
                    <table>
                        <thead>
                            <tr>
                                <th class="sn">SN</th>
                                <th class="name">Name</th>
                                <th class="email">Email</th>
                                <th class="pass">Password</th>
                                <th class="address">Address</th>
                                <th class="gender">Gender</th>
                                <th class="contact">Contact</th>
                                <th class="action">Action</th>
                            </tr>
                        </thead>
                        <tbody id="table-data">
                            <?php
                                $sql = "Select * from `registration`";
                                $result=mysqli_query($conn,$sql);
                                $index=0;
                                if($result){
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
                </div>
            </div>
        </div>
    </main>
    <!-- link for sweet alert -->
    <script src="../js/sweetalert.min.js"></script>
</body>

</html>