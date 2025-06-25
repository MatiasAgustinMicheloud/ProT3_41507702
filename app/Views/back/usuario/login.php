<!-- Login.html -->
<section id="login">
  <h2>Iniciar Sesión</h2>

  <form method="post" action="<?php echo base_url('/enviarLogin')?>">

    <!-- mensaje de registro con exito o error -->
    <?php if(!empty (session()->getFlashData('fail'))):?>
      <div class="alert alert-danger"><?=session()->getFlashData('fail');?></div>
    <?php endif?>

    <?php if(!empty (session()->getFlashData('success'))):?>
      <div class="alert alert-success"><?=session()->getFlashData('success');?></div>
    <?php endif?>


    <!-- Campos del formulario -->

    <input type="email" name="email" value="<?= set_value('email') ?>" placeholder="Correo electrónico"/>
    <!-- Error -->
    <?php if(isset($validation) && $validation->getError('email')) {?>
            <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('email'); ?>
            </div>
        <?php } ?>

    <input type="password" name="password" placeholder="Contraseña"/>
    <!-- Error -->
    <?php if(isset($validation) && $validation->getError('password')) {?>
            <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('password'); ?>
            </div>
        <?php } ?>

    <button type="submit">
      Iniciar sesión
    </button>

  </form>

  <div class="registrarse-aca">
    ¿No tenés cuenta?
    <a href="<?php echo base_url("registro")?>">Registrate acá</a>
  </div>
</section>
