<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('/images/banner.jpg') no-repeat center center fixed;
            background-size: cover;
            color: white;
        }

        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            position: relative;
            /* Tambahkan posisi relatif untuk efek overlay */
        }

        .overlay {
            position: absolute;
            /* Overlay di posisi absolut */
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            /* Warna overlay hitam dengan transparansi */
            z-index: 1;
            /* Pastikan overlay di atas background */
        }

        .logo {
            width: 65px;
            height: auto;
            margin-left: 40px;
        }

        .header {
            font-size: 4.5rem;
            font-weight: bold;
            /* Diperbesar */
            margin: 20px 0;
            z-index: 2;
            /* Pastikan teks di atas overlay */
        }

        .subheader {
            font-size: 1.0rem;
            /* Diperbesar */
            z-index: 2;
            /* Pastikan teks di atas overlay */
        }

        .nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: 120px;
            /* Atur tinggi navigasi sesuai kebutuhan */
            display: flex;
            align-items: center;
            padding: 10px 20px;
            z-index: 1000;
            transition: background-color 0.3s ease;
        }

        .nav.transparent {
            background-color: transparent;
        }

        .nav.scrolled {
            background-color: rgba(0, 0, 0, 0.7);
        }

        .nav a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
            font-size: 1rem;
        }

        .nav .menu {
            margin-left: auto;
            margin-right: 20px
        }

        .about-section {
            background: white;
            color: black;
            padding: 50px 20px;
            text-align: center;
        }

        .about-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .about-title {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .about-cards {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .about-card {
            background: #ffecec;
            border-radius: 10px;
            padding: 20px;
            margin: 10px;
            flex: 1;
            min-width: 250px;
            max-width: 300px;
        }

        .about-card h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .about-card p {
            font-size: 1rem;
        }
    </style>
</head>
</style>
</head>

<body>
    <div class="nav transparent">
        <img src="/images/logo.png" alt="Logo" class="logo">
        <div class="menu">
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ route('login') }}">Login</a>
        </div>
    </div>
    <div class="container">
        <div class="overlay"></div> <!-- Overlay ditambahkan di sini -->
        <div class="header">Selamat Datang</div>
        <div class="subheader">Situs Resmi Lembaga Kesejahteraan Sosial Kota Yogyakarta</div>
    </div>
    <div class="about-section">
        <div class="about-container">
            <div class="about-title">Tentang Kami</div>
            <div class="about-cards">
                <div class="about-card">
                    <h3>Visi Kami</h3>
                    <p>(Isi Visi)</p>
                </div>
                <div class="about-card">
                    <h3>Misi Kami</h3>
                    <p>(Isi Misi)</p>
                </div>
                <div class="about-card">
                    <h3>Nilai-Nilai Kami</h3>
                    <p>(Isi Nilai-nilai)</p>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        document.addEventListener("scroll", function() {
            const nav = document.querySelector(".nav");
            if (window.scrollY > 50) {
                nav.classList.add("scrolled");
                nav.classList.remove("transparent");
            } else {
                nav.classList.add("transparent");
                nav.classList.remove("scrolled");
            }
        });
    </script>
</body>

</html>
