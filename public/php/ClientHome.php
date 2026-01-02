<?php include 'includes/style.php'; ?>

<div class="flex h-screen overflow-hidden">
    
    <?php include 'includes/sidebar.php'; ?>

    <!-- Main Content Wrapper (Solid Indigo Background) -->
    <div class="flex-1 flex flex-col md:pl-64 min-h-screen relative bg-indigo-100 dark:bg-slate-950">
        
        <?php include 'includes/topnavbar.php'; ?>

        <!-- Scrollable Content -->
        <main class="flex-1 overflow-y-auto p-4 md:p-8 pb-24 md:pb-8">
            
            <!-- Stats Overview -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mb-8">
                <div class="bg-indigo-50 dark:bg-slate-900 p-6 rounded-2xl shadow-sm border border-indigo-200 dark:border-slate-800 flex items-center justify-between group hover:border-indigo-300 dark:hover:border-indigo-700 transition-colors">
                    <div>
                        <p class="text-slate-500 dark:text-slate-400 text-sm font-medium mb-1">Active Orders</p>
                        <h3 class="text-3xl font-bold text-slate-900 dark:text-white">2</h3>
                    </div>
                    <div class="p-3.5 bg-indigo-100 dark:bg-indigo-900/20 rounded-xl text-indigo-600 dark:text-indigo-400 group-hover:scale-110 transition-transform">
                        <i data-lucide="package" class="w-6 h-6"></i>
                    </div>
                </div>
                <div class="bg-indigo-50 dark:bg-slate-900 p-6 rounded-2xl shadow-sm border border-indigo-200 dark:border-slate-800 flex items-center justify-between group hover:border-orange-300 dark:hover:border-orange-700 transition-colors">
                    <div>
                        <p class="text-slate-500 dark:text-slate-400 text-sm font-medium mb-1">Pending Offers</p>
                        <h3 class="text-3xl font-bold text-slate-900 dark:text-white">1</h3>
                    </div>
                    <div class="p-3.5 bg-orange-50 dark:bg-orange-900/20 rounded-xl text-orange-600 dark:text-orange-400 group-hover:scale-110 transition-transform">
                        <i data-lucide="ticket" class="w-6 h-6"></i>
                    </div>
                </div>
                <div class="bg-indigo-50 dark:bg-slate-900 p-6 rounded-2xl shadow-sm border border-indigo-200 dark:border-slate-800 flex items-center justify-between group hover:border-green-300 dark:hover:border-green-700 transition-colors">
                    <div>
                        <p class="text-slate-500 dark:text-slate-400 text-sm font-medium mb-1">Completed</p>
                        <h3 class="text-3xl font-bold text-slate-900 dark:text-white">14</h3>
                    </div>
                    <div class="p-3.5 bg-green-50 dark:bg-green-900/20 rounded-xl text-green-600 dark:text-green-400 group-hover:scale-110 transition-transform">
                        <i data-lucide="check-circle" class="w-6 h-6"></i>
                    </div>
                </div>
            </div>

            <!-- Section Header -->
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl font-bold text-slate-800 dark:text-white flex items-center gap-2">
                    Recent Activity
                    <span class="px-2 py-0.5 rounded-full bg-indigo-50 dark:bg-slate-800 text-indigo-600 dark:text-slate-300 text-xs font-semibold border border-indigo-200 dark:border-slate-700">3</span>
                </h2>
                <!-- Mobile Create Button -->
                <button onclick="toggleModal('createOrderModal')" class="md:hidden p-3 bg-indigo-600 text-white rounded-full shadow-lg shadow-indigo-600/30 active:scale-95 transition-transform">
                    <i data-lucide="plus" class="w-6 h-6"></i>
                </button>
            </div>
            
            <div class="space-y-5">
                
                <?php 
                // Placeholder for PHP Loop
                // foreach ($orders as $order) { 
                ?>
                
                <!-- Card 1: Pending Offers -->
                <div class="bg-indigo-50 dark:bg-slate-900 rounded-2xl shadow-sm border border-indigo-200 dark:border-slate-800 p-5 transition-all hover:shadow-md hover:border-indigo-300 dark:hover:border-slate-700 relative overflow-hidden">
                    <div class="absolute left-0 top-0 bottom-0 w-1.5 bg-yellow-400"></div>
                    <div class="flex flex-col md:flex-row justify-between md:items-start gap-5 pl-2">
                        <div class="flex-1">
                            <div class="flex flex-wrap items-center gap-3 mb-2">
                                <span class="px-2.5 py-1 rounded-md text-xs font-bold bg-yellow-50 text-yellow-700 dark:bg-yellow-900/30 dark:text-yellow-400 flex items-center gap-1.5 border border-yellow-200 dark:border-yellow-800">
                                    <span class="w-1.5 h-1.5 rounded-full bg-yellow-500 animate-pulse"></span>
                                    Pending Offers
                                </span>
                                <span class="text-xs text-slate-500 font-mono">#ORD-8832</span>
                                <span class="text-xs text-slate-400">• 2 hours ago</span>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-1.5">PlayStation 5 Console</h3>
                            <p class="text-sm text-slate-500 dark:text-slate-400 mb-4 max-w-2xl">Fragile handling required, please deliver before 6 PM today.</p>
                            
                            <div class="flex flex-col sm:flex-row sm:items-center gap-4 text-sm bg-white/60 dark:bg-slate-800/60 p-1.5 rounded-md border border-indigo-300 dark:border-indigo-500/30 shadow-sm inline-flex">
                                <div class="flex items-center text-slate-700 dark:text-slate-300">
                                    <i data-lucide="map-pin" class="w-4 h-4 mr-2 text-indigo-500 dark:text-indigo-400"></i>
                                    <span class="font-semibold mr-1">To:</span> Home (123 Main St)
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex flex-row md:flex-col gap-2 items-center md:items-end w-full md:w-auto mt-2 md:mt-0 border-t md:border-t-0 border-indigo-200 dark:border-slate-800 pt-4 md:pt-0">
                            <button onclick="toggleModal('viewOffersModal')" class="flex-1 md:flex-none w-full md:w-auto flex items-center justify-center px-5 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-semibold rounded-xl transition-all shadow-sm shadow-indigo-500/20 active:scale-95">
                                <i data-lucide="users" class="w-4 h-4 mr-2"></i>
                                View 3 Offers
                            </button>
                            <div class="flex gap-2 w-full md:w-auto">
                                <button onclick="toggleModal('editOrderModal')" class="flex-1 md:flex-none py-2.5 px-3 md:px-2.5 text-slate-500 hover:text-indigo-600 hover:bg-indigo-100 dark:hover:bg-slate-800 rounded-xl transition-colors border border-indigo-200 dark:border-slate-700 md:border-transparent" title="Edit Order">
                                    <i data-lucide="pencil" class="w-4 h-4 mx-auto"></i>
                                </button>
                                <form action="cancel_order.php" method="POST" class="flex-1 md:flex-none" onsubmit="return confirm('Are you sure you want to cancel this order?');">
                                    <input type="hidden" name="order_id" value="8832">
                                    <button type="submit" class="w-full h-full py-2.5 px-3 md:px-2.5 text-slate-500 hover:text-red-600 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-xl transition-colors border border-indigo-200 dark:border-slate-700 md:border-transparent" title="Cancel Order">
                                        <i data-lucide="trash-2" class="w-4 h-4 mx-auto"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Shipped -->
                <div class="bg-indigo-50 dark:bg-slate-900 rounded-2xl shadow-sm border border-indigo-200 dark:border-slate-800 p-5 transition-all hover:shadow-md hover:border-indigo-300 dark:hover:border-slate-700 relative overflow-hidden">
                    <div class="absolute left-0 top-0 bottom-0 w-1.5 bg-purple-500"></div>
                    <div class="flex flex-col md:flex-row justify-between md:items-start gap-5 pl-2">
                        <div class="flex-1">
                            <div class="flex items-center gap-3 mb-2">
                                <span class="px-2.5 py-1 rounded-md text-xs font-bold bg-purple-50 text-purple-700 dark:bg-purple-900/30 dark:text-purple-400 flex items-center gap-1.5 border border-purple-100 dark:border-purple-800">
                                    <i data-lucide="truck" class="w-3 h-3"></i>
                                    Shipped
                                </span>
                                <span class="text-xs text-slate-500 font-mono">#ORD-8821</span>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Important Legal Documents</h3>
                            
                            <div class="bg-white/50 dark:bg-slate-800/50 p-4 rounded-xl flex flex-col sm:flex-row items-start sm:items-center gap-4 border border-indigo-200 dark:border-slate-800">
                                <div class="flex items-center gap-3 flex-1">
                                    <div class="h-10 w-10 rounded-full bg-white dark:bg-slate-700 flex items-center justify-center shrink-0 border border-indigo-200 dark:border-slate-600 shadow-sm">
                                        <i data-lucide="user" class="w-5 h-5 text-slate-500 dark:text-slate-300"></i>
                                    </div>
                                    <div class="min-w-0">
                                        <p class="text-sm font-bold text-slate-900 dark:text-white truncate">Mike T. (Driver)</p>
                                        <p class="text-xs text-slate-500 truncate">Yamaha MT07 • 4.8 ★</p>
                                    </div>
                                </div>
                                <div class="h-8 w-px bg-indigo-200 dark:bg-slate-700 hidden sm:block"></div>
                                <div class="flex justify-between w-full sm:w-auto sm:block text-right sm:text-left">
                                    <div>
                                        <p class="text-xs text-slate-500 mb-0.5">Est. Arrival</p>
                                        <p class="text-sm font-bold text-slate-900 dark:text-white">12 mins</p>
                                    </div>
                                    <div class="sm:hidden">
                                        <p class="text-xs text-slate-500 mb-0.5">Price</p>
                                        <p class="text-sm font-bold text-slate-900 dark:text-white">$15.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex flex-col gap-2.5 items-center md:items-end w-full md:w-auto mt-4 md:mt-0 border-t md:border-t-0 border-indigo-200 dark:border-slate-800 pt-4 md:pt-0">
                            <form action="confirm_delivery.php" method="POST" class="w-full md:w-auto">
                                <input type="hidden" name="order_id" value="8821">
                                <button type="submit" class="btn-shine w-full md:w-auto flex items-center justify-center h-8 px-4 bg-gradient-to-r from-emerald-500 to-teal-600 hover:from-emerald-600 hover:to-teal-700 text-white text-xs font-bold rounded-lg shadow-md shadow-emerald-500/20 hover:shadow-emerald-500/40 transition-all transform hover:scale-[1.02] active:scale-95 border border-white/10 uppercase tracking-wide">
                                    <i data-lucide="check-circle-2" class="w-3.5 h-3.5 mr-1.5"></i>
                                    Confirm
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <?php 
                // } // End foreach
                ?>
                
            </div>
        </main>
    </div>
</div>

<?php include 'includes/modals.php'; ?>
<?php include 'includes/script.php'; ?>