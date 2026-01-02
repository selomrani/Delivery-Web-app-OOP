<!-- Scripts -->
    <script>
        // Initialize Icons
        lucide.createIcons();

        // Modal Logic
        function toggleModal(modalID) {
            const modal = document.getElementById(modalID);
            const backdrop = modal.querySelector('.modal-backdrop');
            const panel = modal.querySelector('.modal-panel');

            if (modal.classList.contains('hidden')) {
                // Open
                modal.classList.remove('hidden');
                // Small delay to allow display:block to apply before transition
                setTimeout(() => {
                    backdrop.classList.add('active');
                    panel.classList.add('active');
                }, 10);
            } else {
                // Close
                backdrop.classList.remove('active');
                panel.classList.remove('active');
                // Wait for transition to finish before hiding
                setTimeout(() => {
                    modal.classList.add('hidden');
                }, 300);
            }
        }

        // Close modal when clicking outside (on backdrop)
        window.onclick = function(event) {
            if (event.target.classList.contains('modal-backdrop')) {
                // Find the parent modal
                const modal = event.target.closest('div[id$="Modal"]');
                if (modal) {
                    toggleModal(modal.id);
                }
            }
        }
    </script>
</body>
</html>