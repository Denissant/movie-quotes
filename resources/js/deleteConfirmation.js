const deleteButtons = document.querySelectorAll('[data-delete-button]')

deleteButtons.forEach(button => {
    button.addEventListener('click', event => {
        if (!confirm(`Are you sure you want to delete "${button.dataset.deleteTarget}"?`)) {
            event.preventDefault();
        }
    });
});
