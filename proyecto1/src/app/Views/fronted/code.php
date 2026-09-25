<!DOCTYPE html>

<html class="dark" lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="web_standard" name="shell-type"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
          rel="stylesheet"/>
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&amp;family=Oswald:wght@500;600;700&amp;family=Space+Grotesk:wght@600;700&amp;display=swap"
          rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
          rel="stylesheet"/>
    <style>@layer base {
            html, body {
                margin: 0;
                padding: 0;
            }

            body {
                overscroll-behavior: none;
            }

            main > :first-child {
                margin-top: 0 !important;
            }

            main > :last-child {
                margin-bottom: 0 !important;
            }
        }

        ::-webkit-scrollbar {
            display: none;
        }</style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script id="tailwind-config">tailwind.config = {
            "darkMode": "class", "theme": {
                "extend": {
                    "colors": {
                        "on-background": "#dfe2f0",
                        "secondary-fixed": "#dde1ff",
                        "on-secondary-fixed-variant": "#173bab",
                        "on-surface": "#dfe2f0",
                        "on-primary-container": "#fff6f5",
                        "on-surface-variant": "#e6bdb8",
                        "surface-dim": "#0f131d",
                        "surface-container": "#1b2029",
                        "primary-fixed": "#ffdad6",
                        "outline-variant": "#5c403c",
                        "surface-bright": "#353944",
                        "inverse-on-surface": "#2c303b",
                        "primary": "#ffb4ab",
                        "tertiary": "#ffb4ab",
                        "tertiary-fixed": "#ffdad6",
                        "on-primary": "#690005",
                        "outline": "#ac8884",
                        "on-secondary": "#002584",
                        "primary-container": "#dc2626",
                        "on-primary-fixed": "#410002",
                        "on-secondary-fixed": "#001453",
                        "on-tertiary": "#690005",
                        "surface-container-low": "#171c25",
                        "surface-variant": "#31353f",
                        "on-primary-fixed-variant": "#93000b",
                        "secondary-fixed-dim": "#b8c4ff",
                        "tertiary-fixed-dim": "#ffb4ab",
                        "surface": "#0f131d",
                        "on-tertiary-fixed": "#410002",
                        "surface-container-high": "#262a34",
                        "on-error": "#690005",
                        "error-container": "#93000a",
                        "tertiary-container": "#d6332d",
                        "on-tertiary-container": "#fff7f6",
                        "primary-fixed-dim": "#ffb4ab",
                        "surface-container-highest": "#31353f",
                        "surface-container-lowest": "#0a0e17",
                        "on-error-container": "#ffdad6",
                        "background": "#0f131d",
                        "on-tertiary-fixed-variant": "#93000b",
                        "on-secondary-container": "#a0b1ff",
                        "surface-tint": "#ffb4ab",
                        "secondary": "#b8c4ff",
                        "secondary-container": "#173bab",
                        "inverse-primary": "#bf0715",
                        "inverse-surface": "#dfe2f0",
                        "error": "#ffb4ab"
                    },
                    "borderRadius": {"DEFAULT": "0.125rem", "lg": "0.25rem", "xl": "0.5rem", "full": "0.75rem"},
                    "spacing": {
                        "space-xs": "0.25rem",
                        "gutter-mobile": "0.75rem",
                        "gutter-tv": "2rem",
                        "space-sm": "0.5rem",
                        "space-md": "1rem",
                        "margin-mobile": "1rem",
                        "space-lg": "1.5rem",
                        "space-xl": "2.5rem",
                        "margin": "3.5rem",
                        "margin-tablet": "2rem",
                        "gutter": "1.25rem"
                    },
                    "fontFamily": {
                        "label-sm": ["Space Grotesk"],
                        "headline-sm": ["Oswald"],
                        "body-sm": ["Manrope"],
                        "headline-xl": ["Oswald"],
                        "headline-md": ["Oswald"],
                        "body-lg": ["Manrope"],
                        "label-md": ["Space Grotesk"],
                        "headline-xl-mobile": ["Oswald"],
                        "body-md": ["Manrope"],
                        "display-hero": ["Oswald"],
                        "headline-lg": ["Oswald"],
                        "display-hero-mobile": ["Oswald"],
                        "label-lg": ["Space Grotesk"]
                    },
                    "fontSize": {
                        "label-sm": ["10px", {"lineHeight": "14px", "letterSpacing": "0.08em", "fontWeight": "700"}],
                        "headline-sm": ["18px", {"lineHeight": "24px", "fontWeight": "500"}],
                        "body-sm": ["13px", {"lineHeight": "18px", "fontWeight": "400"}],
                        "headline-xl": ["38px", {"lineHeight": "46px", "letterSpacing": "0.01em", "fontWeight": "600"}],
                        "headline-md": ["22px", {"lineHeight": "28px", "fontWeight": "500"}],
                        "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                        "label-md": ["12px", {"lineHeight": "16px", "letterSpacing": "0.06em", "fontWeight": "600"}],
                        "headline-xl-mobile": ["26px", {
                            "lineHeight": "32px",
                            "letterSpacing": "0.01em",
                            "fontWeight": "600"
                        }],
                        "body-md": ["15px", {"lineHeight": "22px", "fontWeight": "400"}],
                        "display-hero": ["56px", {
                            "lineHeight": "64px",
                            "letterSpacing": "0.02em",
                            "fontWeight": "700"
                        }],
                        "headline-lg": ["28px", {"lineHeight": "36px", "letterSpacing": "0.01em", "fontWeight": "600"}],
                        "display-hero-mobile": ["36px", {
                            "lineHeight": "42px",
                            "letterSpacing": "0.02em",
                            "fontWeight": "700"
                        }],
                        "label-lg": ["14px", {"lineHeight": "18px", "letterSpacing": "0.05em", "fontWeight": "600"}]
                    }
                }
            }
        };</script>
</head>
<body class="bg-surface font-body-md text-on-surface antialiased">
<header class="fixed top-0 left-0 right-0 z-50 bg-surface/90 backdrop-blur-md shadow-[0_4px_24px_rgba(0,0,0,0.6)]">
    <div class="h-20 w-full px-margin flex items-center justify-between gap-gutter">
        <div class="flex items-center gap-space-lg"><a class="flex items-center gap-space-sm shrink-0"
                                                       data-path="inicio" href="#"><img alt="Eldense TV Logo"
                                                                                        class="h-8 w-auto object-contain"
                                                                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDovPeUxIBujfMNL3MdY21BXLHuNJb1hRZiD64tR-VFA78iQmhmA15XnBvFEC5YpwngAekIpOXXIpPcrtitlYSX_CO03XBC8UhB2PjYKc_9PCRDZxV6Tvt67h6KK5exrXFUUCQhjbP0fPmzKsj-ZMVdeugfzPK3yu_sSrpETb9GZFa2Qz5UADuy3gkldxzZtOy6bcGMluuVyUHCSXljbt824Y-1W-AUOrMJzgjjqJbIb7jJG8aKhbA"/><span
                    class="font-headline-md text-headline-md tracking-wider uppercase text-on-surface hidden xl:inline">ELDENSE<span
                        class="text-primary-container ml-1">TV</span></span></a>
            <nav class="hidden lg:flex items-center gap-space-md" data-active-classes="text-on-surface font-semibold"><a
                    aria-current="page" class="transition-colors py-space-xs text-on-surface font-semibold"
                    data-path="inicio" href="#">Inicio</a><a
                    class="font-body-sm text-body-sm text-on-surface-variant hover:text-on-surface transition-colors py-space-xs"
                    data-path="partidos" href="#">Partidos</a><a
                    class="font-body-sm text-body-sm text-on-surface-variant hover:text-on-surface transition-colors py-space-xs"
                    data-path="documentales" href="#">Documentales</a><a
                    class="font-body-sm text-body-sm text-on-surface-variant hover:text-on-surface transition-colors py-space-xs"
                    data-path="ruedas-de-prensa" href="#">Ruedas de Prensa</a><a
                    class="font-body-sm text-body-sm text-on-surface-variant hover:text-on-surface transition-colors py-space-xs"
                    data-path="entrevistas" href="#">Entrevistas</a><a
                    class="font-body-sm text-body-sm text-on-surface-variant hover:text-on-surface transition-colors py-space-xs"
                    data-path="presentaciones" href="#">Presentaciones</a><a
                    class="font-body-sm text-body-sm text-on-surface-variant hover:text-on-surface transition-colors py-space-xs"
                    data-path="esports-gaming" href="#">eSports / Gaming</a><a
                    class="font-body-sm text-body-sm text-on-surface-variant hover:text-on-surface transition-colors py-space-xs"
                    data-path="temporadas" href="#">Temporadas</a></nav>
        </div>
        <div class="flex items-center gap-space-md shrink-0">
            <div class="relative hidden sm:flex items-center">
                <button class="flex items-center gap-space-xs px-space-md py-space-xs rounded-lg bg-surface-container hover:bg-surface-container-high transition-colors text-on-surface"
                        type="button"><span
                        class="font-label-sm text-label-sm text-on-surface-variant">TEMP.</span><span
                        class="font-label-md text-label-md font-bold">2024/25</span><span
                        class="px-1.5 py-0.5 rounded bg-primary-container text-on-primary-container font-label-sm text-label-sm tracking-widest uppercase">ACTUAL</span><span
                        class="material-symbols-outlined text-[18px] text-on-surface-variant">expand_more</span>
                </button>
            </div>
            <button class="w-9 h-9 rounded-full bg-surface-container flex items-center justify-center text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-colors"
                    type="button"><span class="material-symbols-outlined text-[20px]">search</span></button>
            <button class="relative w-9 h-9 rounded-full bg-surface-container flex items-center justify-center text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-colors"
                    type="button"><span class="material-symbols-outlined text-[20px]">notifications</span><span
                    class="absolute -top-1 -right-1 flex h-4 min-w-[1rem] items-center justify-center rounded-full bg-primary-container px-1 font-label-sm text-label-sm text-on-primary-container">3</span>
            </button>
            <div class="hidden md:flex flex-col text-right pr-space-xs pl-space-sm"><span
                    class="font-label-sm text-label-sm text-secondary tracking-wider uppercase">Abonado Nº 2.841</span><span
                    class="font-body-sm text-body-sm text-on-surface-variant">Pepico Amat · Tribuna</span></div>
            <div class="relative flex items-center pl-space-xs">
                <button class="flex items-center gap-space-xs rounded-full p-0.5 hover:ring-2 hover:ring-secondary transition-all"
                        type="button"><img alt="Profile" class="w-8 h-8 rounded-full object-cover"
                                           src="https://lh3.googleusercontent.com/aida-public/AB6AXuB30SxzZDpW1mNp8vTFZWX7AzxMh4uo-vgGwo0PdDRw4in8s6UV78N--XepcAnFoY5Z7EEOWkAqKhVOSIns_qfGCauJJZYEefR4An0-0n8fBXGyhJmbKPFyXQKGyksazMszHjjOxUAprKpgTNjNKAjNeoxpLxpGdpenr-ev8jQPDDO8kba3Zxm0IlsYeE8PnUpSOjaZEvDFGGjCd4v8OyzN0DW2FVGVdQxuHYOfz3PpNhUMfHdz8WY"/><span
                        class="material-symbols-outlined text-[16px] text-on-surface-variant hidden lg:inline">arrow_drop_down</span>
                </button>
            </div>
        </div>
    </div>
