document.addEventListener("DOMContentLoaded", function() {
    const addBookForm = document.getElementById("addBookForm");
    const deleteBookForm = document.getElementById("deleteBookForm");
    const catalogDiv = document.getElementById("catalog");

    addBookForm.addEventListener("submit", function(event) {
        event.preventDefault();
        const title = document.getElementById("title").value;
        const author = document.getElementById("author").value;
        const year = document.getElementById("year").value;

        fetch("add_book.php", {
            method: "POST",
            body: JSON.stringify({ title: title, author: author, year: year }),
            headers: {
                "Content-Type": "application/json"
            }
        })
        .then(response => response.text())
        .then(data => {
            alert(data);
            addBookForm.reset();
        })
        .catch(error => console.log(error));
    });

    deleteBookForm.addEventListener("submit", function(event) {
        event.preventDefault();
        const deleteId = document.getElementById("deleteId").value;

        fetch("delete_book.php", {
            method: "POST",
            body: JSON.stringify({ bookId: deleteId }),
            headers: {
                "Content-Type": "application/json"
            }
        })
        .then(response => response.text())
        .then(data => {
            alert(data);
            deleteBookForm.reset();
        })
        .catch(error => console.log(error));
    });

    function loadBooks() {
        fetch("get_books.php")
            .then(response => response.json())
            .then(data => {
                catalogDiv.innerHTML = "";
                data.forEach(book => {
                    const bookDiv = document.createElement("div");
                    bookDiv.innerHTML = `<p>ID: ${book.id}, ${book.title} by ${book.author} (${book.year}) - ${book.available ? "Available" : "Not Available"}</p>`;
                    catalogDiv.appendChild(bookDiv);
                });
            })
            .catch(error => console.log(error));
    }

    loadBooks();
});
