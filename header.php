<?php
// Título por defecto si no se especifica otro
$site_title = $page_title ?? "KATSEYE | Official Fan Site";
$current_page = $current_page ?? 'home';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KATSEYE | Official Fan Site</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;800&family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet">

    <!-- Hoja de Estilos -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include 'header.php'; ?>

    <!-- Contenido Principal -->
    <main class="hero">
        <div class="hero-content">
            <h1>KATSEYE</h1>
            <p>El primer grupo global de chicas formado por HYBE x Geffen Records.</p>
        </div>
    </main>

</body>
</html>