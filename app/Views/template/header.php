<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Font Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600&display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" href="http://localhost/CodeIgniter/public/favicon.svg">
    <title>Sistema de Pacientes</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            color: #3c3c3c;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            background-color: #029aca;
        }

        .nav-link {
            color: #029aca;
        }

        .nav-pills .nav-pills .show>.nav-link:hover {
            background-color: #017397;
        }

        .nav-link:hover {
            color: #017397;
        }

        .btn-primary {
            background-color: #029aca;
            border-color: #029aca;
        }

        .btn-primary:hover {
            background-color: #017397;
            border-color: #017397;
        }

        .btn-warning {
            color: #ffffff;
        }

        .btn-warning:hover {
            color: #ffffff;
        }

        .sistema_name {
            color: #029aca;
            font-weight: 600;
            font-size: 2rem
        }
    </style>
</head>

<body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="<?= base_url('/') ?>" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <img src="http://localhost/CodeIgniter/public/logo-healthtech.svg" alt="Logo HealthTech" width="300">
            </a>

            <ul class="nav nav-pills my-auto">
                <li class="nav-item"><a href="<?= base_url('/') ?>" class="nav-link">Inicio</a></li>
                <li class="nav-item"><a href="<?= base_url('crear') ?>" class="nav-link active" aria-current="page">Añadir a un nuevo paciente</a></li>
            </ul>
        </header>
        <h1 class="sistema_name mb-5">Sistema de Pacientes</h1>
    </div>


    <div class="container">