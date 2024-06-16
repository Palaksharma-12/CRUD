<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $parties = mysqli_real_escape_string($conn, $_POST['parties']);
    $id = isset($_POST['id']) ? intval($_POST['id']) : 0;

    if (isset($_POST['submit'])) {
        $sql = "INSERT INTO votes (voter_name, voter_email, contact, state, address, political_parties) 
                VALUES ('$name', '$email', '$mobile', '$state', '$address', '$parties')";
    } elseif (isset($_POST['update'])) {
        $sql = "UPDATE votes SET voter_name='$name', voter_email='$email', contact='$mobile', 
                state='$state', address='$address', political_parties='$parties' WHERE id='$id'";
    }

    $check = mysqli_query($conn, $sql);

    if ($check) {
        $message = isset($_POST['submit']) ? "Data inserted successfully" : "Data updated sucessfully";
    } else {
        $message = isset($_POST['update']) ? "Data not inserted" : "Data not updated";
    }

    echo "<script type='text/javascript'>
            alert('$message');
            window.location='" . (isset($_POST['submit']) ? "user_list.php" : "user_list.php") . "';
          </script>";
}
?>
