<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $angkatan = $_POST["angkatan"];
    $divisi = $_POST["divisi"];

    // Tampilkan formulir untuk pembaruan data
    echo "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Update Data Peserta Tournament SPORTI</title>
            <style>
                body {
                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                    background-color: #1a1a1a; /* Dark background */
                    color: #fff; /* White text */
                }

                form {
                    max-width: 600px;
                    margin: 2em auto;
                    padding: 1em;
                    background-color: #2c3e50; /* Dark gray content background */
                    border-radius: 8px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    position: relative;
                }

                label {
                    display: block;
                    margin-bottom: 0.5em;
                    color: #ffffff; /* White text */
                }

                input {
                    width: 100%;
                    padding: 0.5em;
                    margin-bottom: 1em;
                }

                button {
                    background-color: #3498db;
                    color: white;
                    padding: 0.5em 1em;
                    border: none;
                    border-radius: 4px;
                    cursor: pointer;
                    transition: background-color 0.3s ease;
                }

                button:hover {
                    background-color: #2980b9; /* Darker blue on hover */
                }
            </style>
        </head>
        <body>
            <form method='post' action='proses_update.php'>
                <input type='hidden' name='nim' value='$nim'>
                <label for='nama'>Nama:</label>
                <input type='text' name='nama' value='$nama' required>
                <label for='angkatan'>Angkatan:</label>
                <input type='text' name='angkatan' value='$angkatan' required>
                <label for='divisi'>Divisi:</label>
                <input type='text' name='divisi' value='$divisi' required>
                <button type='submit'>Update Data</button>
            </form>
        </body>
        </html>
    ";
}
?>
