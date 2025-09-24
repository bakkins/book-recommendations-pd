<?php
$servername = "localhost";
$username = "book_review_user_24092025";
$password = "password";
$dbname = "book_review_24092025";

$LevelValue = 
[   1 => "Nelasāma",
    2 => "Slikta",
    3 => "Viduvēja",
    4 => "Laba",
    5 => "Lieliska"
];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, full_name, book_title, review_text, rating FROM book_review";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    echo "<h2>". $row["id"] . "</h2>";
    echo "<p>Full name:" . $row["full_name"] . "</p>";
    echo "<p>Book title:" . $row["book_title"] . "</p>";
    echo "<p>Review text:" . $row["review_text"] . "</p>";
    echo "<p>Rating:" . $LevelValue[$row["rating"]] . "</p>"; 

  }
} else {
  echo "0 results";
}
$conn->close();
?>