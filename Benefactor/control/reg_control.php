<?php

session_start();

// Include the BenefactorModel
require_once '../model/BenefactorModel.php';

class BenefactorController {

    private $benefactorModel;

    public function __construct() {
        $this->benefactorModel = new BenefactorModel();  // Initialize the BenefactorModel
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Collecting form data
            $fullName = $_POST['fname'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $password = $_POST['pwd'];
            $address = $_POST['address'];
            $organizationType = $_POST['otype'];
            $donationType = $_POST['donationtype'];
            $preferredCampaign = $_POST['campaign'];
            $availability = $_POST['availability'];
            $paymentMethod = $_POST['payment-method'];
            $savePayment = $_POST['save-payment'];
            $sponsorEvents = $_POST['sponsor-events'];
            $ngoPartnership = $_POST['ngo-partnership'];
            $additionalNotes = $_POST['notes'];

            // Check if the email already exists
            if ($this->benefactorModel->isEmailExists($email)) {
                echo "Email already exists. Please try a different email.";
                return;
            }

            // Register user in the database
            $result = $this->benefactorModel->registerBenefactor($fullName, $email, $phone, $password, $address, $organizationType, $donationType, $preferredCampaign, $availability, $paymentMethod, $savePayment, $sponsorEvents, $ngoPartnership, $additionalNotes);

            if ($result) {
                echo "Registration successful!";
            } else {
                echo "There was an error registering. Please try again.";
            }
        } else {
            include '../view/BenefactorRegistration.php';
        }
    }
}

// Initialize the Controller class
$benefactorController = new BenefactorController();

// Call the register method
$benefactorController->register();

?>
