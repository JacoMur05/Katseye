<?php
// Mostrar errores por si algo falla
ini_set('display_errors', 1);
error_reporting(E_ALL);

$page_title = "KATSEYE | Inicio";
$current_page = "home";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="margin: 0; background-color: #0A0915; color: #F3F4F6; font-family: sans-serif;">

    <!-- INCLUIR LA BARRA DE NAVEGACIÓN -->
    <?php include __DIR__ . '/header.php'; ?>

    <main style="height: 80vh; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center;">
        <h1 style="font-size: 4rem; letter-spacing: 5px; margin-bottom: 1rem;">KATSEYE</h1>
        <p style="font-size: 1.2rem; color: #9CA3AF;">El primer grupo global de chicas formado por HYBE x Geffen Records.</p>
    </main>

    <section class="about-section">
        <div class="about-container">
            
            <!-- Imagen de la Banda -->
            <div class="about-image">
                <img src="images/katseye-group.jpg" alt="KATSEYE Group">
            </div>

            <!-- Descripción de la Banda -->
            <div class="about-info">
                <h2>¿Quiénes son KATSEYE?</h2>
                <p>
                    <strong>KATSEYE</strong> es un grupo global de chicas formado a través del programa de desarrollo de talentos <em>The Debut: Dream Academy</em>, una colaboración entre las potencias de la música <strong>HYBE</strong> y <strong>Geffen Records</strong>.
                </p>
                <p>
                    Conformado por seis integrantes de diversas nacionalidades y trasfondos culturales —<strong>Daniela, Lara, Manon, Megan, Sophia y Yoonchae</strong>— el grupo combina sonidos pop modernos, coreografías de alto nivel y una estética visual futurista.
                </p>
                
                <div class="about-highlights">
                    <div class="highlight-item">
                        <span>Origen</span>
                        <p>Estados Unidos / Corea del Sur</p>
                    </div>
                    <div class="highlight-item">
                        <span>Género</span>
                        <p>Pop / K-Pop Global</p>
                    </div>
                    <div class="highlight-item">
                        <span>Integrantes</span>
                        <p>6 Miembros</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

</body>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>