<section id="registro">
    <h2>Crear Cuenta</h2>
    
    <form method="post" action="<?php echo base_url('/enviar-form')?>">

        <!-- mensaje de registro con exito o error -->
        <?php if(!empty (session()->getFlashData('fail'))):?>
            <div class="alert alert-danger"><?=session()->getFlashData('fail');?></div>
        <?php endif?>

        <?php if(!empty (session()->getFlashData('success'))):?>
            <div class="alert alert-danger"><?=session()->getFlashData('success');?></div>
        <?php endif?>


        <!-- Campos del formulario -->

        <input name="nombre" value="<?= set_value('nombre') ?>" type="text" placeholder="Nombre"/>
        <!-- Error -->
        <?php if(isset($validation) && $validation->getError('nombre')) {?>
            <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('nombre'); ?>
            </div>
        <?php } ?>

        <input name="apellido" value="<?= set_value('apellido') ?>" type="text" placeholder="Apellido"/>
        <!-- Error -->
        <?php if(isset($validation) && $validation->getError('apellido')) {?>
            <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('apellido'); ?>
            </div>
        <?php } ?>
        
        <input name="email" value="<?= set_value('email') ?>" type="email" placeholder="Correo electrónico"/>
        <!-- Error -->
        <?php if(isset($validation) && $validation->getError('email')) {?>
            <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('email'); ?>
            </div>
        <?php } ?>

        <input name="usuario" value="<?= set_value('usuario') ?>" type="text" placeholder="Usuario"/>
        <!-- Error -->
        <?php if(isset($validation) && $validation->getError('usuario')) {?>
            <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('usuario'); ?>
            </div>
        <?php } ?>
        
        <input name="password" type="password" placeholder="Contraseña (mínimo 5 caracteres)"/>
        <!-- Error -->
        <?php if(isset($validation) && $validation->getError('password')) {?>
            <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('password'); ?>
            </div>
        <?php } ?>
        
        <input name="repetirPassword" type="password" placeholder="Repetir contraseña"/>
        <!-- Error -->
        <?php if(isset($validation) && $validation->getError('repetirPassword')) {?>
            <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('repetirPassword'); ?>
            </div>
        <?php } ?>

        <button type="submit">
            Registrarme
        </button>
    </form>

    <div class="ya_tiene_cuenta">
        ¿Ya tenés cuenta?
        <a href="<?php echo base_url("login")?>">Iniciá sesión</a>
    </div>

</section>