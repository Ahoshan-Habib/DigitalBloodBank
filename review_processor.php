<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";

try {

    $conn = new PDO("mysql:host=$servername;dbname=digital_blood_bank", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $request_id= $_POST['rid'];
    $review = $_POST['review'];
    $reviewed_by = $_SESSION['user_id'];

    $query = "INSERT INTO `reviews`(`request_id`,`reviewed_by`,`review`,`entered_at`) VALUES('$request_id','$reviewed_by','$review',NOW())";
    $stmt = $conn->prepare($query);

    $result = $stmt->execute();

    if($result){

        header('Location: Request_list_all.php');
    } else {

    }

} catch (PDOException $exception){
    echo "Connection failed: " . $exception->getMessage();
}
?>