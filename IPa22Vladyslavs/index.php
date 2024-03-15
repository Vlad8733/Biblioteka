<?php
require_once('Library.php');

// Создание экземпляра библиотеки
$library = new Library();

// Добавление книг в библиотеку
$book1 = new Book(1, "Harry Potter", "J.K. Rowling", 1997, true);
$book2 = new Book(2, "The Great Gatsby", "F. Scott Fitzgerald", 1925, true);
$library->addBook($book1);
$library->addBook($book2);

// Заимствование книги
$bookId = 1;
if ($library->borrowBook($bookId)) {
    echo "Книга успешно взята напрокат.";
} else {
    echo "Книга недоступна или не найдена.";
}

// Возврат книги
$bookId = 1;
if ($library->returnBook($bookId)) {
    echo "Книга успешно возвращена.";
} else {
    echo "Книга не найдена или уже доступна.";
}
?>
