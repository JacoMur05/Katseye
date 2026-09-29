<?php
// Título por defecto si no se especifica otro
$site_title = $page_title ?? "KATSEYE | Official Fan Site";
$current_page = $current_page ?? 'home';
?>
<footer class="site-footer">
    <div class="footer-container">
        <!-- Logo y descripción corta -->
        <div class="footer-brand">
            <h3>KATSEYE</h3>
            <p>El grupo global de chicas de HYBE x Geffen Records.</p>
        </div>

        <!-- Enlaces rápidos -->
        <div class="footer-links">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="members.php">Integrantes</a></li>
                <li><a href="music.php">Música</a></li>
                <li><a href="gallery.php">Galería</a></li>
            </ul>
        </div>

        <!-- Redes sociales -->
        <div class="footer-socials">
            <a href="https://instagram.com" target="_blank" rel="noopener noreferrer">Instagram</a>
            <a href="https://tiktok.com" target="_blank" rel="noopener noreferrer">TikTok</a>
            <a href="https://youtube.com" target="_blank" rel="noopener noreferrer">YouTube</a>
            <a href="https://open.spotify.com" target="_blank" rel="noopener noreferrer">Spotify</a>
        </div>
    </div>

    <!-- Créditos y Derechos de Autor -->
    <div class="footer-bottom">
        <p>&copy; <?php echo date('Y'); ?> KATSEYE Fan Site. Todos los derechos reservados.</p>
        <p class="footer-credits">Desarrollado por: Nikol Andrea Vargas | Jacobo Murcia Arias | Miguel Ángel Aguirre</p>
    </div>
</footer>