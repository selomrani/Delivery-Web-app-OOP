// Initialize Icons
lucide.createIcons();

/**
 * Handles the opening and closing of modals with basic animations
 * @param {string} modalId - The ID of the modal to toggle
 */
function toggleModal(modalId) {
    const modal = document.getElementById(modalId);
    if (!modal) return;

    // Get internal elements for animation
    const backdrop = modal.querySelector('div[id$="Backdrop"]');
    const panel = modal.querySelector('div[id$="Panel"]');

    if (modal.classList.contains('hidden')) {
        // OPEN MODAL
        modal.classList.remove('hidden');
        
        // Small timeout to allow DOM to render before adding opacity classes for transition
        setTimeout(() => {
            backdrop.classList.remove('opacity-0');
            panel.classList.remove('opacity-0', 'translate-y-4', 'sm:translate-y-0', 'sm:scale-95');
            panel.classList.add('opacity-100', 'translate-y-0', 'sm:scale-100');
        }, 10);
    } else {
        // CLOSE MODAL
        backdrop.classList.add('opacity-0');
        panel.classList.remove('opacity-100', 'translate-y-0', 'sm:scale-100');
        panel.classList.add('opacity-0', 'translate-y-4', 'sm:translate-y-0', 'sm:scale-95');

        // Wait for animation to finish before hiding display
        setTimeout(() => {
            modal.classList.add('hidden');
        }, 300); // Matches duration-300 usually used in Tailwind
    }
}

// Close modals when clicking outside the panel (on the backdrop)
window.onclick = function(event) {
    if (event.target.id.includes('Backdrop')) {
        // Find the parent modal of the clicked backdrop
        const modal = event.target.closest('div[role="dialog"]');
        if (modal) {
            toggleModal(modal.id);
        }
    }
}