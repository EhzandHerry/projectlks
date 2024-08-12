<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LKS Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .whatsapp-button {
            background-color: #25D366;
            color: white;
            border: none;
            border-radius: 50%;
            padding: 10px;
            font-size: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .whatsapp-button:hover {
            background-color: #128C7E;
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>Welcome, LKS</h1>
        <form method="POST" action="{{ route('logout') }}" style="display: inline;">
            @csrf
            <button type="submit" class="btn btn-secondary">Back to Landing Page</button>
        </form>
        <a href="https://api.whatsapp.com/send?phone=6281391150282&text=Halo%2C%20ada%20yang%20ingin%20saya%20tanyakan%20terkait%20websitenya!" class="whatsapp-button" target="_blank" aria-label="Chat with us on WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>
</html>
