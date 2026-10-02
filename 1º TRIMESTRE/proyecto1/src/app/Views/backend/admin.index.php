web application/stitch/projects/101639278941745271/screens/d58872a9164440ec9a1b497e960d38d3
<?php
/**
 * ==============================================================================
 * PROYECTO: ELDENSE TV - CMS STUDIO CONTROL CENTER
 * ARCHIVO: backend/admin.index.php
 * CONTROLADOR PRINCIPAL / ORQUESTADOR DE BLOQUES MODULARES
 *
 * Estructura de inclusión:
 * 1. backend/templates/header.php
 * 2. backend/templates/sidebar.php
 * 3. backend/templates/main.title.php
 * 4. backend/templates/main.content.php
 * 5. backend/templates/footer.php
 * ==============================================================================
 */

// Inclusión de los bloques modulares
require_once __DIR__ . '/templates/header.php';
require_once __DIR__ . '/templates/sidebar.php';
require_once __DIR__ . '/templates/main.title.php';
require_once __DIR__ . '/templates/main.content.php';
require_once __DIR__ . '/templates/footer.php';

// 1. Renderiza Head y apertura de Body
renderHeader('Eldense TV - CMS Studio Control Center');

// 2. Renderiza Sidebar lateral fija
renderSidebar('estadisticas');

// 3. Contenedor del área de trabajo (Main Viewport)
?>
<main class="flex-1 flex flex-col min-w-0 h-full overflow-y-auto bg-[#0F1218]">
    <?php

    // 4. Renderiza Topbar y Encabezado de Página
    renderMainTitle();

    // 5. Renderiza Tarjetas KPI y Gráficos
    renderMainContent();

    // 6. Renderiza Footer y cierre de Body / HTML
    renderFooter();
    ?>
