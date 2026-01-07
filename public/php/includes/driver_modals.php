<div id="viewOrderModal" class="fixed inset-0 z-50 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="modal-backdrop fixed inset-0 bg-gray-900/40 backdrop-blur-sm" onclick="toggleModal('viewOrderModal')"></div>
    <div class="fixed inset-0 z-10 overflow-y-auto pointer-events-none">
        <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
            <div class="modal-panel relative transform overflow-hidden rounded-2xl bg-white dark:bg-slate-900 text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-lg pointer-events-auto border border-indigo-100 dark:border-slate-800">
                
                <div class="px-6 py-4 border-b border-indigo-100 dark:border-slate-800 flex justify-between items-center bg-indigo-50/50 dark:bg-slate-800/50">
                    <div>
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white">Order #ORD-9921</h3>
                        <p class="text-xs text-slate-500">Urgent Document Delivery</p>
                    </div>
                    <button onclick="toggleModal('viewOrderModal')" class="text-slate-400 hover:text-slate-500 p-1 rounded-lg hover:bg-indigo-50 dark:hover:bg-slate-800 transition-colors">
                        <i data-lucide="x" class="w-5 h-5"></i>
                    </button>
                </div>

                <div class="p-6 space-y-6">
                    <div class="bg-indigo-50 dark:bg-slate-800 rounded-xl p-4 border border-indigo-100 dark:border-slate-700">
                        <div class="flex items-start gap-4">
                            <div class="p-2.5 bg-indigo-100 dark:bg-indigo-900/50 rounded-lg text-indigo-600 dark:text-indigo-400 shrink-0">
                                <i data-lucide="package" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-slate-900 dark:text-white">Item Details</h4>
                                <p class="text-sm text-slate-600 dark:text-slate-300 mt-1">Legal Documents in large envelope. Handle with care.</p>
                            </div>
                        </div>
                    </div>

                    <form action="../Actions/submit_offer.php" method="POST" class="pt-4 border-t border-indigo-100 dark:border-slate-800">
                        
                        <input type="hidden" name="order_id" value="9921">

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Price ($)</label>
                                <div class="relative">
                                    <span class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 font-bold">$</span>
                                    <input type="number" step="0.50" name="price" required 
                                           class="block w-full pl-8 pr-4 py-3 rounded-xl border-gray-300 dark:border-slate-700 bg-white dark:bg-slate-950 text-slate-900 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 font-bold text-lg" 
                                           placeholder="25.00">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Arrival Time</label>
                                <div class="relative">
                                    <span class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">
                                        <i data-lucide="clock" class="w-4 h-4"></i>
                                    </span>
                                    <input type="time" name="estimated_time" required 
                                           class="block w-full pl-9 pr-4 py-3 rounded-xl border-gray-300 dark:border-slate-700 bg-white dark:bg-slate-950 text-slate-900 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm appearance-none">
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Note (Optional)</label>
                            <textarea name="note" rows="3" 
                                      class="block w-full px-4 py-3 rounded-xl border-gray-300 dark:border-slate-700 bg-white dark:bg-slate-950 text-slate-900 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm" 
                                      placeholder="I can pick this up immediately..."></textarea>
                        </div>

                        <button type="submit" class="btn-shine w-full flex items-center justify-center px-6 py-3 bg-gradient-to-r from-indigo-600 to-violet-600 hover:from-indigo-700 hover:to-violet-700 text-white text-sm font-bold rounded-xl shadow-lg shadow-indigo-500/30 transition-all transform hover:scale-[1.02] active:scale-95">
                            Submit Offer
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>