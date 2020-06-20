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
<form class="border border-light p-5" action ="update_incidentstatus.php" method="POST">

<input type="text" id="defaultUpdateFormName" name="UpdateFormName" class="form-control mb-4" maxlength="25" placeholder="Incident Name" required>
<button class="btn btn-info btn-block my-4" type="submit">Update Status </button>
<br>
<br>
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

$sql = "SELECT * FROM report_incident";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>IncidentName</th><th>IncidentLocation</th><th>City</th><th>State</th><th>AnimalType</th><th>DateTime</th><th>Description</th><th>Status</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["IncidentName"]. "</td><td>" . $row["IncidentLocation"]. " </td><td>" . $row["City"]. " </td><td>" . $row["State"]." </td><td>" . $row["AnimalType"]." </td><td>" . $row["DateTime"]." </td><td>" . $row["Description"]."</td><td>" . $row["Status"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();

?>
</body>
</html>
