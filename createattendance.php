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
        $hall = $_POST['hall'];
        $course_id = $_POST['course_id'];
        $course_name = $_POST['course_name'];
        $delivered = $_POST['total_delivered'];
        $attended = $_POST['total_attended'];
        $perc = ($delivered/$attended)*100;

        $sql = "INSERT INTO attendance (enroll_no,faculty_no,hall,course_id,course_name,total_delivered,total_attended,percentage) 
        VALUES ('$en_no','$fac_no','$hall','$course_id','$course_name','$delivered','$attended','$perc')";

        if ($conn->query($sql) === TRUE) {
            echo "";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }


        $conn->close();
?>


