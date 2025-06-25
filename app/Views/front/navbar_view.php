<!-- navegacion -->
<?php
    $session = session();
    $nombre = $session->get('nombre');
    $perfil = $session->get('id_perfil');
?>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>


    <!-- Comprobar el tipo de sesion del usuario -->
    <!-- para usuario ADMIN -->
    <?php if($perfil == 1): ?>
        <div class="">
            <p> ADMIN: <?php echo session('usuario');?> </p>
        </div>

        <a href="#" class="navbar-brand"></a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link nav_a" href="<?php echo base_url("principal")?>">Inicio</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav_a" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Equipos
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item dropdown_a" href="<?php echo base_url("equipo_mclaren")?>">McLaren</a></li>
                        <li><a class="dropdown-item dropdown_a" href="<?php echo base_url("equipo_ferrari")?>">Ferrari</a></li>
                        <li><a class="dropdown-item dropdown_a" href="<?php echo base_url("equipo_redbull")?>">Red Bull</a></li>
                    </ul>
                </li>

                <a href="<?= base_url('/logout') ?>" class="nav-link nav_a">Cerrar sesión</a>

            </ul>

            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                <button class="btn btn-outline-danger" type="submit">Search</button>
            </form>

        </div>


    <!-- para usuario CLIENTE -->
    <?php elseif($perfil == 2): ?>
        <div class="">
            <p> Cliente: <?php echo session('usuario');?> </p>
        </div>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link nav_a" href="<?php echo base_url("principal")?>">Inicio</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link nav_a" href="<?php echo base_url("acerca_de")?>">Acerca de</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav_a" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Equipos
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item dropdown_a" href="<?php echo base_url("equipo_mclaren")?>">McLaren</a></li>
                        <li><a class="dropdown-item dropdown_a" href="<?php echo base_url("equipo_ferrari")?>">Ferrari</a></li>
                        <li><a class="dropdown-item dropdown_a" href="<?php echo base_url("equipo_redbull")?>">Red Bull</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('/logout') ?>" class="nav-link nav_a">Cerrar sesión</a>
                </li>
            </ul>

            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                <button class="btn btn-outline-danger" type="submit">Search</button>
            </form>
        </div>

    <?php else: ?>
        <!-- para usuario SIN LOGUEAR -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link nav_a" href="<?php echo base_url("principal")?>">Inicio</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link nav_a" href="<?php echo base_url("acerca_de")?>">Acerca de</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav_a" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Equipos
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item dropdown_a" href="<?php echo base_url("equipo_mclaren")?>">McLaren</a></li>
                        <li><a class="dropdown-item dropdown_a" href="<?php echo base_url("equipo_ferrari")?>">Ferrari</a></li>
                        <li><a class="dropdown-item dropdown_a" href="<?php echo base_url("equipo_redbull")?>">Red Bull</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link nav_a" href="<?php echo base_url("login")?>">Login</a>
                </li>
            </ul>

            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                <button class="btn btn-outline-danger" type="submit">Search</button>
            </form>
        </div>

    <?php endif;?>
  </div>
</nav>