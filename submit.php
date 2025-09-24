<?php
$servername = "localhost";
$username = "book_review_user_24092025";
$password = "password";
$dbname = "book_review_24092025";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO book_review (full_name, book_title, review_text, rating) VALUES (?, ?, ?, ?)");
$stmt->bind_param("sssi", $name, $title, $review, $rating);

$name = $_POST["formName"] . $_POST["formSurname"];
$title = $_POST["formBookName"];
$review = $_POST["formDesc"];
$rating = $_POST["formLevel"];
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();

?>

<a href="index.html">Atpakaļ uz formu</a>