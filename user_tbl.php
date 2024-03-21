<php

require_once "../index.php";

try{
    $sql = "CREATE TABLE User (
       Id INT AUTO_INCREMENT PRIMARY KEY,
       uname VARCHAR(50) NOT NULL,
       fname VARCHAR(50) NOT NULL,
       mname VARCHAR(50) NOT NULL,
       lname VARCHAR(50) NOT NULL,
       gender VARCHAR NOT NULL,
       birthdate INT NOT NULL,
       age INT NOT NULL,
       em_address VARCHAR(50) NOT NULL,
       password VARCHAR(8)
    )";

    $con->exec($sql);

    echo 1;

} catch(PDOException $e) {
    echo "Error: " .$e->getMessage();

}

?>