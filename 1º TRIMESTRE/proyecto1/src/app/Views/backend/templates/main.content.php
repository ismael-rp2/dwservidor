web application/stitch/projects/101639278941745271/screens/d2046914063f41ed9155dc26d15c6cb6
<?php
/**
 * ==============================================================================
 * PROYECTO: ELDENSE TV - CMS STUDIO CONTROL CENTER
 * ARCHIVO: backend/templates/main.content.php
 * BLOQUE: Contenido Central (Tarjetas KPI + Gráficos de Analítica Semanal y Donut)
 * ==============================================================================
 */

function renderMainContent() {
    ?>
    <!-- Contenedor Principal de Métricas con Scroll -->
    <div class="px-8 pb-12 space-y-6">

        <!-- SECCIÓN 1: TARJETAS KPI SUPERIORES (5 MÉTRICAS) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4">

            <!-- Tarjeta 1: Horas de Visionado -->
            <div class="bg-[#151922] border border-[#232936] rounded-xl p-5 relative overflow-hidden flex flex-col justify-between">
                <div class="flex items-start justify-between">
                    <div>
                        <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400 font-display">HORAS DE VISIONADO</span>
                        <div class="text-3xl font-display font-bold text-white mt-1">482.6M</div>
                        <span class="text-[11px] text-slate-500">hrs</span>
                    </div>
                    <div class="w-8 h-8 rounded-lg bg-red-600/10 border border-red-600/20 flex items-center justify-center text-[#E50914]">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"/></svg>
                    </div>
                </div>
                <div class="mt-4 flex items-center justify-between text-xs">
                <span class="text-emerald-400 font-semibold flex items-center gap-1">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                    +14.2%
                </span>
                    <span class="text-slate-500 text-[11px]">vs mes anterior</span>
                </div>
            </div>

            <!-- Tarjeta 2: Usuarios Concurrentes -->
            <div class="bg-[#151922] border border-[#232936] rounded-xl p-5 relative overflow-hidden flex flex-col justify-between">
                <div class="flex items-start justify-between">
                    <div>
                        <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400 font-display">USUARIOS CONCURRENTES</span>
                        <div class="text-3xl font-display font-bold text-white mt-1">8.4M</div>
                        <span class="text-[11px] text-emerald-400 font-medium">activos</span>
                    </div>
                    <div class="w-8 h-8 rounded-lg bg-blue-600/10 border border-blue-600/20 flex items-center justify-center text-blue-400">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                    </div>
                </div>
                <div class="mt-4 flex items-center justify-between text-xs">
                    <span class="text-slate-400 text-[11px]">Pico 12.1M (22:45 UTC)</span>
                    <div class="w-16 h-2 bg-blue-500/10 rounded-full overflow-hidden">
                        <div class="w-4/5 h-full bg-blue-500 rounded-full"></div>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 3: Catálogo Activo -->
            <div class="bg-[#151922] border border-[#232936] rounded-xl p-5 relative overflow-hidden flex flex-col justify-between">
                <div class="flex items-start justify-between">
                    <div>
                        <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400 font-display">CATÁLOGO ACTIVO</span>
                        <div class="text-3xl font-display font-bold text-white mt-1">14,820</div>
                        <span class="text-[11px] text-slate-500">títulos</span>
                    </div>
                    <div class="w-8 h-8 rounded-lg bg-slate-700/20 border border-slate-600/30 flex items-center justify-center text-slate-300">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                    </div>
                </div>
                <div class="mt-4 flex items-center gap-2 text-[10px] text-slate-400">
                    <span><strong class="text-white">6.2K</strong> Films</span>
                    <span>&bull;</span>
                    <span><strong class="text-white">4.9K</strong> Series</span>
                    <span>&bull;</span>
                    <span><strong class="text-white">420</strong> Games</span>
                </div>
            </div>

            <!-- Tarjeta 4: Tiempo Medio Sesión -->
            <div class="bg-[#151922] border border-[#232936] rounded-xl p-5 relative overflow-hidden flex flex-col justify-between">
                <div class="flex items-start justify-between">
                    <div>
                        <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400 font-display">TIEMPO MEDIO SESIÓN</span>
                        <div class="text-3xl font-display font-bold text-white mt-1">1h 48m</div>
                    </div>
                    <div class="w-8 h-8 rounded-lg bg-amber-500/10 border border-amber-500/20 flex items-center justify-center text-amber-400">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                </div>
                <div class="mt-4 flex items-center justify-between text-xs">
                <span class="text-emerald-400 font-semibold flex items-center gap-1">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                    +6.8%
                </span>
                    <span class="text-slate-500 text-[11px]">por suscriptor</span>
                </div>
            </div>

            <!-- Tarjeta 5: Finalización Título -->
            <div class="bg-[#151922] border border-[#232936] rounded-xl p-5 relative overflow-hidden flex flex-col justify-between">
                <div class="flex items-start justify-between">
                    <div>
                        <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400 font-display">FINALIZACIÓN TÍTULO</span>
                        <div class="text-3xl font-display font-bold text-white mt-1">72.4%</div>
                    </div>
                    <div class="w-8 h-8 rounded-lg bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-400">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                </div>
                <div class="mt-4 flex items-center justify-between text-xs">
                <span class="text-emerald-400 font-semibold flex items-center gap-1">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                    +3.1%
                </span>
                    <span class="text-slate-500 text-[11px]">Temporadas/Arcades</span>
                </div>
            </div>

        </div>

        <!-- SECCIÓN 2: GRÁFICOS DE CONSUMO (BARRAS APILADAS + DONUT FORMATO) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">

            <!-- Gráfico Izquierdo: Visionado Semanal por Categoría (8 columnas) -->
            <div class="lg:col-span-8 bg-[#151922] border border-[#232936] rounded-xl p-6">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between pb-4 border-b border-[#232936] gap-3">
                    <div>
                        <h3 class="font-display font-bold text-lg text-white">VISIONADO SEMANAL POR CATEGORÍA</h3>
                        <p class="text-xs text-slate-400">Consumo total acumulado en millones de horas (M hrs)</p>
                    </div>
                    <!-- Leyenda de colores -->
                    <div class="flex items-center gap-4 text-xs">
                    <span class="flex items-center gap-1.5 text-slate-300">
                        <span class="w-2.5 h-2.5 rounded-full bg-[#E50914]"></span> Películas
                    </span>
                        <span class="flex items-center gap-1.5 text-slate-300">
                        <span class="w-2.5 h-2.5 rounded-full bg-[#F3D7C9]"></span> Series TV
                    </span>
                        <span class="flex items-center gap-1.5 text-slate-300">
                        <span class="w-2.5 h-2.5 rounded-full bg-[#A8C5DA]"></span> Videojuegos
                    </span>
                    </div>
                </div>

                <!-- Gráfico de barras apiladas por días -->
                <div class="mt-8 h-64 flex items-end justify-between gap-4 px-2 pb-2 border-b border-[#232936]">
                    <?php
                    $dias = [
                            ['nom' => 'LUN', 'h_peli' => 60, 'h_serie' => 50, 'h_game' => 18, 'destacado' => false],
                            ['nom' => 'MAR', 'h_peli' => 65, 'h_serie' => 52, 'h_game' => 20, 'destacado' => false],
                            ['nom' => 'MIÉ', 'h_peli' => 70, 'h_serie' => 55, 'h_game' => 16, 'destacado' => false],
                            ['nom' => 'JUE', 'h_peli' => 75, 'h_serie' => 58, 'h_game' => 19, 'destacado' => false],
                            ['nom' => 'VIE', 'h_peli' => 90, 'h_serie' => 62, 'h_game' => 22, 'destacado' => false],
                            ['nom' => 'SÁB', 'h_peli' => 120, 'h_serie' => 75, 'h_game' => 26, 'destacado' => true, 'tag' => 'SÁBADO &bull; PICO'],
                            ['nom' => 'DOM', 'h_peli' => 105, 'h_serie' => 68, 'h_game' => 24, 'destacado' => false],
                    ];
                    foreach ($dias as $d):
                        ?>
                        <div class="flex-1 flex flex-col items-center gap-2 h-full justify-end group relative">
                            <?php if (!empty($d['destacado'])): ?>
                                <span class="absolute -top-7 px-2 py-0.5 rounded bg-[#E50914] text-white text-[9px] font-bold tracking-wider uppercase font-display whitespace-nowrap shadow-sm">
                            <?php echo $d['tag']; ?>
                        </span>
                            <?php endif; ?>

                            <div class="w-full max-w-[42px] bg-[#1A202C] rounded-t flex flex-col justify-end overflow-hidden <?php echo !empty($d['destacado']) ? 'ring-2 ring-[#E50914]/80 shadow-lg shadow-red-950/60' : ''; ?>" style="height: 100%;">
                                <div class="w-full bg-[#A8C5DA]" style="height: <?php echo $d['h_game']; ?>px;"></div>
                                <div class="w-full bg-[#F3D7C9]" style="height: <?php echo $d['h_serie']; ?>px;"></div>
                                <div class="w-full bg-[#E50914]" style="height: <?php echo $d['h_peli']; ?>px;"></div>
                            </div>
                            <span class="text-[10px] font-semibold <?php echo !empty($d['destacado']) ? 'text-[#E50914] font-bold' : 'text-slate-400'; ?> mt-1"><?php echo $d['nom']; ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="mt-4 flex items-center justify-between text-xs text-slate-400">
                    <span>0M</span>
                    <span>Pico de audiencia fin de semana</span>
                    <span>100M</span>
                </div>
            </div>

            <!-- Gráfico Derecho: Distribución por Formato (Donut Chart) (4 columnas) -->
            <div class="lg:col-span-4 bg-[#151922] border border-[#232936] rounded-xl p-6 flex flex-col justify-between">
                <div>
                    <div class="pb-3 border-b border-[#232936]">
                        <h3 class="font-display font-bold text-lg text-white">DISTRIBUCIÓN POR FORMATO</h3>
                        <p class="text-xs text-slate-400">Porcentaje de tiempo dedicado por los espectadores</p>
                    </div>

                    <!-- Donut Chart Simulado en SVG con 482M al Centro -->
                    <div class="mt-6 flex flex-col items-center justify-center relative">
                        <div class="relative w-44 h-44 flex items-center justify-center">
                            <svg class="w-full h-full transform -rotate-90" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="38" stroke="#1E2430" stroke-width="14" fill="transparent"/>
                                <!-- Series: 54% -->
                                <circle cx="50" cy="50" r="38" stroke="#F3D7C9" stroke-width="14" stroke-dasharray="238.7" stroke-dashoffset="109.8" fill="transparent"/>
                                <!-- Películas: 32% -->
                                <circle cx="50" cy="50" r="38" stroke="#E50914" stroke-width="14" stroke-dasharray="238.7" stroke-dashoffset="162.3" stroke-dashoffset="0" fill="transparent"/>
                                <!-- Videojuegos: 14% -->
                                <circle cx="50" cy="50" r="38" stroke="#A8C5DA" stroke-width="14" stroke-dasharray="238.7" stroke-dashoffset="205.2" fill="transparent"/>
                            </svg>
                            <div class="absolute flex flex-col items-center justify-center text-center">
                                <span class="text-3xl font-display font-bold text-white">482M</span>
                                <span class="text-[9px] text-slate-400 font-bold uppercase tracking-wider">HORAS TOTALES</span>
                            </div>
                        </div>
                    </div>

                    <!-- Leyenda de formatos -->
                    <div class="mt-6 space-y-3">
                        <div class="flex items-center justify-between text-xs">
                            <div class="flex items-center gap-2">
                                <span class="w-3 h-3 rounded-sm bg-[#F3D7C9]"></span>
                                <span class="text-slate-200 font-medium">Series Episódicas</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="font-bold text-white font-mono">54%</span>
                                <span class="text-slate-500 font-mono text-[11px]">260M hrs</span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between text-xs">
                            <div class="flex items-center gap-2">
                                <span class="w-3 h-3 rounded-sm bg-[#E50914]"></span>
                                <span class="text-slate-200 font-medium">Largometrajes</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="font-bold text-white font-mono">32%</span>
                                <span class="text-slate-500 font-mono text-[11px]">154M hrs</span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between text-xs">
                            <div class="flex items-center gap-2">
                                <span class="w-3 h-3 rounded-sm bg-[#A8C5DA]"></span>
                                <span class="text-slate-200 font-medium">Videojuegos</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="font-bold text-white font-mono">14%</span>
                                <span class="text-slate-500 font-mono text-[11px]">68M hrs</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-6 pt-3 border-t border-[#232936] text-[11px] text-slate-500 flex justify-between">
                    <span>Wowza / Fastly Stream CDN</span>
                    <span class="text-emerald-400 font-medium">&bull; En directo</span>
                </div>
            </div>

        </div>

    </div>
    <?php
}
?>
