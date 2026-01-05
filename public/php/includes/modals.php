<!-- MODAL: Notifications -->
<div id="notificationsModal" class="fixed inset-0 z-50 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="modal-backdrop fixed inset-0 bg-gray-900/40 backdrop-blur-sm" onclick="toggleModal('notificationsModal')"></div>
    <div class="fixed inset-0 z-10 overflow-y-auto pointer-events-none">
        <div class="flex min-h-full items-start justify-center p-4 text-center sm:p-0 mt-16 md:mt-24">
            <div class="modal-panel relative transform overflow-hidden rounded-2xl bg-white dark:bg-slate-900 text-left shadow-2xl transition-all sm:w-full sm:max-w-md pointer-events-auto border border-indigo-100 dark:border-slate-800">
                <div class="px-5 py-4 border-b border-indigo-100 dark:border-slate-800 flex justify-between items-center bg-indigo-50/50 dark:bg-slate-800/50">
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white">Notifications</h3>
                    <button onclick="toggleModal('notificationsModal')" class="text-slate-400 hover:text-slate-500 dark:hover:text-slate-300 p-1 rounded-lg hover:bg-indigo-50 dark:hover:bg-slate-800 transition-colors">
                        <i data-lucide="x" class="w-5 h-5"></i>
                    </button>
                </div>
                <div class="max-h-[60vh] overflow-y-auto">
                    <div class="divide-y divide-indigo-50 dark:divide-slate-800">
                        <div class="p-4 bg-indigo-50/60 dark:bg-indigo-900/10 hover:bg-indigo-100/50 dark:hover:bg-indigo-900/20 transition-colors cursor-pointer">
                            <div class="flex gap-3">
                                <div class="mt-1 h-2 w-2 rounded-full bg-indigo-600 shrink-0"></div>
                                <div>
                                    <p class="text-sm font-semibold text-slate-900 dark:text-white">Offer Accepted</p>
                                    <p class="text-sm text-slate-600 dark:text-slate-300 mt-0.5">Driver #492 accepted your request for "Important Documents".</p>
                                    <p class="text-xs text-slate-400 mt-1.5">2 mins ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL: Create New Order -->
