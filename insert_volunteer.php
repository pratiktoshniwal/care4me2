<?php header("Location: http://care4me2.dx.am/homepage.html");
$servername = "fdb23.awardspace.net";
$username = "3373928_projectdb";
$password = "Project@123";
$database = "3373928_projectdb";

//$servername = "localhost1";
//$username = "root";
//$password = "";
//$database = "project_test";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO volunteer (VName, VEmail, VPhone, VCity, VState, VCountry,VTime, VDescription, VDays)
VALUES ('$_POST[VolunteerFormName]', '$_POST[VolunteerFormEmail]','$_POST[VolunteerFormPhone]','$_POST[VolunteerFormCity]','$_POST[VolunteerFormState]','$_POST[VolunteerFormCountry]','$_POST[VolunteerFormTime]', '$_POST[VolunteerFormDescription]','$_POST[VolunteerFormDays]')";

if ($conn->query($sql) === TRUE) {
    echo "Volunteer Registered successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

