<?php
    require_once "DBConnect.php";
     if(isset($_POST['id']) && isset($_POST['password'])) {
    // Define $username and $password
    $id = $_POST['id'];
    $password = $_POST['password'];
    // To protect MySQL injection (more detail about MySQL injection)
    $id = mysqli_real_escape_string($db, $id);
    $password = mysqli_real_escape_string($db, $password);
    $sql = "SELECT * FROM chefreg19 WHERE id='$id' and password='$password'";
    $result = mysqli_query($db, $sql);
    // Mysql_num_row is counting table row
    $count = mysqli_num_rows($result);
    // If result matched $username and $password, table row must be 1 row
    if ($count == 1) {
        alert("Login Successfully!");
        session_start();
        $cookiename = "id";
        $cookievalue = $id;
        setcookie($cookiename, $cookievalue, time() + 86400 * 30);
        header("Location: chefhome.html");
    } else {
        
        alert("wrong id and password");
		header("Location: login-chef.html");
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