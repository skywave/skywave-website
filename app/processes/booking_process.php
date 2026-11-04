<?php
// Settings come from the server, never from git:
//   1. app/config.php if it exists (copy app/config.example.php; it is git-ignored), else
//   2. environment variables (the Docker setup in deploy/ sets these), else
//   3. local development defaults (MySQL root without a password on this PC).
$cfg = is_file(__DIR__ . '/../config.php') ? (include __DIR__ . '/../config.php') : [];
if (!is_array($cfg)) {
    $cfg = [];
}
$setting = function (string $key, string $env, string $default) use ($cfg): string {
    if (isset($cfg[$key]) && $cfg[$key] !== '') {
        return (string) $cfg[$key];
    }
    $v = getenv($env);
    return ($v !== false && $v !== '') ? $v : $default;
};

$host = $setting('db_host', 'DB_HOST', 'localhost');
$db   = $setting('db_name', 'DB_NAME', 'skywave_db');
$user = $setting('db_user', 'DB_USER', 'root');
$pass = $setting('db_pass', 'DB_PASS', '');

// Where booking notifications go
$adminEmail = $setting('admin_email', 'ADMIN_EMAIL', 'support@skywavetech.co.zm');

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
