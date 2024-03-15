<?php
include 'index.php';

$title = $_POST['title'];
$author = $_POST['author'];
$year = $_POST['year'];

$sql = "INSERT INTO books (title, author, year) VALUES ('$title', '$author', '$year')";
if ($mysqli->query($sql) === TRUE) {
    echo "New book added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();
?>
