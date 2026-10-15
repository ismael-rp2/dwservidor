<?php
// 1. Cargamos el HEAD y la estructura general
include_once "templates/header.php";

// 2. Cargamos el Menú Lateral
include_once "templates/sidebar.php";
?>

    <!-- Contenedor principal a la derecha del sidebar -->
    <div class="flex-1 flex flex-col min-w-0 bg-[#0A0E17]">

        <?php
        // 3. Cargamos la barra superior (Buscador, Notificaciones, Botón Nuevo Contenido)
        include_once "templates/main.title.php";
        ?>

        <!-- Zona de contenido dinámico -->
        <main class="p-6 lg:p-8 space-y-6 max-w-[1600px] w-full mx-auto">

            <?php
            // 4. Cargamos las métricas y gráficas
            include_once "templates/main.content.php";
            ?>

        </main>
    </div>

<?php
// 5. Cerramos el HTML
include_once "templates/footer.php";
?>