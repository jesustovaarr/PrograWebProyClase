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
            <h2>Restablecer Contraseña</h2>
            <form action="login.php?action=restablecer" method="POST">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                    <input name="contrasena" type="password" class="form-control" id="contrasena" placeholder="Nueva Contraseña" required>
                </div>
                <div class="input-group mb-4">
                    <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                    <input name="contrasena2" type="password" class="form-control" id="contrasena2" placeholder="Confirmar Contraseña" required>
                </div>

                <input type="hidden" name="token" id="token" value="<?php echo $_GET['token']; ?>">
                <input type="hidden" name="correo" id="correo" value="<?php echo $_GET['correo']; ?>">
                
                <div class="mb-3">
                    <input type="submit" class="btn btn-primary" id="enviar" name="enviar" value="Cambiar Contraseña">
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include_once("./views/login/footer.php");
?>
