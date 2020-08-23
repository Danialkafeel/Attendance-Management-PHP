<head>
  <title>Student diary</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  
</head>
<?php
        $servername = "localhost";
        $username = "root";
        $password = "Mysql@3542";
        $dbname = "lab";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if (mysqli_connect_error()) {
            die("Database connection failed: " . mysqli_connect_error());
        }
        // echo "Connected successfully". "<br>";
        // echo $_POST['en_no'];
        $en_no = $_POST['en_no'];
        $fac_no = $_POST['fac_no'];
        $name =  $_POST['name'];
        $address = $_POST['address'];
        $mobile_no = $_POST['mobile'];
        
        $sql = "INSERT INTO student (enroll_no,faculty_no,name,address,mobile_no) 
        VALUES ('$en_no','$fac_no','$name','$address','$mobile_no')";

        if ($conn->query($sql) === TRUE) {
            echo "";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }


        $conn->close();
?>

