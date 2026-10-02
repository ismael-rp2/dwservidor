web application/stitch/projects/101639278941745271/screens/946199d0636a4e4eb3c998c072a7ced7
<?php
/**
 * ==============================================================================
 * PROYECTO: ELDENSE TV - CMS STUDIO CONTROL CENTER
 * ARCHIVO: backend/templates/header.php
 * BLOQUE: Cabecera HTML, Inclusión de Recursos, CSS y Apertura de Layout
 * ==============================================================================
 */

function renderHeader($pageTitle = 'Eldense TV - CMS Studio Control Center') {
?>
<!DOCTYPE html>
<html lang="es" class="h-full bg-[#0F1218]">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- CSS Propio del Dashboard -->
    <link rel="stylesheet" href="../css/dashboard.css">

    <!-- Tailwind CSS (CDN para maquetación ágil) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            red: '#E50914',
                            redDark: '#B81D24',
                            blue: '#1E40AF',
                            dark: '#0F1218',
                            card: '#151922',
                            border: '#232936',
                            textMuted: '#8E95A5'
                        }
                    },
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        display: ['Oswald', 'sans-serif']
                    }
                }
            }
        }
    </script>
</head>
<body class="h-full bg-[#0F1218] text-slate-100 font-sans flex overflow-hidden antialiased">
<!-- El sidebar se incluye inmediatamente a continuación -->
<?php
}
?>