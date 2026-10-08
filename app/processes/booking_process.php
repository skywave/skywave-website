<?php
// Database config and change when live database is created
$host = "localhost";
$db = "skywave_db";
$user = "root"; // change if needed
$pass = "";     // change if needed

// Admin email
$adminEmail = "support@skywave.co.zm";

// Connect to database
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Get POST data
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$message = $_POST['message'] ?? '';

if($name && $email) {
    // Insert into DB
    $stmt = $conn->prepare("INSERT INTO bookings (name, email, phone, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $phone, $message);
    $stmt->execute();
    $stmt->close();

    // Email to admin
    $subjectAdmin = "New Booking from $name";
    $bodyAdmin = "Name: $name\nEmail: $email\nPhone: $phone\nMessage:\n$message";
    mail($adminEmail, $subjectAdmin, $bodyAdmin);

    // Confirmation email to user
    $subjectUser = "Booking Received - Skywave";
    $bodyUser = "Hello $name,\n\nThank you for your booking. Our team will contact you soon.\n\nRegards,\nSkywave Team";
    mail($email, $subjectUser, $bodyUser);

    // Redirect back with success
    echo "<script>alert('Thank you, your booking has been received!');window.location.href='".$_SERVER['HTTP_REFERER']."';</script>";
}
$conn->close();
?>
