<header class="h-16 bg-indigo-100/95 dark:bg-slate-900/80 border-b border-indigo-200 dark:border-slate-800 flex items-center justify-between px-4 md:px-8 z-20 sticky top-0 backdrop-blur-md">
    <div class="flex items-center md:hidden gap-3">
        <button class="text-gray-500 hover:text-indigo-600 focus:outline-none p-1">
            <i data-lucide="menu" class="w-6 h-6"></i>
        </button>
        <span class="text-lg font-bold tracking-tight text-indigo-900 dark:text-white">Swift Drop</span>
    </div>
    
    <h1 class="text-xl font-bold hidden md:block text-slate-800 dark:text-white">Dashboard</h1>

    <div class="flex items-center gap-4">
        <!-- Create Order Button -->
        <button onclick="toggleModal('createOrderModal')" class="hidden md:flex btn-shine items-center px-5 py-2 bg-gradient-to-r from-indigo-600 to-violet-600 hover:from-indigo-700 hover:to-violet-700 text-white text-sm font-bold rounded-full shadow-lg shadow-indigo-500/30 hover:shadow-indigo-500/50 transition-all transform hover:scale-105 active:scale-95 border border-white/10">
            <i data-lucide="package-plus" class="w-4 h-4 mr-2"></i>
            New Order
        </button>
        
        <div class="h-6 w-px bg-indigo-300 dark:bg-slate-700 mx-2 hidden md:block"></div>

        <!-- User Profile Dropdown Trigger (Small Profile) -->
        <div class="flex items-center gap-2 cursor-pointer p-1 rounded-full hover:bg-indigo-200/50 dark:hover:bg-slate-800 transition-colors border border-transparent hover:border-indigo-200 dark:hover:border-slate-700">
            <div class="w-8 h-8 rounded-full bg-indigo-200 dark:bg-indigo-900/50 flex items-center justify-center text-indigo-700 dark:text-indigo-300 font-bold text-xs ring-2 ring-indigo-50 dark:ring-slate-800 shadow-sm border border-indigo-300 dark:border-indigo-800">
                JD
            </div>
            <div class="hidden sm:block text-left pr-2">
                <p class="text-sm font-semibold text-slate-700 dark:text-slate-200 leading-none"><?php echo $_SESSION['firstname'] . " " . $_SESSION['lastname'] ?></p>
            </div>
            <i data-lucide="chevron-down" class="w-3 h-3 text-slate-400 hidden sm:block mr-1"></i>
        </div>
    </div>
</header>