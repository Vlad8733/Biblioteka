<?php
require_once('Book.php');

class Library {
    private $mysqli;

    public function __construct($mysqli) {
        $this->mysqli = $mysqli;
    }

    public function getAllBooks() {
        $books = array();

        $result = $this->mysqli->query("SELECT * FROM books");
        while ($row = $result->fetch_assoc()) {
            $book = new Book($row['id'], $row['title'], $row['author'], $row['year'], $row['available']);
            $books[] = $book;
        }

        return $books;
    }

    // Другие методы для работы с книгами и займами
}
?>
