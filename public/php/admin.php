<?php

require_once __DIR__ . '/../../vendor/autoload.php'; 
session_start();
use App\Service\AdminService;
use App\Service\OrderService;

if (!isset($_SESSION['email'])) {
    header("Location: ../login.php");
    exit();
}

$clientscount = AdminService::userscount('client');
$driverscount = AdminService::userscount('driver');
$totalorders = AdminService::fetchAllordersCount();
$orders = OrderService::fetchALLorders()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swift Drop - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 text-gray-900">

    <div class="flex h-screen overflow-hidden">
        <aside id="sidebar" class="absolute z-20 flex-col w-64 h-full px-4 py-8 overflow-y-auto bg-white border-r rtl:border-r-0 rtl:border-l dark:bg-gray-900 dark:border-gray-700 hidden md:flex">
            <a href="#" class="flex items-center mx-auto text-xl font-bold text-gray-800 dark:text-white">
                <i data-lucide="package-2" class="w-8 h-8 text-blue-600 mr-2"></i>
                Swift Drop
            </a>

            <div class="flex flex-col justify-between flex-1 mt-6">
                <nav>
                    <a class="flex items-center px-4 py-2 text-gray-700 bg-gray-100 rounded-md dark:bg-gray-800 dark:text-gray-200" href="#">
                        <i data-lucide="layout-dashboard" class="w-5 h-5"></i>
                        <span class="mx-4 font-medium">Dashboard</span>
                    </a>

                    <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="#">
                        <i data-lucide="shopping-cart" class="w-5 h-5"></i>
                        <span class="mx-4 font-medium">Orders</span>
                    </a>

                    <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="#">
                        <i data-lucide="users" class="w-5 h-5"></i>
                        <span class="mx-4 font-medium">Customers</span>
                    </a>

                    <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="#">
                        <i data-lucide="truck" class="w-5 h-5"></i>
                        <span class="mx-4 font-medium">Drivers</span>
                    </a>

                    <hr class="my-6 border-gray-200 dark:border-gray-600">

                    <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="#">
                        <i data-lucide="settings" class="w-5 h-5"></i>
                        <span class="mx-4 font-medium">Settings</span>
                    </a>

                    <form action="../Actions/UserLogout.php" method="POST" class="mt-5">
                        <button type="submit" name="c_logout    " class="w-full flex items-center px-4 py-2 text-red-600 transition-colors duration-300 transform rounded-md hover:bg-red-100 dark:hover:bg-red-900 dark:text-red-400 hover:text-red-700">
                            <i data-lucide="log-out" class="w-5 h-5"></i>
                            <span class="mx-4 font-medium">Logout</span>
                        </button>
                    </form>
                </nav>

                <div class="mt-6">
                    <div class="flex items-center gap-x-2">
                        <img class="object-cover w-9 h-9 rounded-full" src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="avatar">
                        <div>
                            <h4 class="font-medium text-gray-700 dark:text-gray-200"><?php echo $_SESSION['firstname'] . " " . $_SESSION['lastname'] ?></h4>
                            <p class="text-xs font-medium text-gray-500 dark:text-gray-400"><?php echo$_SESSION['email'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </aside>

        <div class="flex-1 flex flex-col h-screen overflow-hidden relative">
            
            <header class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 md:hidden flex items-center justify-between p-4">
                <a href="#" class="flex items-center text-xl font-bold text-gray-800 dark:text-white">
                    <i data-lucide="package-2" class="w-6 h-6 text-blue-600 mr-2"></i>
                    Swift Drop
                </a>
                <button id="menu-btn" class="text-gray-500 focus:outline-none">
                    <i data-lucide="menu" class="w-6 h-6"></i>
                </button>
            </header>

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50 dark:bg-gray-900 p-6 md:pl-72">
                
                <div class="mb-8 flex justify-between items-center">
                    <div>
                        <h3 class="text-3xl font-bold text-gray-700 dark:text-gray-200">Dashboard</h3>
                        <p class="text-gray-500 dark:text-gray-400 mt-1">Overview of your store's performance.</p>
                    </div>
                </div>

                <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
                    <div class="flex items-center p-4 bg-white rounded-lg shadow-sm border dark:bg-gray-800 dark:border-gray-700">
                        <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
                            <i data-lucide="dollar-sign" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">Total Revenue</p>
                            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">$45,231.89</p>
                        </div>
                    </div>
                    <div class="flex items-center p-4 bg-white rounded-lg shadow-sm border dark:bg-gray-800 dark:border-gray-700">
                        <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                            <i data-lucide="shopping-bag" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">Total Orders</p>
                            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200"><?= htmlspecialchars($totalorders) ?></p>
                        </div>
                    </div>
                    <div class="flex items-center p-4 bg-white rounded-lg shadow-sm border dark:bg-gray-800 dark:border-gray-700">
                        <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
                            <i data-lucide="users" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">Customers</p>
                            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200"><?= htmlspecialchars($clientscount) ?></p>
                        </div>
                    </div>
                    <div class="flex items-center p-4 bg-white rounded-lg shadow-sm border dark:bg-gray-800 dark:border-gray-700">
                        <div class="p-3 mr-4 text-purple-500 bg-purple-100 rounded-full dark:text-purple-100 dark:bg-purple-500">
                            <i data-lucide="truck" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">Drivers</p>
                            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200"><?= htmlspecialchars($driverscount) ?></p>
                        </div>
                    </div>
                </div>

                <div class="w-full overflow-hidden rounded-lg shadow-xs border bg-white dark:bg-gray-800 dark:border-gray-700">
                    <div class="w-full overflow-x-auto">
                        <div class="p-4 border-b dark:border-gray-700">
                            <h4 class="font-semibold text-gray-700 dark:text-gray-200">Recent Orders</h4>
                        </div>
                        <table class="w-full whitespace-no-wrap">
                            <thead>
                                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                    <th class="px-4 py-3">Client</th>
                                    <th class="px-4 py-3">Amount</th>
                                    <th class="px-4 py-3">Status</th>
                                    <th class="px-4 py-3">Date</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                <?php foreach($orders as $order) :?>
                                <tr class="text-gray-700 dark:text-gray-400">
                                    <td class="px-4 py-3">
                                        <div class="flex items-center text-sm">
                                            <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                                <img class="object-cover w-full h-full rounded-full" src="https://cdn.drawception.com/drawings/746906/D7aL6336.png" alt="" loading="lazy" />
                                                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                            </div>
                                            <div>
                                                <p class="font-semibold">Soufyan</p>
                                                <p class="text-xs text-gray-600 dark:text-gray-400"><?= htmlspecialchars($order['title']) ?></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 text-sm">$<?= htmlspecialchars($order['price']) ?></td>
                                    <td class="px-4 py-3 text-xs">
                                        <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"> <?= htmlspecialchars($order['status']) ?> </span>
                                    </td>
                                    <td class="px-4 py-3 text-sm"><?= htmlspecialchars($order['created_at']) ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="../js/admin.js"></script>
    <script>
        // Initialize Lucide icons
        lucide.createIcons();
    </script>
</body>
</html>