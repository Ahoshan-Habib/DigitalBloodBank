<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";

try {

    $conn = new PDO("mysql:host=$servername;dbname=digital_blood_bank", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $contact_number= $_POST['contact'];
    $password_no = $_POST['password'];

    $queryIsContactNoExist = "SELECT COUNT(*) as cntContact FROM `users` WHERE `contact_number`='$contact_number' AND `password`='$password_no'";
    $stmtIsContactNoExist = $conn->prepare($queryIsContactNoExist);
    $contactNoExistenceCnt = $stmtIsContactNoExist->execute();
    $totalExistence = $stmtIsContactNoExist->fetch();
    $contactNoCnt = $totalExistence['cntContact'];

    if ($contactNoCnt==1){

        $queryUserId = "SELECT * FROM `users` WHERE `contact_number`='$contact_number' AND `password`='$password_no'";
        $stmtUserId = $conn->prepare($queryUserId);
        $getUserData = $stmtUserId->execute();
        $fetchUserData = $stmtUserId->fetch();
        $user_id = $fetchUserData['id'];

        $_SESSION['user_id'] = $user_id;


        header('Location: Dashboard.php');
    }else{
        $_SESSION['message'] = "<b>Incorrect Number or Password!</b>";
        header('Location: index.php');
    }

} catch (PDOException $exception){
    echo "Connection failed: " . $exception->getMessage();
}
?>