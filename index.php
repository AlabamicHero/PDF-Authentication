<?php
// Initialize a message variable
$message = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the name from the form
    $name = htmlspecialchars($_POST['name']);
    
    // Validate the input
    if (!empty($name)) {
        $message = "Hello, " . $name . "!";
    } else {
        $message = "Please enter your name.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample PHP Index Page</title>
    <link rel="stylesheet" href="styles.css"> <!-- Optional CSS file -->
</head>
<body>
    <div class="container">
        <h1>Welcome to My PHP Page</h1>
        
        <!-- Display the message if it exists -->
        <?php if ($message): ?>
            <p><?php echo $message; ?></p>
        <?php endif; ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="name">Enter your name:</label>
            <input type="text" id="name" name="name" required>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
