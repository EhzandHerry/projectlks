<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('/images/banner.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            position: relative;
            /* Tambahkan ini untuk overlay */
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            /* Warna overlay hitam dengan transparansi */
            z-index: 1;
            /* Pastikan overlay di atas background */
        }

        .login-container {
            background: rgba(0, 0, 0, 0.7);
            /* Set background with transparency */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            width: 100%;
            max-width: 400px;
            position: relative;
            /* Pastikan kontainer login di atas overlay */
            z-index: 2;
            /* Pastikan kontainer login di atas overlay */
        }

        .btn-primary {
            background-color: #007bff;
            /* Custom primary color */
            border-color: #007bff;
            /* Match border color */
        }

        .btn-primary:hover {
            background-color: #0056b3;
            /* Darker color on hover */
            border-color: #0056b3;
            /* Match border color */
        }

        h2 {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="overlay"></div> <!-- Tambahkan overlay di sini -->
    <div class="login-container">
        <h2 class="text-center">Login</h2>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('login.post') }}">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required
                    placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required
                    placeholder="Enter your password">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
    </div>
</body>

</html>
