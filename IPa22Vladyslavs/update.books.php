<?php
include 'index.php';

$book_id = $_POST['book_id'];
$title = $_POST['title'];
$author = $_POST['author'];
$year = $_POST['year'];

$sql = "UPDATE books SET title='$title', author='$author', year='$year' WHERE id=$book_id";
if ($mysqli->query($sql) === TRUE) {
    echo "Book updated successfully";
} else {
    echo "Error updating record: " . $mysqli->error;
}

$mysqli->close();
?>
