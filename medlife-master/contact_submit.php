<?php
include 'connection.php';
     session_start();
    if(isset($_POST['submit'])){
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Message=$_POST['Message'] ;
    

     $insertquery = " INSERT INTO contact( Name,Email,Message) VALUES ('$Name','$Email','$Message')";

        
        if(mysqli_query($conn,$insertquery)){
            //echo "data inserted";
            header("Location:about-us.php");
            
           echo '<script> alert("Data Inserted"); </script>';
        }
        else{
             header("Location:contact_submit.php");
        }
    }
?>
