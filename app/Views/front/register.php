<!--register form-->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Formulario de Registro</h4>
                </div>
                <div class="card-body">
                    <form id="registroForm">
                        <!-- Nombre -->
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <!-- Apellido-->
                        <div class="form-group">
                           <label for="apellido">Apellido</label>
                           <input type="text" class="form-control" id="apellido" name="apellido" required>
                       </div>
                        <!-- Usuario -->
                        <div class="form-group">
                            <label for="usuario">Usuario</label>
                            <input type="text" class="form-control" id="usuario" name="usuario" required>
                        </div>
                        <!-- Email -->
                        <div class="form-group">
                            <label for="email">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <!-- Contraseña -->
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <!-- Confirmar Contraseña -->
                        <div class="form-group">
                            <label for="confirm_password">Confirmar Contraseña</label>
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                        </div>
                        <!-- Botón de Registro -->
                        <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
                        <button type="reset" class="btn btn-primary btn-block">Cancelar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end register form-->
