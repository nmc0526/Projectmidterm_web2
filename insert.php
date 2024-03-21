<?php

require_once "../index.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
$username   = $_POST["uname"];
$email = $_POST["email"];
    try{

        $sql="INSERT INTO user(user_name,user_email) VALUES(:user_name,:user_email)";
        $stmt=$con->prepare($sql);
        $stmt=bindParam(':user_name',$username);
        $stmt=bindParam(':user_email',$email);
        $stmt->execute();
    
        echo json_encode("status" => "success", "message" => "Data" "inserted successfully.")
    
        $conn=null;
    
    }catch(PDOException $error){
        echo"error:" . $con=>getMessage();
    }

}else {
    echo "server error"
}
?>