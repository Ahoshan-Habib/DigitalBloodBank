<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";

try {

    $conn = new PDO("mysql:host=$servername;dbname=digital_blood_bank", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $full_name = $_POST['full_name'];
    $contact_number= $_POST['contact'];
    $password_no = $_POST['password'];
    $retype_password_no = $_POST['confirmation_password'];

    $queryIsContactNoExist = "SELECT COUNT(*) as cntContact FROM `users` WHERE `contact_number`='$contact_number'";
    $stmtIsContactNoExist = $conn->prepare($queryIsContactNoExist);
    $contactNoExistenceCnt = $stmtIsContactNoExist->execute();
    $totalExistence = $stmtIsContactNoExist->fetch();
    $contactNoCnt = $totalExistence['cntContact'];
    if($contactNoCnt==0){

        $query = "INSERT INTO `users`(`user_name`,`contact_number`,`password`,`retype_password`)
           VALUES(:full_name_value,:contact_number_value,:password_no_value,:retype_password_no_value)";
        $stmt = $conn->prepare($query);

        $stmt->bindParam(':full_name_value',$full_name);
        $stmt->bindParam(':contact_number_value',$contact_number);
        $stmt->bindParam(':password_no_value',$password_no);
        $stmt->bindParam(':retype_password_no_value',$retype_password_no);
        $result = $stmt->execute();
        if($result){
            //echo "Data Inserted";
            $_SESSION['message'] = "<b>Registration is complete. Login now!</b>";
            header('Location: index.php');
        } else {
            //echo "Failed";
            $_SESSION['message'] = "<b>Registration is not complete.Re-register Please!</b>";
            header('Location: index.php');
        }
    } else {
        $_SESSION['message'] = "<font color='red'><b>Sorry! Try with another number</b></font>";
        header('Location: register.php');
    }

} catch (PDOException $exception){
    echo "Connection failed: " . $exception->getMessage();
}
?>