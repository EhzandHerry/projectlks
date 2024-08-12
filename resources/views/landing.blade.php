<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .logo {
            width: 65px;
            height: auto;
            margin-left: 40px;
        }

        .header {
            font-size: 4.5rem;
            font-weight: bold;
            margin: 20px 0;
            z-index: 2;
        }

        .subheader {
            font-size: 1.0rem;
            z-index: 2;
        }

        .nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: 120px;
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

        .whatsapp-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #25D366;
            color: white;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            font-size: 24px;
            text-decoration: none;
            z-index: 1000;
        }

        .whatsapp-button:hover {
            background-color: #128C7E;
        }
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
        <div class="overlay"></div>
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
    <!-- Tombol WhatsApp -->
    <a href="https://api.whatsapp.com/send?phone=6281391150282&text=Halo%2C%20ada%20yang%20ingin%20saya%20tanyakan%20terkait%20websitenya!" 
       class="whatsapp-button" 
       target="_blank" 
       aria-label="Chat with us on WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>
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
