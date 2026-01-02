<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Swift Drop</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Phosphor Icons for a cleaner look -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <!-- Lucide Fallback -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        indigo: {
                            50: '#eef2ff',
                            100: '#e0e7ff',
                            200: '#c7d2fe',
                            900: '#312e81',
                            950: '#1e1b4b',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        /* Custom scrollbar */
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #94a3b8; }
        .dark ::-webkit-scrollbar-thumb { background: #475569; }
        .dark ::-webkit-scrollbar-thumb:hover { background: #64748b; }
        
        /* Modal Transitions */
        .modal-backdrop { opacity: 0; pointer-events: none; transition: opacity 0.3s ease-in-out; }
        .modal-backdrop.active { opacity: 1; pointer-events: auto; }
        .modal-panel { opacity: 0; transform: translateY(10px) scale(0.95); transition: all 0.3s ease-in-out; }
        .modal-panel.active { opacity: 1; transform: translateY(0) scale(1); }

        /* Button Shine Effect */
        .btn-shine {
            position: relative;
            overflow: hidden;
        }
        .btn-shine::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(to bottom right, rgba(255,255,255,0) 0%, rgba(255,255,255,0.1) 40%, rgba(255,255,255,0) 100%);
            transform: rotate(30deg);
            transition: transform 0.5s;
        }
        .btn-shine:hover::after {
            transform: rotate(30deg) translate(10%, 10%);
        }
    </style>
</head>
<body class="bg-indigo-100 dark:bg-slate-900 text-gray-900 dark:text-gray-100 font-sans transition-colors duration-200">