<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Swift Drop</title>
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
        <div class="max-w-md w-full space-y-8 bg-white dark:bg-gray-800 p-10 rounded-2xl shadow-xl border border-gray-100 dark:border-gray-700 transition-all duration-300 hover:shadow-2xl">
            
            <!-- Header & Logo -->
            <div class="text-center">
                <div class="mx-auto h-16 w-16 flex items-center justify-center rounded-2xl bg-blue-600 shadow-lg shadow-blue-500/30 transform transition-transform hover:scale-105 duration-300">
                    <i data-lucide="package-2" class="w-10 h-10 text-white"></i>
                </div>
                <h2 class="mt-8 text-3xl font-bold tracking-tight text-gray-900 dark:text-white">Welcome back</h2>
                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                    Please enter your details to sign in
                </p>
            </div>

            <form class="mt-8 space-y-6" action="../Actions/Userlogin.php" method="POST">
                
                <!-- Input Fields -->
                <div class="space-y-5">
                    <div>
                        <label for="email-address" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1.5">Email address</label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i data-lucide="mail" class="h-5 w-5 text-gray-400 dark:text-gray-500 transition-colors group-focus-within:text-blue-500"></i>
                            </div>
                            <input id="email-address" name="email" type="email" autocomplete="email" required class="block w-full pl-10 px-3 py-2.5 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-900 dark:text-white bg-gray-50 dark:bg-gray-700/50 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all duration-200 sm:text-sm" placeholder="you@example.com">
                        </div>
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1.5">Password</label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i data-lucide="lock" class="h-5 w-5 text-gray-400 dark:text-gray-500 transition-colors group-focus-within:text-blue-500"></i>
                            </div>
                            <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full pl-10 px-3 py-2.5 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-900 dark:text-white bg-gray-50 dark:bg-gray-700/50 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all duration-200 sm:text-sm" placeholder="••••••••">
                        </div>
                    </div>
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded cursor-pointer dark:bg-gray-700 dark:border-gray-600 dark:ring-offset-gray-800">
                        <label for="remember-me" class="ml-2 block text-sm text-gray-700 dark:text-gray-300 cursor-pointer select-none">
                            Remember me
                        </label>
                    </div>

                    <div class="text-sm">
                        <a href="#" class="font-medium text-blue-600 hover:text-blue-500 dark:text-blue-400 dark:hover:text-blue-300 transition-colors">
                            Forgot password?
                        </a>
                    </div>
                </div>

                <div>
                    <button type="submit" class="group relative w-full flex justify-center py-2.5 px-4 border border-transparent text-sm font-semibold rounded-lg text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-200 shadow-lg shadow-blue-500/30 hover:shadow-blue-500/40 transform hover:-translate-y-0.5">
                        Sign in
                        <i data-lucide="arrow-right" class="ml-2 h-4 w-4 opacity-0 -translate-x-2 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-200"></i>
                    </button>
                </div>

                <div class="text-center mt-6">
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        Don't have an account? 
                        <a href="register_client.php" class="font-semibold text-blue-600 hover:text-blue-500 dark:text-blue-400 dark:hover:text-blue-300 transition-colors">
                            Create account
                        </a>
                    </p>
                </div>
            </form>
        </div>
    </div>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>