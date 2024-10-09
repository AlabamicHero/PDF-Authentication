<?php
// Get the requested path from the URL
$requestedPath = $_SERVER['REQUEST_URI'];

// Define the base URL of your server
$serverBaseUrl = 'http://34.172.241.179';

// Build the full URL to redirect to
$redirectUrl = $serverBaseUrl . $requestedPath;

// Send the redirect header
header("Location: $redirectUrl", true, 301);
exit();
?>
