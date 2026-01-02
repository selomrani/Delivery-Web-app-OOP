
      lucide.createIcons();
        // Basic Mobile Sidebar Toggle
        const menuBtn = document.getElementById('menu-btn');
        const sidebar = document.getElementById('sidebar');
        if(menuBtn && sidebar) {
            menuBtn.addEventListener('click', () => {
                sidebar.classList.toggle('hidden');
                sidebar.classList.toggle('flex');
                
                // Add absolute positioning for mobile view if showing
                if(!sidebar.classList.contains('hidden')) {
                   sidebar.classList.add('absolute', 'inset-y-0', 'left-0', 'shadow-xl');
                } else {
                   sidebar.classList.remove('absolute', 'inset-y-0', 'left-0', 'shadow-xl');
                }
            });
        }