<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Red de Investigación Administración</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="../css/panel.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  </head>
  <body class="panel-body">
    <nav class="navbar navbar-expand-lg panel-navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Red de Investigación</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Catalogos
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="institucion.php">Instituciones</a></li>
                    <li><a class="dropdown-item" href="tratamiento.php">Tratamientos</a></li>
                    <li><a class="dropdown-item" href="investigador.php">Investigadores</a></li>
                </ul>
                </li>

                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Administración
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="usuario.php">Usuarios</a></li>
                    <li><a class="dropdown-item" href="rol.php">Roles</a></li>
                    <li><a class="dropdown-item" href="privilegio.php">Privilegios</a></li>
                </ul>
                </li>

                <li class="nav-item">
                <a class="nav-link" href ="login.php?action=logout">Salir</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <main class="panel-main-content">
        <div class="content-card">