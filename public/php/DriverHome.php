<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use App\Service\OrderService;
session_start();
include 'includes/style.php'; 
$Availableorders = OrderService::fetchALLorders();
?>
<div class="flex h-screen overflow-hidden">
    
    <?php include 'includes/driver_sidebar.php'; ?>

    <!-- Main Content Wrapper -->
    <div class="flex-1 flex flex-col md:pl-64 min-h-screen relative bg-indigo-100 dark:bg-slate-950">
        
        <?php include 'includes/driver_navbar.php'; ?>

        <!-- Scrollable Content -->
        <main class="flex-1 overflow-y-auto p-4 md:p-8 pb-24 md:pb-8">
            
            <!-- Stats Overview -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mb-8">
                <div class="bg-indigo-50 dark:bg-slate-900 p-6 rounded-2xl shadow-sm border border-indigo-200 dark:border-slate-800 flex items-center justify-between group hover:border-indigo-300 dark:hover:border-indigo-700 transition-colors">
                    <div>
                        <p class="text-slate-500 dark:text-slate-400 text-sm font-medium mb-1">Today's Earnings</p>
                        <h3 class="text-3xl font-bold text-slate-900 dark:text-white">$84.50</h3>
                    </div>
                    <div class="p-3.5 bg-indigo-100 dark:bg-indigo-900/20 rounded-xl text-indigo-600 dark:text-indigo-400 group-hover:scale-110 transition-transform">
                        <i data-lucide="dollar-sign" class="w-6 h-6"></i>
                    </div>
                </div>
                <div class="bg-indigo-50 dark:bg-slate-900 p-6 rounded-2xl shadow-sm border border-indigo-200 dark:border-slate-800 flex items-center justify-between group hover:border-green-300 dark:hover:border-green-700 transition-colors">
                    <div>
                        <p class="text-slate-500 dark:text-slate-400 text-sm font-medium mb-1">Completed Jobs</p>
                        <h3 class="text-3xl font-bold text-slate-900 dark:text-white">4</h3>
                    </div>
                    <div class="p-3.5 bg-green-50 dark:bg-green-900/20 rounded-xl text-green-600 dark:text-green-400 group-hover:scale-110 transition-transform">
                        <i data-lucide="check-circle-2" class="w-6 h-6"></i>
                    </div>
                </div>
                <div class="bg-indigo-50 dark:bg-slate-900 p-6 rounded-2xl shadow-sm border border-indigo-200 dark:border-slate-800 flex items-center justify-between group hover:border-yellow-300 dark:hover:border-yellow-700 transition-colors">
                    <div>
                        <p class="text-slate-500 dark:text-slate-400 text-sm font-medium mb-1">My Rating</p>
                        <h3 class="text-3xl font-bold text-slate-900 dark:text-white">4.9</h3>
                    </div>
                    <div class="p-3.5 bg-yellow-50 dark:bg-yellow-900/20 rounded-xl text-yellow-600 dark:text-yellow-400 group-hover:scale-110 transition-transform">
                        <i data-lucide="star" class="w-6 h-6"></i>
                    </div>
                </div>
            </div>

            <!-- Available Orders Feed -->
            <div class="mb-6">
                <h2 class="text-xl font-bold text-slate-800 dark:text-white flex items-center gap-2 mb-4">
                    Available Orders
                    <span class="px-2 py-0.5 rounded-full bg-indigo-50 dark:bg-slate-800 text-indigo-600 dark:text-slate-300 text-xs font-semibold border border-indigo-200 dark:border-slate-700">5 Nearby</span>
                </h2>
                
<div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
    <!-- Order Card Template Start (inside the loop) -->
    <?php foreach ($Availableorders as $order): ?>
        <div class="bg-indigo-50 dark:bg-slate-900 rounded-2xl shadow-sm border border-indigo-200 dark:border-slate-800 p-5 transition-all hover:shadow-md hover:border-indigo-300 dark:hover:border-slate-700 relative overflow-hidden group">
            <div class="absolute left-0 top-0 bottom-0 w-1.5 bg-indigo-500"></div>
            <div class="pl-2">
                <div class="flex justify-between items-start mb-3">
                    <div>
                        <span class="px-2 py-0.5 rounded text-xs font-bold bg-indigo-100 text-indigo-700 dark:bg-indigo-900/30 dark:text-indigo-400 mb-2 inline-block">
                            <?= htmlspecialchars($order['weight']) ?>
                        </span>
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white"><?= htmlspecialchars($order['title']) ?></h3>
                        <!-- Client Info (Replaced Distance/Demand) -->
                        <div class="flex items-center gap-2 mt-2">
                            <div class="w-6 h-6 rounded-full bg-indigo-200 dark:bg-indigo-900 flex items-center justify-center text-xs font-bold text-indigo-700 dark:text-indigo-300"> JS </div>
                            <p class="text-xs text-slate-600 dark:text-slate-400">
                                <span class="font-semibold text-slate-900 dark:text-white">John Smith</span> • <a href="#" class="text-indigo-600 dark:text-indigo-400 hover:underline">View Profile</a>
                            </p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm text-slate-500">Suggested Commission</p>
                        <p class="text-xl font-bold text-indigo-600 dark:text-indigo-400">$<?= htmlspecialchars($order['price']) ?></p>
                    </div>
                </div>
                <div class="flex flex-col gap-2 mb-4 mt-2">
                    <div class="flex items-center text-sm text-slate-700 dark:text-slate-300">
                        <div class="w-6 flex justify-center"><i data-lucide="navigation" class="w-4 h-4 text-emerald-500"></i></div>
                        <span class="font-medium">Drop:</span>&nbsp;Westside Apartments
                    </div>
                </div>
                <button onclick="toggleModal('viewOrderModal')" class="w-full py-2.5 bg-white dark:bg-slate-800 border border-indigo-200 dark:border-slate-700 text-indigo-600 dark:text-indigo-400 font-bold rounded-xl hover:bg-indigo-50 dark:hover:bg-slate-700 transition-colors shadow-sm"> View Details & Offer </button>
            </div>
        </div>
    <?php endforeach; ?>
    <!-- Order Card Template End -->
</div>

                    </div>
                </div>
            </div>

        </main>
    </div>
</div>

<?php include 'includes/driver_modals.php'; ?>
<?php include 'includes/script.php'; ?>