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
            <h2>Iniciar Sesión</h2>
            <form action="login.php?action=login" method="POST">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                    <input name="correo" type="email" class="form-control" id="correo" placeholder="Correo Electrónico" required>
                </div>
                <div class="input-group mb-4">
                    <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                    <input name="contrasena" type="password" class="form-control" id="contrasena" placeholder="Contraseña" required>
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-primary" id="enviar" name="enviar" value="Entrar">
                </div>
                <div class="login-links">
                    <a href="login.php?action=recuperar">¿Olvidaste tu contraseña?</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include_once("./views/login/footer.php");
?>
