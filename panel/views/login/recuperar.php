<?php
include_once("./views/login/header.php");
?>

<div class="login-container">
    <div class="login-card">
        <div class="login-card-body">
            <div class="logo-wrapper">
                <a href="../index.php">
                    <img src="../images/inicio/logo.png" alt="Logo" class="login-logo-circle">
                </a>
            </div>
            <h2>Recuperar Contraseña</h2>
            <form action="login.php?action=cambio" method="POST">
                <div class="input-group mb-4">
                    <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                    <input name="correo" type="email" class="form-control" id="correo" placeholder="Correo Electrónico" required>
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-primary" id="enviar" name="enviar" value="Enviar enlace de recuperación">
                </div>
                <div class="login-links">
                    <a href="login.php">Volver a Iniciar Sesión</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include_once("./views/login/footer.php");
?>
