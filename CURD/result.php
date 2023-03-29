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
    <div class="resultMainDiv">
        <h1>Result</h1>
        <div class="dropdownsDiv">
            <form action="" method="POST">
                <select name="facultysDrop" id="">
                    <option selected disabled hidden>--Select faculty--</option>
                    <option value="BCA">BCA</option>
                    <option value="BHM">BHM</option>
                    <option value="BSW">BSW</option>
                    <option value="BBS">BBS</option>
                    <option value="BBA">BBA</option>
                </select>
                <select name="semestersDrop" id="">
                    <option selected disabled hidden>--Select Semester--</option>
                    <option value="1st">First semester</option>
                    <option value="2nd">Second semester</option>
                    <option value="3rd">Third semester</option>
                    <option value="4th">Forth semester</option>
                    <option value="5th">Fifth semester</option>
                    <option value="6th">Sixth semester</option>
                    <option value="7th">Seventh semester</option>
                    <option value="8th">Eighth semester</option>
                </select>

                <input type="submit" name="allSubmit" value="Go">
            </form>
        </div>
        <div class="line"></div>

        <div class="subjectInfo">
            <form action="" method="POST">
                <div class="basicInfo">
                    <div class="subDiv">
                        <?php
                            $sql = "SELECT * from `subject`";
                            $result = mysqli_query($conn,$sql);
                        ?>
                        <select require name="subjectDrop">
                            <option selected disabled hidden>--Select subject--</option>
                            <?php while($row = mysqli_fetch_assoc($result)){ ?>
                            <option value="<?php echo $row['id']; ?>"><?php echo $row['sub_name']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="inputDiv">
                        <input require type="number" name="fullMark" placeholder="Full Mark">
                        <input require type="number" name="passMark" placeholder="Pass Mark">

                    </div>
                </div>
                <div class="studentInfo">
                    <div class="bottom_container">
                        <div class="table_container">
                            <table class="table" id="myTable">
                                <thead>
                                    <tr>
                                        <th scope="col">Roll No</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Contact</th>
                                        <th scope="col">Faculty</th>
                                        <th scope="col">Semester</th>
                                        <th class="" scope="col">Marks</th>
                                    </tr>

                                </thead>
                                <tbody id="table-data">
                                    <?php
                            if(isset($_POST['allSubmit'])){
                                $faculty=$_POST['facultysDrop'];
                                $sem=$_POST['semestersDrop'];
                            
                                $sql = "Select * from `registered` WHERE `semester`='$sem' AND `faculty`='$faculty' ORDER BY name ASC";
                                $result=mysqli_query($conn,$sql);
                                $index=0;
                                
                                if($result){
                                    while($row = mysqli_fetch_assoc($result)){
                                        $id=$row['id'];
                                        $name=$row['name'];
                                        $sem=$row['semester'];
                                        $fac=$row['faculty'];
                                        $gender=$row['gender'];
                                        $contact=$row['contact'];
                                        echo '<tr>
                                            <td>'.++$index.'</td>
                                            <td>'.$name.'</td>
                                            <td>'.$gender.'</td>
                                            <td>'.$contact.'</td>
                                            <td>'.$fac.'</td>
                                            <td>'.$sem.'</td>
                                            <td>
                                            <input type="number" name="'.$id.'" placeholder="Mark">
                                            </td>
                                        </tr>';
                                    }
                                }
                            }
                            // else{
                            //     echo '<h2>No data to display</h2>';
                            // }
                        ?>
                                </tbody>
                            </table>
                            <div class="submitResult">
                                <input type="submit" name="resultSubmit" value="Send">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
    </main>
    <script src="main.js"></script>
    <script src="assets/js/main.js" type="text/javascript"></script>
    <script src="../js/search.js" type="text/javascript"></script>
    <!-- <script src="assets/js/replace.js"></script> -->
</body>

</html>