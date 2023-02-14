<?php
/*
Create 2 PHP pages (index, form)
And any other files you may need (db, footer, etc.)
Your index page has a link to your form page
Index.php should have a link to form.php
On the form page, have an HTML form with action=form.php and 3 inputs
One input is a drop-down which is from the database
Code is provided in lecture notes. Use PDO
In form.php, check to see if a form has been submitted, if it has, output the results in HTML format
If not, output HTML form to submit

*/


    include_once ('header.php');
    include_once ('movieDB.php');
    $movieDB = new movieDB();
    $genres = $movieDB->get_genres();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['formSubmitted'] += 1;
        $user_genre = $_REQUEST['genre'];
        $fname = $_REQUEST['fname'];
        $color = $_REQUEST['color'];
        $movie_by_genre = $movieDB->get_movies_by_genre($user_genre);
    }

?>

<h1>Genre Select</h1>
<form action="lab3.php" method="post">
<fieldset>
    <div>    
        <label for="fname">First name:</label>
        <input type="text" name="fname">
    </div>
    <div> 
        <label for="color">Favorite Color:</label>
        <input type="text" name="color">
    </div>
    <div> 
        <label for="genre">Choose a genre:</label>
        <select name="genre">
            <?php
                foreach ($genres as $genre) {
                    echo '<option value="'. htmlspecialchars($genre['genre_name']) . '">' . $genre['genre_name'] . '</option>';
                }

            ?>
        </select>
    </div>
    <div>
        <input type="submit" value="Submit" class="pure-button pure-button-primary">
    </div>
</fieldset>
</form>

<?php

if (!$movie_by_genre) {
    echo '</html>';
    die;
}

?>

<h1> Movies </h1>

<p> You submitted this form <?=$_SESSION['formSubmitted']?> time(s) </p>

<table>
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
    echo '<td>' . htmlspecialchars($movie['title']) . '</td>';
    echo '<td>' . htmlspecialchars($movie['genre_name']) . '</td>';
    echo '</tr>';
}

?>
</tbody>
</table>
</div>
<?php
   include_once ('footer.php');
?>
</body>
</html>
