document.addEventListener('DOMContentLoaded', function () {
    // Impedir que o modal feche ao clicar fora
    const addSupplierModal = document.getElementById('addSupplierModal');
    addSupplierModal.addEventListener('show.bs.modal', function (event) {
        addSupplierModal.setAttribute('data-bs-backdrop', 'static');
    });

    // Confirmar cancelamento
    const cancelButton = addSupplierModal.querySelector('.btn-secondary');
    cancelButton.addEventListener('click', function () {
        if (confirm('Tem certeza que deseja cancelar?')) {
            addSupplierModal.hide();
        }
    });
});