</header>
<main class="w-full pt-20 bg-surface min-h-[calc(100vh-20rem)]">
    <div class="flex flex-col w-full">
        <!-- Subscription Status Pill Banner -->
        <div class="w-full px-margin-mobile md:px-margin pt-space-sm pb-space-xs">
            <div class="w-full bg-surface-container-high/70 backdrop-blur-md rounded-xl p-space-sm flex flex-wrap items-center justify-between gap-space-sm shadow-xl">
                <div class="flex items-center gap-space-sm">
<span class="flex h-2.5 w-2.5 relative">
<span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
<span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-primary-container"></span>
</span>
                    <span class="font-label-sm text-label-sm text-secondary tracking-widest uppercase">Pase de Temporada 24/25 Activo</span>
                    <span class="hidden sm:inline text-on-surface-variant font-body-sm text-body-sm">·</span>
                    <span class="font-body-sm text-body-sm text-on-surface">Conectado como Abonado Oficial: <strong
                            class="text-on-surface font-semibold">Socio #2.841</strong></span>
                </div>
                <div class="flex items-center gap-space-xs">
                    <span class="px-space-sm py-0.5 rounded bg-secondary-container text-on-secondary-container font-label-sm text-label-sm tracking-wide uppercase">Acceso Total VIP</span>
                    <span class="font-body-sm text-body-sm text-on-surface-variant hidden md:inline">Tribuna Cubierta Pepico Amat</span>
                </div>
            </div>
        </div>
        <!-- Hero Cinematic Billboard -->
        <section class="relative w-full overflow-hidden -mt-20 pt-20">
            <div class="relative w-full min-h-[580px] lg:min-h-[720px] flex items-end">
                <!-- Background Media Layer -->
                <div class="absolute inset-0 bg-cover bg-center w-full h-full transform scale-105 transition-transform duration-1000 ease-out"
                     data-alt="Cinematic wide-angle documentary shot of CD Eldense football squad celebrating an intense emotional promotion victory under floodlights inside Nuevo Pepico Amat stadium, high contrast midnight navy blue shadows and deep crimson flare reflections, locker room tunnel backdrop with gritty authentic documentary mood, cinematic 8k color grading."
                     style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuB7WjKGqzWbKpiHp3Bv2lypn9mZaFzfvYyFZ32aavMQv43aNXae3H-G-ZN0aL7vh_Qpy26epm21ruVpSbsCLsDCMQ9gW6vjWsanS_9hDJpB38hqsxMF7NtE0VRoAbTmHj4B6PmvDWRU8bOAPyXLiAdKcKFfnv4a0w0eLHpmgRjeRL_97ov84tje-ltxicJ452q7RYXOR4OkbM0AGnWIy_htdtJVhB-IBWqqufapgvNdnCvZztzH0a8')"></div>
                <!-- Scrims and Overlays -->
                <div class="absolute inset-0 bg-gradient-to-r from-surface via-surface/80 to-transparent z-10 w-full lg:w-4/5"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-surface via-surface/30 to-surface/40 z-10"></div>
                <div class="absolute inset-0 bg-gradient-to-br from-secondary-container/20 via-transparent to-primary-container/15 mix-blend-screen pointer-events-none z-10"></div>
                <!-- Hero Content -->
                <div class="relative z-20 w-full px-margin-mobile md:px-margin pb-space-xl max-w-4xl flex flex-col gap-space-md">
                    <!-- Brand & Premiere Chip -->
                    <div class="flex flex-wrap items-center gap-space-xs">
<span class="px-space-sm py-1 rounded bg-primary-container text-on-primary-container font-label-sm text-label-sm uppercase tracking-widest flex items-center gap-1 shadow-md">
<span class="material-symbols-outlined text-[14px]">stars</span>
            Eldense Originals
          </span>
                        <span class="px-space-sm py-1 rounded bg-surface-container-high/80 backdrop-blur-md text-secondary font-label-sm text-label-sm uppercase tracking-wider">
            Ultra HD 4K
          </span>
                        <span class="px-space-sm py-1 rounded bg-surface-container-high/80 backdrop-blur-md text-on-surface-variant font-label-sm text-label-sm">
            1h 48m
          </span>
                        <span class="px-space-sm py-1 rounded bg-surface-container-high/80 backdrop-blur-md text-on-surface font-label-sm text-label-sm">
            Temporada 2024/25
          </span>
                        <span class="px-space-xs py-0.5 rounded bg-surface-container-highest text-on-surface-variant font-label-sm text-label-sm">
            +12
          </span>
                        <span class="px-space-sm py-1 rounded bg-surface-container-high/80 backdrop-blur-md text-on-surface-variant font-label-sm text-label-sm flex items-center gap-1">
<span class="material-symbols-outlined text-[14px] text-primary">spatial_audio_off</span> 5.1 Surround
          </span>
                    </div>
                    <!-- Hero Title -->
                    <div class="flex flex-col">
                        <span class="font-label-md text-label-md text-primary tracking-widest uppercase mb-1">Largometraje Documental Exclusivo</span>
                        <h1 class="font-display-hero text-display-hero uppercase tracking-wide text-on-surface leading-[0.95] max-w-3xl">
                            EL MILAGRO DE ELDA
                        </h1>
                        <p class="font-headline-md text-headline-md text-on-surface-variant uppercase tracking-wider mt-1">
                            Camino a Segunda División · La Mística Azulgrana
                        </p>
                    </div>
                    <!-- Synopsis -->
                    <p class="font-body-lg text-body-lg text-on-surface/90 max-w-2xl leading-relaxed">
                        Una mirada íntima e inédita al vestuario del CD Eldense durante la épica temporada en el Nuevo
                        Pepico Amat. Testimonios del cuerpo técnico, el drama de los playoffs decisivos y el regreso a
                        la élite del fútbol profesional español tras seis décadas.
                    </p>
                    <!-- CTA Action Bar -->
                    <div class="flex flex-wrap items-center gap-space-md pt-space-xs">
                        <button class="group flex items-center gap-space-sm px-space-xl py-space-md rounded-xl bg-primary-container hover:bg-tertiary-container text-on-primary-container font-label-lg text-label-lg uppercase tracking-wider shadow-2xl transition-all hover:scale-[1.03] active:scale-95"
                                type="button">
                            <span class="material-symbols-outlined text-[26px]"
                                  style="font-variation-settings: 'FILL' 1;">play_arrow</span>
                            <span>Reproducir Ahora</span>
                        </button>
                        <button class="flex items-center gap-space-sm px-space-lg py-space-md rounded-xl bg-surface-container-high/90 hover:bg-surface-bright text-on-surface font-label-lg text-label-lg uppercase tracking-wider backdrop-blur-md shadow-lg transition-all hover:scale-[1.02]"
                                type="button">
                            <span class="material-symbols-outlined text-[20px]">info</span>
                            <span>Más Información</span>
                        </button>
                        <button class="w-12 h-12 rounded-xl bg-surface-container-high/80 hover:bg-surface-bright text-on-surface flex items-center justify-center backdrop-blur-md shadow-lg transition-all hover:scale-105 active:scale-95"
                                title="Añadir a Mi Lista" type="button">
                            <span class="material-symbols-outlined text-[22px]">add</span>
                        </button>
                        <button class="w-12 h-12 rounded-xl bg-surface-container-high/80 hover:bg-surface-bright text-on-surface flex items-center justify-center backdrop-blur-md shadow-lg transition-all hover:scale-105 active:scale-95"
                                title="Compartir" type="button">
                            <span class="material-symbols-outlined text-[22px]">share</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <!-- Interactive Season Switcher Rail -->
        <section
            class="w-full px-margin-mobile md:px-margin py-space-md bg-surface-container-lowest shadow-md sticky top-20 z-40">
            <div class="flex items-center justify-between gap-space-md overflow-x-auto pb-space-xs scrollbar-none">
                <div class="flex items-center gap-space-xs shrink-0">
                    <span class="material-symbols-outlined text-[20px] text-primary-container mr-1">history_toggle_off</span>
                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant pr-space-xs">Catálogo:</span>
                    <button class="px-space-md py-space-xs rounded-lg font-label-md text-label-md bg-surface-container text-on-surface-variant hover:text-on-surface transition-colors"
                            type="button">
                        Todos los Contenidos
                    </button>
                    <button class="px-space-md py-space-xs rounded-lg font-label-md text-label-md bg-primary-container text-on-primary-container font-bold shadow-sm transition-all flex items-center gap-1"
                            type="button">
                        <span>Temporada 2024/25</span>
                        <span class="w-1.5 h-1.5 rounded-full bg-on-primary-container"></span>
                    </button>
                    <button class="px-space-md py-space-xs rounded-lg font-label-md text-label-md bg-surface-container text-on-surface-variant hover:text-on-surface transition-colors"
                            type="button">
                        Temporada 2023/24
                    </button>
                    <button class="px-space-md py-space-xs rounded-lg font-label-md text-label-md bg-surface-container text-on-surface-variant hover:text-on-surface transition-colors"
                            type="button">
                        Temporada 2022/23 (Ascenso)
                    </button>
                    <button class="px-space-md py-space-xs rounded-lg font-label-md text-label-md bg-surface-container text-on-surface-variant hover:text-on-surface transition-colors"
                            type="button">
                        Archivo Histórico Centenario
                    </button>
                </div>
                <div class="flex items-center gap-space-xs shrink-0">
                    <button class="px-space-sm py-space-xs rounded bg-surface-container-high text-on-surface-variant hover:text-on-surface font-label-sm text-label-sm flex items-center gap-1"
                            type="button">
                        <span class="material-symbols-outlined text-[16px]">tune</span>
                        <span>Filtrar</span>
                    </button>
                </div>
            </div>
        </section>
        <!-- Main OTT Horizontal Rails Container -->
        <div class="w-full flex flex-col gap-space-xl px-margin-mobile md:px-margin pt-space-lg">
            <!-- ROW 1: EN DIRECTO & PRÓXIMOS PARTIDOS -->
            <section class="flex flex-col gap-space-md">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-space-sm">
