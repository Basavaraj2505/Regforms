<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<h1>Registration Details</h1>";
    echo "<p><strong>Full Name:</strong> " . htmlspecialchars($_POST['fullname']) . "</p>";
    echo "<p><strong>Date of Birth:</strong> " . htmlspecialchars($_POST['dob']) . "</p>";
    echo "<p><strong>Email:</strong> " . htmlspecialchars($_POST['email']) . "</p>";
    echo "<p><strong>Phone Number:</strong> " . htmlspecialchars($_POST['phone']) . "</p>";
    echo "<p><strong>Country:</strong> " . htmlspecialchars($_POST['country']) . "</p>";
    echo "<p><strong>City:</strong> " . htmlspecialchars($_POST['city']) . "</p>";
    echo "<p><strong>Password:</strong> " . htmlspecialchars($_POST['password']) . "</p>";
    echo "<p><strong>Gender:</strong> " . htmlspecialchars($_POST['gender']) . "</p>";
} else {
    echo "<p>Invalid request.</p>";
}
?>