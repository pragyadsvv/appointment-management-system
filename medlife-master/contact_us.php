<?php
include 'connection.php';
error_reporting(0);

    if(isset($_POST["submit"])){

    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Message = $_POST['Message'];

    $query = "INSERT INTO contact(name, email, msg) VALUES ('$Name','$Email','$Message')";

        if(mysqli_query($conn,$query)){
           echo '<script> alert("Data Inserted"); </script>';
        }else{
            echo "Error: " .$query . ":-" . mysqli_error($conn);
        }

        mysqli_close($conn);

        $result = mysqli_query($conn, $query);

        if ($result) {
            echo '<script>alert("Message Sent")</script>';
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<title>Appointment </title>
</head>

<style type="text/css">

*{
  margin: 0;
  padding: 0;
  list-style: none;
  text-decoration: none;
  box-sizing: border-box;
  font-family: "Roboto", sans-serif;
}

body{
  background: lightblue;
}
.form{
  background: #4B0082;
  color: white;
  font-weight: 500px;
  margin-top: 20px;
}
.form span{
  font-size: 14px;
  color: lightgray;
}

.btn{
   background: #4B0082;
  color: white !important;
  border:2px solid white !important;
  border-radius: 50px !important;
}

</style>

<body>

    <div class="container">

    <div class="row">
    <div class="col-lg-2 col-12">

    </div>

    <div class="col-lg-8 form">
        <br>
        <h2>Contact form</h2>

        <form method="POST" action="<?PHP['SELF'];?>">
        <div class="form-group">
            <label for="user">Name</label>
            <input type="text" name="Name" class="form-control">

        </div>

        <div class="form-group">
            <label for="user">Email</label>
            <input type="text" name="Email" class="form-control">
        </div>

        <div class="form-group">
            <label for="user">Message</label>
            <input type="text" name="Message" class="form-control">
        </div>
        
        <button type="submit" id="submit" name="submit" class="btn medilife-btn">Contact Us <span></span></button>


        </form>
    </div>
</body>
</html>