<span class="flex h-3 w-3 relative">
<span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary-container opacity-90"></span>
<span class="relative inline-flex rounded-full h-3 w-3 bg-primary-container"></span>
</span>
                        <h2 class="font-headline-lg text-headline-lg uppercase tracking-wide text-on-surface">
                            En Directo &amp; Próximos Partidos
                        </h2>
                        <span class="font-label-sm text-label-sm text-secondary bg-secondary-container px-space-xs py-0.5 rounded tracking-widest uppercase">
            LaLiga Hypermotion
          </span>
                    </div>
                    <div class="flex items-center gap-space-xs">
                        <button class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-colors"
                                type="button">
                            <span class="material-symbols-outlined text-[18px]">chevron_left</span>
                        </button>
                        <button class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-colors"
                                type="button">
                            <span class="material-symbols-outlined text-[18px]">chevron_right</span>
                        </button>
                    </div>
                </div>
                <!-- Horizontal Cards Row -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">
                    <!-- Live Featured Broadcast Card (Featured Large) -->
                    <div class="relative bg-surface-container-low rounded-xl overflow-hidden shadow-2xl group flex flex-col justify-between p-space-md">
                        <div class="absolute inset-0 z-0">
                            <div class="w-full h-full bg-cover bg-center transition-transform duration-700 group-hover:scale-105"
                                 data-alt="Dusk stadium lighting over the Estadio Municipal Nuevo Pepico Amat with vibrant green pitch, roaring red and blue banner crowds, modern broadcast television camera rig in foreground framing the arena."
                                 style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBjIwMZSYJthZ1e-fodS7ovm5r2uJEXNurEgSTr3hx7AKIdXClGjZCxAd_wtwTzgS9NzY3zrIG3al97wOfF2VYnnQjaXbPrFKvclpVavKmsf904wXh97lHVnaj5XfpBga-xODmtJs7Wa9ZRYcqYh94sQ6hTPBeifd_oqkkf9o4WP0mTd4dHywH_f-_lEHF1T8XSvcFzmv1GKrdHu_4YYJTmSV2-EIiY7s1Ua7x8dNR3D-Co9vDxo8E')"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-surface-dim via-surface-dim/85 to-surface-dim/40"></div>
                        </div>
                        <div class="relative z-10 flex items-center justify-between mb-space-lg">
