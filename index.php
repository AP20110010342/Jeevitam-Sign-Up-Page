<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Delivery App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #343a40;
        }

        .navbar-brand,
        .navbar-nav .nav-link {
            color: #ffffff;
        }

        .navbar-brand:hover,
        .navbar-nav .nav-link:hover {
            color: #dc3545;
        }

        .hero-section {
            text-align: center;
            padding: 100px 0;
        }

        .hero-section h1 {
            font-size: 3em;
            color: #343a40;
        }

        .hero-section p {
            font-size: 1.2em;
            color: #6c757d;
            margin-bottom: 30px;
        }

        .btn-hero {
            font-size: 1.2em;
            padding: 10px 20px;
        }
    </style>
</head>

<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Food Delivery App</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="user_registration.php">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user_login.php">Sign In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section">
        <h1>Welcome to Our Food Delivery App</h1>
        <p>Discover the best restaurants and enjoy delicious food delivered to your doorstep.</p>
        <a href="user_registration.php" class="btn btn-danger btn-hero">Sign Up</a>
        <a href="user_login.php" class="btn btn-success btn-hero">Sign In</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-bVY5ayJcGpVzQTE5a2Ou1bI8DucZHP5Y2C5Kb7mPtkQp4fL+P6G5g9TG22YY9u6M" crossorigin="anonymous"></script>
</body>

</html>
