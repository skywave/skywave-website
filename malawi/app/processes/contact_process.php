<?php
/**
 * Contact form handler for the Malawi website.
 *
 * Reuses the same database settings and admin address as the main booking
 * process (app/config.php, environment variables, or development defaults).
 */
header('Content-Type: application/json; charset=utf-8');

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Method not allowed.']);
    exit;
}

// Honeypot: real users never fill this hidden field.
if (!empty($_POST['website'])) {
    echo json_encode(['status' => 'success', 'message' => 'Thank you, your message has been received.']);
    exit;
}

$configPath = __DIR__ . '/../../../app/config.php';
$cfg = is_file($configPath) ? (include $configPath) : [];
if (!is_array($cfg)) {
    $cfg = [];
}

$setting = function (string $key, string $env, string $default) use ($cfg): string {
    if (isset($cfg[$key]) && $cfg[$key] !== '') {
        return (string) $cfg[$key];
    }
    $value = getenv($env);
    return ($value !== false && $value !== '') ? $value : $default;
};

$host = $setting('db_host', 'DB_HOST', 'localhost');
$db   = $setting('db_name', 'DB_NAME', 'skywave_db');
$user = $setting('db_user', 'DB_USER', 'root');
$pass = $setting('db_pass', 'DB_PASS', '');

$adminEmail = $setting('admin_email', 'ADMIN_EMAIL', 'support@skywavetech.co.zm');

$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$phone   = trim($_POST['phone'] ?? '');
$message = trim($_POST['message'] ?? '');

// Strip newlines so nothing can be injected into mail headers.
$clean = static function (string $value): string {
    return str_replace(["\r", "\n"], ' ', $value);
};

if ($name === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['status' => 'error', 'message' => 'Please provide your name and a valid email address.']);
    exit;
}

$storedMessage = '[Malawi website enquiry]' . ($message !== '' ? "\n" . $message : '');

try {
    $conn = new mysqli($host, $user, $pass, $db);

    $stmt = $conn->prepare('INSERT INTO bookings (name, email, phone, message) VALUES (?, ?, ?, ?)');
    $stmt->bind_param('ssss', $name, $email, $phone, $storedMessage);
    $stmt->execute();
    $stmt->close();
    $conn->close();
} catch (Throwable $e) {
    http_response_code(500);
    echo json_encode([
        'status'  => 'error',
        'message' => 'Sorry, we could not save your message. Please email info@skywavetech.co.zm.',
    ]);
    exit;
}

$cleanName = $clean($name);
$subject = 'New Malawi website enquiry from ' . $cleanName;
$body = "Name: $cleanName\n"
    . 'Email: ' . $clean($email) . "\n"
    . 'Phone: ' . $clean($phone) . "\n"
    . "Message:\n" . $message . "\n";

@mail($adminEmail, $subject, $body, 'From: no-reply@skywavetech.co.zm');

echo json_encode([
    'status'  => 'success',
    'message' => 'Thank you, your message has been received. Our team will be in touch shortly.',
]);
