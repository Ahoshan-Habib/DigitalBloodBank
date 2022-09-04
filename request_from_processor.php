<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";

try {

    $conn = new PDO("mysql:host=$servername;dbname=digital_blood_bank", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $blood_name= $_POST['bloodgroup'];
    $blood_quantity = $_POST['bloodquantity'];
    $address_name = $_POST['Address'];
    $time_of_donation= $_POST['time_of_donation'];
    $requestee_id = $_SESSION['user_id'];
    $Description = $_POST['description'];

    $query = "INSERT INTO `requests`(`blood_group`,`quantity_in_bag`,`place`,`time_of_donation`,`requested_at`,`requestee_id`,`description`) 
              VALUES('$blood_name','$blood_quantity','$address_name','$time_of_donation',NOW(),'$requestee_id','$Description')";
    $stmt = $conn->prepare($query);

    $result = $stmt->execute();

    if($result){

        header('Location: Request_list_all.php');

        //$_SESSION['message'] = "Data saved successfully !";

        //header('Location: index.php');
    } else {
        //echo "Failed";

        //$_SESSION['message'] = "Failed to save data !";

        //header('Location: index.php');
    }

} catch (PDOException $exception){
    echo "Connection failed: " . $exception->getMessage();
}
?>