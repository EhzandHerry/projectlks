<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LKS Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/lks/lks.css') }}">
</head>

<body>

    <!-- Header -->
    <header class="header">
        <div class="logo">
            <i class="bi bi-person-circle logo-icon"></i>
            <span class="logo-text">Username</span>
        </div>
        <div class="header-links">
            <div class="logout-section">
                <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                    @csrf
                    <!-- Tambahkan ikon pesan dari Bootstrap di sini -->
                    <button type="submit" class="btn btn-secondary logout-button">LOGOUT</button>
                    <i class="bi bi-envelope-fill message-icon"></i>
                </form>
            </div>
            <div class="menu-section">
                <span class="header-link">HOME</span>
                <span class="header-link">PROFILE</span>
                <span class="header-link">UPLOAD DATA</span>
                <span class="header-link">FAQ</span>
            </div>
        </div>
    </header>

    <!-- Konten Utama -->
    <div class="container text-center mt-5" style="min-height: 70vh;">
        <i class="fas fa-exclamation-circle icon-warning"></i>
        <h2>Belum ada data Profile</h2>
        <p class="d-inline">Mohon isi data terlebih dahulu!</p>
        {{-- <a href="{{ route('profile') }}" class="btn btn-primary ml-2">Tambah Data</a> --}}
        <a class="btn btn-primary ml-2">Tambah Data</a>
    </div>

    <!-- Tombol WhatsApp -->
    <a href="https://api.whatsapp.com/send?phone=6281391150282&text=Halo%2C%20ada%20yang%20ingin%20saya%20tanyakan%20terkait%20websitenya!"
        class="whatsapp-button" target="_blank" aria-label="Chat with us on WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>

</html>
