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
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];

        $sql="delete from `registered` where id=$id";
        $result = mysqli_query($conn,$sql);
        if($result){
            
?>
<!-- link for sweet alert -->
<script src="../js/sweetalert.min.js"></script>
    <script>
    swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                swal("Student record has been deleted!", {
                    icon: "success",
                });
            } else {
                swal("Student record is safe!");
            }
        });
    </script>
<?php
            header('location:display.php');
        }else{
            die(mysqli_error($conn));
        }
    }
?>