<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHP CRUD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark text-light">

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow border-bottom border-secondary">
    <div class="container">

        <a class="navbar-brand fw-bold d-flex align-items-center" href="index.php">
            <span class="bg-success rounded-circle me-2"
                style="width:10px; height:10px;"></span>
            DataVault
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">

                <li class="nav-item">
                    <a class="nav-link" href="index.php">
                        Records
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="register.php">
                        Add User
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Export
                    </a>
                </li>

            </ul>

            <div class="d-flex gap-5 align-items-center">

                <button onclick="window.location.href='http://localhost:8080/phpmyadmin/index.php?route=/sql&pos=0&db=php_crud&table=register'" class="btn btn-outline-light btn-sm px-3">
                    Admin Panel
                </button>

            </div>
        </div>

    </div>
</nav>