<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";

try {

    $conn = new PDO("mysql:host=$servername;dbname=digital_blood_bank", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $request_id= $_POST['request_id'];
    $accepted_by = $_SESSION['user_id'];

    $query = "UPDATE requests SET acceptance_st='1', accepted_by='$accepted_by',accepted_at=NOW()  WHERE id='$request_id'";
    $stmt = $conn->prepare($query);

    $result = $stmt->execute();

    if($result){

        header('Location: Request_list_all.php');

    } else {
        $_SESSION['message'] = "Failed to save data !";
        header('Location: Request_list_all.php');
    }

} catch (PDOException $exception){
    echo "Connection failed: " . $exception->getMessage();
}
?>