<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movie";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$time = $_POST['time'];
$movie = $_POST['movie'];
$date = $_POST['date'];
$seat = $_POST['seat'];

$stmt = $conn->prepare("INSERT INTO infoo(time, movie, date, seat) VALUES (?, ?, ?, ?)");
$stmt->bind_param("sssi", $time, $movie, $date, $seat);


if ($stmt->execute()) {
    echo "Booking successful!";
} else {
    echo "Error: " . $stmt->error;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h1>Booking Confirmation</h1>";
    echo "<p>Movie: <strong>$movie</strong></p>";
    echo "<p>Date: <strong>$date</strong></p>";
    echo "<p>Time: <strong>$time</strong></p>";
    echo "<p>Seats: <strong>$seat</strong></p>";
}
 else {
    echo "Invalid request.";
}

$stmt->close();
$conn->close();
?>