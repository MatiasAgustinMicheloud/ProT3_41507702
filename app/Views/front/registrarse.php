<section id="registro">
    <h2>Crear Cuenta</h2>
    
    <form>
      <input type="text" placeholder="Nombre completo" required/>
      
      <input type="email" placeholder="Correo electrónico" required/>
      
      <input type="password" placeholder="Contraseña" required/>
      
      <input type="password" placeholder="Confirmar contraseña" required/>

      <button type="submit">
        Registrarme
      </button>
    </form>

    <div class="ya_tiene_cuenta">
      ¿Ya tenés cuenta?
      <a href="<?php echo base_url("login")?>">Iniciá sesión</a>
    </div>
</section>
