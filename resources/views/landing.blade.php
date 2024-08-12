<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <link rel="stylesheet" href="{{ asset('css/landingpage/landingpage.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="nav transparent">
        <img src="/images/logo.png" alt="Logo" class="logo">
        <div class="menu">
            <a href="{{ url('/') }}">HOME</a>
            <a href="{{ route('login') }}">LOGIN</a>
        </div>
    </div>
    <div class="container">
        <div class="overlay"></div>
        <div class="text-box">
            <h1 class="header">Selamat Datang</h1>
            <p class="subheader">Situs Resmi Lembaga Kesejahteraan Sosial Kota Yogyakarta</p>
        </div>
    </div>

    <!-- Wrapper untuk bagian bawah -->
    <div class="content-wrapper">

        <!-------- Tentang Kami -------->

        <section class="news">
            <h1>Tentang Kami</h1>
            <p>Lembaga Kesejahteraan Sosial (LKS) Kota Yogyakarta berdedikasi untuk meningkatkan kesejahteraan
                masyarakat
                melalui berbagai program sosial yang inovatif dan berkelanjutan.</p>

            <div class="row">
                <div class="course-col">
                    <h3>Visi Kami</h3>
                    <p>Menjadi lembaga terdepan dalam mempromosikan kesejahteraan sosial di Kota Yogyakarta, dengan
                        pendekatan yang holistik dan berfokus pada pemberdayaan masyarakat.</p>
                </div>

                <div class="course-col">
                    <h3>Misi Kami</h3>
                    <p>Melaksanakan program-program sosial yang bertujuan untuk meningkatkan kualitas hidup masyarakat,
                        memberikan dukungan bagi kelompok rentan, dan mendorong partisipasi aktif seluruh lapisan
                        masyarakat.</p>
                </div>

                <div class="course-col">
                    <h3>Nilai-Nilai Kami</h3>
                    <p>Komitmen, Inovasi, Keberlanjutan, Transparansi, dan Kerja Sama. Kami percaya bahwa dengan
                        nilai-nilai
                        ini, kami dapat mencapai tujuan kami untuk masyarakat yang lebih sejahtera.</p>
                </div>
            </div>
        </section>

        <!-------- Gallery Kami -------->

        <section class="gallery">
            <h1>Gallery</h1>
            <p>Lembaga Kesejahteraan Sosial (LKS) Kota Yogyakarta berdedikasi untuk meningkatkan kesejahteraan
                masyarakat
                melalui berbagai program sosial yang inovatif dan berkelanjutan.</p>

            <div class="row-2">
                <div class="gallery-col">
                    <img src="../images/gallery-1.jpg" alt="" />
                    <div class="layer">
                        <h3>Kunjungan Diskominfo</h3>
                    </div>
                </div>
                <div class="gallery-col">
                    <img src="../images/gallery-2.jpg" alt="" />
                    <div class="layer">
                        <h3>Rapat Umum</h3>
                    </div>
                </div>
                <div class="gallery-col">
                    <img src="../images/gallery-3.png" alt="" />
                    <div class="layer">
                        <h3>Peghibahan Aplikasi</h3>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-------- Footer -------->

    <footer>
        <div class="footer-content">
            <p>&copy; 2024 Lembaga Kesejahteraan Sosial Kota Yogyakarta. Semua Hak Dilindungi.</p>
            <div class="social-media">
                <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>

    <!-- Tombol WhatsApp -->
    <a href="https://api.whatsapp.com/send?phone=6281391150282&text=Halo%2C%20ada%20yang%20ingin%20saya%20tanyakan%20terkait%20websitenya!"
        class="whatsapp-button" target="_blank" aria-label="Chat with us on WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>
    <script src="{{ asset('js/landingpage/landingpage.js') }}"></script>
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
