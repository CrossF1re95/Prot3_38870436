<!--Navigation bar-->
<?php
  $session = session();
  $nombre = $session->get('user_name');
  $perfil = $session->get('profile_id');
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo base_url('principal'); ?>">JDM-Cars</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url('principal'); ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('aboutUs'); ?>">Sobre nosotros</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Usuario y Catálogo
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo base_url('register'); ?>">Registrarse</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('login'); ?>">Ingresar</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="<?php echo base_url('catalog'); ?>">Catálogo</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" role="button" href="<?php echo base_url('acercaDe'); ?>">Acerca de</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      
      <?php if ($perfil == 1): ?>
        <!-- Navbar para Admin -->
        <div class="btn btn-secondary active btnUser btn-sm">
          <a href="#">ADMIN: <?php echo session('user_name'); ?></a>
        </div>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="admin_dashboard">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin_settings">Settings</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout">Logout</a>
          </li>
        </ul>
      <?php elseif ($perfil == 2): ?>
        <!-- Navbar para Cliente -->
        <div class="btn btn-secondary active btnUser btn-sm">
          <a href="#">CLIENTE: <?php echo session('user_name'); ?></a>
        </div>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="client_dashboard">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="client_profile">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout">Logout</a>
          </li>
        </ul>
      <?php else: ?>
        <!-- Navbar para Usuario no logeado -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('login'); ?>">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('register'); ?>">Register</a>
          </li>
        </ul>
      <?php endif; ?>
    </div>
  </div>
</nav>
<!--end navigation bar-->