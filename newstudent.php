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
        ?>
        <form action="create.php" method="post">
            Name: <input type="text" name="name"><br>
            Enrollment No.: <input type="text" name="en_no"><br>
            Faculty No.: <input type="text" name="fac_no"><br>
            Address: <input type="text" name="address"><br>
            Mobile No.: <input type="text" name="mobile"><br>
            <input type="submit">
        </form>
        <?php


        $conn->close();
?>
