<?php
include 'index.php';

$sql = "SELECT * FROM books";
$result = $mysqli->query($sql);

$books = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $books[] = $row;
    }
}

echo json_encode($books);
?>
