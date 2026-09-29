<?php
// Título por defecto si no se especifica otro
$site_title = $page_title ?? "KATSEYE | Official Fan Site";
$current_page = $current_page ?? 'home';
?>
<header class="site-header">
    <div class="header-container">
        <!-- Imagen como logo pequeño a la izquierda -->
        <div class="logo-small">
            <a href="index.php">
                <img src="images/logo.png" alt="KATSEYE" class="logo-img-small">
            </a>
        </div>

        <!-- Menú de Navegación -->
        <nav>
            <ul class="nav-menu">
                <li><a href="index.php" class="nav-link <?php echo (isset($current_page) && $current_page == 'home') ? 'active' : ''; ?>">Inicio</a></li>
                <li><a href="members.php" class="nav-link <?php echo (isset($current_page) && $current_page == 'members') ? 'active' : ''; ?>">Integrantes</a></li>
                <li><a href="music.php" class="nav-link <?php echo (isset($current_page) && $current_page == 'music') ? 'active' : ''; ?>">Música</a></li>
                <li><a href="gallery.php" class="nav-link <?php echo (isset($current_page) && $current_page == 'gallery') ? 'active' : ''; ?>">Galería</a></li>
            </ul>
        </nav>

        <!-- Botón de Acción a la derecha -->
        <div class="header-actions">
            <a href="https://open.spotify.com" target="_blank" rel="noopener noreferrer" class="btn-header">Escuchar</a>
        </div>
    </div>

</header>