<?php
// Start output buffering (prevents header issues)
ob_start();

// Start session safely
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Load DB config
require_once __DIR__ . "/config.php";
