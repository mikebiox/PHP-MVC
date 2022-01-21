<?php
include_once ('header.php');
?>

<body>

<table border="1">
  <tr>
    <th>Name</th>
    <th>Phone</th>
    <th>Email</th>
  </tr>

<?php

$employees = array(
    array(
        "name" => "Dave Punk",
        "phone" => "5689741523",
        "email" => "davepunk@gmail.com",
    ),
    array(
        "name" => "Monty Smith",
        "phone" => "2584369721",
        "email" => "montysmith@gmail.com",
    ),
    array(
        "name" => "John Flinch",
        "phone" => "9875147536",
        "email" => "johnflinch@gmail.com",
    )
); 

foreach ($employees as $employee) {
    echo '<tr>';
    foreach ($employee as $data) {
        echo '<td>' . $data . '</td>';
    }
    echo '</tr>';
}
?>
</table>
<table border="1">
  <tr>
    <th>Movie Name</th>
    <th>Genre</th>
  </tr>
  

<?php
$films = array(
    "comedy" => array (
        0 => "Pink Panther",
        1 => "johnny English",
        2 => "Tommy Boy"),
    "action" => array (
        0 => "Die Hard",
        1 => "Expendables"),
    "epic" => array (
        0 => "The Lord of the Rings"),
    "Romance" => array (
        0 => "Romeo and Juliet")
);

foreach ($films as $genre => $filmArray) {
    echo '<tr>';
    foreach ($filmArray as $film) {
        echo '<td>' . $film . '</td>';
        echo '<td>' . $genre . '</td>';
        echo '</tr>';
    }
}

?>

</table>

</body>
</html>