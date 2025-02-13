<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database Connection
    $conn = new mysqli("localhost", "root", "", "hostel_db");

    // Check Connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $room = $_POST['room'];

    // Insert into database
    $sql = "INSERT INTO students (name, email, phone, password, room) 
            VALUES ('$name', '$email', '$phone', '$password', '$room')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $conn->error;
    }

    // Close Connection
    $conn->close();
}
?>
