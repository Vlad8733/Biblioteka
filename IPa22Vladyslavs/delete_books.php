<?php
include 'index.php';

$book_id = $_POST['book_id'];

$sql = "DELETE FROM books WHERE id=$book_id";
if ($mysqli->query($sql) === TRUE) {
    echo "Book deleted successfully";
} else {
    echo "Error deleting record: " . $mysqli->error;
}

$mysqli->close();
?>
