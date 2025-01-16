<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body { margin: 0; }
        .sidebar { width: 250px; height: 100vh; position: fixed; background-color: #343a40; }
        .sidebar a { color: white; padding: 10px; display: block; text-decoration: none; }
        .sidebar a:hover { background-color: #007bff; }
        .content { margin-left: 250px; padding: 20px; }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2 class="text-white text-center p-3">Admin Panel</h2>
        <a href="#" class="active"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="#"><i class="fas fa-users"></i> Manage Employees</a>
        <a href="#"><i class="fas fa-cogs"></i> Settings</a>
        <a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>
    
    <div class="content">
        <nav class="navbar navbar-light bg-light justify-content-between">
            <a class="navbar-brand">Dashboard</a>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav>

        <div class="card mt-4">
            <div class="card-header">
                Manage Employees
                <button class="btn btn-success float-end">Add New Employees</button>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Thomas Hardy</td>
                            <td>thomas@example.com</td>
                            <td>90 Parkground Poland USA</td>
                            <td>(78-65232-0)</td>
                            <td>
                                <button class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <!-- Tambahkan data lainnya sesuai kebutuhan -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
