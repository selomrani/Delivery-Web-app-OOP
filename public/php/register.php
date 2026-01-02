<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Swift Drop</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-900 dark:to-gray-800 min-h-screen text-gray-900 dark:text-gray-100 antialiased transition-colors duration-200 flex flex-col justify-center">

    <div class="flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8 bg-white dark:bg-gray-800 p-10 rounded-2xl shadow-xl border border-gray-100 dark:border-gray-700 transition-all duration-300">
            
            <!-- Header & Logo -->
            <div class="text-center">
                <div class="mx-auto h-14 w-14 flex items-center justify-center rounded-2xl bg-blue-600 shadow-lg shadow-blue-500/30 transform transition-transform hover:scale-105 duration-300">
                    <i data-lucide="package-2" class="w-8 h-8 text-white"></i>
                </div>
                <h2 class="mt-6 text-3xl font-bold tracking-tight text-gray-900 dark:text-white">Create account</h2>
                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                    Join Swift Drop today
                </p>
            </div>

            <form class="mt-8 space-y-6" action="#" method="POST">
                
                <!-- Role Selection -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-3">I want to join as a:</label>
                    <div class="grid grid-cols-2 gap-4">
                        <!-- Customer Option -->
                        <div onclick="selectRole('customer')" id="role-customer" class="cursor-pointer relative rounded-xl border-2 border-blue-500 bg-blue-50/50 dark:bg-blue-900/20 p-4 flex flex-col items-center justify-center text-center transition-all duration-200 ring-2 ring-transparent hover:ring-blue-200 dark:hover:ring-blue-800">
                            <i data-lucide="user" class="h-6 w-6 text-blue-600 dark:text-blue-400 mb-2"></i>
                            <span class="block text-sm font-semibold text-blue-900 dark:text-blue-100">Customer</span>
                            <input type="radio" name="role" value="customer" class="sr-only" checked>
                        </div>

                        <!-- Driver Option -->
                        <div onclick="selectRole('driver')" id="role-driver" class="cursor-pointer relative rounded-xl border-2 border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-4 flex flex-col items-center justify-center text-center hover:border-gray-300 dark:hover:border-gray-600 transition-all duration-200">
                            <i data-lucide="truck" class="h-6 w-6 text-gray-500 dark:text-gray-400 mb-2"></i>
                            <span class="block text-sm font-semibold text-gray-600 dark:text-gray-300">Driver</span>
                            <input type="radio" name="role" value="driver" class="sr-only">
                        </div>
                    </div>
                </div>

                <!-- Input Fields -->
                <div class="space-y-4">
                    <div>
                        <label for="full-name" class="sr-only">Full Name</label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i data-lucide="user" class="h-5 w-5 text-gray-400 dark:text-gray-500 transition-colors group-focus-within:text-blue-500"></i>
                            </div>
                            <input id="full-name" name="full-name" type="text" required class="block w-full pl-10 px-3 py-2.5 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-900 dark:text-white bg-gray-50 dark:bg-gray-700/50 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all duration-200 sm:text-sm" placeholder="Full Name">
                        </div>
                    </div>
                    <div>
                        <label for="email-address" class="sr-only">Email address</label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i data-lucide="mail" class="h-5 w-5 text-gray-400 dark:text-gray-500 transition-colors group-focus-within:text-blue-500"></i>
                            </div>
                            <input id="email-address" name="email" type="email" autocomplete="email" required class="block w-full pl-10 px-3 py-2.5 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-900 dark:text-white bg-gray-50 dark:bg-gray-700/50 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all duration-200 sm:text-sm" placeholder="Email address">
                        </div>
                    </div>
                    <div>
                        <label for="phone-number" class="sr-only">Phone Number</label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i data-lucide="phone" class="h-5 w-5 text-gray-400 dark:text-gray-500 transition-colors group-focus-within:text-blue-500"></i>
                            </div>
                            <input id="phone-number" name="phone" type="tel" autocomplete="tel" required class="block w-full pl-10 px-3 py-2.5 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-900 dark:text-white bg-gray-50 dark:bg-gray-700/50 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all duration-200 sm:text-sm" placeholder="Phone Number">
                        </div>
                    </div>
                    <div>
                        <label for="password" class="sr-only">Password</label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i data-lucide="lock" class="h-5 w-5 text-gray-400 dark:text-gray-500 transition-colors group-focus-within:text-blue-500"></i>
                            </div>
                            <input id="password" name="password" type="password" autocomplete="new-password" required class="block w-full pl-10 px-3 py-2.5 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-900 dark:text-white bg-gray-50 dark:bg-gray-700/50 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all duration-200 sm:text-sm" placeholder="Password">
                        </div>
                    </div>
                    
                    <!-- Driver Specific Fields (Hidden by default) -->
                    <div id="driver-fields" class="hidden animate-fade-in-down">
                        <label for="vehicle-type" class="sr-only">Vehicle Type</label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i data-lucide="car" class="h-5 w-5 text-gray-400 dark:text-gray-500 transition-colors group-focus-within:text-blue-500"></i>
                            </div>
                            <select id="vehicle-type" name="vehicle-type" class="block w-full pl-10 px-3 py-2.5 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-900 dark:text-white bg-gray-50 dark:bg-gray-700/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all duration-200 sm:text-sm appearance-none cursor-pointer">
                                <option value="" disabled selected>Select Vehicle Type</option>
                                <option value="bike">Bicycle</option>
                                <option value="motorcycle">Motorcycle</option>
                                <option value="car">Car/Sedan</option>
                                <option value="van">Van/Truck</option>
                            </select>
                            <!-- Custom Arrow Icon for Select -->
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <i data-lucide="chevron-down" class="h-4 w-4 text-gray-400"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <button type="submit" class="group relative w-full flex justify-center py-2.5 px-4 border border-transparent text-sm font-semibold rounded-lg text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-200 shadow-lg shadow-blue-500/30 hover:shadow-blue-500/40 transform hover:-translate-y-0.5">
                        Create Account
                        <i data-lucide="arrow-right" class="ml-2 h-4 w-4 opacity-0 -translate-x-2 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-200"></i>
                    </button>
                </div>

                <div class="text-center mt-4">
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        Already have an account? 
                        <a href="login.php" class="font-semibold text-blue-600 hover:text-blue-500 dark:text-blue-400 dark:hover:text-blue-300 transition-colors">
                            Log in
                        </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
    <!-- Link to external JS -->
    <script src="../js/register.js"></script>
</body>
</html>