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
            background: url('/images/gedung2.jpg') no-repeat center center fixed;
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
        }
        .logo {
            width: 100px;
            height: auto;
            margin-right: auto;
        }
        .header {
            font-size: 2.5rem;
            margin: 20px 0;
        }
        .subheader {
            font-size: 1.2rem;
        }
        .nav {
            position: fixed; /* Change this to fixed */
            top: 0;
            left: 0;
            right: 0;
            display: flex;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.7); /* Optional: Add a background color with some transparency */
            padding: 10px 20px; /* Add some padding */
            z-index: 1000; /* Ensure it stays above other elements */
        }
        .nav a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
            font-size: 1rem;
        }
        .nav .menu {
            margin-left: auto;
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
<body>
    <div class="nav">
        <img src="/images/kominfo2.png" alt="Logo" class="logo">
        <div class="menu">
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ route('login') }}">Login</a>
        </div>
    </div>
    <div class="container">
        <div class="header">Selamat Datang</div>
        <div class="subheader">Situs Resmi Lembaga Kesejahteraan Sosial Kota Yogyakarta</div>
    </div>
    <div class="about-section">
        <div class="about-container">
            <div class="about-title">Tentang Kami</div>
            <div class="about-cards">
                <div class="about-card">
                    <h3>Visi Kami</h3>
                    <p>Menjadi lembaga terdepan dalam mempromosikan kesejahteraan sosial di Kota Yogyakarta, dengan pendekatan yang holistik dan berfokus pada pemberdayaan masyarakat.</p>
                </div>
                <div class="about-card">
                    <h3>Misi Kami</h3>
                    <p>Melaksanakan program-program sosial yang bertujuan untuk meningkatkan kualitas hidup masyarakat, memberikan dukungan bagi kelompok rentan, dan mendorong partisipasi aktif seluruh lapisan masyarakat.</p>
                </div>
                <div class="about-card">
                    <h3>Nilai-Nilai Kami</h3>
                    <p>Komitmen, Inovasi, Keberlanjutan, Transparansi, dan Kerja Sama. Kami percaya bahwa dengan nilai-nilai ini, kami dapat mencapai tujuan kami untuk masyarakat yang lebih sejahtera.</p>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
