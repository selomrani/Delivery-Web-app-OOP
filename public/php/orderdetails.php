<?php
require_once __DIR__ . '/../../vendor/autoload.php';
session_start();

use App\Service\OrderService;

// 1. Get ID from URL
$orderId = $_GET['id'] ?? null;

if (!$orderId) {
    header('Location: index.php'); // Redirect if no ID
    exit;
}

$order = [
    'id' => $orderId,
    'status' => 'Shipped', 
    'created_at' => '2023-10-24 14:30:00',
    'title' => 'Important Legal Documents',
    'description' => 'Confidential legal contracts requiring signature upon delivery. Handle with care.',
    'weight' => 2.5,
    'price' => 45.00,
    'tax' => 4.50,
    'total' => 49.50,
    'pickup_address' => '123 Business Park, Floor 4, New York, NY',
    'pickup_time' => '2023-10-24 15:00',
    'dropoff_address' => '8821 Residential Ave, Brooklyn, NY',
    'dropoff_est' => '2023-10-24 17:30',
    'customer' => [
        'name' => 'Sarah Connor',
        'phone' => '+1 (555) 019-2834',
        'email' => 'sarah@example.com'
    ],
    'driver' => [
        'name' => 'Mike T.',
        'vehicle' => 'Yamaha MT07',
        'rating' => 4.8,
        'phone' => '+1 (555) 999-8888'
    ]
];

// Helper for Status Colors (Reused from your dashboard)
$statusColor = 'indigo';
switch (strtolower($order['status'])) {
    case 'pending': $statusColor = 'yellow'; break;
    case 'shipped': $statusColor = 'purple'; break;
    case 'delivered': 
    case 'completed': $statusColor = 'emerald'; break;
    case 'cancelled': $statusColor = 'red'; break;
}

include 'includes/style.php'; 
?>

