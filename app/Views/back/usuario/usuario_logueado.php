<section class="container mt-5">
    <?php if (session()->get('logged_in')): ?>
        <div class="alert alert-success">
            <h2>Bienvenido, <?= esc(session()->get('nombre')) ?> <?= esc(session()->get('apellido')) ?></h2>
            <p>Tu usuario es: <strong><?= esc(session()->get('usuario')) ?></strong></p>
            <p>Tu perfil es: <strong><?= esc(session()->get('id_perfil')) ?></strong></p>
            
        </div>
    <?php else: ?>
        <div class="alert alert-warning">
            <p>No estás logueado. <a href="<?= base_url('/login') ?>">Iniciá sesión</a></p>
        </div>
    <?php endif; ?>
</section>