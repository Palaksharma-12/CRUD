<?php
include 'connection.php';

if (isset($_REQUEST['id'])) {
    $id = intval($_REQUEST['id']); // Convert to integer to prevent SQL injection id = '$id'";
    $sql = "DELETE FROM votes WHERE id = '$id'";
    $check = mysqli_query($conn, $sql);

    if ($check) {
        $message = "Data deleted successfully";
        $redirect = "user_list.php";
    } else {
        $message = "Data not deleted";
        $redirect = "user_add.php";
    }

    echo "<script type='text/javascript'>
            alert('$message');
            window.location='$redirect';
          </script>";
} else {
    echo "<script type='text/javascript'>
            alert('Invalid request');
            window.location='crudadd.php';
          </script>";
}
?>
