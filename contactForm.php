<?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Display confirmation message
    echo "<script>alert('Your message has been received. Thank you!'); window.location = 'about.php';</script>";
}
?>