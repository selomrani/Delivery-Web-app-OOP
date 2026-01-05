<header class="h-16 bg-indigo-100/95 dark:bg-slate-900/80 border-b border-indigo-200 dark:border-slate-800 flex items-center justify-between px-4 md:px-8 z-20 sticky top-0 backdrop-blur-md">
    <div class="flex items-center md:hidden gap-3">
        <button class="text-gray-500 hover:text-indigo-600 focus:outline-none p-1">
            <i data-lucide="menu" class="w-6 h-6"></i>
        </button>
        <span class="text-lg font-bold tracking-tight text-indigo-900 dark:text-white">Swift Drop</span>
    </div>
    
    <h1 class="text-xl font-bold hidden md:block text-slate-800 dark:text-white">Driver Dashboard</h1>

    <div class="flex items-center gap-4">
        <!-- Online/Offline Toggle -->
        <label class="relative inline-flex items-center cursor-pointer group">
            <input type="checkbox" value="" class="sr-only peer" checked>
            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-green-500"></div>
            <span class="ml-3 text-sm font-medium text-slate-700 dark:text-slate-300 group-hover:text-indigo-600 transition-colors">Online</span>
        </label>
        
        <div class="h-6 w-px bg-indigo-300 dark:bg-slate-700 mx-2 hidden md:block"></div>

        <!-- Driver Profile Dropdown Trigger (Small Profile) -->
        <div class="flex items-center gap-2 cursor-pointer p-1 rounded-full hover:bg-indigo-200/50 dark:hover:bg-slate-800 transition-colors border border-transparent hover:border-indigo-200 dark:hover:border-slate-700">
            <div class="w-8 h-8 rounded-full bg-indigo-200 dark:bg-indigo-900/50 flex items-center justify-center text-indigo-700 dark:text-indigo-300 font-bold text-xs ring-2 ring-indigo-50 dark:ring-slate-800 shadow-sm border border-indigo-300 dark:border-indigo-800">
                DR
            </div>
            <div class="hidden sm:block text-left pr-2">
                <p class="text-sm font-semibold text-slate-700 dark:text-slate-200 leading-none"><?php echo$_SESSION['firstname']?></p>
                <p class="text-[10px] text-slate-500 dark:text-slate-400 font-medium leading-none mt-0.5">4.9 ★ Rating</p>
            </div>
            <i data-lucide="chevron-down" class="w-3 h-3 text-slate-400 hidden sm:block mr-1"></i>
        </div>
    </div>
</header>