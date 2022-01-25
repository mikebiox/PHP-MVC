<?php
include_once ('header.php');
?>

<body>
    <h1>Lab 02</h1>
    <ol>
        <li>Loop through the 2 arrays and create two HTML tables. You must use the arrays I have provided.</li>
        <li>Table 1: 2 columns: movie name, genre</li>
        <li>Table 2: 3 columns: name, phone, email</li>
        <li>Format your tables properly using HTML tags</li>
        <li>Hint: You will need to use echo and foreach</li>
    </ol>

<h1> Table 1 </h1>

<table class="styled-table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>

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
</tbody>
</table>
<h1> Table 2 </h1>
<table class="styled-table">
    <thead>
        <tr>
            <th>Movie Name</th>
            <th>Genre</th>
        </tr>
    </thead>
    <tbody>

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
        echo '<td>' . ucfirst($film) . '</td>';
        echo '<td>' . ucfirst($genre) . '</td>';
        echo '</tr>';
    }
}

?>
</tbody>
</table>
<?php include_once("footer.php");?>
</body>
</html>