<!--login form-->
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          Iniciar Sesión
        </div>
        <div class="card-body">
          <!--mensaje de error-->
          <?php if(session()->getFlashdata('msg')):?>
          <div class="alert alert-warning">
            <?= session()->getFlashdata('msg');?>
          <?php endif;?>
          </div>
          <form method="post" action="<?php echo base_url('/enviarlogin')?>">
            <!-- Usuario -->
            <div class="form-group">
              <label for="usuario">Usuario</label>
              <input type="text" class="form-control" id="usuario" name="email" required>
            </div>
            <!-- Contraseña -->
            <div class="form-group">
              <label for="contrasena">Contraseña</label>
              <input type="password" class="form-control" id="contrasena" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
            <button type="reset" class="btn btn-primary btn-block">Cancelar</button>
            <!-- Olvidaste la contraseña -->
            <div class="mt-3 text-center">
              <a href="#">¿Olvidaste tu contraseña?</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!--end login form-->