<div class="flex h-screen overflow-hidden">

    <?php include 'includes/sidebar.php'; ?>

    <div class="flex-1 flex flex-col md:pl-64 min-h-screen relative bg-indigo-100 dark:bg-slate-950">

        <?php include 'includes/topnavbar.php'; ?>

        <main class="flex-1 overflow-y-auto p-4 md:p-8 pb-24 md:pb-8">

            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
                <div>
                    <a href="index.php" class="inline-flex items-center text-sm text-slate-500 hover:text-indigo-600 mb-2 transition-colors">
                        <i data-lucide="arrow-left" class="w-4 h-4 mr-1"></i> Back to Orders
                    </a>
                    <h1 class="text-2xl md:text-3xl font-bold text-slate-900 dark:text-white flex items-center gap-3">
                        Order #<?= htmlspecialchars($order['id']) ?>
                        
                        <span class="px-3 py-1 rounded-full text-sm font-bold bg-<?= $statusColor ?>-100 text-<?= $statusColor ?>-700 dark:bg-<?= $statusColor ?>-900/30 dark:text-<?= $statusColor ?>-400 border border-<?= $statusColor ?>-200 dark:border-<?= $statusColor ?>-800 flex items-center gap-2">
                            <span class="relative flex h-2.5 w-2.5">
                              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-<?= $statusColor ?>-400 opacity-75"></span>
                              <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-<?= $statusColor ?>-500"></span>
                            </span>
                            <?= htmlspecialchars($order['status']) ?>
                        </span>
                    </h1>
                </div>

                <div class="flex items-center gap-3">
                    <button class="px-4 py-2 bg-white dark:bg-slate-800 text-slate-700 dark:text-slate-300 border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-700 rounded-xl text-sm font-semibold transition-colors flex items-center gap-2">
                        <i data-lucide="printer" class="w-4 h-4"></i> Print
                    </button>
                    <button onclick="toggleModal('editOrderModal', <?= $order['id'] ?>)" class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl text-sm font-semibold shadow-lg shadow-indigo-500/20 transition-all active:scale-95 flex items-center gap-2">
                        <i data-lucide="pencil" class="w-4 h-4"></i> Edit Order
                    </button>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                <div class="lg:col-span-2 space-y-6">
                    
                    <div class="bg-white dark:bg-slate-900 rounded-2xl shadow-sm border border-slate-200 dark:border-slate-800 p-6">
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-6 flex items-center gap-2">
                            <i data-lucide="map" class="w-5 h-5 text-indigo-500"></i> Route Details
                        </h3>

                        <div class="relative pl-4 border-l-2 border-indigo-100 dark:border-slate-800 ml-3 space-y-8">
                            <div class="relative">
                                <div class="absolute -left-[21px] top-1 h-4 w-4 rounded-full border-2 border-indigo-500 bg-white dark:bg-slate-900"></div>
                                <div class="mb-1 text-xs text-slate-500 font-semibold uppercase tracking-wider">Pickup Location</div>
                                <h4 class="text-slate-900 dark:text-white font-medium text-base"><?= htmlspecialchars($order['pickup_address']) ?></h4>
                                <p class="text-slate-500 text-sm mt-1"><?= htmlspecialchars($order['pickup_time']) ?></p>
                            </div>

                            <div class="relative">
                                <div class="absolute -left-[21px] top-1 h-4 w-4 rounded-full border-2 border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-900"></div>
                                <div class="mb-1 text-xs text-slate-500 font-semibold uppercase tracking-wider">Dropoff Location</div>
                                <h4 class="text-slate-900 dark:text-white font-medium text-base"><?= htmlspecialchars($order['dropoff_address']) ?></h4>
                                <p class="text-slate-500 text-sm mt-1">Est. <?= htmlspecialchars($order['dropoff_est']) ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white dark:bg-slate-900 rounded-2xl shadow-sm border border-slate-200 dark:border-slate-800 p-6">
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-4 flex items-center gap-2">
                            <i data-lucide="package-open" class="w-5 h-5 text-indigo-500"></i> Package Info
                        </h3>
                        
                        <div class="p-4 bg-slate-50 dark:bg-slate-800/50 rounded-xl border border-slate-100 dark:border-slate-700 mb-4">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h4 class="font-bold text-slate-900 dark:text-white"><?= htmlspecialchars($order['title']) ?></h4>
                                    <p class="text-sm text-slate-500 dark:text-slate-400 mt-1"><?= htmlspecialchars($order['description']) ?></p>
                                </div>
                                <span class="bg-white dark:bg-slate-700 px-3 py-1 rounded-lg text-xs font-bold shadow-sm border border-slate-200 dark:border-slate-600">
                                    x1
                                </span>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            <div class="p-3 rounded-xl bg-slate-50 dark:bg-slate-800/50 text-center">
                                <p class="text-xs text-slate-500 uppercase font-bold">Weight</p>
                                <p class="text-slate-900 dark:text-white font-semibold mt-1"><?= $order['weight'] ?> kg</p>
                            </div>
                            <div class="p-3 rounded-xl bg-slate-50 dark:bg-slate-800/50 text-center">
                                <p class="text-xs text-slate-500 uppercase font-bold">Type</p>
                                <p class="text-slate-900 dark:text-white font-semibold mt-1">Parcel</p>
                            </div>
                            <div class="p-3 rounded-xl bg-slate-50 dark:bg-slate-800/50 text-center">
                                <p class="text-xs text-slate-500 uppercase font-bold">Created</p>
                                <p class="text-slate-900 dark:text-white font-semibold mt-1 text-sm"><?= date('M d, Y', strtotime($order['created_at'])) ?></p>
                            </div>
                            <div class="p-3 rounded-xl bg-slate-50 dark:bg-slate-800/50 text-center">
                                <p class="text-xs text-slate-500 uppercase font-bold">Priority</p>
                                <p class="text-indigo-600 dark:text-indigo-400 font-bold mt-1">High</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space-y-6">

                    <div class="bg-white dark:bg-slate-900 rounded-2xl shadow-sm border border-slate-200 dark:border-slate-800 p-6">
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-4">Payment Summary</h3>
                        
                        <div class="space-y-3 mb-4 border-b border-slate-100 dark:border-slate-800 pb-4">
                            <div class="flex justify-between text-sm text-slate-600 dark:text-slate-400">
                                <span>Subtotal</span>
                                <span>$<?= number_format($order['price'], 2) ?></span>
                            </div>
                            <div class="flex justify-between text-sm text-slate-600 dark:text-slate-400">
                                <span>Service Fee & Tax</span>
                                <span>$<?= number_format($order['tax'], 2) ?></span>
                            </div>
                        </div>
                        
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-slate-900 dark:text-white">Total Paid</span>
                            <span class="text-xl font-black text-indigo-600 dark:text-indigo-400">$<?= number_format($order['total'], 2) ?></span>
                        </div>
                    </div>

                    <?php if ($order['driver']): ?>
                    <div class="bg-gradient-to-br from-indigo-600 to-indigo-800 rounded-2xl shadow-lg shadow-indigo-500/30 p-6 text-white relative overflow-hidden">
                        <div class="absolute top-0 right-0 -mr-8 -mt-8 w-24 h-24 rounded-full bg-white/10 blur-xl"></div>
                        
                        <h3 class="font-bold text-indigo-100 mb-4 flex items-center gap-2">
                            <i data-lucide="truck" class="w-4 h-4"></i> Assigned Driver
                        </h3>

                        <div class="flex items-center gap-4 mb-4">
                            <div class="h-12 w-12 rounded-full bg-white/20 flex items-center justify-center text-xl font-bold backdrop-blur-sm">
                                <?= substr($order['driver']['name'], 0, 1) ?>
                            </div>
                            <div>
                                <p class="font-bold text-lg"><?= htmlspecialchars($order['driver']['name']) ?></p>
                                <p class="text-indigo-200 text-sm"><?= htmlspecialchars($order['driver']['vehicle']) ?></p>
                            </div>
                        </div>

                        <div class="flex gap-2">
                            <a href="tel:<?= $order['driver']['phone'] ?>" class="flex-1 py-2 bg-white text-indigo-700 text-center rounded-lg text-sm font-bold hover:bg-indigo-50 transition-colors">
                                Call Driver
                            </a>
                            <div class="flex items-center justify-center px-3 bg-indigo-900/50 rounded-lg text-sm font-bold border border-indigo-500/30">
                                ★ <?= $order['driver']['rating'] ?>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>

                    <div class="bg-white dark:bg-slate-900 rounded-2xl shadow-sm border border-slate-200 dark:border-slate-800 p-6">
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-4">Customer Details</h3>
                        <div class="flex items-start gap-3">
                            <div class="p-2 bg-slate-100 dark:bg-slate-800 rounded-lg">
                                <i data-lucide="user" class="w-5 h-5 text-slate-500"></i>
                            </div>
                            <div class="overflow-hidden">
                                <p class="font-bold text-slate-900 dark:text-white truncate"><?= htmlspecialchars($order['customer']['name']) ?></p>
                                <p class="text-sm text-slate-500 truncate"><?= htmlspecialchars($order['customer']['email']) ?></p>
                                <p class="text-sm text-slate-500 mt-1"><?= htmlspecialchars($order['customer']['phone']) ?></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </main>
    </div>
</div>

<?php include 'includes/modals.php'; ?>
<?php include 'includes/script.php'; ?>