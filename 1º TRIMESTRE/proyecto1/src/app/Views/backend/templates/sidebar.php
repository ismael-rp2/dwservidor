web application/stitch/projects/101639278941745271/screens/d443aec67b4841d18cf1cd2d47902b4e
<?php
/**
 * ==============================================================================
 * PROYECTO: ELDENSE TV - CMS STUDIO CONTROL CENTER
 * ARCHIVO: backend/templates/sidebar.php
 * BLOQUE: Barra de Navegación Lateral Fija con 4 Grupos Temáticos
 * ==============================================================================
 */

function renderSidebar($activeSection = 'estadisticas') {
    ?>
    <!-- Sidebar Lateral Fijo -->
    <aside class="w-64 bg-[#0A0D14] border-r border-[#1C222E] flex flex-col justify-between flex-shrink-0 z-30 select-none h-full overflow-y-auto">
        <div class="p-5">
            <!-- Logo / Marca Estilo Netflix Bold Red -->
            <div class="flex items-center gap-3 mb-8">
                <div class="w-9 h-9 rounded bg-[#E50914] flex items-center justify-center font-display font-black text-xl text-white tracking-wider shadow-lg shadow-red-950/50">
                    E
                </div>
                <div>
                    <div class="font-display font-bold tracking-wider text-lg leading-none text-white flex items-center gap-1">
                        ELDENSE <span class="text-[#E50914]">TV</span>
                    </div>
                    <div class="text-[10px] tracking-widest uppercase font-semibold text-slate-400 mt-1">
                        STUDIO CMS CONTROL
                    </div>
                </div>
            </div>

            <!-- 1. GRUPO: CONTENIDO -->
            <div class="space-y-1 mb-6">
                <p class="text-[11px] font-bold uppercase tracking-wider text-slate-400 px-3 mb-2 font-display">CONTENIDO</p>

                <a href="admin.index.php?view=catalogo" class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-300 hover:text-white hover:bg-[#161B26] text-xs font-medium transition">
                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                    </svg>
                    <span>Catálogo Global</span>
                </a>

                <a href="admin.index.php?view=partidos" class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-300 hover:text-white hover:bg-[#161B26] text-xs font-medium transition">
                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                    </svg>
                    <span>Películas / Partidos</span>
                </a>

                <a href="admin.index.php?view=series" class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-300 hover:text-white hover:bg-[#161B26] text-xs font-medium transition">
                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z"/>
                    </svg>
                    <span>Series de TV</span>
                </a>

                <a href="admin.index.php?view=videojuegos" class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-300 hover:text-white hover:bg-[#161B26] text-xs font-medium transition">
                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/>
                    </svg>
                    <span>Videojuegos</span>
                </a>

                <a href="admin.index.php?view=estrenos" class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-300 hover:text-white hover:bg-[#161B26] text-xs font-medium transition">
                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span>Estrenos programados</span>
                </a>
            </div>

            <!-- 2. GRUPO: ANALÍTICAS Y AUDIENCIA -->
            <div class="space-y-1 mb-6">
                <p class="text-[11px] font-bold uppercase tracking-wider text-slate-400 px-3 mb-2 font-display">ANALÍTICAS Y AUDIENCIA</p>

                <a href="admin.index.php?view=estadisticas" class="flex items-center gap-3 px-3 py-2 rounded-lg bg-[#E50914] text-white text-xs font-semibold shadow-md shadow-red-950/40">
                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                    </svg>
                    <span>Estadísticas de visionado</span>
                </a>

                <a href="admin.index.php?view=retencion" class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-300 hover:text-white hover:bg-[#161B26] text-xs font-medium transition">
                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span>Retención y Horas vistas</span>
                </a>

                <a href="admin.index.php?view=gaming_metrics" class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-300 hover:text-white hover:bg-[#161B26] text-xs font-medium transition">
                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                    <span>Métricas de videojuegos</span>
                </a>
            </div>

            <!-- 3. GRUPO: MODERACIÓN Y LICENCIAS -->
            <div class="space-y-1 mb-6">
                <p class="text-[11px] font-bold uppercase tracking-wider text-slate-400 px-3 mb-2 font-display">MODERACIÓN Y LICENCIAS</p>

                <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-300 hover:text-white hover:bg-[#161B26] text-xs font-medium transition">
                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                    <span>Clasificaciones de edad</span>
                </a>

                <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-300 hover:text-white hover:bg-[#161B26] text-xs font-medium transition">
                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                    <span>Derechos & DRM</span>
                </a>

                <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-300 hover:text-white hover:bg-[#161B26] text-xs font-medium transition">
                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"/>
                    </svg>
                    <span>Localización e idiomas</span>
                </a>
            </div>

            <!-- 4. GRUPO: CONFIGURACIÓN -->
            <div class="space-y-1">
                <p class="text-[11px] font-bold uppercase tracking-wider text-slate-400 px-3 mb-2 font-display">CONFIGURACIÓN</p>

                <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-300 hover:text-white hover:bg-[#161B26] text-xs font-medium transition">
                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                    <span>Gestión de usuarios del CMS</span>
                </a>

                <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-300 hover:text-white hover:bg-[#161B26] text-xs font-medium transition">
                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    <span>Parámetros del servidor</span>
                </a>

                <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-300 hover:text-white hover:bg-[#161B26] text-xs font-medium transition">
                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    <span>Logs del sistema</span>
                </a>
            </div>
        </div>
    </aside>
    <?php
}
?>
