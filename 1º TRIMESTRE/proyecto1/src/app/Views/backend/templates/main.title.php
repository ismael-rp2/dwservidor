<header class="h-16 px-6 border-b border-[#1C222E] bg-[#0A0E17]/95 backdrop-blur flex items-center justify-between sticky top-0 z-20">
    <div class="flex items-center gap-5">
        <div class="flex items-center text-xs text-gray-400 gap-1.5 font-medium">
            <span class="hover:text-gray-200 cursor-pointer">Eldense Studio</span>
            <svg class="w-3.5 h-3.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
            <span class="text-white font-semibold">CMS Console</span>
        </div>
        <div class="hidden md:flex items-center gap-2 bg-[#101722] border border-[#212C3D] px-2.5 py-1 rounded-full text-[11px] text-gray-300 font-medium">
            <span class="relative flex h-2 w-2"><span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span><span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span></span>
            <span>Servidores streaming: <strong class="text-emerald-400 font-semibold">99.98% operativo</strong></span>
        </div>
    </div>
    <div class="flex items-center gap-3">
        <div class="relative w-72 lg:w-96 hidden sm:block">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg></div>
            <input class="w-full bg-[#131822] text-xs text-gray-200 pl-9 pr-3 py-2 rounded-lg border border-[#222A3B] focus:outline-none focus:border-brand-red focus:ring-1 focus:ring-brand-red placeholder-gray-400" placeholder="Buscar por título, ID de activo, director, género..." type="text"/>
        </div>
        <a href="/admin/nueva-pelicula" class="bg-brand-red hover:bg-brand-redHover text-white px-3.5 py-2 rounded-lg font-heading text-sm font-semibold tracking-wider flex items-center gap-1.5 shadow-md shadow-brand-red/25 transition-all">
            <svg class="w-4 h-4 stroke-[2.5]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 4v16m8-8H4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
            <span>NUEVO CONTENIDO</span>
        </a>
        <button class="relative p-2 text-gray-400 hover:text-white hover:bg-[#161D29] rounded-lg transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
            <span class="absolute top-1.5 right-1.5 w-2 h-2 bg-brand-red rounded-full ring-2 ring-[#0A0E17]"></span>
        </button>
        <div class="w-8 h-8 rounded-full bg-gradient-to-tr from-brand-red to-rose-400 p-[1.5px] cursor-pointer shadow-md">
            <div class="w-full h-full bg-[#131822] rounded-full flex items-center justify-center text-xs font-bold text-gray-200">AD</div>
        </div>
    </div>
</header>