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
        
        $en = $_GET['en'];
        // echo $en;
        //echo "kjldnlkn";
        // exit(1);
        $sql = "SELECT * FROM attendance WHERE enroll_no ='$en'";
        $result = $conn->query($sql); 

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $perc = ($row["total_attended"]/$row["total_delivered"])*100; 
                ?>
                <div class="h3" style="text-align:center;"> <?php echo "" . $row["course_name"]. "      Percentage: " . $perc."<br>"; ?> </div> <?php
            }
        } else {
            echo "0 results";
        }

        $conn->close();
?>
