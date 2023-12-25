<?php
include 'koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $angkatan =$_POST["angkatan"];
    $divisi =$_POST["divisi"];

    $sql = "INSERT INTO tb_peserta_tournament (nim, nama, angkatan ,divisi) VALUES (?, ?, ?,?)";
    

    $stmt = $koneksi->prepare($sql);


    $stmt->bind_param("ssss", $nim, $nama, $angkatan, $divisi);


    if ($stmt->execute()) {
    } else {
        echo "Error: " . $stmt->error;
    }
}
$result = mysqli_query($koneksi, "SELECT * FROM tb_peserta_tournament");

if (!$result) {
    die("Query error: " . mysqli_error($koneksi));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangani kueri pencarian
    $search = isset($_POST["search"]) ? $_POST["search"] : '';
    $sql = "SELECT * FROM tb_peserta_tournament WHERE 
            nim LIKE '%$search%' OR
            nama LIKE '%$search%' OR
            angkatan LIKE '%$search%' OR
            divisi LIKE '%$search%'";
    
    $result = mysqli_query($koneksi, $sql);

    if (!$result) {
        die("Query error: " . mysqli_error($koneksi));
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Peserta Tournament SPORTI</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #1a1a1a; /* Dark background */
            color: #fff; /* White text */
        }

        header {
            background: url('1.jpg') center/cover no-repeat;
            color: #fff;
            text-align: center;
            padding: 2em;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        header img {
            width: 80px;
            height: auto;
            margin-bottom: 0.5em;
        }

        .header-text {
            display: flex;
            align-items: center;
            font-family: 'VanemNonCommercial', sans-serif; /* Ganti 'Roboto' dengan font yang diinginkan */
            font-size: 2em;
        }

        .header-text h1 {
            margin: 0;
            padding: 0.2em;
            color: #ffffff; /* Purple text */
        }

        section {
            max-width: 1200px;
            margin: 2em auto;
            padding: 1em;
            background-color: #2c3e50; /* Dark gray content background */
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1em;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #3498db;
        }

        th {
            background-color: #7804a6;
            color: white;
        }

        tr:hover {
            background-color: #34495e;
        }

        .update-button {
            background-color: #3498db;
            color: white;
            padding: 0.3em 0.7em;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-right: 0.5em; /* Menambahkan margin-right untuk geser ke kanan */
        }

        .delete-button {
            background-color: #3498db;
            color: white;
            padding: 0.3em 0.7em;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-left: 0.5em; /* Menambahkan margin-left untuk geser ke kiri */
        }

        .update-button:hover,
        .delete-button:hover {
            background-color: #2980b9; /* Darker blue on hover */
        }

        @font-face {
            font-family: 'VanemNonCommercial';
            src: url('VanemNonCommercial.otf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        .custom-font {
            font-family: 'VanemNonCommercial', sans-serif; /* Ganti 'VanemNonCommercial' dengan font yang diinginkan */
            font-size: 1em;
            color: #9b59b6; /* Purple text */
            margin: 0;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>

<body>

    <header>
        <img src="logo.png" alt="Custom Logo">
        <div class="header-text">
            <h1>SPORTI UDAYANA</h1>
        </div>
    </header>

    <main>
        <section>
            <form method="post" action="">
                <label for="search"></label>
                <input type="text" id="search" name="search" placeholder="Masukkan kata kunci">
                <button type="submit">Cari</button>
            </form>
            <table>
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Angkatan</th>
                        <th>Divisi</th>
                        <th>Action</th>
                    </tr>
    
                <tbody>
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                        // Iterasi hasil pencarian atau data lengkap
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $row['nama'] . "</td>";
                            echo "<td>" . $row['nim'] . "</td>";
                            echo "<td>" . $row['angkatan'] . "</td>";
                            echo "<td>" . $row['divisi'] . "</td>";
                            echo "<td>
                                    <form method='post' action='update.php'>
                                        <input type='hidden' name='nim' value='" . $row['nim'] . "'>
                                        <input type='hidden' name='nama' value='" . $row['nama'] . "'>
                                        <input type='hidden' name='angkatan' value='" . $row['angkatan'] . "'>
                                        <input type='hidden' name='divisi' value='" . $row['divisi'] . "'>
                                        <button class='update-button' type='submit'>Update</button>
                                    </form>
                                    <form method='post' action='delete.php'>
                                        <input type='hidden' name='nim' value='" . $row['nim'] . "'>
                                        <button class='delete-button' type='submit'>Delete</button>
                                    </form>
                                  </td>";
                            echo "</tr>";
                        }
                    } else {
                        // Tampilkan pesan jika tidak ada data ditemukan
                        echo "<tr><td colspan='5'>Data tidak ditemukan</td></tr>";
                    }
                    ?>
                    </thead>
                </tbody>
            </table>
        </section>
    </main>
</body>

</html>