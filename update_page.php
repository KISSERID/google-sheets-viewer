<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);
    $code = $input['code'];
    file_put_contents('viewer.html', $code);
    echo json_encode(['status' => 'success']);
} else {
    echo json_encode(['
