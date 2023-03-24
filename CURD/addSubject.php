<?php
    include '../connect.php';
    include 'head.php';

    if(isset($_POST['addSubjectName'])){
        $sname=$_POST['subName'];
        $sem=$_POST['semDrop'];
        $fac=$_POST['facDropSub'];

        $sql = "INSERT INTO `subject`(`sub_name`,`fac_id`, `sem_id`) VALUES ('$sname','$sem', '$fac')";

        if(mysqli_query($conn,$sql)){
            header('location:addSubject.php');
        }
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
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
    <title>faculty</title>
</head>

<body>
    <div class="mainFacDiv">
        <h1>Subject</h1>
        <div class="mainFacDivSub">
            <div class="leftDiv">
                <div class="bottom_container">
                    <div class="table_container">
                        <table class="table" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Faculty</th>
                                    <th scope="col">Semester</th>
                                    <th class="action" scope="col">Action</th>
                                </tr>

                            </thead>
                            <tbody id="table-data">
                                <?php
                                $sql = "SELECT * from `subject`";
                                $result=mysqli_query($conn,$sql);
                                // $index=0;
                                
                                if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        $id=$row['id'];
                                        $sname=$row['sub_name'];
                                        $fac_id=$row['fac_id'];
                                        $sem_id=$row['sem_id'];

                                        $sql1 = "SELECT `faculty` FROM `faculty` WHERE id=$fac_id";
                                        $result1=mysqli_query($conn,$sql1);
                                        if(mysqli_num_rows($result1) > 0){
                                            while($row1 = mysqli_fetch_assoc($result1)){
                                                $fname=$row1['faculty'];
                                                echo $fname;
                                       
                                            
                                        
                                        $sql2 = "SELECT `sem_name` FROM `semester` WHERE id=$sem_id";
                                        $result2=mysqli_query($conn,$sql2);
                                        if(mysqli_num_rows($result2) > 0){
                                            while($row2 = mysqli_fetch_assoc($result)){
                                                $semName=$row2['sem_name'];
                                                echo $semName;
                                        

                                        echo '<tr>
                                            <td>'.$id.'</td>
                                            <td>'.$sname.'</td>
                                            <td>'.$fname.'</td>
                                            <td>'.$semName.'</td>
                                            <td class="td_btn">
                                                <a href="update.php?updateid='.$id.'"><button class="view"><i class="uil uil-edit"></i></button></a>
                                                <a href="delete.php?deleteid='.$id.'"><button class="delete"><i class="uil uil-trash-alt"></i></button></a>
                                            </td>
                                        </tr>';
                                                    }
                                                }
                                            }
                                        }
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
            <div class="rightDiv">
                <div class="addSubject">
                    <h2>Add Subject</h2>
                    <form action="" method="POST">
                        <?php
                            $sql = "SELECT `id`, `faculty` FROM `faculty`";
                            $result = mysqli_query($conn, $sql);
                        ?>
                        <select require name="facDropSub">
                            <option selected disabled hidden>--Select Faculty--</option>
                            <?php while($row = mysqli_fetch_assoc($result)){ ?>
                            <option value="<?php echo $row['id']; ?>"><?php echo $row['faculty']; ?></option>
                            <?php } ?>
                        </select>
                        <?php
                            $sql = "SELECT `id`, `sem_name` FROM `semester`";
                            $result = mysqli_query($conn, $sql);
                        ?>
                        <select require name="semDrop">
                            <option selected disabled hidden>--Select Semester--</option>
                            <?php while($row = mysqli_fetch_assoc($result)){ ?>
                            <option value="<?php echo $row['id']; ?>"><?php echo $row['sem_name']; ?></option>
                            <?php } ?>
                        </select>
                        <input type="text" name="subName" placeholder="Enter Subject name"></input>
                        <div class="submitBtn">
                            <input name="addSubjectName" type="submit" value="Add">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </main>
    <script src="main.js"></script>
    <script src="assets/js/main.js" type="text/javascript"></script>
    <script src="../js/search.js" type="text/javascript"></script>
    <!-- <script src="assets/js/replace.js"></script> -->
</body>

</html>