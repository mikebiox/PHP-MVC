<?php
    include_once ('header.php');
    include_once ('movieDB.php');
    $movieDB = new movieDB();
    $genres = $movieDB->get_genres();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $user_genre = $_REQUEST['genre'];
        $movie_by_genre = $movieDB->get_movies_by_genre($user_genre);
    }

?>

<h1>Genre Select</h1>
<label for="genre">Choose a genre:</label>
<form action="lab3.php" method="post">
    <select name="genre">
        <?php
            foreach ($genres as $genre) {
                echo '<option value="'. $genre['genre_name'] . '">' . $genre['genre_name'] . '</option>';
            }

        ?>
    </select>
    <input type="submit" value="Submit">
</form>

<?php

if (!$movie_by_genre) {
    die;
}

?>


<h1> Movies </h1>

<table class="styled-table">
    <thead>
        <tr>
            <th>Movie Title</th>
            <th>Genre</th>
        </tr>
    </thead>
    <tbody>

<?php

foreach ($movie_by_genre as $movie) {
    echo '<tr>';
    echo '<td>' . $movie['title'] . '</td>';
    echo '<td>' . $movie['genre_name'] . '</td>';
    echo '</tr>';
}

?>
</tbody>
</table>