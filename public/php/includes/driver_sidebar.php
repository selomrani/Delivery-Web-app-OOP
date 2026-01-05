<aside class="hidden md:flex flex-col w-64 bg-indigo-900 dark:bg-slate-900 border-r border-indigo-800 dark:border-slate-800 h-full fixed z-30 transition-all text-white shadow-xl">
    <div class="flex items-center h-16 px-6 border-b border-indigo-800 dark:border-slate-800 bg-indigo-950/20">
        <a href="driver_home.php" class="flex items-center text-xl font-bold tracking-tight text-white">
            <i data-lucide="package-2" class="w-7 h-7 text-indigo-300 mr-2.5"></i>
            Swift Drop
        </a>
    </div>

    <nav class="flex-1 px-4 py-6 space-y-1.5">
        <a href="driver_home.php" class="flex items-center px-4 py-2.5 bg-indigo-800 dark:bg-indigo-500/10 text-white dark:text-indigo-300 rounded-xl group transition-all font-medium border border-indigo-700 dark:border-indigo-500/20 shadow-md shadow-indigo-900/20">
            <i data-lucide="layout-dashboard" class="w-5 h-5 mr-3 text-indigo-300 dark:text-indigo-300"></i>
            Dashboard
        </a>

        <a href="driver_deliveries.php" class="flex items-center px-4 py-2.5 text-indigo-100 dark:text-slate-400 hover:bg-indigo-800/50 dark:hover:bg-slate-800 hover:text-white dark:hover:text-white rounded-xl group transition-all font-medium">
            <i data-lucide="package-check" class="w-5 h-5 mr-3 text-indigo-300 group-hover:text-white dark:group-hover:text-slate-300 transition-colors"></i>
            My Deliveries
        </a>

        <a href="driver_earnings.php" class="flex items-center px-4 py-2.5 text-indigo-100 dark:text-slate-400 hover:bg-indigo-800/50 dark:hover:bg-slate-800 hover:text-white dark:hover:text-white rounded-xl group transition-all font-medium">
            <i data-lucide="wallet" class="w-5 h-5 mr-3 text-indigo-300 group-hover:text-white dark:group-hover:text-slate-300 transition-colors"></i>
            Earnings
        </a>

        <a href="driver_profile.php" class="flex items-center px-4 py-2.5 text-indigo-100 dark:text-slate-400 hover:bg-indigo-800/50 dark:hover:bg-slate-800 hover:text-white dark:hover:text-white rounded-xl group transition-all font-medium">
            <i data-lucide="user" class="w-5 h-5 mr-3 text-indigo-300 group-hover:text-white dark:group-hover:text-slate-300 transition-colors"></i>
            Profile
        </a>
    </nav>

    <div class="p-4 border-t border-indigo-800 dark:border-slate-800">
        <form action="../Actions/UserLogout.php" method="POST" class="w-full">
            <button type="submit" name="c_logout" class="flex items-center w-full px-4 py-2.5 ...">
                <i data-lucide="log-out" class="w-5 h-5 mr-3 group-hover:text-red-300 dark:group-hover:text-red-500"></i>
                Sign Out
            </button>
        </form>
    </div>
</aside>