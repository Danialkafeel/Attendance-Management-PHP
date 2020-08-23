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
        
        $sql = "SELECT * FROM student";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) { 
               ?>
               <div class="h2" style="text-align: center;">
                    <a href="/second.php?en=<?php echo $row["enroll_no"]?>">
                        <?php echo "" . $row["name"]. "<br>"; ?>
                    </a>
               <?php
            }
        } else {
            echo "0 results";
        }
        ?>
        <a href = "newstudent.php" class="btn btn-danger" style="margin-top: 100px;" >
            Add a Student
        </a>
        <?php


        $conn->close();
?>