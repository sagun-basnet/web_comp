<?php
    include 'connect.php';
    if(isset($_POST["submit"])){
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $address = $_POST["address"]; 
        $gender = $_POST["gender"];
        $contact = $_POST["contact"];
        $pname = $_POST["pname"];
        $pcontact = $_POST["pcontact"];
        $faculty = $_POST["faculty"];
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $rpass = $_POST["rpass"];
    

    if($pass != $rpass){
        echo "Please enter same password";
        exit();
    }

    $sql = "INSERT INTO `registration`(`name`, `email`, `password`, `address`, `gender`, `contact`, `parent_name`, `parent_contact`, `faculty`) VALUES ('$fname $lname','$email','$pass','$address','$gender','$contact','$pname','$pcontact','$faculty')";

    if(mysqli_query($conn,$sql)){
        header('location:regInfo.php');
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
    <link rel="stylesheet" href="CSS/style.css">
    <title>Regtration form</title>
</head>

<body>
    <div id="reg_formDiv">
        <form action="" method="POST">

            <h2>Signup</h2>
            <div class="names gap ">
                <input type="text" placeholder="First name" name="fname">
                <input type="text" placeholder="Last name" name="lname">
            </div>
            <div class="address">
                <input type="text" name="address" placeholder="Enter address">
            </div>

            <div class="gender">
                Gender:
                &nbsp;<input type="radio" name="gender" id="male" value="male">male
                &nbsp; &nbsp;
                <input type="radio" name="gender" id="female" value="female">Female
                &nbsp; &nbsp;
                <input type="radio" name="gender" id="others" value="others">others
            </div>
            <div class="contact">
                <input type="number" placeholder="Enter contact no" name="contact">
            </div>
            <div class="parent gap">
                <input type="text" placeholder="Parent full name" name="pname" />
                <input type="text" placeholder="Parent contact number" name="pcontact">
            </div>
            <div class="faculty">
                <select name="faculty" id="">
                    <option value="" selected="selected">--Select Faculty--</option>
                    <option value="BCA">BCA</option>
                    <option value="BBA">BBA</option>
                    <option value="BBS">BBS</option>
                    <option value="BSW">BSW</option>
                </select>
            </div>
            <div class="email">
                <input type="email" name="email" id="email" placeholder="Email">
            </div>

            <div class="Pass gap">
                <input type="password" placeholder="Password" name="pass">
                <input type="password" placeholder="Re-Password" name="rpass">
            </div>

            <input id="btn" class="send" name="submit" type="submit" value="sign up">
        </form>

        <!-- ==================================bootstrap form============================================== -->
        <!-- <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Address 2</label>
                    <input type="text" class="form-control" id="inputAddress2"
                        placeholder="Apartment, studio, or floor">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Check me out
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
            </form> -->
    </div>
</body>

</html>