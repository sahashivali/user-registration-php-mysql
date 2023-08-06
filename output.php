<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resume";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM form";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<center><h1>OUTPUT</h1><table border=1 cellpadding=15 bgcolor=#ADD8E6><tr><th>FullName</th><th>UserName</th></th><th>Email</th><th>Password</th></tr></center>";
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row['fullname'] . "</td><td>" . $row["username"] . "</td><td>" . $row['email'] . "</td> <td>" . $row["password"] .  "</td><td>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
