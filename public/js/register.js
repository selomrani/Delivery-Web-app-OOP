
        lucide.createIcons();

        function selectRole(role) {
            const customerBtn = document.getElementById('role-customer');
            const driverBtn = document.getElementById('role-driver');
            const driverFields = document.getElementById('driver-fields');
            
            // Icon elements to update colors
            const customerIcon = customerBtn.querySelector('svg');
            const driverIcon = driverBtn.querySelector('svg');
            const customerText = customerBtn.querySelector('span');
            const driverText = driverBtn.querySelector('span');

            // Define all classes for active and inactive states including dark mode
            const activeClasses = ['border-blue-500', 'bg-blue-50', 'dark:bg-blue-900/20', 'dark:border-blue-500'];
            const inactiveClasses = ['border-gray-200', 'bg-white', 'dark:bg-gray-700', 'dark:border-gray-700'];
            
            if (role === 'customer') {
                // Activate Customer
                customerBtn.classList.remove(...inactiveClasses);
                customerBtn.classList.add(...activeClasses);
                
                customerIcon.classList.remove('text-gray-500', 'dark:text-gray-400');
                customerIcon.classList.add('text-blue-600', 'dark:text-blue-400');
                
                customerText.classList.remove('text-gray-900', 'dark:text-gray-200');
                customerText.classList.add('text-blue-900', 'dark:text-blue-100');

                // Deactivate Driver
                driverBtn.classList.remove(...activeClasses);
                driverBtn.classList.add(...inactiveClasses);
                
                driverIcon.classList.remove('text-blue-600', 'dark:text-blue-400');
                driverIcon.classList.add('text-gray-500', 'dark:text-gray-400');
                
                driverText.classList.remove('text-blue-900', 'dark:text-blue-100');
                driverText.classList.add('text-gray-900', 'dark:text-gray-200');

                // Hide Driver specific fields
                driverFields.classList.add('hidden');
            } else {
                // Activate Driver
                driverBtn.classList.remove(...inactiveClasses);
                driverBtn.classList.add(...activeClasses);
                
                driverIcon.classList.remove('text-gray-500', 'dark:text-gray-400');
                driverIcon.classList.add('text-blue-600', 'dark:text-blue-400');
                
                driverText.classList.remove('text-gray-900', 'dark:text-gray-200');
                driverText.classList.add('text-blue-900', 'dark:text-blue-100');

                // Deactivate Customer
                customerBtn.classList.remove(...activeClasses);
                customerBtn.classList.add(...inactiveClasses);
                
                customerIcon.classList.remove('text-blue-600', 'dark:text-blue-400');
                customerIcon.classList.add('text-gray-500', 'dark:text-gray-400');
                
                customerText.classList.remove('text-blue-900', 'dark:text-blue-100');
                customerText.classList.add('text-gray-900', 'dark:text-gray-200');

                // Show Driver specific fields
                driverFields.classList.remove('hidden');
            }
        }