<div id="createOrderModal" class="fixed inset-0 z-50 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="modal-backdrop fixed inset-0 bg-gray-900/40 backdrop-blur-sm" onclick="toggleModal('createOrderModal')"></div>
    <div class="fixed inset-0 z-10 overflow-y-auto pointer-events-none">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <div class="modal-panel relative transform overflow-hidden rounded-2xl bg-white dark:bg-slate-900 text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-lg pointer-events-auto border border-indigo-100 dark:border-slate-800">
                <div class="px-6 py-4 border-b border-indigo-100 dark:border-slate-800 flex justify-between items-center bg-indigo-50/50 dark:bg-slate-800/50">
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white">Create New Order</h3>
                    <button onclick="toggleModal('createOrderModal')" class="text-slate-400 hover:text-slate-500 p-1 rounded-lg hover:bg-indigo-50 dark:hover:bg-slate-800 transition-colors">
                        <i data-lucide="x" class="w-5 h-5"></i>
                    </button>
                </div>
                <form action="../../Actions/process_order.php" method="POST" class="p-6 space-y-6">
                     <div class="bg-indigo-50 dark:bg-indigo-900/20 rounded-xl p-4 flex items-start gap-3 border border-indigo-100 dark:border-indigo-800/50">
                        <div class="p-2 bg-indigo-100 dark:bg-indigo-800 rounded-lg shrink-0 text-indigo-600 dark:text-indigo-300">
                            <i data-lucide="map-pin" class="w-5 h-5"></i>
                        </div>
                        <div class="flex-1">
                            <label class="block text-xs font-bold text-indigo-800 dark:text-indigo-300 uppercase tracking-wider mb-1">Delivery Location</label>
                            <p class="text-sm font-bold text-slate-900 dark:text-white">123 Main Street, Apt 4B</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400 mt-0.5">New York, NY 10001</p>
                            <input type="hidden" name="dropoff_address" value="123 Main Street, Apt 4B, New York, NY 10001">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Item Description</label>
                        <input type="text" name="item_description" class="block w-full rounded-xl border-gray-300 dark:border-slate-700 bg-white dark:bg-slate-950 text-slate-900 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-14 px-4 text-lg" placeholder="What are we delivering?">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Approximate Weight</label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i data-lucide="scale" class="w-5 h-5 text-gray-400 group-hover:text-indigo-500 transition-colors"></i>
                            </div>
                            <select name="weight" class="block w-full pl-10 pr-10 rounded-xl border-gray-300 dark:border-slate-700 bg-white dark:bg-slate-950 text-slate-900 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-3 appearance-none cursor-pointer hover:bg-indigo-50 dark:hover:bg-slate-800 transition-colors" required>
                                <option value="" disabled selected>Select weight category...</option>
                                <option value="small">Small (&lt; 5kg) - Documents, Keys</option>
                                <option value="medium">Medium (5-20kg) - Boxes, Groceries</option>
                                <option value="large">Large (20kg+) - Furniture, Equipment</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-500 group-hover:text-indigo-500 transition-colors">
                                <i data-lucide="chevron-down" class="w-4 h-4"></i>
                            </div>
                        </div>
                    </div>
                    <div class="flex gap-3 pt-2">
                        <button type="button" onclick="toggleModal('createOrderModal')" class="flex-1 justify-center rounded-xl border border-gray-300 dark:border-slate-600 bg-white dark:bg-slate-800 px-4 py-2.5 text-sm font-semibold text-slate-700 dark:text-slate-200 shadow-sm hover:bg-indigo-50 dark:hover:bg-slate-700 transition-colors">Cancel</button>
                        <button type="submit" class="flex-1 justify-center rounded-xl bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-700 transition-colors">Create Order</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- MODAL: Edit Order -->
<div id="editOrderModal" class="fixed inset-0 z-50 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="modal-backdrop fixed inset-0 bg-gray-900/40 backdrop-blur-sm" onclick="toggleModal('editOrderModal')"></div>
    <div class="fixed inset-0 z-10 overflow-y-auto pointer-events-none">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <div class="modal-panel relative transform overflow-hidden rounded-2xl bg-white dark:bg-slate-900 text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-lg pointer-events-auto border border-indigo-100 dark:border-slate-800">
                <div class="px-6 py-4 border-b border-indigo-100 dark:border-slate-800 flex justify-between items-center bg-indigo-50/50 dark:bg-slate-800/50">
                    <div>
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white">Edit Order #ORD-8832</h3>
                        <p class="text-xs text-slate-500">Update details before a driver accepts.</p>
                    </div>
                    <button onclick="toggleModal('editOrderModal')" class="text-slate-400 hover:text-slate-500 p-1 rounded-lg hover:bg-indigo-50 dark:hover:bg-slate-800 transition-colors">
                        <i data-lucide="x" class="w-5 h-5"></i>
                    </button>
                </div>
                <form action="update_order.php" method="POST" class="p-6 space-y-6">
                    <input type="hidden" name="order_id" value="8832">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Item Description</label>
                        <input type="text" name="item_description" value="PlayStation 5 Console. Fragile handling required, please deliver before 6 PM." class="block w-full rounded-xl border-gray-300 dark:border-slate-700 bg-white dark:bg-slate-950 text-slate-900 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-14 px-4 text-lg">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Special Instructions</label>
                        <input name="instructions" type="text" value="Gate code 1234" class="block w-full rounded-xl border-gray-300 dark:border-slate-700 bg-white dark:bg-slate-950 text-slate-900 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-3">
                    </div>
                    <div>
                         <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Package Size</label>
                        <div class="grid grid-cols-3 gap-3">
                            <label class="cursor-pointer border border-indigo-500 bg-indigo-50 dark:bg-indigo-900/20 dark:border-indigo-500 rounded-xl p-3 text-center transition-all shadow-sm">
                                <input type="radio" name="edit_size" value="small" class="sr-only" checked>
                                <span class="block text-sm font-semibold text-indigo-700 dark:text-indigo-300">Small</span>
                            </label>
                            <label class="cursor-pointer border border-gray-200 dark:border-slate-700 rounded-xl p-3 text-center hover:bg-indigo-50 dark:hover:bg-slate-800 transition-all">
                                <input type="radio" name="edit_size" value="medium" class="sr-only">
                                <span class="block text-sm font-semibold text-slate-600 dark:text-slate-400">Medium</span>
                            </label>
                            <label class="cursor-pointer border border-gray-200 dark:border-slate-700 rounded-xl p-3 text-center hover:bg-indigo-50 dark:hover:bg-slate-800 transition-all">
                                <input type="radio" name="edit_size" value="large" class="sr-only">
                                <span class="block text-sm font-semibold text-slate-600 dark:text-slate-400">Large</span>
                            </label>
                        </div>
                    </div>
                    <div class="flex gap-3 pt-2">
                        <button type="button" onclick="toggleModal('editOrderModal')" class="flex-1 justify-center rounded-xl border border-gray-300 dark:border-slate-600 bg-white dark:bg-slate-800 px-4 py-2.5 text-sm font-semibold text-slate-700 dark:text-slate-200 shadow-sm hover:bg-indigo-50 dark:hover:bg-slate-700 transition-colors">Discard</button>
                        <button type="submit" class="flex-1 justify-center rounded-xl bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-700 transition-colors">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- MODAL: View Offers -->
