web application/stitch/projects/101639278941745271/screens/fd6f43cc2b844704aada09734a4a782c
<?php
/**
 * ==============================================================================
 * PROYECTO: ELDENSE TV - CMS STUDIO CONTROL CENTER
 * ARCHIVO: backend/templates/main.title.php
 * BLOQUE: Topbar Global de Navegación, Buscador, Telemetría y Encabezado de Página
 * ==============================================================================
 */

function renderMainTitle() {
    ?>
    <!-- Topbar de Control Global -->
    <div class="h-16 px-8 flex items-center justify-between border-b border-[#1C222E] bg-[#0E121A]/80 backdrop-blur-md flex-shrink-0">
        <!-- Migas de pan + Estado de Red -->
        <div class="flex items-center gap-3 text-xs">
            <span class="text-slate-400 font-medium">Netflix Studio</span>
            <span class="text-slate-600">&rsaquo;</span>
            <span class="text-slate-200 font-semibold">CMS Console</span>
            <div class="flex items-center gap-2 ml-4 px-2.5 py-1 rounded-full bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 text-[11px] font-medium">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                Servidores streaming: <strong>99.98% operativo</strong>
            </div>
        </div>

        <!-- Buscador global + Botón Nuevo Contenido + Perfil -->
        <div class="flex items-center gap-4">
            <div class="relative w-80">
                <input type="text" placeholder="Buscar por título, ID de activo, director, género..." class="w-full bg-[#151922] border border-[#232936] rounded-lg pl-9 pr-4 py-2 text-xs text-white placeholder-slate-500 focus:outline-none focus:border-[#E50914] transition">
                <svg class="w-4 h-4 text-slate-500 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
            </div>

            <a href="admin.movie.new.php" class="inline-flex items-center gap-2 px-4 py-2 bg-[#E50914] hover:bg-[#B81D24] text-white text-xs font-bold rounded-lg shadow-md shadow-red-950/50 transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                </svg>
                <span>+ NUEVO CONTENIDO</span>
            </a>

            <!-- Campana notificaciones -->
            <button class="p-2 text-slate-400 hover:text-white rounded-lg bg-[#151922] border border-[#232936] hover:border-slate-500 transition relative">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                </svg>
                <span class="w-2 h-2 rounded-full bg-[#E50914] absolute top-1.5 right-1.5"></span>
            </button>

            <!-- Avatar usuario -->
            <div class="w-8 h-8 rounded-full bg-red-600/30 border border-red-500/40 flex items-center justify-center text-xs font-bold text-white">
                <svg class="w-4 h-4 text-red-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                </svg>
            </div>
        </div>
    </div>

    <!-- Header del Título Principal y Filtros de Tiempo -->
    <div class="px-8 pt-8 pb-4 flex flex-col md:flex-row md:items-end justify-between gap-4 flex-shrink-0">
        <div>
            <div class="flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-[#E50914] font-display">
                <span class="w-2 h-2 rounded-full bg-[#E50914] animate-ping"></span>
                MÉTRICAS EN VIVO &bull; SERVIDOR PRINCIPAL FRANKFURT
            </div>
            <h1 class="text-3xl font-display font-bold text-white tracking-wide mt-1 uppercase">
                Panel de Gestión de Contenidos y Métricas de Audiencia
            </h1>
            <p class="text-xs text-slate-400 mt-1 max-w-2xl">
                Supervisión en tiempo real de reproducciones, retención y catálogo multimedia global con telemetría integrada de cloud streaming.
            </p>
        </div>

        <!-- Selectores de Rango de Fecha y Exportación -->
        <div class="flex flex-col sm:flex-row items-end gap-3">
            <div class="flex items-center bg-[#151922] p-1 rounded-lg border border-[#232936] text-xs">
                <button class="px-3 py-1.5 text-slate-400 hover:text-white rounded">Tiempo real 24h</button>
                <button class="px-3 py-1.5 text-slate-400 hover:text-white rounded">Esta semana</button>
                <button class="px-3 py-1.5 bg-[#232936] text-white font-semibold rounded shadow-sm">Últimos 30 días</button>
            </div>

            <div class="flex items-center gap-2">
                <button class="px-3 py-2 bg-[#151922] hover:bg-[#1E2430] border border-[#232936] rounded-lg text-xs font-medium text-slate-200 flex items-center gap-2">
                    <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span>Global (Todos)</span>
                    <svg class="w-3 h-3 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>

                <button class="px-3 py-2 bg-[#151922] hover:bg-[#1E2430] border border-[#232936] rounded-lg text-xs font-medium text-slate-200 flex items-center gap-2">
                    <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                    </svg>
                    <span>Exportar Informe CSV / PDF</span>
                </button>
            </div>
        </div>
    </div>
    <?php
}
?>