<span class="px-space-sm py-1 rounded bg-primary-container text-on-primary-container font-label-sm text-label-sm uppercase tracking-widest font-bold flex items-center gap-1.5 shadow-lg">
<span class="w-2 h-2 rounded-full bg-on-primary-container animate-pulse"></span>
              EN DIRECTO HOY
            </span>
                            <span class="font-label-md text-label-md text-on-surface-variant bg-surface-dim/80 backdrop-blur-md px-space-sm py-1 rounded">
              Jornada 28 · LaLiga
            </span>
                        </div>
                        <div class="relative z-10 flex flex-col gap-space-sm my-space-md">
                            <div class="flex items-center justify-around py-space-sm bg-surface-dim/60 backdrop-blur-md rounded-xl">
                                <div class="flex flex-col items-center gap-1">
                                    <div class="w-14 h-14 rounded-full bg-surface-container-highest flex items-center justify-center p-2 shadow-inner">
                                        <span class="material-symbols-outlined text-[32px] text-primary">sports_soccer</span>
                                    </div>
                                    <span class="font-headline-sm text-headline-sm uppercase tracking-wider text-on-surface">CD Eldense</span>
                                    <span class="font-label-sm text-label-sm text-secondary">Local</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <span class="font-headline-lg text-headline-lg text-primary tracking-widest">20:30</span>
                                    <span class="font-label-sm text-label-sm uppercase text-on-surface-variant tracking-wider">Previa 19:45h</span>
                                </div>
                                <div class="flex flex-col items-center gap-1">
                                    <div class="w-14 h-14 rounded-full bg-surface-container-highest flex items-center justify-center p-2 shadow-inner">
                                        <span class="material-symbols-outlined text-[32px] text-secondary">shield</span>
                                    </div>
                                    <span class="font-headline-sm text-headline-sm uppercase tracking-wider text-on-surface">Real Zaragoza</span>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">Visitante</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between text-on-surface-variant font-body-sm text-body-sm px-space-xs">
                                <span>Nuevo Pepico Amat</span>
                                <span class="text-primary font-label-sm text-label-sm">Narración: Carlos Martínez &amp; P. Amat</span>
                            </div>
                        </div>
                        <div class="relative z-10 flex items-center gap-space-sm pt-space-xs">
                            <button class="flex-1 py-space-sm px-space-md rounded-lg bg-primary-container hover:bg-tertiary-container text-on-primary-container font-label-md text-label-md uppercase tracking-wider flex items-center justify-center gap-2 transition-all shadow-md"
                                    type="button">
                                <span class="material-symbols-outlined text-[18px]">live_tv</span>
                                <span>Ir a la Emisión Directa</span>
                            </button>
                            <button class="p-space-sm rounded-lg bg-surface-container hover:bg-surface-bright text-on-surface transition-colors"
                                    title="Activar Notificación" type="button">
                                <span class="material-symbols-outlined text-[20px]">notifications_active</span>
                            </button>
                        </div>
                    </div>
                    <!-- Match Replay 1 -->
                    <div class="group relative bg-surface-container rounded-xl overflow-hidden shadow-lg transition-transform duration-300 hover:scale-[1.02] flex flex-col">
                        <div class="relative aspect-video w-full overflow-hidden">
                            <div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                                 data-alt="Intense high-angle action shot of CD Eldense striker celebrating a stoppage time winning goal, blue and burgundy striped jersey, screaming joy with fans reaching from the stands, stadium floodlights cutting rain mist."
                                 style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDz_a2Brq1Z8MXAyfjOHBqUwtH3A44rxmW9ak7JtGEUIq3Os5KzciQ9m-xQr3yGdYeGdBpBLZfFLL2SCeJwbkYk0OqeeudN5pwquDaKy_ppkab_m3I8yGfWWsfYMi7LpXf8baXORnxaF5PXFSzywd-6WPG3NjhdS0r1fZY951A91I__lENRHnfz6vwAOKULDZhOmCCFq9vBzkUdC7_AYzFA6L7Knkr_LUgNLaAFkO6O0rthkpGuo8A')"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-surface via-transparent to-transparent"></div>
                            <span class="absolute top-space-xs left-space-xs px-space-xs py-0.5 rounded bg-surface-container-lowest/90 font-label-sm text-label-sm uppercase tracking-wider text-on-surface">
              Partido Completo
            </span>
                            <span class="absolute bottom-space-xs right-space-xs px-space-xs py-0.5 rounded bg-surface-dim/90 font-label-sm text-label-sm text-on-surface">
              96:40
            </span>
                            <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-surface-dim/40 backdrop-blur-xs">
                                <div class="w-12 h-12 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center shadow-xl">
                                    <span class="material-symbols-outlined text-[28px]"
                                          style="font-variation-settings: 'FILL' 1;">play_arrow</span>
                                </div>
                            </div>
                        </div>
                        <div class="p-space-md flex flex-col gap-space-xs flex-1 justify-between">
                            <div class="flex flex-col">
                                <div class="flex items-center justify-between text-on-surface-variant font-label-sm text-label-sm mb-1">
                                    <span>Jornada 27 · Resumen y Partido</span>
                                    <span class="text-primary font-bold">FINAL 2 - 1</span>
                                </div>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface group-hover:text-primary transition-colors">
                                    CD Eldense vs Real Oviedo
                                </h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mt-1">
                                    Remontada memorable en el tramo final con doblete épico para afianzar los puestos de
                                    tranquilidad.
                                </p>
                            </div>
                            <!-- Viewing progress tracker -->
                            <div class="w-full mt-space-sm flex flex-col gap-1">
                                <div class="w-full h-1 bg-surface-variant rounded-full overflow-hidden">
                                    <div class="h-full bg-primary-container w-3/4 rounded-full"></div>
                                </div>
                                <span class="font-label-sm text-label-sm text-on-surface-variant">Reanudar en min 72'</span>
                            </div>
                        </div>
                    </div>
                    <!-- Match Replay 2 -->
                    <div class="group relative bg-surface-container rounded-xl overflow-hidden shadow-lg transition-transform duration-300 hover:scale-[1.02] flex flex-col">
                        <div class="relative aspect-video w-full overflow-hidden">
                            <div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                                 data-alt="Tactical defensive sequence under stadium lights at El Sardinero stadium, CD Eldense goalkeeper making a flying heroic fingertip save against Racing de Santander, dynamic sports photography with rich blue and deep shadows."
                                 style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCaFcD-sW1jS9MTauPoq88fyS7zXt-Jj8qoOMV98lo4C0XEo5igSAqXm846pQXiPEBPoywU0955pHHUVVIZJVdK1W-5OS1GCNugnbXhQpZV38c_m9ACl0AZlczdyAFmlp067ich0Gn_TYpMRYH8OooznZXMzhfnznWl6nKN7EOclL-OyVIi4Paci6pe7YLWNBKRlRwwM5ubqKohMv5PQC3u7OK6j_5mYyGfwzBAV4JT4nV9rRNAC5w')"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-surface via-transparent to-transparent"></div>
                            <span class="absolute top-space-xs left-space-xs px-space-xs py-0.5 rounded bg-surface-container-lowest/90 font-label-sm text-label-sm uppercase tracking-wider text-on-surface">
              Highlights HD
            </span>
                            <span class="absolute bottom-space-xs right-space-xs px-space-xs py-0.5 rounded bg-surface-dim/90 font-label-sm text-label-sm text-on-surface">
              14:22
            </span>
                            <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-surface-dim/40 backdrop-blur-xs">
                                <div class="w-12 h-12 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center shadow-xl">
                                    <span class="material-symbols-outlined text-[28px]"
                                          style="font-variation-settings: 'FILL' 1;">play_arrow</span>
                                </div>
                            </div>
                        </div>
                        <div class="p-space-md flex flex-col gap-space-xs flex-1 justify-between">
                            <div class="flex flex-col">
                                <div class="flex items-center justify-between text-on-surface-variant font-label-sm text-label-sm mb-1">
                                    <span>Jornada 26 · Fuera de Casa</span>
                                    <span class="text-on-surface font-bold">FINAL 1 - 1</span>
                                </div>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface group-hover:text-primary transition-colors">
                                    Racing de Santander vs CD Eldense
                                </h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mt-1">
                                    Punto de oro obtenido en los campos de Sport con actuación magistral del guardameta
                                    azulgrana.
                                </p>
                            </div>
                            <div class="w-full mt-space-sm flex items-center justify-between font-label-sm text-label-sm text-on-surface-variant">
                                <span>Publicado hace 4 días</span>
                                <span class="flex items-center gap-1 text-secondary"><span
                                        class="material-symbols-outlined text-[14px]">hd</span> 1080p 60fps</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ROW 2: DOCUMENTALES & SERIES ORIGINALES -->
            <section class="flex flex-col gap-space-md">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-space-sm">
                        <span class="material-symbols-outlined text-primary text-[24px]">movie_filter</span>
                        <h2 class="font-headline-lg text-headline-lg uppercase tracking-wide text-on-surface">
                            Documentales &amp; Series Originales
                        </h2>
                        <span class="font-label-sm text-label-sm text-on-surface-variant hidden sm:inline">Exclusivo Socios Eldense TV</span>
                    </div>
                    <a class="font-label-md text-label-md text-secondary hover:text-on-surface transition-colors flex items-center gap-1 uppercase tracking-wider"
                       href="#">
                        <span>Ver catálogo</span>
                        <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                    </a>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-gutter">
                    <!-- Docu Card 1 -->
                    <div class="group relative bg-surface-container rounded-xl overflow-hidden shadow-lg transition-transform duration-300 hover:scale-[1.03] flex flex-col">
                        <div class="relative aspect-[16/10] w-full overflow-hidden">
                            <div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                                 data-alt="Intense behind-the-scenes locker room speech with head coach tactical board, players focused listening with sweat and determination, dramatic spotlighting inside Eldense dressing room."
                                 style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBNMuTsiP-oDBFAQ8QYXLmacaTxzlSLGLIuk2NdlT4veGgrDEGz6JsgtBVcfiMxye5N4wdc2RICSuCJ9iq6iTM5Kh9yH8tpU2Ii1VWy1AUDBXxG8a-y3hKxwe_P57930sbpqHA7d4LvU0yUzhkq6_LSA3yUp2BbWxns8-wpJ6Q7SFexIuurPhhKUZ7UdYEWC62WV2LIgqRVHA4HQxXbtOKFcP1cJcWiUqQQ-zAPghtigAHvok5G4N0')"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-surface via-transparent to-transparent"></div>
                            <span class="absolute top-space-xs left-space-xs px-space-xs py-0.5 rounded bg-primary-container font-label-sm text-label-sm uppercase tracking-wider text-on-primary-container font-bold">
              Nuevo Episodio
            </span>
                            <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-surface-dim/50">
                                <span class="material-symbols-outlined text-[36px] text-on-surface"
                                      style="font-variation-settings: 'FILL' 1;">play_circle</span>
                            </div>
                        </div>
                        <div class="p-space-md flex flex-col flex-1 justify-between">
                            <div>
                                <span class="font-label-sm text-label-sm text-secondary tracking-widest uppercase">Serie Docu · T1:E4</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-1 group-hover:text-primary transition-colors">
                                    Alma Azulgrana: Sangre y Táctica
                                </h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mt-1">
                                    La tensión en el vestuario previa al derbi y las decisiones del cuerpo técnico en
                                    los minutos críticos.
                                </p>
                            </div>
                            <!-- Progress Bar -->
                            <div class="mt-space-sm pt-space-xs">
                                <div class="w-full h-1 bg-surface-variant rounded-full overflow-hidden">
                                    <div class="h-full bg-primary-container w-2/5"></div>
                                </div>
                                <div class="flex justify-between items-center mt-1 font-label-sm text-label-sm text-on-surface-variant">
                                    <span>18m restantes</span>
                                    <span>45m tot.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Docu Card 2 -->
                    <div class="group relative bg-surface-container rounded-xl overflow-hidden shadow-lg transition-transform duration-300 hover:scale-[1.03] flex flex-col">
                        <div class="relative aspect-[16/10] w-full overflow-hidden">
                            <div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                                 data-alt="Historical vintage black and white framed archival photo blending into modern architectural photography of Estadio Nuevo Pepico Amat in Elda, nostalgic sunset golden hour football stadium mood."
                                 style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBsFcW7RS1vA4N7wRvxqpBFKiC-WZPDD-xxIb0JD2xpya8v043MkoRp0wnOOy2p44erh6c6OVotpDfS0PWtQeGMqo-jQxSMbzyce3N7sPZ22me9CLZ0cXEFmlmJvxERYylUvAr6dBPmFMxEJO0E56REMo0iuhrWnFfBkLU5xzzQGOFmwZILKmanpznAqg9gH8lZCmvOX-D3YIvI2ygrbCipRJNhGXkwu2MvxdTSH87XNqo1HjoFNtk')"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-surface via-transparent to-transparent"></div>
                            <span class="absolute top-space-xs left-space-xs px-space-xs py-0.5 rounded bg-surface-container-highest font-label-sm text-label-sm uppercase tracking-wider text-on-surface">
              Especial Histórico
            </span>
                            <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-surface-dim/50">
                                <span class="material-symbols-outlined text-[36px] text-on-surface"
                                      style="font-variation-settings: 'FILL' 1;">play_circle</span>
                            </div>
                        </div>
                        <div class="p-space-md flex flex-col flex-1 justify-between">
                            <div>
                                <span class="font-label-sm text-label-sm text-secondary tracking-widest uppercase">Documental Único</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-1 group-hover:text-primary transition-colors">
                                    Pepico Amat: 60 Años de Mística
                                </h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mt-1">
                                    La historia viva del templo eldente, desde su fundación hasta su remodelación
                                    moderna para el fútbol profesional.
                                </p>
                            </div>
                            <div class="mt-space-sm flex items-center justify-between text-on-surface-variant font-label-sm text-label-sm pt-space-xs">
                                <span>Duración: 1h 12m</span>
                                <span class="text-primary font-bold">4K HDR</span>
                            </div>
                        </div>
                    </div>
                    <!-- Docu Card 3 -->
                    <div class="group relative bg-surface-container rounded-xl overflow-hidden shadow-lg transition-transform duration-300 hover:scale-[1.03] flex flex-col">
                        <div class="relative aspect-[16/10] w-full overflow-hidden">
                            <div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                                 data-alt="Youth academy soccer training session at sunset on Elda training grounds, ambitious young athletes running tactical drills with coaches under dynamic low lighting and stadium silhouettes."
                                 style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA1cJjbkJn-g3pUJJDM6a15IScbNwk1J1vYPg7kq6h_5iWW165sDBEXlcvjPtCHr05Mp1gGCFU8gVhjKz-U2LD6M2MRTMYCy3ped3bv-NNZF7K9Y76NqFNpZ3mV73JVnlTn7a2TVN-84l407vDmliG2fniOErxXFc-X1pcmMSmimWhFcemCVgUUVx7BdWAqConMzxE67QJqB1UfhBWOHX_iVfpTsChl5yljF8MtHUzdj_4gIz80ACE')"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-surface via-transparent to-transparent"></div>
                            <span class="absolute top-space-xs left-space-xs px-space-xs py-0.5 rounded bg-secondary-container font-label-sm text-label-sm uppercase tracking-wider text-on-secondary-container font-bold">
              Cantera
            </span>
                            <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-surface-dim/50">
                                <span class="material-symbols-outlined text-[36px] text-on-surface"
                                      style="font-variation-settings: 'FILL' 1;">play_circle</span>
                            </div>
                        </div>
                        <div class="p-space-md flex flex-col flex-1 justify-between">
                            <div>
                                <span class="font-label-sm text-label-sm text-secondary tracking-widest uppercase">Miniserie · Ep. 1</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-1 group-hover:text-primary transition-colors">
                                    Fábrica de Elda: El Futuro
                                </h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mt-1">
                                    Descubre cómo se forjan las jóvenes promesas que sueñan con vestir la camiseta del
                                    primer equipo en Segunda.
                                </p>
                            </div>
                            <div class="mt-space-sm flex items-center justify-between text-on-surface-variant font-label-sm text-label-sm pt-space-xs">
                                <span>32 min</span>
                                <span>HD 1080p</span>
                            </div>
                        </div>
                    </div>
                    <!-- Docu Card 4 -->
                    <div class="group relative bg-surface-container rounded-xl overflow-hidden shadow-lg transition-transform duration-300 hover:scale-[1.03] flex flex-col">
                        <div class="relative aspect-[16/10] w-full overflow-hidden">
                            <div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                                 data-alt="Celebratory football open bus parade through Elda city streets surrounded by thousands of cheering fans waving blue and red flags and smoke flares, golden sunlight celebration photography."
                                 style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBd28cFXmIlonCOUf9j5pjvXJReFhjAXAWHmIW20SHcZLocX8JDlpiNDpgKhZxxEK4fMGmTXypkSDl1H67waIaJ9XLBnJC7bsVWMu6wxyaKupg2kL6gsfpLf4ryyqXQsOg-UH1S9BEbPRD-aOt6U3ZxdSEzeYE8zzedWI393l2pwCW_7RuzhdPLzjIwTdvmA-Nmt9hK37pZa4J7L2bHV5oY5_pinkoPVbMHgVpMii6FUW3Qx1occ8w')"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-surface via-transparent to-transparent"></div>
                            <span class="absolute top-space-xs left-space-xs px-space-xs py-0.5 rounded bg-surface-container-highest font-label-sm text-label-sm uppercase tracking-wider text-on-surface">
              Celebración Oficial
            </span>
                            <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-surface-dim/50">
                                <span class="material-symbols-outlined text-[36px] text-on-surface"
                                      style="font-variation-settings: 'FILL' 1;">play_circle</span>
                            </div>
                        </div>
                        <div class="p-space-md flex flex-col flex-1 justify-between">
                            <div>
                                <span class="font-label-sm text-label-sm text-secondary tracking-widest uppercase">Película Oficial</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-1 group-hover:text-primary transition-colors">
                                    El Día Que Elda No Durmió
                                </h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mt-1">
                                    La fiesta del ascenso: la rúa por las calles de la ciudad y el homenaje
                                    multitudinario a la plantilla histórica.
                                </p>
                            </div>
                            <div class="mt-space-sm flex items-center justify-between text-on-surface-variant font-label-sm text-label-sm pt-space-xs">
                                <span>58 min</span>
                                <span class="text-primary font-bold">4K Remaster</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ROW 3: RUEDAS DE PRENSA & ZONA MIXTA -->
            <section class="flex flex-col gap-space-md">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-space-sm">
                        <span class="material-symbols-outlined text-secondary text-[24px]">mic</span>
                        <h2 class="font-headline-lg text-headline-lg uppercase tracking-wide text-on-surface">
                            Ruedas de Prensa &amp; Zona Mixta
                        </h2>
                        <span class="font-label-sm text-label-sm text-primary bg-primary-container/20 px-space-xs py-0.5 rounded tracking-widest uppercase">
            Sala Pepico Amat
          </span>
                    </div>
                    <div class="flex items-center gap-space-xs">
                        <button class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-colors"
                                type="button">
                            <span class="material-symbols-outlined text-[18px]">chevron_left</span>
                        </button>
                        <button class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-colors"
                                type="button">
                            <span class="material-symbols-outlined text-[18px]">chevron_right</span>
                        </button>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
                    <!-- Press Card 1 -->
                    <div class="group bg-surface-container rounded-xl overflow-hidden shadow-md hover:bg-surface-container-high transition-all flex flex-col">
                        <div class="relative aspect-video w-full">
                            <div class="w-full h-full bg-cover bg-center transition-transform duration-300 group-hover:scale-102"
                                 data-alt="Football head coach seated at formal press conference table with microphones and official Eldense sponsor backdrop, expressing passionate analytical insights to sports journalists."
                                 style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAcc7c46sX8T-VKo-NCNpAgiUmvswOVMeAzJUYna9k2q0W_sMdGb0tN2kNykgOm3I7xvTDJZ3InOSYqO5nBzD3QL3rN7iPHmqOXdMPxRXkFvhzzvBjcc2zfojjLLSyGtDjPVo14I99fYpIyC0OBnTiqx3HQJbTEFk4i0SviDAiwruvBthwdoxzsVnvinQQ8cZs2arpEYwS4jGPRYl0oJ3fqSZNXhLnKEMKNZ1xYi0YMIBohUob60gY')"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-surface via-transparent to-transparent"></div>
                            <span class="absolute bottom-space-xs left-space-xs px-space-xs py-0.5 rounded bg-surface-dim font-label-sm text-label-sm text-on-surface">
              Post-Partido J27
            </span>
                            <span class="absolute bottom-space-xs right-space-xs px-space-xs py-0.5 rounded bg-primary-container text-on-primary-container font-label-sm text-label-sm">
              24:18
            </span>
                        </div>
                        <div class="p-space-md flex flex-col gap-space-xs">
                            <span class="font-label-sm text-label-sm text-primary tracking-widest uppercase">Entrenador Principal</span>
                            <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface group-hover:text-primary transition-colors">
                                Dani Ponz: "La comunión con la grada en los últimos minutos nos dio la victoria"
                            </h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2">
                                Análisis pormenorizado de las rotaciones, el planteamiento defensivo frente al Real
                                Oviedo y la moral del grupo.
                            </p>
                            <div class="flex items-center justify-between text-on-surface-variant font-label-sm text-label-sm pt-space-xs">
                                <span>Ayer · 21:40h</span>
                                <span class="flex items-center gap-1"><span
                                        class="material-symbols-outlined text-[14px]">visibility</span> 4.2k visualizaciones</span>
                            </div>
                        </div>
                    </div>
                    <!-- Press Card 2 -->
                    <div class="group bg-surface-container rounded-xl overflow-hidden shadow-md hover:bg-surface-container-high transition-all flex flex-col">
                        <div class="relative aspect-video w-full">
                            <div class="w-full h-full bg-cover bg-center transition-transform duration-300 group-hover:scale-102"
                                 data-alt="Team captain in official CD Eldense tracksuit holding captain armband speaking directly to TV microphone in the mixed zone flash interview area after intense league match."
                                 style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDrChBWuaazBb8EY1qrIK4dI_ETKv5gPnpdTZ42Pam13JY-M7hd43B_TQPxUhLL55CsTLuM_cqFsXE1ZhYQGGwv7FzXYf4s0hOsYxGNr3cORfguX9cG6XWHZATglk1JboCZHGfI2H9YjViPnSdrog34QvoOEkPlzITyi7uWxSN9pnejTIGmgoAYqHGBy2FD4aJaCbfuYWjGiVbaosBjdHJAoQSLsuDfY9KOZD94QksxA0z77qzvQew')"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-surface via-transparent to-transparent"></div>
                            <span class="absolute bottom-space-xs left-space-xs px-space-xs py-0.5 rounded bg-surface-dim font-label-sm text-label-sm text-on-surface">
              Zona Flash
            </span>
                            <span class="absolute bottom-space-xs right-space-xs px-space-xs py-0.5 rounded bg-surface-dim font-label-sm text-label-sm text-on-surface">
              08:45
            </span>
                        </div>
                        <div class="p-space-md flex flex-col gap-space-xs">
                            <span class="font-label-sm text-label-sm text-secondary tracking-widest uppercase">Declaraciones Capitán</span>
                            <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface group-hover:text-primary transition-colors">
                                Pedro Capó: "Este escudo exige pelear cada balón hasta que el árbitro pite"
                            </h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2">
                                El capitán azulgrana valora el esfuerzo colectivo y agradece el desplazamiento masivo de
                                la afición.
                            </p>
                            <div class="flex items-center justify-between text-on-surface-variant font-label-sm text-label-sm pt-space-xs">
                                <span>Hace 2 días</span>
                                <span class="flex items-center gap-1"><span
                                        class="material-symbols-outlined text-[14px]">visibility</span> 2.8k visualizaciones</span>
                            </div>
                        </div>
                    </div>
                    <!-- Press Card 3 -->
                    <div class="group bg-surface-container rounded-xl overflow-hidden shadow-md hover:bg-surface-container-high transition-all flex flex-col">
                        <div class="relative aspect-video w-full">
                            <div class="w-full h-full bg-cover bg-center transition-transform duration-300 group-hover:scale-102"
                                 data-alt="Eldense tactical analyst working on digital sports telestrator screens inside modern video analysis room breaking down football player positioning and set-piece strategies."
                                 style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuC6W7dko5mtpLB1kHKuR9h2TkyFv-HioPAdAzNV4V-a5QClZYld0nXOzwfmztt8DOk695EzeXb-44bYYbtFoQnuWkXL1Kvid7j7_abORAP1VffUQqSpCjP4D1_O2esBsfPCysM5pkVSFux1rHuGu-NbqR6YYH_p9EMx0o7PXonud4yZhpA2rgGzardTIBCvAA6saEX5MtQHwdKjZJZyCm__og-g1lBOhENg3NqgyhVwHaFsf3YdP40')"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-surface via-transparent to-transparent"></div>
                            <span class="absolute top-space-xs left-space-xs px-space-xs py-0.5 rounded bg-secondary-container text-on-secondary-container font-label-sm text-label-sm uppercase font-bold">
              La Pizarra Azulgrana
            </span>
                            <span class="absolute bottom-space-xs right-space-xs px-space-xs py-0.5 rounded bg-surface-dim font-label-sm text-label-sm text-on-surface">
              16:04
            </span>
                        </div>
                        <div class="p-space-md flex flex-col gap-space-xs">
                            <span class="font-label-sm text-label-sm text-secondary tracking-widest uppercase">Laboratorio Táctico</span>
                            <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface group-hover:text-primary transition-colors">
                                Desglose Táctico: Así se desarmó el bloque rival con transiciones rápidas
                            </h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2">
                                Telemetría, mapas de calor y la explicación de cómo los laterales doblaron las bandas
                                con superioridad numérica.
                            </p>
                            <div class="flex items-center justify-between text-on-surface-variant font-label-sm text-label-sm pt-space-xs">
                                <span>Hace 3 días</span>
                                <span class="flex items-center gap-1"><span
                                        class="material-symbols-outlined text-[14px]">visibility</span> 3.1k visualizaciones</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ROW 4: ENTREVISTAS EXCLUSIVAS (Vertical Cards Focus) -->
            <section class="flex flex-col gap-space-md">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-space-sm">
                        <span class="material-symbols-outlined text-primary text-[24px]">forum</span>
                        <h2 class="font-headline-lg text-headline-lg uppercase tracking-wide text-on-surface">
                            Entrevistas Exclusivas · Cara a Cara
                        </h2>
                    </div>
                    <div class="flex items-center gap-space-xs">
                        <button class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-colors"
                                type="button">
                            <span class="material-symbols-outlined text-[18px]">chevron_left</span>
                        </button>
                        <button class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-colors"
                                type="button">
                            <span class="material-symbols-outlined text-[18px]">chevron_right</span>
                        </button>
                    </div>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-gutter">
                    <!-- Interview Card 1 -->
                    <div class="group relative bg-surface-container rounded-xl overflow-hidden shadow-lg transition-transform duration-300 hover:scale-[1.03] flex flex-col">
                        <div class="relative aspect-[3/4] w-full overflow-hidden">
                            <div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                                 data-alt="Dramatic studio portrait of Eldense star forward striker in dark cinematic lighting with subtle red and blue rim lights, looking determined directly into camera."
                                 style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAyFm4_ICSZkFAKrUkpCc3Q5IEza0MjeBQYEie9aJQ1I3FzC-t_cfLw6YA-GyFwDbWcDfjwY6n30b_lLHW-A_aEVjBiQ_ob7tnFCPJfErBsPizqLctI-asB2o9FaLba2-Yso01HA0siae3pQrxv2BNfMN_eIIKzg0z9buUW58Se7hT6IBg6nAArBYsMORGrxvE3untLw4nCQTcYgD_KkjzrzrAf94M5ULia5KL7Busp59w2WfQ1FrY')"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-surface via-surface/30 to-transparent"></div>
                            <span class="absolute top-space-xs right-space-xs px-space-xs py-0.5 rounded bg-primary-container text-on-primary-container font-label-sm text-label-sm font-bold">
              34m
            </span>
                            <div class="absolute bottom-space-md left-space-md right-space-md flex flex-col">
                                <span class="font-label-sm text-label-sm text-primary tracking-widest uppercase">Goleador Azulgrana</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface group-hover:text-primary transition-colors">
                                    Juanto Ortuño: "Soñar con el ascenso era una locura hasta que creímos en ello"
                                </h3>
                            </div>
                        </div>
                        <div class="p-space-sm bg-surface-container-high flex items-center justify-between text-on-surface-variant font-label-sm text-label-sm">
                            <span>Episodio 12</span>
                            <span class="text-secondary uppercase">Entrevista Completa</span>
                        </div>
                    </div>
                    <!-- Interview Card 2 -->
                    <div class="group relative bg-surface-container rounded-xl overflow-hidden shadow-lg transition-transform duration-300 hover:scale-[1.03] flex flex-col">
                        <div class="relative aspect-[3/4] w-full overflow-hidden">
                            <div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                                 data-alt="Distinguished executive club president seated in modern stadium presidential box with football trophy in background, atmospheric mood lighting."
                                 style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDPrI2ppOFXdvPs-KsxzwZoPiHUpbAgTs0OI4WNVgA1WNnfcR26gsUviMzddnFC10h7qwQAWJbMe0YrQaRVc61HZGUOPswJPn_nZbF9ynesSkm18KFdWr5UJY7vWFIyP0N9eb1I0uKpGzXFTRvBuevALh56TYg0-ydgIegnuZ5ji2GFj0UNYvL7_JY8UI6z-CnXD1oBtfhWP-xUIgZ4lpDL4VHFHvNPb_nFucNCFCXChBTymneBS2c')"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-surface via-surface/30 to-transparent"></div>
                            <span class="absolute top-space-xs right-space-xs px-space-xs py-0.5 rounded bg-surface-dim text-on-surface font-label-sm text-label-sm font-bold">
              42m
            </span>
                            <div class="absolute bottom-space-md left-space-md right-space-md flex flex-col">
                                <span class="font-label-sm text-label-sm text-secondary tracking-widest uppercase">Presidencia del Club</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface group-hover:text-primary transition-colors">
                                    Pascual Pérez: "El proyecto deportivo de Elda está blindado para el futuro"
                                </h3>
                            </div>
                        </div>
                        <div class="p-space-sm bg-surface-container-high flex items-center justify-between text-on-surface-variant font-label-sm text-label-sm">
                            <span>Episodio 11</span>
                            <span class="text-secondary uppercase">Especial Institucional</span>
                        </div>
                    </div>
                    <!-- Interview Card 3 -->
                    <div class="group relative bg-surface-container rounded-xl overflow-hidden shadow-lg transition-transform duration-300 hover:scale-[1.03] flex flex-col">
                        <div class="relative aspect-[3/4] w-full overflow-hidden">
                            <div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                                 data-alt="Elderly veteran former football player legend in cozy atmospheric stadium museum room holding vintage 1970s leather football with nostalgic gentle expression."
                                 style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD008M5kRDFwvob7Xvtaqj9wTAUdGblFWc3atYKmT11Lb5lB_RkPaDMSL3aUY6zmd3l4GKs9MJaagPJoa-g2vbIfVQGOP_N93SDMZXB-496GAi2tS-trKMoECnVZIBpHmq7Tic1AsRP4Qf9F2Kr1M9OzzXBxjHJ6K5Djlex51OhmAhwVOjwVcita_Dknrc9wCjpNvTYQ68wIpjmmGyY0M0IecqZHIs2z-IV0S2US4GH383YxdNppWU')"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-surface via-surface/30 to-transparent"></div>
                            <span class="absolute top-space-xs right-space-xs px-space-xs py-0.5 rounded bg-surface-dim text-on-surface font-label-sm text-label-sm font-bold">
              28m
            </span>
                            <div class="absolute bottom-space-md left-space-md right-space-md flex flex-col">
                                <span class="font-label-sm text-label-sm text-primary tracking-widest uppercase">Leyenda del Centenario</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface group-hover:text-primary transition-colors">
                                    Memorias Vivas: Los héroes del Pepico Amat antiguo
                                </h3>
                            </div>
                        </div>
                        <div class="p-space-sm bg-surface-container-high flex items-center justify-between text-on-surface-variant font-label-sm text-label-sm">
                            <span>Episodio 10</span>
                            <span class="text-secondary uppercase">Archivo Histórico</span>
                        </div>
                    </div>
                    <!-- Interview Card 4 -->
                    <div class="group relative bg-surface-container rounded-xl overflow-hidden shadow-lg transition-transform duration-300 hover:scale-[1.03] flex flex-col">
                        <div class="relative aspect-[3/4] w-full overflow-hidden">
                            <div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                                 data-alt="Dynamic portrait of midfield playmaker midfielder during relaxed gym training interview session wearing Eldense training shirt, confident athlete posture."
                                 style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuARUNetmNZNHl1SO9u5OUE2jyAa_tSJlw1JkzBc7viOZCCApcHKhqtj4kC_9qupiEyfJvT78BxeFvUNhaVZI9EfDx6D7--BOD-dKCKNMEDYfmv6rtx6Rwg8GrU6h0FIGxOVvsJ0wBfR8gWXPhbqz8JeJYKHbduto3RCmLmIhVhimGmD2_K_UKbtan6bK1kIJ5KoWp4md0gl8ta--IpEF4hWp_2pchMxlL7UvpFBfjeHlgzkX1H7_sc')"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-surface via-surface/30 to-transparent"></div>
                            <span class="absolute top-space-xs right-space-xs px-space-xs py-0.5 rounded bg-surface-dim text-on-surface font-label-sm text-label-sm font-bold">
              22m
            </span>
                            <div class="absolute bottom-space-md left-space-md right-space-md flex flex-col">
                                <span class="font-label-sm text-label-sm text-secondary tracking-widest uppercase">La Sala de Máquinas</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface group-hover:text-primary transition-colors">
                                    Sergio Ortuño: "La magia ocurre cuando entendemos el ritmo del partido"
                                </h3>
                            </div>
                        </div>
                        <div class="p-space-sm bg-surface-container-high flex items-center justify-between text-on-surface-variant font-label-sm text-label-sm">
                            <span>Episodio 09</span>
                            <span class="text-secondary uppercase">Entrevista Completa</span>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ROW 5: PRESENTACIONES DE NUEVOS FICHAJES -->
            <section class="flex flex-col gap-space-md">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-space-sm">
                        <span class="material-symbols-outlined text-primary-container text-[24px]">verified</span>
                        <h2 class="font-headline-lg text-headline-lg uppercase tracking-wide text-on-surface">
                            Presentaciones de Nuevos Fichajes
                        </h2>
                        <span class="font-label-sm text-label-sm text-on-surface-variant hidden md:inline">Mercado &amp; Nuevas Incorporaciones</span>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
                    <!-- Fichaje Card 1 -->
                    <div class="group bg-surface-container rounded-xl overflow-hidden shadow-md flex flex-col hover:bg-surface-container-high transition-all">
                        <div class="relative aspect-video w-full">
                            <div class="w-full h-full bg-cover bg-center transition-transform duration-300 group-hover:scale-102"
                                 data-alt="New football player signing holding up CD Eldense blue and scarlet jersey on the stadium pitch grass with wide smile, press cameras flashing around him."
                                 style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD0Gk3StNSYcOeNKCENzzThKHbrlvgihp1pUbfIde7WHgCF0L3yyuSqS4-B9UVQXrJ4fRDgxxCvPn7xF76ryF7fKww1XcB7TS3c3x7j3UIppNOVRYH0eCnjBnU508kBo4QnsFIxrB5rloc-RhXGXlJwv6KBZ0cqaRVkltnLHanUqYGJEjugF4eMnlNLAyHFrs9xjdMNQM3Z65ogYDm1-jkQyozTA6yrGIMXLlGx0PulJA_zIx79gcU')"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-surface via-transparent to-transparent"></div>
                            <span class="absolute top-space-xs left-space-xs px-space-xs py-0.5 rounded bg-primary-container text-on-primary-container font-label-sm text-label-sm uppercase font-bold">
              Fichaje de Invierno
            </span>
                            <span class="absolute bottom-space-xs right-space-xs px-space-xs py-0.5 rounded bg-surface-dim font-label-sm text-label-sm text-on-surface">
              11:30
            </span>
                        </div>
                        <div class="p-space-md flex flex-col gap-space-xs flex-1 justify-between">
                            <div>
                                <span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider">Dorsal #19 · Delantero Centro</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-1 group-hover:text-primary transition-colors">
                                    Presentación Oficial &amp; Primeros Toques en el Pepico Amat
                                </h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mt-1">
                                    Acto de bienvenida, firma de contrato ante los medios y primeras declaraciones
                                    vistiendo la elástica azulgrana.
                                </p>
                            </div>
                            <div class="flex items-center gap-space-xs pt-space-xs">
                                <button class="w-full py-space-xs rounded bg-surface-container-highest hover:bg-surface-bright text-on-surface font-label-sm text-label-sm uppercase tracking-wider flex items-center justify-center gap-1 transition-colors"
                                        type="button">
                                    <span class="material-symbols-outlined text-[16px]">play_arrow</span>
                                    <span>Ver Ceremonia Completa</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Fichaje Card 2 -->
                    <div class="group bg-surface-container rounded-xl overflow-hidden shadow-md flex flex-col hover:bg-surface-container-high transition-all">
                        <div class="relative aspect-video w-full">
                            <div class="w-full h-full bg-cover bg-center transition-transform duration-300 group-hover:scale-102"
                                 data-alt="Athletic defensive player posing in new Eldense official away kit inside stadium media studio with dramatic smoke and team colors lighting."
                                 style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuATZiM8itbexj1Ror88A5LfwUNxcTeSjf8Ib4GEoZlsjWHpYw_kbZ0DfZGsgzv9uQqYCQYlC7NHk-kPgqSUWt0gNjlkJZL9yyJsPd7FcoTBkL4yS0tPdW_9IB20rAHP0NgBfHkId6Jzz-fMJlzou3NIHR0x2gtNfa-Y5TE3eXKEUa0nGIXrao23X9_qGZx-rbTaNZACEx5wWJQFgWaOHKzJWYUBYvh-jUSjkdc-2XnGRFI0PLzIYxE')"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-surface via-transparent to-transparent"></div>
                            <span class="absolute top-space-xs left-space-xs px-space-xs py-0.5 rounded bg-secondary-container text-on-secondary-container font-label-sm text-label-sm uppercase font-bold">
              Refuerzo Defensivo
            </span>
                            <span class="absolute bottom-space-xs right-space-xs px-space-xs py-0.5 rounded bg-surface-dim font-label-sm text-label-sm text-on-surface">
              09:15
            </span>
                        </div>
                        <div class="p-space-md flex flex-col gap-space-xs flex-1 justify-between">
                            <div>
                                <span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider">Dorsal #4 · Central</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-1 group-hover:text-primary transition-colors">
                                    Rueda de Presentación &amp; Test Médico en Clínica Oficial
                                </h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mt-1">
                                    Superación del reconocimiento médico y sus sensaciones al unirse a la sólida
                                    disciplina del club.
                                </p>
                            </div>
                            <div class="flex items-center gap-space-xs pt-space-xs">
                                <button class="w-full py-space-xs rounded bg-surface-container-highest hover:bg-surface-bright text-on-surface font-label-sm text-label-sm uppercase tracking-wider flex items-center justify-center gap-1 transition-colors"
                                        type="button">
                                    <span class="material-symbols-outlined text-[16px]">play_arrow</span>
                                    <span>Ver Ceremonia Completa</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Fichaje Card 3 -->
                    <div class="group bg-surface-container rounded-xl overflow-hidden shadow-md flex flex-col hover:bg-surface-container-high transition-all">
                        <div class="relative aspect-video w-full">
                            <div class="w-full h-full bg-cover bg-center transition-transform duration-300 group-hover:scale-102"
                                 data-alt="Young talented midfielder putting pen to official contract document next to Eldense sporting director in executive boardroom, club crest visible in background."
                                 style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBHrcHRIczgHlGOiOLLEKrgFrHWyO2vcXE30CzZ4nlwqGU9DzpI8uV0ZgaYQ13r4vUWlUqVbqWkC0ILNvUUL3xkV89YKCv4Nd2iMHck-gCJ15QoPlOT8ZeMPna9DlRHCpA4NUA8XXMalmoV2h8lkEBZckiOxVf12rVv9Uu9sWCnZy-rLTjWTCTo9aIRNycjfLWMy4yfaylTC3ulCj2NMiYtaQW59Gi2BO07elxTMv2U4Vzc0DZyBHU')"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-surface via-transparent to-transparent"></div>
                            <span class="absolute top-space-xs left-space-xs px-space-xs py-0.5 rounded bg-surface-container-highest text-on-surface font-label-sm text-label-sm uppercase font-bold">
              Cesión con Opción
            </span>
                            <span class="absolute bottom-space-xs right-space-xs px-space-xs py-0.5 rounded bg-surface-dim font-label-sm text-label-sm text-on-surface">
              14:50
            </span>
                        </div>
                        <div class="p-space-md flex flex-col gap-space-xs flex-1 justify-between">
                            <div>
                                <span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider">Dorsal #22 · Extremo Diestro</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-1 group-hover:text-primary transition-colors">
                                    El Viaje a Elda: Primer día en las instalaciones del Club
                                </h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mt-1">
                                    Seguimiento en primera persona de su llegada a la estación, visita al vestuario y
                                    saludo con sus nuevos compañeros.
                                </p>
                            </div>
                            <div class="flex items-center gap-space-xs pt-space-xs">
                                <button class="w-full py-space-xs rounded bg-surface-container-highest hover:bg-surface-bright text-on-surface font-label-sm text-label-sm uppercase tracking-wider flex items-center justify-center gap-1 transition-colors"
                                        type="button">
                                    <span class="material-symbols-outlined text-[16px]">play_arrow</span>
                                    <span>Ver Ceremonia Completa</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ROW 6: ESPORTS & VIDEOJUEGOS (Eldense Gaming Lab) -->
            <section class="flex flex-col gap-space-md mb-space-xl">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-space-sm">
                        <span class="material-symbols-outlined text-secondary text-[24px]">sports_esports</span>
                        <h2 class="font-headline-lg text-headline-lg uppercase tracking-wide text-on-surface">
                            eSports &amp; Gaming · Eldense eSports Lab
                        </h2>
                        <span class="font-label-sm text-label-sm text-secondary-fixed bg-secondary-container px-space-xs py-0.5 rounded tracking-widest uppercase">
            eLaLiga EA SPORTS FC 24
          </span>
                    </div>
                    <div class="flex items-center gap-space-xs">
                        <span class="font-label-sm text-label-sm text-on-surface-variant hidden sm:inline">Torneo Oficial eLaLiga Santander</span>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-gutter">
                    <!-- eSports Card 1 -->
                    <div class="group relative bg-surface-container rounded-xl overflow-hidden shadow-lg transition-transform duration-300 hover:scale-[1.02] flex flex-col">
                        <div class="relative aspect-video w-full overflow-hidden">
                            <div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                                 data-alt="Professional competitive esports stage tournament setup with glowing neon red and blue LED stage lights, gamers with headsets concentrated on monitors playing EA Sports FC 24 with Eldense crest jersey."
                                 style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBo2sb3xTy0Smip7BEivaZ5P8kr6TjfBw2WKh1eyP5OKbRf0K7l1qauXeDjUpapdoALU4Flx9pcxgu9VaD-AOcPRxgdsfrag19ijKrPQLMKANjOISvI7ACN6gD5pHAnzl8cN8PrX37XbGH3niSNNbB-o9Jvkxwf45_8i-eOnkVB3sWQA0HgJKj_GawyBlyVKWtkQ7HqgdR0GKXTI8yW-TFVMtVOA5dwW6U2Tml98F5F4DGTt1T1tkA')"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-surface via-transparent to-transparent"></div>
                            <span class="absolute top-space-xs left-space-xs px-space-xs py-0.5 rounded bg-primary-container text-on-primary-container font-label-sm text-label-sm uppercase tracking-wider font-bold">
              eLaLiga Jornada 14
            </span>
                            <span class="absolute bottom-space-xs right-space-xs px-space-xs py-0.5 rounded bg-surface-dim font-label-sm text-label-sm text-on-surface">
              28:30
            </span>
                            <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-surface-dim/40">
                                <span class="material-symbols-outlined text-[36px] text-on-surface"
                                      style="font-variation-settings: 'FILL' 1;">play_circle</span>
                            </div>
                        </div>
                        <div class="p-space-md flex flex-col gap-space-xs flex-1 justify-between">
                            <div>
                                <div class="flex items-center justify-between text-on-surface-variant font-label-sm text-label-sm mb-1">
                                    <span>EA Sports FC 24</span>
                                    <span class="text-primary font-bold">VICTORIA 4 - 2</span>
                                </div>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface group-hover:text-primary transition-colors">
                                    CD Eldense Gaming vs Real Betis eSports
                                </h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mt-1">
                                    Las mejores jugadas, skills y goles de nuestro pro player 'Eldense_Kiko' para
                                    clasificar al play-off final.
                                </p>
                            </div>
                            <div class="mt-space-sm flex items-center justify-between font-label-sm text-label-sm text-on-surface-variant pt-space-xs">
                                <span class="flex items-center gap-1 text-secondary"><span
                                        class="material-symbols-outlined text-[14px]">sports_score</span> Clasificados a Cuartos</span>
                                <span>1080p 60fps</span>
                            </div>
                        </div>
                    </div>
                    <!-- eSports Card 2 -->
                    <div class="group relative bg-surface-container rounded-xl overflow-hidden shadow-lg transition-transform duration-300 hover:scale-[1.02] flex flex-col">
                        <div class="relative aspect-video w-full overflow-hidden">
                            <div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                                 data-alt="Exciting Rocket League automotive aerial goal in futuristic arena with custom CD Eldense red and blue octane decal car scoring under exploding goal animations."
                                 style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCTiucU4MkxsYl3pKe_H1UjZU3MK24LstqFL01uqxzGlYCnhuzYUnHlYZKBK4TtsshtGHNErPezHLeUAlprg16XXyFv4tYxuotaFbUXpHxrkW79xne3mRszHuF3iN7o9D1uyqTOCAHjQA3x_y9bGhWjyHYamg2evwx0qtwpNGEqVU6rPzTnu7haRfGrWndMp8H5Q1mcV_oa3wmHDPOL60qtuoZ0X3Kbm0hno0Ds0dh-76SYNrQstQg')"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-surface via-transparent to-transparent"></div>
                            <span class="absolute top-space-xs left-space-xs px-space-xs py-0.5 rounded bg-secondary-container text-on-secondary-container font-label-sm text-label-sm uppercase tracking-wider font-bold">
              Rocket League
            </span>
                            <span class="absolute bottom-space-xs right-space-xs px-space-xs py-0.5 rounded bg-surface-dim font-label-sm text-label-sm text-on-surface">
              15:10
            </span>
                            <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-surface-dim/40">
                                <span class="material-symbols-outlined text-[36px] text-on-surface"
                                      style="font-variation-settings: 'FILL' 1;">play_circle</span>
                            </div>
                        </div>
                        <div class="p-space-md flex flex-col gap-space-xs flex-1 justify-between">
                            <div>
                                <div class="flex items-center justify-between text-on-surface-variant font-label-sm text-label-sm mb-1">
                                    <span>Liga Nacional Ibérica</span>
                                    <span class="text-secondary font-bold">TOP 5 JUGADAS</span>
                                </div>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface group-hover:text-primary transition-colors">
                                    Eldense Rocket Squad: Goles Aéreos y Remontada
                                </h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mt-1">
                                    Compilación frenética de asistencias y salvadas en el tiempo de descuento de la
                                    semifinal nacional.
                                </p>
                            </div>
                            <div class="mt-space-sm flex items-center justify-between font-label-sm text-label-sm text-on-surface-variant pt-space-xs">
                                <span>Publicado hace 3 días</span>
                                <span class="text-primary font-bold">Highlights</span>
                            </div>
                        </div>
                    </div>
                    <!-- eSports Card 3 -->
                    <div class="group relative bg-surface-container rounded-xl overflow-hidden shadow-lg transition-transform duration-300 hover:scale-[1.02] flex flex-col">
                        <div class="relative aspect-video w-full overflow-hidden">
                            <div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                                 data-alt="First team real Eldense professional football players laughing and playing virtual football video games with game controllers together inside the stadium gaming lounge facility."
                                 style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAVPh7b3tfR3JrLpQS0MxECc6pRl6dEknpwVE2QeT5nKhFRDCWO5FSoyJNtKnGFNQwUU-fk5Mj6oRHZ7dtnHROt9uAwrXVc_CDH2--wZeiBjlfb7LQzB29UiclqKsBwNSE9vtUhZ3r0WUWwEUCbdB80PhLy1zrOunF6XyUhR8tua66qH1xxSs3Tbi9V4N9VAGAi1F61HsN5GKhg3zGygSpXn3EsB30jaGZ2HEpaD9SLxvfjs3S_iWI')"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-surface via-transparent to-transparent"></div>
                            <span class="absolute top-space-xs left-space-xs px-space-xs py-0.5 rounded bg-surface-container-highest text-on-surface font-label-sm text-label-sm uppercase tracking-wider font-bold">
              Showmatch Especial
            </span>
                            <span class="absolute bottom-space-xs right-space-xs px-space-xs py-0.5 rounded bg-surface-dim font-label-sm text-label-sm text-on-surface">
              21:45
            </span>
                            <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-surface-dim/40">
                                <span class="material-symbols-outlined text-[36px] text-on-surface"
                                      style="font-variation-settings: 'FILL' 1;">play_circle</span>
                            </div>
                        </div>
                        <div class="p-space-md flex flex-col gap-space-xs flex-1 justify-between">
                            <div>
                                <div class="flex items-center justify-between text-on-surface-variant font-label-sm text-label-sm mb-1">
                                    <span>Duelo en el Vestuario</span>
                                    <span class="text-on-surface font-bold">TORNEO INTERNO</span>
                                </div>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface group-hover:text-primary transition-colors">
                                    Pase a los Mandos: Los jugadores del Primer Equipo se retan
                                </h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mt-1">
                                    Piques, risas y celebraciones en el torneo navideño de consola grabado en el Pepico
                                    Amat con la plantilla.
                                </p>
                            </div>
                            <div class="mt-space-sm flex items-center justify-between font-label-sm text-label-sm text-on-surface-variant pt-space-xs">
                                <span>Exclusivo Socios</span>
                                <span class="text-secondary font-bold">Entretenimiento</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>
