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
</main> <!-- Cierra el main abierto en el header -->

<!-- Tus Scripts -->
<script>
    // Seleccionamos todos los botones que despliegan submenús
    const dropdownButtons = document.querySelectorAll('.group > button');
    dropdownButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            const submenu = button.nextElementSibling;
            document.querySelectorAll('.submenu-container.active').forEach(openMenu => {
                if (openMenu !== submenu) {
                    openMenu.classList.remove('active');
                }
            });
            submenu.classList.toggle('active');
        });
    });
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