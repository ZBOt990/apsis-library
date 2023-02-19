<?php

// Initialize the database connection
$host = 'localhost'; // Your database host name
$username = 'id20314222_apsislib'; // Your database username
$password = '[gEt{aGXCL@8hBZX'; // Your database password
$dbname = 'id20314222_library'; // Your database name
$connection = mysqli_connect($host, $username, $password, $dbname);
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Process the form submission
if (isset($_POST['bookTitle']) && isset($_POST['borrower']) && isset($_POST['borrowDate']) && isset($_POST['returnDate'])) {
    // Retrieve the form data
    $bookTitle = $_POST['bookTitle'];
    $borrower = $_POST['borrower'];
    $borrowDate = $_POST['borrowDate'];
    $returnDate = $_POST['returnDate'];

    // Insert the new book record into the database
    $query = "INSERT INTO borrowed_books (book_title, borrower, borrow_date, return_date) VALUES ('$bookTitle', '$borrower', '$borrowDate', '$returnDate')";
    if (mysqli_query($connection, $query)) {
        // Redirect to the borrowed books page
        header("Location: borrow.html");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connection);
    }
}

// Close the database connection
mysqli_close($connection);

?>
