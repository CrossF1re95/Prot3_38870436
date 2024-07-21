<!--register form-->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Formulario de Registro</h4>
                </div>
                <div class="card-body">
                    <?php $validation = \Config\Services::validation(); ?>
                    <form method="post" action="<?php echo base_url('/enviar-form')?>" id="registroForm">
                        <?= csrf_field(); ?>
                        <?php if (!empty(session()->getFlashdata('fail'))): ?>
                            <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                        <?php endif ?>
                        <?php if (!empty(session()->getFlashdata('success'))): ?>
                            <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                        <?php endif ?>
                        <!-- Nombre -->
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                            <!--error-->
                            <?php if ($validation->getError('nombre')): ?>
                                <div class="alert alert-danger mt-2"><?= $validation->getError('nombre'); ?></div>
                            <?php endif ?>
                        </div>
                        <!-- Apellido -->
                        <div class="form-group">
                           <label for="apellido">Apellido</label>
                           <input type="text" class="form-control" id="apellido" name="apellido" required>
                           <!--error-->
                           <?php if ($validation->getError('apellido')): ?>
                                <div class="alert alert-danger mt-2"><?= $validation->getError('apellido'); ?></div>
                           <?php endif ?>
                       </div>
                        <!-- Usuario -->
                        <div class="form-group">
                            <label for="usuario">Usuario</label>
                            <input type="text" class="form-control" id="usuario" name="usuario" required>
                            <!--error-->
                            <?php if ($validation->getError('usuario')): ?>
                                <div class="alert alert-danger mt-2"><?= $validation->getError('usuario'); ?></div>
                            <?php endif ?>
                        </div>
                        <!-- Email -->
                        <div class="form-group">
                            <label for="email">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                            <!--error-->
                            <?php if ($validation->getError('email')): ?>
                                <div class="alert alert-danger mt-2"><?= $validation->getError('email'); ?></div>
                            <?php endif ?>
                        </div>
                        <!-- Contraseña -->
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                            <!--error-->
                            <?php if ($validation->getError('password')): ?>
                                <div class="alert alert-danger mt-2"><?= $validation->getError('password'); ?></div>
                            <?php endif ?>
                        </div>
                        <!-- Confirmar Contraseña -->
                        <div class="form-group">
                            <label for="confirm_password">Confirmar Contraseña</label>
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                            <!--error-->
                            <?php if ($validation->getError('confirm_password')): ?>
                                <div class="alert alert-danger mt-2"><?= $validation->getError('confirm_password'); ?></div>
                            <?php endif ?>
                        </div>
                        <!-- Botón de Registro -->
                        <button type="submit" class="btn btn-primary btn-block btn-success">Registrarse</button>
                        <button type="reset" class="btn btn-primary btn-block btn-danger">Cancelar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end register form-->
