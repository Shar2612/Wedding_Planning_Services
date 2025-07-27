<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vendorType = $_POST["vendorType"];
    $city = $_POST["city"];

    // Now you can process the form data, such as storing it in a database or sending an email.
    // For example:
    $to = "example@example.com";
    $subject = "Wedding Planner Form Submission";
    $message = "Vendor Type: $vendorType\nCity: $city";
    $headers = "From: info@weddingplanner.com";
    mail($to, $subject, $message, $headers);
}
?>

<!-- You can also redirect the user back to the original page after processing the form data -->
<script>
window.location.href = "index.html";
</script>

<form action="process-form.php" method="post"></form>