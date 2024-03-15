<?php
class Book {
    private $id;
    private $title;
    private $author;
    private $year;
    private $available;

    public function __construct($id, $title, $author, $year, $available) {
        $this->id = $id;
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        $this->available = $available;
    }

    // Геттеры и сеттеры для свойств класса
}
?>
