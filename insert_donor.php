<?php header("Location: http://care4me2.dx.am/payment.html");

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

$sql = "INSERT INTO donor (DName, DEmail, DPhone, DCity, DState, DCountry,DAmount)
VALUES ('$_POST[DonorFormName]', '$_POST[DonorFormEmail]','$_POST[DonorFormPhone]','$_POST[DonorFormCity]','$_POST[DonorFormState]','$_POST[DonorFormCountry]','$_POST[DonorFormAmount]')";

if ($conn->query($sql) === TRUE) {
    echo "Donor Registered successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

