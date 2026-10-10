<aside class="menu-lateral">
    
    <div class="etiqueta-menu">MENU PRINCIPAL</div>
    
    <div class="contenedor-botones">
        
        <a href="selector-de-juegos.php" class="opcion-menu activo">
         <span>▶ EMPEZAR EL JUEGO</span>
        </a>
        
        <a href="index.php" class="btn" style="text-decoration: none;">
            INICIO <span class="icono">🏠</span>
        </a>
        
        <a href="#" class="btn" style="text-decoration: none;">
            COMO JUGAR <span class="icono">🔍</span>
        </a>
        
        <a href="#" class="btn" style="text-decoration: none;">
            CONFIGURACIÓN <span class="icono">⚙️</span>
        </a>
    </div>

   <!-- Enlace al perfil de usuario -->
    <a href="perfil.php" class="perfil-usuario" style="text-decoration: none; cursor: pointer;">
        <div class="avatar">👤</div>
        <div class="info-perfil">
            <small>perfil</small>
            <strong><?php echo htmlspecialchars($usuario_actual ?? 'MILO'); ?></strong>
        </div>
    </a>