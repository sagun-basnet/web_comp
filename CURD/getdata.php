<?php
    $sql = "Select * from `registered` where faculty='BBA' ORDER BY name ASC";
    $result=mysqli_query($conn,$sql);
    
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
            $sem=$row['semester'];
        }
    }
?>