<!DOCTYPE html>
<html class="dark" lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="web_standard" name="shell-type"/>
    <title>Eldense TV</title>

    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&family=Oswald:wght@500;600;700&family=Space+Grotesk:wght@600;700&display=swap" rel="stylesheet"/>

    <style>
        @layer base {
            html, body { margin: 0; padding: 0; }
            body { overscroll-behavior: none; }
            main > :first-child { margin-top: 0 !important; }
            main > :last-child { margin-bottom: 0 !important; }
        }
        ::-webkit-scrollbar { display: none; }

        /* Efecto de submenú */
        .submenu-container { visibility: hidden; opacity: 0; transform: translateY(10px); transition: all 0.3s ease; pointer-events: none; }
        .submenu-container.active { visibility: visible; opacity: 1; transform: translateY(0); pointer-events: auto; }
    </style>

    <script src="https://cdn.tailwindcss.com"></script>
    <script id="tailwind-config">
        tailwind.config = {
            "darkMode": "class", "theme": {
                "extend": {
                    "colors": {
                        "on-background": "#dfe2f0", "secondary-fixed": "#dde1ff", "on-secondary-fixed-variant": "#173bab", "on-surface": "#dfe2f0", "on-primary-container": "#fff6f5", "on-surface-variant": "#e6bdb8", "surface-dim": "#0f131d", "surface-container": "#1b2029", "primary-fixed": "#ffdad6", "outline-variant": "#5c403c", "surface-bright": "#353944", "inverse-on-surface": "#2c303b", "primary": "#ffb4ab", "tertiary": "#ffb4ab", "tertiary-fixed": "#ffdad6", "on-primary": "#690005", "outline": "#ac8884", "on-secondary": "#002584", "primary-container": "#dc2626", "on-primary-fixed": "#410002", "on-secondary-fixed": "#001453", "on-tertiary": "#690005", "surface-container-low": "#171c25", "surface-variant": "#31353f", "on-primary-fixed-variant": "#93000b", "secondary-fixed-dim": "#b8c4ff", "tertiary-fixed-dim": "#ffb4ab", "surface": "#0f131d", "on-tertiary-fixed": "#410002", "surface-container-high": "#262a34", "on-error": "#690005", "error-container": "#93000a", "tertiary-container": "#d6332d", "on-tertiary-container": "#fff7f6", "primary-fixed-dim": "#ffb4ab", "surface-container-highest": "#31353f", "surface-container-lowest": "#0a0e17", "on-error-container": "#ffdad6", "background": "#0f131d", "on-tertiary-fixed-variant": "#93000b", "on-secondary-container": "#a0b1ff", "surface-tint": "#ffb4ab", "secondary": "#b8c4ff", "secondary-container": "#173bab", "inverse-primary": "#bf0715", "inverse-surface": "#dfe2f0", "error": "#ffb4ab"
                    },
                    "borderRadius": {"DEFAULT": "0.125rem", "lg": "0.25rem", "xl": "0.5rem", "full": "0.75rem"},
                    "spacing": { "space-xs": "0.25rem", "gutter-mobile": "0.75rem", "gutter-tv": "2rem", "space-sm": "0.5rem", "space-md": "1rem", "margin-mobile": "1rem", "space-lg": "1.5rem", "space-xl": "2.5rem", "margin": "3.5rem", "margin-tablet": "2rem", "gutter": "1.25rem" },
                    "fontFamily": { "label-sm": ["Space Grotesk"], "headline-sm": ["Oswald"], "body-sm": ["Manrope"], "headline-xl": ["Oswald"], "headline-md": ["Oswald"], "body-lg": ["Manrope"], "label-md": ["Space Grotesk"], "headline-xl-mobile": ["Oswald"], "body-md": ["Manrope"], "display-hero": ["Oswald"], "headline-lg": ["Oswald"], "display-hero-mobile": ["Oswald"], "label-lg": ["Space Grotesk"] },
                    "fontSize": { "label-sm": ["10px", {"lineHeight": "14px", "letterSpacing": "0.08em", "fontWeight": "700"}], "headline-sm": ["18px", {"lineHeight": "24px", "fontWeight": "500"}], "body-sm": ["13px", {"lineHeight": "18px", "fontWeight": "400"}], "headline-xl": ["38px", {"lineHeight": "46px", "letterSpacing": "0.01em", "fontWeight": "600"}], "headline-md": ["22px", {"lineHeight": "28px", "fontWeight": "500"}], "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}], "label-md": ["12px", {"lineHeight": "16px", "letterSpacing": "0.06em", "fontWeight": "600"}], "headline-xl-mobile": ["26px", {"lineHeight": "32px", "letterSpacing": "0.01em", "fontWeight": "600"}], "body-md": ["15px", {"lineHeight": "22px", "fontWeight": "400"}], "display-hero": ["56px", {"lineHeight": "64px", "letterSpacing": "0.02em", "fontWeight": "700"}], "headline-lg": ["28px", {"lineHeight": "36px", "letterSpacing": "0.01em", "fontWeight": "600"}], "display-hero-mobile": ["36px", {"lineHeight": "42px", "letterSpacing": "0.02em", "fontWeight": "700"}], "label-lg": ["14px", {"lineHeight": "18px", "letterSpacing": "0.05em", "fontWeight": "600"}] }
                }
            }
        };
    </script>
</head>
<body class="bg-surface font-body-md text-on-surface antialiased">

<!-- HEADER OPTIMIZADO -->
<header class="fixed top-0 left-0 right-0 z-50 bg-surface/90 backdrop-blur-md shadow-[0_4px_24px_rgba(0,0,0,0.6)]">
    <div class="h-20 w-full px-margin flex items-center justify-between gap-gutter">
        <div class="flex items-center gap-space-lg">
            <a class="flex items-center gap-space-sm shrink-0" data-path="inicio" href="#">
                <img alt="Eldense TV Logo" class="h-8 w-auto object-contain" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDovPeUxIBujfMNL3MdY21BXLHuNJb1hRZiD64tR-VFA78iQmhmA15XnBvFEC5YpwngAekIpOXXIpPcrtitlYSX_CO03XBC8UhB2PjYKc_9PCRDZxV6Tvt67h6KK5exrXFUUCQhjbP0fPmzKsj-ZMVdeugfzPK3yu_sSrpETb9GZFa2Qz5UADuy3gkldxzZtOy6bcGMluuVyUHCSXljbt824Y-1W-AUOrMJzgjjqJbIb7jJG8aKhbA"/>
                <span class="font-headline-md text-headline-md tracking-wider uppercase text-on-surface hidden xl:inline">ELDENSE<span class="text-primary-container ml-1">TV</span></span>
            </a>
            <!-- NAVEGACIÓN PRINCIPAL: 4 APARTADOS -->
            <nav class="hidden lg:flex items-center gap-space-md z-50">
                <a class="transition-colors py-space-xs text-on-surface font-semibold" href="#">Inicio (Todo)</a>

                <!-- Dropdown: Temporadas -->
                <div class="relative group py-space-xs">
                    <button class="font-body-sm text-body-sm text-on-surface-variant hover:text-on-surface transition-colors flex items-center gap-1">
                        Temporadas <span class="material-symbols-outlined text-[16px]">expand_more</span>
                    </button>
                    <div class="absolute left-1/2 -translate-x-1/2 top-full mt-1 w-48 bg-surface-container-high rounded-xl shadow-xl flex flex-col submenu-container border border-surface-variant/50 overflow-hidden text-center z-50">
                        <a href="#" class="py-3 text-sm text-on-surface hover:bg-surface-bright transition-colors border-b border-surface-variant/30 font-bold text-primary">2026/27 (Actual)</a>
                        <a href="#" class="py-3 text-sm text-on-surface hover:bg-surface-bright transition-colors border-b border-surface-variant/30">2025/26</a>
                        <a href="#" class="py-3 text-sm text-on-surface hover:bg-surface-bright transition-colors border-b border-surface-variant/30">2024/25</a>
                        <a href="#" class="py-3 text-sm text-on-surface hover:bg-surface-bright transition-colors border-b border-surface-variant/30">2023/24</a>
                        <a href="#" class="py-3 text-sm text-on-surface hover:bg-surface-bright transition-colors border-b border-surface-variant/30">2022/23 (Ascenso)</a>
                        <a href="#" class="py-3 text-sm text-on-surface hover:bg-surface-bright transition-colors">Archivo Histórico</a>
                    </div>
                </div>

                <!-- Dropdown: Contenidos -->
                <div class="relative group py-space-xs">
                    <button class="font-body-sm text-body-sm text-on-surface-variant hover:text-on-surface transition-colors flex items-center gap-1">
                        Catálogo <span class="material-symbols-outlined text-[16px]">expand_more</span>
                    </button>
                    <div class="absolute left-1/2 -translate-x-1/2 top-full mt-1 w-48 bg-surface-container-high rounded-xl shadow-xl flex flex-col submenu-container border border-surface-variant/50 overflow-hidden text-center z-50">
                        <a href="#" class="py-3 text-sm text-on-surface hover:bg-surface-bright transition-colors border-b border-surface-variant/30">Partidos</a>
                        <a href="#" class="py-3 text-sm text-on-surface hover:bg-surface-bright transition-colors border-b border-surface-variant/30">Documentales</a>
                        <a href="#" class="py-3 text-sm text-on-surface hover:bg-surface-bright transition-colors">eSports / Gaming</a>
                    </div>
                </div>

                <!-- Dropdown: Prensa & Medios -->
                <div class="relative group py-space-xs">
                    <button class="font-body-sm text-body-sm text-on-surface-variant hover:text-on-surface transition-colors flex items-center gap-1">
                        Prensa & Medios <span class="material-symbols-outlined text-[16px]">expand_more</span>
                    </button>
                    <div class="absolute left-1/2 -translate-x-1/2 top-full mt-1 w-48 bg-surface-container-high rounded-xl shadow-xl flex flex-col submenu-container border border-surface-variant/50 overflow-hidden text-center z-50">
                        <a href="#" class="py-3 text-sm text-on-surface hover:bg-surface-bright transition-colors border-b border-surface-variant/30">Ruedas de Prensa</a>
                        <a href="#" class="py-3 text-sm text-on-surface hover:bg-surface-bright transition-colors border-b border-surface-variant/30">Entrevistas</a>
                        <a href="#" class="py-3 text-sm text-on-surface hover:bg-surface-bright transition-colors">Presentaciones</a>
                    </div>
                </div>
            </nav>
        </div>

        <div class="flex items-center gap-space-md shrink-0">
            <button class="w-9 h-9 rounded-full bg-surface-container flex items-center justify-center text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-colors" type="button"><span class="material-symbols-outlined text-[20px]">search</span></button>
            <button class="relative w-9 h-9 rounded-full bg-surface-container flex items-center justify-center text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-colors" type="button">
                <span class="material-symbols-outlined text-[20px]">notifications</span>
                <span class="absolute -top-1 -right-1 flex h-4 min-w-[1rem] items-center justify-center rounded-full bg-primary-container px-1 font-label-sm text-label-sm text-on-primary-container">3</span>
            </button>
            <div class="relative flex items-center pl-space-xs">
                <button class="flex items-center gap-space-xs rounded-full p-0.5 hover:ring-2 hover:ring-secondary transition-all" type="button">
                    <img alt="Profile" class="w-8 h-8 rounded-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB30SxzZDpW1mNp8vTFZWX7AzxMh4uo-vgGwo0PdDRw4in8s6UV78N--XepcAnFoY5Z7EEOWkAqKhVOSIns_qfGCauJJZYEefR4An0-0n8fBXGyhJmbKPFyXQKGyksazMszHjjOxUAprKpgTNjNKAjNeoxpLxpGdpenr-ev8jQPDDO8kba3Zxm0IlsYeE8PnUpSOjaZEvDFGGjCd4v8OyzN0DW2FVGVdQxuHYOfz3PpNhUMfHdz8WY"/>
                </button>
            </div>
        </div>
    </div>
</header>

<main class="w-full pt-20 bg-surface min-h-[calc(100vh-20rem)]">