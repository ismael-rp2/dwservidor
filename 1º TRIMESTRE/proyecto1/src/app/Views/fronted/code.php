<!DOCTYPE html>
<html class="dark" lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="web_standard" name="shell-type"/>
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
    <script id="tailwind-config">tailwind.config = {
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
        };</script>
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
    <!-- HERO CENTRADO Y ALINEADO -->
    <section class="relative w-full overflow-hidden">
        <div class="relative w-full min-h-[580px] lg:min-h-[720px] flex items-center justify-center">
            <!-- Background Media Layer -->
            <div class="absolute inset-0 bg-cover bg-center w-full h-full transform scale-105 transition-transform duration-1000 ease-out opacity-60" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuB7WjKGqzWbKpiHp3Bv2lypn9mZaFzfvYyFZ32aavMQv43aNXae3H-G-ZN0aL7vh_Qpy26epm21ruVpSbsCLsDCMQ9gW6vjWsanS_9hDJpB38hqsxMF7NtE0VRoAbTmHj4B6PmvDWRU8bOAPyXLiAdKcKFfnv4a0w0eLHpmgRjeRL_97ov84tje-ltxicJ452q7RYXOR4OkbM0AGnWIy_htdtJVhB-IBWqqufapgvNdnCvZztzH0a8')"></div>
            <!-- Scrims and Overlays -->
            <div class="absolute inset-0 bg-gradient-to-t from-surface via-surface/60 to-surface/40 z-10"></div>

            <!-- Hero Content -->
            <div class="relative z-20 w-full px-margin-mobile md:px-margin max-w-5xl mx-auto flex flex-col items-center justify-center text-center gap-space-md">
                <div class="flex flex-wrap justify-center items-center gap-space-xs">
                    <span class="px-space-sm py-1 rounded bg-primary-container text-on-primary-container font-label-sm text-label-sm uppercase tracking-widest flex items-center gap-1 shadow-md">
                        <span class="material-symbols-outlined text-[14px]">stars</span> Eldense Originals
                    </span>
                    <span class="px-space-sm py-1 rounded bg-surface-container-high/80 backdrop-blur-md text-secondary font-label-sm text-label-sm uppercase tracking-wider">
                        Ultra HD 4K
                    </span>
                </div>
                <div class="flex flex-col items-center">
                    <span class="font-label-md text-label-md text-primary tracking-widest uppercase mb-2">Largometraje Documental Exclusivo</span>
                    <h1 class="font-display-hero text-display-hero uppercase tracking-wide text-on-surface leading-[0.95] max-w-4xl">
                        EL MILAGRO DE ELDA
                    </h1>
                    <p class="font-headline-md text-headline-md text-on-surface-variant uppercase tracking-wider mt-3">
                        Camino a Segunda División · La Mística Azulgrana
                    </p>
                </div>
                <p class="font-body-lg text-body-lg text-on-surface/90 max-w-3xl leading-relaxed mt-2">
                    Una mirada íntima e inédita al vestuario del CD Eldense durante la épica temporada en el Nuevo Pepico Amat. Testimonios del cuerpo técnico, el drama de los playoffs decisivos y el regreso a la élite del fútbol español tras seis décadas.
                </p>
                <div class="flex flex-wrap justify-center items-center gap-space-md pt-space-md">
                    <button class="group flex items-center justify-center gap-space-sm px-space-xl py-space-md rounded-xl bg-primary-container hover:bg-tertiary-container text-on-primary-container font-label-lg text-label-lg uppercase tracking-wider shadow-2xl transition-all hover:scale-[1.03] active:scale-95" type="button">
                        <span class="material-symbols-outlined text-[26px]" style="font-variation-settings: 'FILL' 1;">play_arrow</span>
                        <span>Reproducir Ahora</span>
                    </button>
                    <button class="flex items-center justify-center gap-space-sm px-space-lg py-space-md rounded-xl bg-surface-container-high/90 hover:bg-surface-bright text-on-surface font-label-lg text-label-lg uppercase tracking-wider backdrop-blur-md shadow-lg transition-all hover:scale-[1.02]" type="button">
                        <span class="material-symbols-outlined text-[20px]">info</span>
                        <span>Más Información</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTENEDORES PRINCIPALES CON CABECERAS CENTRADAS Y CATÁLOGO COMPLETO -->
    <div class="w-full flex flex-col gap-space-xl px-margin-mobile md:px-margin pt-space-lg max-w-7xl mx-auto pb-20">

        <!-- ROW 1: EN DIRECTO & PARTIDOS -->
        <section class="flex flex-col gap-space-md">
            <div class="flex flex-col items-center justify-center text-center gap-2 mb-space-md">
                <span class="material-symbols-outlined text-[32px] text-primary-container">sensors</span>
                <h2 class="font-headline-lg text-headline-lg uppercase tracking-wide text-on-surface">
                    En Directo & Próximos Partidos
                </h2>
                <span class="font-label-sm text-label-sm text-secondary bg-secondary-container px-space-sm py-1 rounded tracking-widest uppercase">
                    LaLiga Hypermotion
                </span>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-gutter justify-center items-center">
                <!-- Tarjeta Directo -->
                <div class="relative bg-surface-container-low rounded-xl overflow-hidden shadow-2xl group flex flex-col justify-between p-space-xl min-h-[400px] text-center">
                    <div class="absolute inset-0 z-0 opacity-40">
                        <div class="w-full h-full bg-cover bg-center transition-transform duration-700 group-hover:scale-105" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBjIwMZSYJthZ1e-fodS7ovm5r2uJEXNurEgSTr3hx7AKIdXClGjZCxAd_wtwTzgS9NzY3zrIG3al97wOfF2VYnnQjaXbPrFKvclpVavKmsf904wXh97lHVnaj5XfpBga-xODmtJs7Wa9ZRYcqYh94sQ6hTPBeifd_oqkkf9o4WP0mTd4dHywH_f-_lEHF1T8XSvcFzmv1GKrdHu_4YYJTmSV2-EIiY7s1Ua7x8dNR3D-Co9vDxo8E')"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-surface-dim via-surface-dim/85 to-surface-dim/40"></div>
                    </div>

                    <div class="relative z-10 flex flex-col items-center justify-center mb-space-lg gap-4">
                        <span class="px-space-md py-1.5 rounded bg-primary-container text-on-primary-container font-label-md text-label-md uppercase tracking-widest font-bold flex items-center justify-center gap-2 shadow-lg">
                            <span class="w-2.5 h-2.5 rounded-full bg-on-primary-container animate-pulse"></span>
                            EN DIRECTO HOY
                        </span>
                        <div class="flex items-center justify-center gap-8 py-space-md bg-surface-dim/60 backdrop-blur-md rounded-xl w-full max-w-md mx-auto mt-4">
                            <div class="flex flex-col items-center gap-2">
                                <span class="material-symbols-outlined text-[40px] text-primary">sports_soccer</span>
                                <span class="font-headline-md text-headline-md uppercase text-on-surface">CD Eldense</span>
                            </div>
                            <span class="font-headline-xl text-headline-xl text-primary tracking-widest">20:30</span>
                            <div class="flex flex-col items-center gap-2">
                                <span class="material-symbols-outlined text-[40px] text-secondary">shield</span>
                                <span class="font-headline-md text-headline-md uppercase text-on-surface">Zaragoza</span>
                            </div>
                        </div>
                    </div>

                    <div class="relative z-10 flex justify-center mt-4">
                        <button class="py-space-md px-space-xl rounded-lg bg-primary-container hover:bg-tertiary-container text-on-primary-container font-label-lg text-label-lg uppercase tracking-wider flex items-center justify-center gap-2 transition-all shadow-md w-full max-w-sm" type="button">
                            <span class="material-symbols-outlined text-[20px]">live_tv</span> Ir a la Emisión Directa
                        </button>
                    </div>
                </div>

                <!-- Tarjeta Resumen -->
                <div class="group relative bg-surface-container rounded-xl overflow-hidden shadow-lg transition-transform duration-300 hover:scale-[1.02] flex flex-col text-center min-h-[400px]">
                    <div class="relative h-48 w-full overflow-hidden">
                        <div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDz_a2Brq1Z8MXAyfjOHBqUwtH3A44rxmW9ak7JtGEUIq3Os5KzciQ9m-xQr3yGdYeGdBpBLZfFLL2SCeJwbkYk0OqeeudN5pwquDaKy_ppkab_m3I8yGfWWsfYMi7LpXf8baXORnxaF5PXFSzywd-6WPG3NjhdS0r1fZY951A91I__lENRHnfz6vwAOKULDZhOmCCFq9vBzkUdC7_AYzFA6L7Knkr_LUgNLaAFkO6O0rthkpGuo8A')"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-surface via-transparent to-transparent"></div>
                    </div>
                    <div class="p-space-lg flex flex-col gap-space-sm flex-1 justify-center items-center">
                        <span class="text-primary font-bold tracking-widest text-sm">FINAL 2 - 1</span>
                        <h3 class="font-headline-md text-headline-md uppercase text-on-surface group-hover:text-primary transition-colors">
                            CD Eldense vs Real Oviedo
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant max-w-sm mt-2">
                            Remontada memorable en el tramo final con doblete épico para afianzar los puestos de tranquilidad.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ROW 2: DOCUMENTALES & SERIES ORIGINALES -->
        <section class="flex flex-col gap-space-md pt-space-lg border-t border-surface-container-highest">
            <div class="flex flex-col items-center justify-center text-center gap-2 mb-space-md">
                <span class="material-symbols-outlined text-[32px] text-primary">movie_filter</span>
                <h2 class="font-headline-lg text-headline-lg uppercase tracking-wide text-on-surface">
                    Documentales & Series Originales
                </h2>
                <span class="font-label-sm text-label-sm text-on-surface-variant">Exclusivo Socios Eldense TV</span>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-gutter text-center">
                <!-- Docu Card 1 -->
                <div class="group relative bg-surface-container rounded-xl overflow-hidden shadow-lg transition-transform duration-300 hover:scale-[1.03] flex flex-col">
                    <div class="relative aspect-[16/10] w-full overflow-hidden">
                        <div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBNMuTsiP-oDBFAQ8QYXLmacaTxzlSLGLIuk2NdlT4veGgrDEGz6JsgtBVcfiMxye5N4wdc2RICSuCJ9iq6iTM5Kh9yH8tpU2Ii1VWy1AUDBXxG8a-y3hKxwe_P57930sbpqHA7d4LvU0yUzhkq6_LSA3yUp2BbWxns8-wpJ6Q7SFexIuurPhhKUZ7UdYEWC62WV2LIgqRVHA4HQxXbtOKFcP1cJcWiUqQQ-zAPghtigAHvok5G4N0')"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-surface via-transparent to-transparent"></div>
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-surface-dim/50">
                            <span class="material-symbols-outlined text-[36px] text-on-surface" style="font-variation-settings: 'FILL' 1;">play_circle</span>
                        </div>
                    </div>
                    <div class="p-space-md flex flex-col flex-1 justify-center items-center">
                        <span class="font-label-sm text-label-sm text-secondary tracking-widest uppercase">Serie Docu · T1:E4</span>
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-1 group-hover:text-primary transition-colors">
                            Alma Azulgrana: Sangre y Táctica
                        </h3>
                    </div>
                </div>
                <!-- Docu Card 2 -->
                <div class="group relative bg-surface-container rounded-xl overflow-hidden shadow-lg transition-transform duration-300 hover:scale-[1.03] flex flex-col">
                    <div class="relative aspect-[16/10] w-full overflow-hidden">
                        <div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBsFcW7RS1vA4N7wRvxqpBFKiC-WZPDD-xxIb0JD2xpya8v043MkoRp0wnOOy2p44erh6c6OVotpDfS0PWtQeGMqo-jQxSMbzyce3N7sPZ22me9CLZ0cXEFmlmJvxERYylUvAr6dBPmFMxEJO0E56REMo0iuhrWnFfBkLU5xzzQGOFmwZILKmanpznAqg9gH8lZCmvOX-D3YIvI2ygrbCipRJNhGXkwu2MvxdTSH87XNqo1HjoFNtk')"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-surface via-transparent to-transparent"></div>
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-surface-dim/50">
                            <span class="material-symbols-outlined text-[36px] text-on-surface" style="font-variation-settings: 'FILL' 1;">play_circle</span>
                        </div>
                    </div>
                    <div class="p-space-md flex flex-col flex-1 justify-center items-center">
                        <span class="font-label-sm text-label-sm text-secondary tracking-widest uppercase">Documental Único</span>
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-1 group-hover:text-primary transition-colors">
                            Pepico Amat: 60 Años de Mística
                        </h3>
                    </div>
                </div>
                <!-- Docu Card 3 -->
                <div class="group relative bg-surface-container rounded-xl overflow-hidden shadow-lg transition-transform duration-300 hover:scale-[1.03] flex flex-col">
                    <div class="relative aspect-[16/10] w-full overflow-hidden">
                        <div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA1cJjbkJn-g3pUJJDM6a15IScbNwk1J1vYPg7kq6h_5iWW165sDBEXlcvjPtCHr05Mp1gGCFU8gVhjKz-U2LD6M2MRTMYCy3ped3bv-NNZF7K9Y76NqFNpZ3mV73JVnlTn7a2TVN-84l407vDmliG2fniOErxXFc-X1pcmMSmimWhFcemCVgUUVx7BdWAqConMzxE67QJqB1UfhBWOHX_iVfpTsChl5yljF8MtHUzdj_4gIz80ACE')"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-surface via-transparent to-transparent"></div>
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-surface-dim/50">
                            <span class="material-symbols-outlined text-[36px] text-on-surface" style="font-variation-settings: 'FILL' 1;">play_circle</span>
                        </div>
                    </div>
                    <div class="p-space-md flex flex-col flex-1 justify-center items-center">
                        <span class="font-label-sm text-label-sm text-secondary tracking-widest uppercase">Miniserie · Ep. 1</span>
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-1 group-hover:text-primary transition-colors">
                            Fábrica de Elda: El Futuro
                        </h3>
                    </div>
                </div>
                <!-- Docu Card 4 -->
                <div class="group relative bg-surface-container rounded-xl overflow-hidden shadow-lg transition-transform duration-300 hover:scale-[1.03] flex flex-col">
                    <div class="relative aspect-[16/10] w-full overflow-hidden">
                        <div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBd28cFXmIlonCOUf9j5pjvXJReFhjAXAWHmIW20SHcZLocX8JDlpiNDpgKhZxxEK4fMGmTXypkSDl1H67waIaJ9XLBnJC7bsVWMu6wxyaKupg2kL6gsfpLf4ryyqXQsOg-UH1S9BEbPRD-aOt6U3ZxdSEzeYE8zzedWI393l2pwCW_7RuzhdPLzjIwTdvmA-Nmt9hK37pZa4J7L2bHV5oY5_pinkoPVbMHgVpMii6FUW3Qx1occ8w')"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-surface via-transparent to-transparent"></div>
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-surface-dim/50">
                            <span class="material-symbols-outlined text-[36px] text-on-surface" style="font-variation-settings: 'FILL' 1;">play_circle</span>
                        </div>
                    </div>
                    <div class="p-space-md flex flex-col flex-1 justify-center items-center">
                        <span class="font-label-sm text-label-sm text-secondary tracking-widest uppercase">Película Oficial</span>
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-1 group-hover:text-primary transition-colors">
                            El Día Que Elda No Durmió
                        </h3>
                    </div>
                </div>
            </div>
        </section>

        <!-- ROW 3: RUEDAS DE PRENSA -->
        <section class="flex flex-col gap-space-md pt-space-lg border-t border-surface-container-highest">
            <div class="flex flex-col items-center justify-center text-center gap-2 mb-space-md">
                <span class="material-symbols-outlined text-[32px] text-secondary">mic</span>
                <h2 class="font-headline-lg text-headline-lg uppercase tracking-wide text-on-surface">
                    Ruedas de Prensa & Zona Mixta
                </h2>
                <span class="font-label-sm text-label-sm text-primary bg-primary-container/20 px-space-sm py-1 rounded tracking-widest uppercase">
                    Sala Pepico Amat
                </span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter text-center">
                <!-- Press 1 -->
                <div class="group bg-surface-container rounded-xl overflow-hidden shadow-md hover:bg-surface-container-high transition-all flex flex-col">
                    <div class="relative aspect-video w-full">
                        <div class="w-full h-full bg-cover bg-center transition-transform duration-300 group-hover:scale-102" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAcc7c46sX8T-VKo-NCNpAgiUmvswOVMeAzJUYna9k2q0W_sMdGb0tN2kNykgOm3I7xvTDJZ3InOSYqO5nBzD3QL3rN7iPHmqOXdMPxRXkFvhzzvBjcc2zfojjLLSyGtDjPVo14I99fYpIyC0OBnTiqx3HQJbTEFk4i0SviDAiwruvBthwdoxzsVnvinQQ8cZs2arpEYwS4jGPRYl0oJ3fqSZNXhLnKEMKNZ1xYi0YMIBohUob60gY')"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-surface via-transparent to-transparent"></div>
                    </div>
                    <div class="p-space-md flex flex-col gap-space-xs items-center">
                        <span class="font-label-sm text-label-sm text-primary tracking-widest uppercase">Entrenador Principal</span>
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface group-hover:text-primary transition-colors">
                            Dani Ponz: "La comunión con la grada nos dio la victoria"
                        </h3>
                    </div>
                </div>
                <!-- Press 2 -->
                <div class="group bg-surface-container rounded-xl overflow-hidden shadow-md hover:bg-surface-container-high transition-all flex flex-col">
                    <div class="relative aspect-video w-full">
                        <div class="w-full h-full bg-cover bg-center transition-transform duration-300 group-hover:scale-102" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDrChBWuaazBb8EY1qrIK4dI_ETKv5gPnpdTZ42Pam13JY-M7hd43B_TQPxUhLL55CsTLuM_cqFsXE1ZhYQGGwv7FzXYf4s0hOsYxGNr3cORfguX9cG6XWHZATglk1JboCZHGfI2H9YjViPnSdrog34QvoOEkPlzITyi7uWxSN9pnejTIGmgoAYqHGBy2FD4aJaCbfuYWjGiVbaosBjdHJAoQSLsuDfY9KOZD94QksxA0z77qzvQew')"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-surface via-transparent to-transparent"></div>
                    </div>
                    <div class="p-space-md flex flex-col gap-space-xs items-center">
                        <span class="font-label-sm text-label-sm text-secondary tracking-widest uppercase">Declaraciones Capitán</span>
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface group-hover:text-primary transition-colors">
                            Pedro Capó: "Este escudo exige pelear cada balón"
                        </h3>
                    </div>
                </div>
                <!-- Press 3 -->
                <div class="group bg-surface-container rounded-xl overflow-hidden shadow-md hover:bg-surface-container-high transition-all flex flex-col">
                    <div class="relative aspect-video w-full">
                        <div class="w-full h-full bg-cover bg-center transition-transform duration-300 group-hover:scale-102" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuC6W7dko5mtpLB1kHKuR9h2TkyFv-HioPAdAzNV4V-a5QClZYld0nXOzwfmztt8DOk695EzeXb-44bYYbtFoQnuWkXL1Kvid7j7_abORAP1VffUQqSpCjP4D1_O2esBsfPCysM5pkVSFux1rHuGu-NbqR6YYH_p9EMx0o7PXonud4yZhpA2rgGzardTIBCvAA6saEX5MtQHwdKjZJZyCm__og-g1lBOhENg3NqgyhVwHaFsf3YdP40')"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-surface via-transparent to-transparent"></div>
                    </div>
                    <div class="p-space-md flex flex-col gap-space-xs items-center">
                        <span class="font-label-sm text-label-sm text-secondary tracking-widest uppercase">Laboratorio Táctico</span>
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface group-hover:text-primary transition-colors">
                            Desglose Táctico: Transiciones rápidas y banda
                        </h3>
                    </div>
                </div>
            </div>
        </section>

        <!-- ROW 4: ENTREVISTAS (Vertical) -->
        <section class="flex flex-col gap-space-md pt-space-lg border-t border-surface-container-highest">
            <div class="flex flex-col items-center justify-center text-center gap-2 mb-space-md">
                <span class="material-symbols-outlined text-[32px] text-primary">forum</span>
                <h2 class="font-headline-lg text-headline-lg uppercase tracking-wide text-on-surface">
                    Entrevistas Exclusivas · Cara a Cara
                </h2>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-gutter text-center">
                <!-- Int 1 -->
                <div class="group relative bg-surface-container rounded-xl overflow-hidden shadow-lg transition-transform duration-300 hover:scale-[1.03] flex flex-col">
                    <div class="relative aspect-[3/4] w-full overflow-hidden">
                        <div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAyFm4_ICSZkFAKrUkpCc3Q5IEza0MjeBQYEie9aJQ1I3FzC-t_cfLw6YA-GyFwDbWcDfjwY6n30b_lLHW-A_aEVjBiQ_ob7tnFCPJfErBsPizqLctI-asB2o9FaLba2-Yso01HA0siae3pQrxv2BNfMN_eIIKzg0z9buUW58Se7hT6IBg6nAArBYsMORGrxvE3untLw4nCQTcYgD_KkjzrzrAf94M5ULia5KL7Busp59w2WfQ1FrY')"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-surface via-surface/80 to-transparent"></div>
                        <div class="absolute inset-0 flex flex-col justify-end p-space-md">
                            <span class="font-label-sm text-label-sm text-primary tracking-widest uppercase mb-1">Goleador Azulgrana</span>
                            <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface group-hover:text-primary transition-colors">Juanto Ortuño</h3>
                        </div>
                    </div>
                </div>
                <!-- Int 2 -->
                <div class="group relative bg-surface-container rounded-xl overflow-hidden shadow-lg transition-transform duration-300 hover:scale-[1.03] flex flex-col">
                    <div class="relative aspect-[3/4] w-full overflow-hidden">
                        <div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDPrI2ppOFXdvPs-KsxzwZoPiHUpbAgTs0OI4WNVgA1WNnfcR26gsUviMzddnFC10h7qwQAWJbMe0YrQaRVc61HZGUOPswJPn_nZbF9ynesSkm18KFdWr5UJY7vWFIyP0N9eb1I0uKpGzXFTRvBuevALh56TYg0-ydgIegnuZ5ji2GFj0UNYvL7_JY8UI6z-CnXD1oBtfhWP-xUIgZ4lpDL4VHFHvNPb_nFucNCFCXChBTymneBS2c')"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-surface via-surface/80 to-transparent"></div>
                        <div class="absolute inset-0 flex flex-col justify-end p-space-md">
                            <span class="font-label-sm text-label-sm text-secondary tracking-widest uppercase mb-1">Presidencia</span>
                            <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface group-hover:text-primary transition-colors">Pascual Pérez</h3>
                        </div>
                    </div>
                </div>
                <!-- Int 3 -->
                <div class="group relative bg-surface-container rounded-xl overflow-hidden shadow-lg transition-transform duration-300 hover:scale-[1.03] flex flex-col">
                    <div class="relative aspect-[3/4] w-full overflow-hidden">
                        <div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD008M5kRDFwvob7Xvtaqj9wTAUdGblFWc3atYKmT11Lb5lB_RkPaDMSL3aUY6zmd3l4GKs9MJaagPJoa-g2vbIfVQGOP_N93SDMZXB-496GAi2tS-trKMoECnVZIBpHmq7Tic1AsRP4Qf9F2Kr1M9OzzXBxjHJ6K5Djlex51OhmAhwVOjwVcita_Dknrc9wCjpNvTYQ68wIpjmmGyY0M0IecqZHIs2z-IV0S2US4GH383YxdNppWU')"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-surface via-surface/80 to-transparent"></div>
                        <div class="absolute inset-0 flex flex-col justify-end p-space-md">
                            <span class="font-label-sm text-label-sm text-primary tracking-widest uppercase mb-1">Leyendas</span>
                            <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface group-hover:text-primary transition-colors">Héroes del Pepico</h3>
                        </div>
                    </div>
                </div>
                <!-- Int 4 -->
                <div class="group relative bg-surface-container rounded-xl overflow-hidden shadow-lg transition-transform duration-300 hover:scale-[1.03] flex flex-col">
                    <div class="relative aspect-[3/4] w-full overflow-hidden">
                        <div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuARUNetmNZNHl1SO9u5OUE2jyAa_tSJlw1JkzBc7viOZCCApcHKhqtj4kC_9qupiEyfJvT78BxeFvUNhaVZI9EfDx6D7--BOD-dKCKNMEDYfmv6rtx6Rwg8GrU6h0FIGxOVvsJ0wBfR8gWXPhbqz8JeJYKHbduto3RCmLmIhVhimGmD2_K_UKbtan6bK1kIJ5KoWp4md0gl8ta--IpEF4hWp_2pchMxlL7UvpFBfjeHlgzkX1H7_sc')"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-surface via-surface/80 to-transparent"></div>
                        <div class="absolute inset-0 flex flex-col justify-end p-space-md">
                            <span class="font-label-sm text-label-sm text-secondary tracking-widest uppercase mb-1">Sala de Máquinas</span>
                            <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface group-hover:text-primary transition-colors">Sergio Ortuño</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ROW 5: PRESENTACIONES -->
        <section class="flex flex-col gap-space-md pt-space-lg border-t border-surface-container-highest">
            <div class="flex flex-col items-center justify-center text-center gap-2 mb-space-md">
                <span class="material-symbols-outlined text-[32px] text-primary-container">verified</span>
                <h2 class="font-headline-lg text-headline-lg uppercase tracking-wide text-on-surface">
                    Presentaciones de Nuevos Fichajes
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter text-center">
                <!-- Fichaje 1 -->
                <div class="group bg-surface-container rounded-xl overflow-hidden shadow-md hover:bg-surface-container-high transition-all flex flex-col">
                    <div class="relative aspect-video w-full">
                        <div class="w-full h-full bg-cover bg-center transition-transform duration-300 group-hover:scale-102" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD0Gk3StNSYcOeNKCENzzThKHbrlvgihp1pUbfIde7WHgCF0L3yyuSqS4-B9UVQXrJ4fRDgxxCvPn7xF76ryF7fKww1XcB7TS3c3x7j3UIppNOVRYH0eCnjBnU508kBo4QnsFIxrB5rloc-RhXGXlJwv6KBZ0cqaRVkltnLHanUqYGJEjugF4eMnlNLAyHFrs9xjdMNQM3Z65ogYDm1-jkQyozTA6yrGIMXLlGx0PulJA_zIx79gcU')"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-surface via-transparent to-transparent"></div>
                    </div>
                    <div class="p-space-md flex flex-col gap-space-xs items-center">
                        <span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider">Delantero Centro</span>
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-1 group-hover:text-primary transition-colors">Fichaje de Invierno</h3>
                    </div>
                </div>
                <!-- Fichaje 2 -->
                <div class="group bg-surface-container rounded-xl overflow-hidden shadow-md hover:bg-surface-container-high transition-all flex flex-col">
                    <div class="relative aspect-video w-full">
                        <div class="w-full h-full bg-cover bg-center transition-transform duration-300 group-hover:scale-102" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuATZiM8itbexj1Ror88A5LfwUNxcTeSjf8Ib4GEoZlsjWHpYw_kbZ0DfZGsgzv9uQqYCQYlC7NHk-kPgqSUWt0gNjlkJZL9yyJsPd7FcoTBkL4yS0tPdW_9IB20rAHP0NgBfHkId6Jzz-fMJlzou3NIHR0x2gtNfa-Y5TE3eXKEUa0nGIXrao23X9_qGZx-rbTaNZACEx5wWJQFgWaOHKzJWYUBYvh-jUSjkdc-2XnGRFI0PLzIYxE')"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-surface via-transparent to-transparent"></div>
                    </div>
                    <div class="p-space-md flex flex-col gap-space-xs items-center">
                        <span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider">Defensa Central</span>
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-1 group-hover:text-primary transition-colors">Refuerzo Defensivo</h3>
                    </div>
                </div>
                <!-- Fichaje 3 -->
                <div class="group bg-surface-container rounded-xl overflow-hidden shadow-md hover:bg-surface-container-high transition-all flex flex-col">
                    <div class="relative aspect-video w-full">
                        <div class="w-full h-full bg-cover bg-center transition-transform duration-300 group-hover:scale-102" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBHrcHRIczgHlGOiOLLEKrgFrHWyO2vcXE30CzZ4nlwqGU9DzpI8uV0ZgaYQ13r4vUWlUqVbqWkC0ILNvUUL3xkV89YKCv4Nd2iMHck-gCJ15QoPlOT8ZeMPna9DlRHCpA4NUA8XXMalmoV2h8lkEBZckiOxVf12rVv9Uu9sWCnZy-rLTjWTCTo9aIRNycjfLWMy4yfaylTC3ulCj2NMiYtaQW59Gi2BO07elxTMv2U4Vzc0DZyBHU')"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-surface via-transparent to-transparent"></div>
                    </div>
                    <div class="p-space-md flex flex-col gap-space-xs items-center">
                        <span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider">Extremo Diestro</span>
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-1 group-hover:text-primary transition-colors">Cesión con Opción</h3>
                    </div>
                </div>
            </div>
        </section>

        <!-- ROW 6: ESPORTS -->
        <section class="flex flex-col gap-space-md pt-space-lg border-t border-surface-container-highest mb-space-xl">
            <div class="flex flex-col items-center justify-center text-center gap-2 mb-space-md">
                <span class="material-symbols-outlined text-[32px] text-secondary">sports_esports</span>
                <h2 class="font-headline-lg text-headline-lg uppercase tracking-wide text-on-surface">
                    eSports & Gaming · Eldense eSports Lab
                </h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-gutter text-center">
                <!-- eSports 1 -->
                <div class="group relative bg-surface-container rounded-xl overflow-hidden shadow-lg transition-transform duration-300 hover:scale-[1.02] flex flex-col">
                    <div class="relative aspect-video w-full overflow-hidden">
                        <div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBo2sb3xTy0Smip7BEivaZ5P8kr6TjfBw2WKh1eyP5OKbRf0K7l1qauXeDjUpapdoALU4Flx9pcxgu9VaD-AOcPRxgdsfrag19ijKrPQLMKANjOISvI7ACN6gD5pHAnzl8cN8PrX37XbGH3niSNNbB-o9Jvkxwf45_8i-eOnkVB3sWQA0HgJKj_GawyBlyVKWtkQ7HqgdR0GKXTI8yW-TFVMtVOA5dwW6U2Tml98F5F4DGTt1T1tkA')"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-surface via-transparent to-transparent"></div>
                    </div>
                    <div class="p-space-md flex flex-col gap-space-xs items-center">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface group-hover:text-primary transition-colors">EA Sports FC 24: CD Eldense vs Betis</h3>
                    </div>
                </div>
                <!-- eSports 2 -->
                <div class="group relative bg-surface-container rounded-xl overflow-hidden shadow-lg transition-transform duration-300 hover:scale-[1.02] flex flex-col">
                    <div class="relative aspect-video w-full overflow-hidden">
                        <div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCTiucU4MkxsYl3pKe_H1UjZU3MK24LstqFL01uqxzGlYCnhuzYUnHlYZKBK4TtsshtGHNErPezHLeUAlprg16XXyFv4tYxuotaFbUXpHxrkW79xne3mRszHuF3iN7o9D1uyqTOCAHjQA3x_y9bGhWjyHYamg2evwx0qtwpNGEqVU6rPzTnu7haRfGrWndMp8H5Q1mcV_oa3wmHDPOL60qtuoZ0X3Kbm0hno0Ds0dh-76SYNrQstQg')"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-surface via-transparent to-transparent"></div>
                    </div>
                    <div class="p-space-md flex flex-col gap-space-xs items-center">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface group-hover:text-primary transition-colors">Rocket League: Top Jugadas</h3>
                    </div>
                </div>
                <!-- eSports 3 -->
                <div class="group relative bg-surface-container rounded-xl overflow-hidden shadow-lg transition-transform duration-300 hover:scale-[1.02] flex flex-col">
                    <div class="relative aspect-video w-full overflow-hidden">
                        <div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAVPh7b3tfR3JrLpQS0MxECc6pRl6dEknpwVE2QeT5nKhFRDCWO5FSoyJNtKnGFNQwUU-fk5Mj6oRHZ7dtnHROt9uAwrXVc_CDH2--wZeiBjlfb7LQzB29UiclqKsBwNSE9vtUhZ3r0WUWwEUCbdB80PhLy1zrOunF6XyUhR8tua66qH1xxSs3Tbi9V4N9VAGAi1F61HsN5GKhg3zGygSpXn3EsB30jaGZ2HEpaD9SLxvfjs3S_iWI')"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-surface via-transparent to-transparent"></div>
                    </div>
                    <div class="p-space-md flex flex-col gap-space-xs items-center">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface group-hover:text-primary transition-colors">Torneo Interno en el Vestuario</h3>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- FOOTER MANTENIDO Y SIMPLIFICADO -->
    <footer class="w-full bg-surface-container-lowest py-space-xl text-center">
        <div class="w-full px-margin mx-auto max-w-4xl flex flex-col items-center justify-center gap-space-lg">
            <div class="flex items-center justify-center gap-space-sm">
                <span class="font-headline-md text-headline-md tracking-wider uppercase text-on-surface">ELDENSE<span class="text-primary-container ml-1">TV</span></span>
            </div>
            <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed max-w-md">
                Canal oficial de streaming del Club Deportivo Eldense. La emoción de LaLiga, documentales exclusivos y el universo azulgrana.
            </p>
            <p class="text-on-surface-variant font-label-sm text-label-sm mt-8 opacity-70">
                © 2026 Club Deportivo Eldense S.A.D. Todos los derechos reservados.
            </p>
        </div>
    </footer>
</main>
<script>
    // Seleccionamos todos los botones que despliegan submenús
    const dropdownButtons = document.querySelectorAll('.group > button');

    dropdownButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation(); // Evita que el clic cierre el menú inmediatamente

            const submenu = button.nextElementSibling;

            // Si hay otros submenús abiertos, los cerramos primero
            document.querySelectorAll('.submenu-container.active').forEach(openMenu => {
                if (openMenu !== submenu) {
                    openMenu.classList.remove('active');
                }
            });

            // Abrimos o cerramos el submenú en el que hemos hecho clic
            submenu.classList.toggle('active');
        });
    });

    // Cierra cualquier submenú si haces clic fuera de ellos en cualquier parte de la pantalla
    document.addEventListener('click', (e) => {
        if (!e.target.closest('.group')) {
            document.querySelectorAll('.submenu-container.active').forEach(openMenu => {
                openMenu.classList.remove('active');
            });
        }
    });
</script>
</body>
</html>