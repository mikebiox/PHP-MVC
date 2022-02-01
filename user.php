<?php
include_once ('db.php');

Class user {
    
    function __construct($param = false) {  }

    function get_hash ($username) {
        $conn = db_connect();
        $query = "SELECT users.password FROM users WHERE username = :username";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}