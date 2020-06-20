<?php header("Location: http://care4me2.dx.am/homepage.html");
$servername = "fdb23.awardspace.net";
$username = "3373928_projectdb";
$password = "Project@123";
$database = "3373928_projectdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO report_incident (IncidentName, IncidentLocation, City, State, AnimalType,DateTime, Description)
VALUES ('$_POST[IncidentFormName]', '$_POST[IncidentFormLocation]','$_POST[IncidentFormCity]','$_POST[IncidentFormState]','$_POST[IncidentFormAType]','$_POST[IncidentFormTime]','$_POST[IncidentFormDescription]')";

if ($conn->query($sql) === TRUE) {
    echo "Incident created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

