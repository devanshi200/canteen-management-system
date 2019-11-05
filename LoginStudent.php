<?php
    require_once "DBConnect.php";
     if(isset($_POST['SAPid']) && isset($_POST['password'])) {
    // Define $username and $password
    $SAPid = $_POST['SAPid'];
    $password = $_POST['password'];
    // To protect MySQL injection (more detail about MySQL injection)
    $SAPid = mysqli_real_escape_string($db, $SAPid);
    $password = mysqli_real_escape_string($db, $password);
    $sql = "SELECT * FROM stregister WHERE SAPid='$SAPid' and password='$password'";
    $result = mysqli_query($db, $sql);
    // Mysql_num_row is counting table row
    $count = mysqli_num_rows($result);
    // If result matched $username and $password, table row must be 1 row
    if ($count == 1) {
        alert("Login Successfully!");
        session_start();
        $cookiename = "SAPid";
        $cookievalue = $SAPid;
        setcookie($cookiename, $cookievalue, time() + 86400 * 30);
        header("Location: index.php");
    } else {
        
        
        alert("Id and password doesnot match");
    }
}

else {
    alert ("Please provide the credentials of you!");
    header("Location: login-chef.html");
}
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
?>