<?php
// create_admin.php
$conn = new mysqli("localhost", "root", "", "contact_form");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Replace with your desired username and password
$username = "admin";
$password = "admin123"; // Plain password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Insert the admin user
$stmt = $conn->prepare("INSERT INTO admins (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $hashedPassword);

if ($stmt->execute()) {
    echo "Admin user created successfully.";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