<div id="viewOffersModal" class="fixed inset-0 z-50 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="modal-backdrop fixed inset-0 bg-gray-900/40 backdrop-blur-sm" onclick="toggleModal('viewOffersModal')"></div>
    <div class="fixed inset-0 z-10 overflow-y-auto pointer-events-none">
        <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
            <div class="modal-panel relative transform overflow-hidden rounded-2xl bg-white dark:bg-slate-900 text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-xl pointer-events-auto border border-indigo-100 dark:border-slate-800">
                <div class="bg-indigo-50/50 dark:bg-slate-800/50 px-6 py-4 border-b border-indigo-100 dark:border-slate-800 flex justify-between items-center">
                    <div>
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white">Offers for #ORD-8832</h3>
                        <p class="text-sm text-slate-500 dark:text-slate-400">Select a driver.</p>
                    </div>
                    <button onclick="toggleModal('viewOffersModal')" class="text-slate-400 hover:text-slate-500">
                        <i data-lucide="x" class="w-5 h-5"></i>
                    </button>
                </div>
                <div class="p-6 space-y-4">
                    <!-- Offer 1 -->
                    <div class="border border-indigo-100 dark:border-slate-700 rounded-xl p-4 hover:border-indigo-500 dark:hover:border-indigo-500 transition-all bg-white dark:bg-slate-950 group hover:shadow-md">
                        <div class="flex justify-between items-start">
                            <div class="flex items-start gap-4">
                                <div class="h-12 w-12 rounded-full bg-indigo-50 dark:bg-indigo-900/20 flex items-center justify-center shrink-0">
                                    <i data-lucide="truck" class="w-6 h-6 text-indigo-600 dark:text-indigo-400"></i>
                                </div>
                                <div>
                                    <div class="flex items-center gap-2">
                                        <h4 class="font-bold text-slate-900 dark:text-white">Driver #492</h4>
                                        <span class="px-2 py-0.5 rounded text-xs font-bold bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400">4.9 ★</span>
                                    </div>
                                    <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">Vehicle: Van (Large capacity)</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="text-2xl font-bold text-slate-900 dark:text-white">$25.00</p>
                                <form action="accept_offer.php" method="POST" class="mt-2">
                                    <input type="hidden" name="order_id" value="8832">
                                    <input type="hidden" name="driver_id" value="492">
                                    <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-2 rounded-lg text-sm font-semibold transition-colors shadow-sm">Accept</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>