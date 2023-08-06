<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
    <center>
        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => Project
        $conn = mysqli_connect("localhost", "root", "", "resume");

        // Check connection
        if ($conn === false) {
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking Name, Age, Mobile, Email, Gender, School, Work Experience, Skills
        $fullname = $_REQUEST['fullname'];
        $username = $_REQUEST['username'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
       
        

        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO form VALUES ('$fullname',
			'$username','$email','$password')";

if (mysqli_query($conn, $sql)) {
    echo "<h3><a href=http://localhost/assignment/output.php>data stored in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</a></h3>";

            // echo nl2br("\n$first_name\n $last_name\n "
            //     . "$gender\n $address\n $email");
        } else {
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>