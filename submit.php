<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $secretKey = "YOUR_SECRET_KEY_HERE"; // Replace with your actual Secret Key
    $responseKey = $_POST['g-recaptcha-response'];
    $userIP = $_SERVER['REMOTE_ADDR'];

    // Make a request to Google's verification URL
    $url = "https://google.com";
    $response = file_get_contents($url);
    $responseKeys = json_decode($response, true);

    // Check if CAPTCHA verification was successful
    if ($responseKeys["success"]) {
        echo "<h3>Success! CAPTCHA verified. Processing your form now.</h3>";
        // Put your actual form submission or database code here
    } else {
        echo "<h3>Error: Please check the CAPTCHA checkbox before submitting.</h3>";
    }
}
?>
