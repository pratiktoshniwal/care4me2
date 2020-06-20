<?php header("Location: http://care4me2.dx.am/signin.html");
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

$sql = "INSERT INTO register (FName, LName, Email, Phone,Password)
VALUES ('$_POST[RegisterFormFName]', '$_POST[RegisterFormLName]','$_POST[RegisterFormEmail]','$_POST[RegisterFormPhone]','$_POST[RegisterFormPassword]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
