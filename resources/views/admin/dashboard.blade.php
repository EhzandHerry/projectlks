<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Admin Dashboard</h1>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Daftar Operator -->
        <h2>Operator Accounts</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($operators as $operator)
                    <tr>
                        <td>{{ $operator->name }}</td>
                        <td>{{ $operator->email }}</td>
                        <td>
                            <a href="{{ route('admin.edit', $operator) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('admin.delete', $operator) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Daftar LKS -->
        <h2>LKS Accounts</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($lksUsers as $lksUser)
                    <tr>
                        <td>{{ $lksUser->name }}</td>
                        <td>{{ $lksUser->email }}</td>
                        <td>
                            <a href="{{ route('admin.edit', $lksUser) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('admin.delete', $lksUser) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('admin.register') }}" class="btn btn-primary">Register New User</a>

            <!-- Form untuk tombol back -->
        <form method="POST" action="{{ route('logout') }}" style="display: inline;">
            @csrf
            <button type="submit" class="btn btn-secondary">Back to Landing Page</button>
        </form>
    </div>
</body>
</html>
