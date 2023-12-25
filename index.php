<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPORTI UDAYANA</title>
    <link rel="stylesheet" href="https://www.fontspace.com/valorax-font-f89146">
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
            font-family: 'Valorax-lg25V', sans-serif; /* Ganti 'Roboto' dengan font yang diinginkan */
            font-size: 2em;
        }

        .header-text h1 {
            margin: 0;
            padding: 0.2em;
            color: #ffffff; /* Purple text */
        }

        nav {
            text-align: center;
            background-color: #8e44ad; /* Darker purple navigation bar */
            padding: 0.5em;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 1em;
            font-weight: bold;
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

        .tournament-section {
            text-align: center;
            margin-bottom: 1em;
        }

        .tournament-title {
            font-size: 2em;
            color: #c71212; /* Red text */
            margin-bottom: 0.5em;
        }

        .sports {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-top: 1em;
        }

        .sport-card {
            flex-basis: calc(33.3333% - 1em);
            box-sizing: border-box;
            margin-bottom: 1em;
            border: 1px solid #3498db;
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
        }

        .sport-card:hover {
            transform: scale(1.05);
        }

        .sport-card img {
            width: 100%;
            height: auto;
            border-bottom: 1px solid #3498db;
        }

        .sport-card h3 {
            margin: 0.5em;
            padding: 0.5em;
            background-color: #7804a6;
            color: white;
            text-align: center;
        }

        .esports {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-top: 1em;
            margin-bottom: 1em;
        }

        .esport-card {
            flex-basis: calc(33.3333% - 1em);
            box-sizing: border-box;
            margin-bottom: 1em;
            border: 1px solid #3498db;
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
        }

        .esport-card:hover {
            transform: scale(1.05);
        }

        .esport-card img {
            width: 100%;
            height: auto;
            border-bottom: 1px solid #3498db;
        }

        .esport-card h3 {
            margin: 0.5em;
            padding: 0.5em;
            background-color: #7804a6;
            color: white;
            text-align: center;
        }

        .registration-form {
            margin-top: 2em;
            padding: 1em;
            background-color: #2c3e50;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex; /* Menambahkan properti flex untuk mengontrol lebar kolom */
            flex-direction: column; /* Menata elemen dalam satu kolom */
            align-items: stretch; /* Memastikan elemen meregang sesuai lebar container */
        }

        .registration-form label {
            display: block;
            margin-bottom: 0.5em;
        }

        .registration-form input,
        .registration-form select {
            width: 100%;
            padding: 0.5em;
            box-sizing: border-box;
            margin-bottom: 1em;
            border: 1px solid #3498db;
            border-radius: 4px;
        }

        .registration-form button {
            background-color: #3498db;
            color: white;
            padding: 0.5em 1em;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .animated-character {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 150px;
            animation: floatCharacter 4s ease-in-out infinite;
        }

        @keyframes floatCharacter {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
        }
    </style>
</head>

<style>
    @font-face {
        font-family: 'Valorax-lg25V';
        src: url('Valorax-lg25V.otf') format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    .custom-font {
        font-family: 'Valorax-lg25V', sans-serif; /* Ganti 'VanemNonCommercial' dengan font yang diinginkan */
        font-size: 1em;
        color: #9b59b6; /* Purple text */
        margin: 0;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }
</style>

<body>

    <header>
        <img src="logo.png" alt="Custom Logo">
        <div class="header-text custom-font">
            <h1>SPORTI UDAYANA</h1>
        </div>
    </header>
    <section>
        <!-- Tournament Section -->
        <div class="tournament-section">
            <div class="tournament-title">TOURNAMENT</div>
        </div>
        <div class="sports">
            <div class="sport-card">
                <img src="futsal.jpg" alt="Futsal">
                <h3>FUTSAL</h3>
            </div>
            <div class="sport-card">
                <img src="basket.jpg" alt="Basket">
                <h3>BASKET</h3>
            </div>
            <div class="sport-card">
                <img src="bola.jpg" alt="Sepakbola">
                <h3>SEPAK BOLA</h3>
            </div>
        </div>

        <div class="esports">
            <div class="esport-card">
                <img src="ML.jpeg" alt="Mobile Legends">
                <h3>MOBILE LEGENDS</h3>
            </div>
            <div class="esport-card">
                <img src="pubg.webp" alt="PUBG">
                <h3>PUBG</h3>
            </div>
            <!-- New Esport Card -->
            <div class="esport-card">
                <img src="valorant.webp" alt="Valorant">
                <h3>VALORANT</h3>
            </div>
        </div>

        <!-- Registration Form -->
        <div id="registration-form" class="registration-form">
            <h2>Registrasi</h2>
            <form action="index2.php" method="post">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
                <label for="nim">NIM:</label>
                <input type="text" id="nim" name="nim" required>
                <label for="angkatan">Angkatan:</label>
                <select id="angkatan" name="angkatan" required style="width: 100%;">
                    <option value="2023">2023</option>
                    <option value="2022">2022</option>
                    <option value="2021">2021</option>
                </select>
        
                <label for="divisi">Divisi:</label>
                <select id="divisi" name="divisi" required style="width: 100%;">
                    <option value="futsal">Futsal</option>
                    <option value="basket">Basket</option>
                    <option value="sepakbola">Sepak Bola</option>
                    <option value="mobilelegends">Mobile Legends</option>
                    <option value="pubg">PUBG</option>
                    <option value="valorant">Valorant</option>
                </select>
        
                <button type="submit">Daftar</button>
            </form>
        </div>

    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            function scrollToRegistrationForm() {
                document.getElementById('registration-form').scrollIntoView({
                    behavior: 'smooth'
                });
            }

            var sportsCards = document.querySelectorAll('.sport-card');
            var esportCards = document.querySelectorAll('.esport-card');

            sportsCards.forEach(function (card) {
                card.addEventListener('click', scrollToRegistrationForm);
            });

            esportCards.forEach(function (card) {
                card.addEventListener('click', scrollToRegistrationForm);
            });
        });
    </script>

</body>

</html>