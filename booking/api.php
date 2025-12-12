<?php
header('Content-Type: application/json; charset=utf-8');

// Database path (SQLite)
$dbPath = __DIR__ . '../accounts/database/database.db';

try {
    $db = new PDO('sqlite:' . $dbPath);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['success' => false, 'error' => 'Database connection failed']);
    exit;
}

$db->exec("CREATE TABLE IF NOT EXISTS bookings (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    email TEXT NOT NULL,
    phone TEXT,
    visit_date TEXT NOT NULL,
    tickets INTEGER NOT NULL,
    created_at TEXT NOT NULL
)");

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'POST') {
    // Read JSON body if provided, otherwise use $_POST
    $input = json_decode(file_get_contents('php://input'), true);
    if (!is_array($input)) $input = $_POST;

    $name = trim($input['name'] ?? '');
    $email = trim($input['email'] ?? '');
    $phone = trim($input['phone'] ?? '');
    $visit_date = trim($input['visit_date'] ?? '');
    $tickets = intval($input['tickets'] ?? 0);

    // Basic validation
    $errors = [];
    if ($name === '') $errors[] = 'Name is required';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Valid email is required';
    if ($visit_date === '') $errors[] = 'Visit date is required';
    if ($tickets <= 0) $errors[] = 'Tickets must be at least 1';

    if (!empty($errors)) {
        http_response_code(422);
        echo json_encode(['success' => false, 'errors' => $errors]);
        exit;
    }

    $stmt = $db->prepare('INSERT INTO bookings (name, email, phone, visit_date, tickets, created_at) VALUES (:name, :email, :phone, :visit_date, :tickets, :created_at)');
    $now = (new DateTime())->format(DateTime::ATOM);
    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':phone', $phone);
    $stmt->bindValue(':visit_date', $visit_date);
    $stmt->bindValue(':tickets', $tickets, PDO::PARAM_INT);
    $stmt->bindValue(':created_at', $now);
    $stmt->execute();

    $id = $db->lastInsertId();
    echo json_encode(['success' => true, 'id' => $id]);
    exit;
}

if ($method === 'GET') {
    $stmt = $db->query('SELECT id, name, email, phone, visit_date, tickets, created_at FROM bookings ORDER BY created_at DESC');
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode(['success' => true, 'bookings' => $rows]);
    exit;
}

http_response_code(405);
echo json_encode(['success' => false, 'error' => 'Method not allowed']);

?>
