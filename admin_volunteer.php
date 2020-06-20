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

$sql = "SELECT * FROM volunteer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>VolunteerName</th><th>VolunteerEmail</th><th>VolunteerPhone</th><th>City</th><th>State</th><th>Country</th><th>TimeAvailable</th><th>DescriptionofWork</th><th>DayAvailable</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["VName"]. "</td><td>" . $row["VEmail"]. " </td><td>" . $row["VPhone"]. " </td><td>" . $row["VCity"]." </td><td>" . $row["VState"]." </td><td>" . $row["VCountry"]." </td><td>" . $row["VTime"]."</td><td>" . $row["VDescription"]."</td><td>" . $row["VDays"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>