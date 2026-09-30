<?php
// Configuración de la página
$titulo_pagina = "Integrantes - KATSEYE";

// Incluir el encabezado
include 'header.php';

// Arreglo con la información de cada integrante
$integrantes = [
    [
        'nombre' => 'Sophia Laforteza',
        'rol' => 'Líder & Vocalista',
        'origen' => 'Filipinas',
        'imagen' => 'images/sophia.jpg', // Cambia con la ruta real de tu imagen
        'descripcion' => 'Líder del grupo con gran talento vocal y presencia escénica.'
    ],
    [
        'nombre' => 'Daniela Avanzini',
        'rol' => 'Bailarina & Vocalista',
        'origen' => 'Estados Unidos (Cuba / Venezuela)',
        'imagen' => 'images/daniela.jpg',
        'descripcion' => 'Especialista en baile con trayectoria en danza latina y contemporánea.'
    ],
    [
        'nombre' => 'Manon Bannerman',
        'rol' => 'Vocalista',
        'origen' => 'Suiza (Ghana / Italia)',
        'imagen' => 'images/manon.jpg',
        'descripcion' => 'Reconocida por su voz suave y su gran carisma en el escenario.'
    ],
    [
        'nombre' => 'Megan Skiendiel',
        'rol' => 'Bailarina & Vocalista',
        'origen' => 'Estados Unidos (Hawái)',
        'imagen' => 'images/megan.jpg',
        'descripcion' => 'Destacada por su energía en el baile y versatilidad vocal.'
    ],
    [
        'nombre' => 'Yoonchae Jeong',
        'rol' => 'Vocalista (Maknae)',
        'origen' => 'Corea del Sur',
        'imagen' => 'images/yoonchae.jpg',
        'descripcion' => 'La integrante más joven del grupo, con potentes habilidades vocales.'
    ],
    [
        'nombre' => 'Lara Rajagopalan',
        'rol' => 'Vocalista Principal',
        'origen' => 'Estados Unidos (India)',
        'imagen' => 'images/lara.jpg',
        'descripcion' => 'Vocalista principal conocida por su amplio rango vocal y estilo único.'
    ]
];
?>

<main class="container">
    <section class="hero-section">
        <h1>Conoce a KATSEYE</h1>
        <p>El grupo global femenino formado a través de <em>The Debut: Dream Academy</em>.</p>
    </section>

    <!-- Sección con la foto grupal -->
    <section class="group-photo-section">
        <img src="images/katseye-group.jpg" alt="KATSEYE Group" class="group-img">
    </section>

    <!-- Tarjetas de cada integrante -->
    <section class="members-grid">
        <?php foreach ($integrantes as $miembro): ?>
            <article class="member-card">
                <div class="card-image">
                    <img src="<?php echo htmlspecialchars($miembro['imagen']); ?>" alt="<?php echo htmlspecialchars($miembro['nombre']); ?>">
                </div>
                <div class="card-content">
                    <h2><?php echo htmlspecialchars($miembro['nombre']); ?></h2>
                    <span class="badge-role"><?php echo htmlspecialchars($miembro['rol']); ?></span>
                    <p class="origin"><strong>Nacionalidad:</strong> <?php echo htmlspecialchars($miembro['origen']); ?></p>
                    <p class="bio"><?php echo htmlspecialchars($miembro['descripcion']); ?></p>
                </div>
            </article>
        <?php endforeach; ?>
    </section>
</main>

<?php
// Incluir el pie de página
include 'footer.php';
?>