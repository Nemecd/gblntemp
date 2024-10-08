<?php
session_start();

$host = "localhost";  
$username = "root";   
$password = "";       
$dbname = "gospellove";  

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$response = [];  // Create an empty array to store response messages

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $conn->real_escape_string($_POST['first_name']);
    $last_name = $conn->real_escape_string($_POST['last_name']);
    $birthday = $conn->real_escape_string($_POST['birthday']);
    $gender = $conn->real_escape_string($_POST['gender']);
    $country = $conn->real_escape_string($_POST['country']);
    $state = $conn->real_escape_string($_POST['state']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $address = $conn->real_escape_string($_POST['address']);
    $marital_status = $conn->real_escape_string($_POST['marital_status']);
    $occupation = $conn->real_escape_string($_POST['occupation']);
    $denomination = $conn->real_escape_string($_POST['denomination']);
    $volunteer = $conn->real_escape_string($_POST['volunteer']);
    $position = $conn->real_escape_string($_POST['position']);

    
    $check_email_sql = "SELECT * FROM ambassador_registration WHERE email = '$email'";
    $email_result = $conn->query($check_email_sql);

    if ($email_result->num_rows > 0) {
        $response['error'] = true;
        $response['error_message'] = "This email address is already registered.";
        echo json_encode($response);
        exit();
    }
    if (!empty($_FILES['passport_photo']['name'])) {
        $passport_photo = $_FILES['passport_photo']['name'];
        $passport_photo = $conn->real_escape_string($passport_photo);

        $target_dir = "uploads/";
        $target_file = $target_dir . basename($passport_photo);
        
        if (!move_uploaded_file($_FILES["passport_photo"]["tmp_name"], $target_file)) {
            $response['error'] = true;
            $response['error_message'] = "Error uploading file.";
            echo json_encode($response);
            exit();
        }
    } else {
        $response['error'] = true;
        $response['error_message'] = "Please upload a passport photo.";
        echo json_encode($response);
        exit();
    }

    $sql = "INSERT INTO ambassador_registration 
            (first_name, last_name, birthday, gender, country, state, email, phone, address, marital_status, occupation, denomination, volunteer, position, passport_photo)
            VALUES ('$first_name', '$last_name', '$birthday', '$gender', '$country', '$state', '$email', '$phone', '$address', '$marital_status', '$occupation', '$denomination', '$volunteer', '$position', '$passport_photo')";

    if ($conn->query($sql) === TRUE) {
        $response['success'] = true;
        $response['success_message'] = "Registration successful! We would contact you soon.";
    } else {
        $response['error'] = true;
        $response['error_message'] = "Error: " . $conn->error;
    }

    echo json_encode($response);
    exit();
}

$conn->close();
?>
