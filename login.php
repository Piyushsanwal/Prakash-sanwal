<?php
// login.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data safely (you may want to add validation here)
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Example: Replace this with your own authentication logic.
    if ($username === 'admin' && $password === 'password') {
        // Successful login – you could redirect the user or show a welcome message.
        echo "Login Successful. Welcome, " . htmlspecialchars($username) . "!";
    } else {
        // If login fails, you could redirect back to the login form or display an error.
        echo "Invalid username or password.";
    }
} else {
    // If someone tries to access this file directly without submitting the form,
    // you may want to redirect them to the login page.
    header("Location: index.html");
    exit;
}
?>
