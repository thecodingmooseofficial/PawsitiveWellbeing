<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "PawsitiveWellbeing";

// Create a new MySQLi connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); // Connection failed, show error
}

// Function to register a new user
function registerUser($fullName, $email, $phone, $password, $address, $cityStateCountry, $locationEnabled, $adoptionNotifications, $donationCampaigns, $newsletterSubscription, $profilePicturePath, $socialMediaLink, $emailVerified) {
    global $conn;

    // Hash the password before storing it
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare the SQL query to insert the user data into the database
    $stmt = $conn->prepare("INSERT INTO GeneralUsers (FullName, Email, Phone, Password, Address, CityStateCountry, LocationEnabled, AdoptionNotifications, DonationCampaignNotifications, NewsletterSubscription, ProfilePicturePath, SocialMediaLinks, EmailVerified) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    // Bind parameters to the SQL query
    $stmt->bind_param("sssssssssssss", $fullName, $email, $phone, $hashedPassword, $address, $cityStateCountry, $locationEnabled, $adoptionNotifications, $donationCampaigns, $newsletterSubscription, $profilePicturePath, $socialMediaLink, $emailVerified);

    // Execute the query and return success or failure
    if ($stmt->execute()) {
        return true;
    } else {
        return "Error: " . $stmt->error;
    }
}

// Function to get a user by their email
function getUserByEmail($email) {
    global $conn;

    // Prepare the SQL query to select a user by email
    $stmt = $conn->prepare("SELECT * FROM GeneralUsers WHERE Email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Return the user record if found
    if ($result->num_rows > 0) {
        return $result->fetch_assoc(); // Return user data
    } else {
        return null; // User not found
    }
}
?>
