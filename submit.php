<?php
$servername = "localhost";
$username = "book_review_user_24092025";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

<a href="index.html">Atpakaļ uz formu</a>