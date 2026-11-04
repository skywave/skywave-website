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

// Get POST data and sanitize
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$message = trim($_POST['message'] ?? '');

// Helper to remove newlines for header injection prevention
function clean_input($data) {
    return str_replace(["\r", "\n"], '', $data);
}

if ($name && filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Insert into DB
    $stmt = $conn->prepare("INSERT INTO bookings (name, email, phone, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $phone, $message);
    $stmt->execute();
    $stmt->close();

    // Clean inputs for email usage
    $cleanName = clean_input($name);
    
    // Email to admin
    $subjectAdmin = "New Booking from " . $cleanName;
    $bodyAdmin = "Name: $cleanName\nEmail: $email\nPhone: " . clean_input($phone) . "\nMessage:\n$message";
    mail($adminEmail, $subjectAdmin, $bodyAdmin);

    // Confirmation email to user
    $subjectUser = "Booking Received - Skywave";
    $bodyUser = "Hello $cleanName,\n\nThank you for your booking. Our team will contact you soon.\n\nRegards,\nSkywave Team";
    mail($email, $subjectUser, $bodyUser);

    // Return success response
    echo json_encode(['status' => 'success', 'message' => 'Thank you, your booking has been received!']);
} else {
    // Return error response
    http_response_code(400);
    echo json_encode(['status' => 'error', 'message' => 'Invalid input.']);
}
$conn->close();
?>
