<?php
$servername = "fdb23.awardspace.net";
$username = "3373928_projectdb";
$password = "Project@123";
$database = "3373928_projectdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Login function

if(isset($_POST['btn_submit'])){

    $uname = $_POST['LoginFormEmail'];
    $password = $_POST['LoginFormPassword'];

    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from register where Email='".$uname."' and Password='".$password."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
			//echo "Welcome '$uname'!";
            header('Location: http://care4me2.dx.am/homepage1.php');
        }else{
            echo "Invalid username and password";
        }

    }

}

?>