<footer class="w-full bg-surface-container-lowest mt-space-xl py-space-xl">
    <div class="w-full px-margin">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter mb-space-xl">
            <div class="flex flex-col gap-space-sm">
                <div class="flex items-center gap-space-sm"><img alt="Eldense TV Logo" class="h-7 w-auto object-contain"
                                                                 src="https://lh3.googleusercontent.com/aida-public/AB6AXuDovPeUxIBujfMNL3MdY21BXLHuNJb1hRZiD64tR-VFA78iQmhmA15XnBvFEC5YpwngAekIpOXXIpPcrtitlYSX_CO03XBC8UhB2PjYKc_9PCRDZxV6Tvt67h6KK5exrXFUUCQhjbP0fPmzKsj-ZMVdeugfzPK3yu_sSrpETb9GZFa2Qz5UADuy3gkldxzZtOy6bcGMluuVyUHCSXljbt824Y-1W-AUOrMJzgjjqJbIb7jJG8aKhbA"/><span
                        class="font-headline-sm text-headline-sm tracking-wider uppercase text-on-surface">ELDENSE<span
                            class="text-primary-container ml-1">TV</span></span></div>
                <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">Canal oficial de streaming
                    del Club Deportivo Eldense. La emoción de LaLiga, documentales exclusivos, directos y todo el
                    universo azulgrana.</p><span
                    class="font-label-sm text-label-sm text-secondary font-bold tracking-widest uppercase mt-space-xs">Eldense TV v2.4 OTT</span>
            </div>
            <div class="flex flex-col gap-space-sm"><span
                    class="font-label-md text-label-md uppercase tracking-wider text-on-surface">Contenidos Club</span><a
                    class="font-body-sm text-body-sm text-on-surface-variant hover:text-on-surface transition-colors"
                    data-path="partidos" href="#">Partidos y Resúmenes</a><a
                    class="font-body-sm text-body-sm text-on-surface-variant hover:text-on-surface transition-colors"
                    data-path="documentales" href="#">Eldense Originals</a><a
                    class="font-body-sm text-body-sm text-on-surface-variant hover:text-on-surface transition-colors"
                    data-path="ruedas-de-prensa" href="#">Salas de Prensa</a><a
                    class="font-body-sm text-body-sm text-on-surface-variant hover:text-on-surface transition-colors"
                    data-path="esports-gaming" href="#">Eldense Gaming Lab</a></div>
            <div class="flex flex-col gap-space-sm"><span
                    class="font-label-md text-label-md uppercase tracking-wider text-on-surface">Portal del Abonado</span><a
                    class="font-body-sm text-body-sm text-on-surface-variant hover:text-on-surface transition-colors"
                    data-path="mi-perfil" href="#">Mi Perfil &amp; Preferencias</a><a
                    class="font-body-sm text-body-sm text-on-surface-variant hover:text-on-surface transition-colors"
                    data-path="mi-abono-pagos" href="#">Mi Abono &amp; Pagos</a><a
                    class="font-body-sm text-body-sm text-on-surface-variant hover:text-on-surface transition-colors"
                    data-path="historial" href="#">Historial de Reproducción</a><a
                    class="font-body-sm text-body-sm text-on-surface-variant hover:text-on-surface transition-colors"
                    data-path="soporte" href="#">Atención al Socio</a></div>
            <div class="flex flex-col gap-space-sm"><span
                    class="font-label-md text-label-md uppercase tracking-wider text-on-surface">Canales Oficiales</span>
                <div class="flex items-center gap-space-sm text-on-surface-variant"><a
                        class="w-8 h-8 rounded bg-surface-container flex items-center justify-center hover:bg-surface-container-high hover:text-on-surface transition-colors"
                        href="#"><span class="material-symbols-outlined text-[18px]">play_circle</span></a><a
                        class="w-8 h-8 rounded bg-surface-container flex items-center justify-center hover:bg-surface-container-high hover:text-on-surface transition-colors"
                        href="#"><span class="material-symbols-outlined text-[18px]">campaign</span></a><a
                        class="w-8 h-8 rounded bg-surface-container flex items-center justify-center hover:bg-surface-container-high hover:text-on-surface transition-colors"
                        href="#"><span class="material-symbols-outlined text-[18px]">sports_soccer</span></a><a
                        class="w-8 h-8 rounded bg-surface-container flex items-center justify-center hover:bg-surface-container-high hover:text-on-surface transition-colors"
                        href="#"><span class="material-symbols-outlined text-[18px]">podcasts</span></a></div>
                <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">Estadio Municipal Nuevo Pepico
                    Amat, Elda (Alicante).</p></div>
        </div>
        <div class="pt-space-md flex flex-col md:flex-row items-center justify-between gap-space-sm text-on-surface-variant font-body-sm text-body-sm">
            <p>© 2025 Club Deportivo Eldense S.A.D. Todos los derechos reservados.</p>
            <div class="flex items-center gap-space-md font-label-sm text-label-sm"><a
                    class="hover:text-on-surface transition-colors" href="#">Aviso Legal</a><a
                    class="hover:text-on-surface transition-colors" href="#">Política de Privacidad</a><a
                    class="hover:text-on-surface transition-colors" href="#">Términos OTT</a><a
                    class="hover:text-on-surface transition-colors" href="#">Cookies</a></div>
        </div>
    </div>
</footer>
</body>
</html>
