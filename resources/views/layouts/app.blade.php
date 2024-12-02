<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">



    <style>
        /* Custom Styling for Navbar */
        .navbar {
            background-color: #4c275e /* Green background */
        }
        .navbar-brand {
            font-weight: bold;
            color: #fff !important;
        }
        .navbar-nav {
            margin: 0 auto; /* Center alignment */
        }
        .navbar-nav .nav-link {
            color: #fff !important;
            margin: 0 10px;
            transition: color 0.3s ease;
        }
        .navbar-nav .nav-link:hover {
            color: #FFD700; /* Gold on hover */
        }
        .navbar-toggler {
            border-color: #fff;
        }

        /* Custom Toggler Icon Color */
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='%23ffffff' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }

        /* Remove or Change the Focus Ring */
        .navbar-toggler:focus {
            outline: none; /* Remove the default outline */
            box-shadow: none; /* Remove the default focus ring */
        }

        /* Custom Focus Ring (Optional) */
        .navbar-toggler:focus {
            box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.7); /* Change to gold ring on focus */
        }

        body {
            font-family: 'Arial', sans-serif;
        }

        .btn-custom-purple {
    background-color: #673071;
    color: white;
    }


    .btn-custom-blue {
    background-color: #3fbfc9;
    color: white;
    }

   


 
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ route('dashboard') }}"><h2 class="fw-bold">LIBRARY</h2></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span> <!-- Fixed Bootstrap toggle icon -->
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">ANALYTICS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('users.index') }}">USERS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('books.index') }}">BOOKS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logs.index') }}">LOGS</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
