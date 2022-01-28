<?php
include_once ('db.php');

Class movieDB {
    
    function __construct($param = false) {  }

    function get_movie_genre () {
        $conn = db_connect();
        $query = "SELECT m.title, g.genre_name FROM movies m 
        JOIN genre g on g.genre_id = m.genre";
        $stmt = $conn->prepare($query);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    // query code
    }

    function get_genres () {
        $conn = db_connect();
        $query = "SELECT * FROM genre ORDER BY genre_name";
        $stmt = $conn->prepare($query);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function get_movies_by_genre ($genre_name) {
        $conn = db_connect();
        $query = "SELECT m.title, g.genre_name FROM movies m 
            JOIN genre g on g.genre_id = m.genre
            WHERE g.genre_name = :genre_name
            ORDER BY m.title";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':genre_name', $genre_name);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

}