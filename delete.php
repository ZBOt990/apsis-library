<?php
// establish a connection to the MySQL database
$servername = "localhost";
$username = "id20314222_apsislib";
$password = "[gEt{aGXCL@8hBZX";
$dbname = "id20314222_library";

$conn = new mysqli($servername, $username, $password, $dbname);

// check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// get the ID of the row to be deleted from the POST data
$id = $_POST['id'];

// construct and execute the SQL query to delete the row from the database
$sql = "DELETE FROM borrowed_books WHERE id = $id";
if ($conn->query($sql) === TRUE) {
    // the row was successfully deleted, send a success response
    echo "success";
} else {
    // there was an error deleting the row, send an error response
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// close the database connection
$conn->close();
?>