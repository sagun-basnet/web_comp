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
    $id=$_GET['id'];
    $sql = "INSERT INTO `registered` (name, email, password, address, gender, contact, parent_name, parent_contact, faculty) SELECT name, email, password, address, gender, contact, parent_name, parent_contact, faculty FROM `registration` WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    $last_inserted_id = mysqli_insert_id($conn);

    // Check if the copy operation was successful...
    if ($result) {
        $sql="DELETE FROM `registration` WHERE id=$id";
        mysqli_query($conn, $sql);
        
        $sql="INSERT INTO `login` (email, password, name, type) SELECT email, password, name, 'Student' FROM `registered` WHERE id=$last_inserted_id";
        mysqli_query($conn, $sql);

        header('location:request.php');
    } else {
        echo "Error copying data: " . mysqli_error($conn);
    }

    // Close the database connection...
    mysqli_close($conn);
?>