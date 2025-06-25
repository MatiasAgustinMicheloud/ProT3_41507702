<!-- Login.html -->
<section id="login">
  <h2>Iniciar Sesión</h2>
  <form>
    <input type="email" name="email" placeholder="Correo electrónico" required/>
    <input type="password" name="password" placeholder="Contraseña" required/>
    <button type="submit">
      Iniciar sesión
    </button>
  </form>

  <div class="registrarse-aca">
    ¿No tenés cuenta?
    <a href="<?php echo base_url("registro")?>">Registrate acá</a>
  </div>
</section>
