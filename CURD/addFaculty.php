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

    if(isset($_POST['addFacultyName'])){
        $fname=$_POST['facName'];
        $ftype=$_POST['facultyDrop'];
        // $sem=$_POST['semName'];

        $sql = "INSERT INTO `faculty`(`faculty`, `type`) VALUES ('$fname', '$ftype')";

        if(mysqli_query($conn,$sql)){
            header('location:addFaculty.php');
        }
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
    if(isset($_POST['addSemesterName'])){
        $semName=$_POST['semName'];
        $fac=$_POST['SemesterDropFac'];

        $sql = "INSERT INTO `semester`(`sem_name`, `fac_id`) VALUES ('$semName', '$fac')";

        if(mysqli_query($conn,$sql)){
            header('location:addFaculty.php');
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
        <h1>Faculty</h1>
        <div class="mainFacDivFac">
            <div class="leftDiv">
                <div class="bottom_container">
                    <div class="table_container">
                        <table class="table" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">FId</th>
                                    <th scope="col">Faculty</th>
                                    <th scope="col">Semester</th>
                                    <th scope="col">Type</th>
                                    <th class="action" scope="col">Action</th>
                                </tr>

                            </thead>
                            <tbody id="table-data">
                                <?php
                                    $sql = "SELECT * FROM `faculty`";
                                    $result = mysqli_query($conn, $sql);

                                    if ($result) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $id = $row['id'];
                                            $fname = $row['faculty'];
                                            $ftype = $row['type'];

                                            // Query for semester data
                                            $semSql = "SELECT * FROM `semester` where fac_id=$id";
                                            $semResult = mysqli_query($conn, $semSql);

                                            // Construct options for select dropdown
                                            $options = "";
                                            if ($semResult) {
                                                while ($semRow = mysqli_fetch_assoc($semResult)) {
                                                    $options .= '<option value="' . $semRow['id'] . '">' . $semRow['sem_name'] . '</option>';
                                                }
                                            }

                                            // Echo table row
                                            echo '<tr>
                                                    <td>' . $id . '</td>
                                                    <td>' . $fname . '</td>
                                                    <td>
                                                        <select class="semesterDrop">' . $options . '</select>
                                                    </td>
                                                    <td>' . $ftype . '</td>
                                                    <td class="td_btn">
                                                        <a href="deleteFaculty.php?deleteid=' . $id . '"><button class="delete"><i class="uil uil-trash-alt"></i></button></a>
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
            <div class="rightDiv">
                <div class="addFacultyDiv">
                    <h2>Add Faculty</h2>
                    <form action="" method="POST">
                        <input type="text" placeholder="Enter Faculty Name" name="facName">
                        <select require name="facultyDrop">
                            <option selected disabled hidden>--Select Faculty type--</option>
                            <option value="semester">Semester</option>
                            <option value="yearly">Yearly</option>
                        </select>
                        <div class="submitBtn">
                            <input type="submit" value="Add" name="addFacultyName">
                        </div>
                    </form>
                </div>
                <div class="addSemesterDiv">
                    <h2>Add Semester</h2>
                    <form action="" method="POST">
                        <?php
                            $sql = "SELECT `id`, `faculty` FROM `faculty`";
                            $result = mysqli_query($conn, $sql);
                        ?>
                        <select require name="SemesterDropFac">
                            <option selected disabled hidden>--Select Semester/Year--</option>
                            <?php while($row = mysqli_fetch_assoc($result)){ ?>
                            <option value="<?php echo $row['id']; ?>"><?php echo $row['faculty']; ?></option>
                            <?php } ?>
                        </select>
                        <input type="text" placeholder="Enter Semester/Year" name="semName">
                        <div class="submitBtn">
                            <input type="submit" value="Add" name="addSemesterName">
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