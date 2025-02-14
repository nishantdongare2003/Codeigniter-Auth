<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Dashboard</title>
    
    <!-- Bootstrap 4 CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <style>
        body {
            display: flex;
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background: #343a40;
            color: white;
            padding-top: 20px;
            position: fixed;
            text-align: center;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.2);
        }
        .sidebar h5 {
            font-weight: bold;
            margin-bottom: 20px;
        }
        .sidebar a {
            color: white;
            padding: 15px;
            display: block;
            text-decoration: none;
            font-size: 18px;
            border-bottom: 1px solid #495057;
        }
        .content {
            margin-left: 270px;
            padding: 40px;
            width: 100%;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .logout-btn {
            margin-top: 30px;
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 12px;
            width: 80%;
            border-radius: 5px;
            font-size: 18px;
            transition: 0.3s;
        }
        .logout-btn:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h5>Dashboard</h5>
        <a href="#">🏠 Home</a>
        <a href="#">👤 Profile</a>
        <a href="#">⚙️ Settings</a>
        <div class="d-flex justify-content-center mt-4">
            <a href="<?php echo base_url(); ?>User/logout" class="btn btn-danger btn-lg w-75">🔒 Logout</a>
        </div>

    </div>

    <!-- Main Content -->
    <div class="content">
        <h2 class="mb-4">Welcome to the Dashboard</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card p-3 text-center bg-light">
                    <h5>Total Users</h5>
                    <p class="display-4 font-weight-bold">1,245</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 text-center bg-light">
                    <h5>Active Sessions</h5>
                    <p class="display-4 font-weight-bold">532</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 text-center bg-light">
                    <h5>New Messages</h5>
                    <p class="display-4 font-weight-bold">89</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
