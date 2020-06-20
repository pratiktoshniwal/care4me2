<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<?php
$servername = "fdb23.awardspace.net";
$username = "3373928_projectdb";
$password = "Project@123";
$database = "3373928_projectdb";

//$servername = "localhost1";
//$username = "root";
//$password = "";
//$database = "project_test";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM donor";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>DonorName</th><th>DonorEmail</th><th>DonorPhone</th><th>City</th><th>State</th><th>Country</th><th>Amount</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["DName"]. "</td><td>" . $row["DEmail"]. " </td><td>" . $row["DPhone"]. " </td><td>" . $row["DCity"]." </td><td>" . $row["DState"]." </td><td>" . $row["DCountry"]." </td><td>" . $row["DAmount"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>