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

        $sql = "SELECT DISTINCT course_name FROM attendance";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) { 
               ?>
               <div class="h2" style="text-align: center;">
                    <!-- <a href="/second.php?en=<?php echo $row["enroll_no"]?>"> -->
                        <?php echo "" . $row["course_name"]. "<br>"; ?>
                    <!-- </a> -->
               </div>
               <?php
            }
        } else {
            echo "0 results";
        }
          $conn->close();
?>