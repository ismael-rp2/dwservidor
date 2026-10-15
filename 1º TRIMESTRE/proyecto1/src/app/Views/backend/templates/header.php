<!DOCTYPE html>
<html class="dark" lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>ELDENSE TV - CMS Studio Control Center</title>
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="/app/Views/backend/css/dashboard.css">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        brand: { red: '#E50914', redHover: '#b80710', blue: '#1E40AF', cyan: '#38BDF8', darkBg: '#0A0E17', sidebarBg: '#090D14', cardBg: '#131822', cardBorder: '#1F2633', badgeBorder: '#293245' }
                    },
                    fontFamily: { heading: ['Oswald', 'sans-serif'], sans: ['Plus Jakarta Sans', 'sans-serif'], }
                }
            }
        }
    </script>
</head>
<body class="bg-[#0A0E17] text-gray-200 font-sans antialiased flex min-h-screen overflow-x-hidden selection:bg-brand-red selection:text-white">