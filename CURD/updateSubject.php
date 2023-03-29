<?php
    include '../connect.php';
    $id=$_GET['updateid'];
    $sql = "SELECT * from `subject` where id=$id";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $sub_name=$row['sub_name'];
    $fac_id=$row['fac_id'];
    $sem_id=$row['sem_id'];



    if(isset($_POST['submit'])){
        $sub_name = $_POST["sub_name"];
        $fac_id = $_POST["fac_id"];
        $sem_id = $_POST["sem_id"]; 

        $sql="SELECT * FROM `faculty` WHERE id='$fac_id'";
        $result = mysqli_query($conn,$sql);
        if($result){
            $row=mysqli_fetch_assoc($result);

            $facName = $row['faculty'];

            $sql="SELECT * FROM `semester` WHERE id='$sem_id'";
            $result = mysqli_query($conn,$sql);
            if($result){
                $row=mysqli_fetch_assoc($result);

                $semName = $row['faculty'];

                $sql = "UPDATE `subject` SET `id`=$id,`name`='$fname $lname',`email`='$email',`password`='$pass',`address`='$address',`gender`='$gender',`contact`='$contact',`parent_name`='$pname',`parent_contact`='$pcontact',`faculty`='$faculty' where id=$id";
            
                if(mysqli_query($conn,$sql)){
                    
                    header('location:display.php');
                }
                else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                mysqli_close($conn);
            }
        }

    }
?>

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
                            <?php while($row = mysqli_fetch_assoc($result)){?>
                            <option value="<?php echo $fac_id=$row['id']; ?>"><?php echo $row['faculty']; ?></option>
                            <?php } ?>
                        </select>
                        <?php
                            $sql = "SELECT `id`, `faculty` FROM `faculty`";
                            $result = mysqli_query($conn, $sql);
                        ?>

                        <select require name="semDrop">
                            <option selected disabled hidden>--Select Semester--</option>
                            <?php
                                while($row = mysqli_fetch_assoc($result)){
                                    $fac_id=$row['id'];
                                    echo "<h1>$fac_id</h1>";
                                    
                                    $semSql = "SELECT * FROM `semester` where fac_id = $fac_id";
                                    $semResult = mysqli_query($conn, $semSql);
                            ?>
                                    <?php while($semrow = mysqli_fetch_assoc($semResult)){ ?>
                                        <option value="<?php echo $semrow['id']; ?>"><?php echo $semrow['sem_name']; ?></option>
                                        <?php } ?>
                                <?php } ?> 
                        </select>
                        <input type="text" name="subName" placeholder="Enter Subject name"></input>
                        <div class="submitBtn">
                            <input name="addSubjectName" type="submit" value="update">
                        </div>
                    </form>
                </div>
            </div>