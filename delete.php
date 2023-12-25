<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nimToDelete = $_POST["nim"];

    // Perform deletion query using $nimToDelete
    $sql = "DELETE FROM tb_peserta_tournament WHERE nim = ?";
    
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param("s", $nimToDelete);

    if ($stmt->execute()) {
        // Deletion successful, you can redirect or display a success message
        header("Location: index2.php"); // Redirect to your main page
        exit();
    } else {
        // Deletion failed, handle the error
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>

