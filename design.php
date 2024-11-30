<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Booking System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            padding: 20px;
        }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        input, select {
            margin-bottom: 10px;
            padding: 10px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #28a745;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<h1>Book Your Movie Ticket</h1>
<form action="submit.php" method="POST">
    <label for="movie">Select Movie:</label>
    <select id="movie" name="movie" required>
        <option value="movie1">Movie 1</option>
        <option value="movie2">Movie 2</option>
        <option value="movie3">Movie 3</option>
    </select>

    <label for="date">Select Date:</label>
    <input type="date" id="date" name="date" required>

    <label for="time">Select Time:</label>
    <select id="time" name="time" required>
        <option value="10:00">10:00 AM</option>
        <option value="13:00">1:00 PM</option>
        <option value="16:00">4:00 PM</option>
        <option value="19:00">7:00 PM</option>
    </select>

    <label for="seats">Number of Seats:</label>
    <input type="number" id="seat" name="seat" min="1" max="10" required>

    <button type="submit">Book Now</button>
</form>

</body>
</html>
