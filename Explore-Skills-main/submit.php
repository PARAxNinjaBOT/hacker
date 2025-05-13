<?php
$host = "localhost"; // Or your database host
$dbname = "contact_form";
$username = "root";  // Replace with your DB username
$password = "";      // Replace with your DB password

// Connect to database
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get POST data safely
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$message = $_POST['message'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO messages (name, email, mobile, address, message) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $name, $email, $mobile, $address, $message);

if ($stmt->execute()) {
    echo "Message sent successfully!";
     echo "<p>Redirecting you back to the contact page in 3 seconds...</p>";
    echo "<script>
            setTimeout(function() {
                window.location.href = 'contact.php';
            }, 3000);
          </script>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
