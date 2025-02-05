// document.addEventListener('DOMContentLoaded', function () {
//     // Impedir que o modal feche ao clicar fora
//     const addSupplierModal = document.getElementById('addSupplierModal');
//     addSupplierModal.addEventListener('show.bs.modal', function (event) {
//         addSupplierModal.setAttribute('data-bs-backdrop', 'static');
//     });
//
//     // Confirmar cancelamento
//     const cancelButton = addSupplierModal.querySelector('.btn-secondary');
//     cancelButton.addEventListener('click', function () {
//         if (confirm('Tem certeza que deseja cancelar?')) {
//             addSupplierModal.hide();
//         }
//     });
// });
document.addEventListener('DOMContentLoaded', function () {
    // Seleciona o modal
    const addSupplierModal = document.getElementById('addSupplierModal');

    // Verifica se o modal existe
    if (!addSupplierModal) {
        console.error('Modal não encontrado no DOM!');
        return; // Encerra a execução do script
    }

    // Impedir que o modal feche ao clicar fora
    addSupplierModal.addEventListener('show.bs.modal', function (event) {
        addSupplierModal.setAttribute('data-bs-backdrop', 'static');
    });

    // Confirmar cancelamento
    const cancelButton = addSupplierModal.querySelector('.btn-secondary');
    if (cancelButton) {
        cancelButton.addEventListener('click', function () {
            if (confirm('Tem certeza que deseja cancelar?')) {
                // Fecha o modal usando o Bootstrap
                const modalInstance = bootstrap.Modal.getInstance(addSupplierModal);
                modalInstance.hide();
            }
        });
    } else {
        console.error('Botão de cancelamento não encontrado no modal!');
    }
});
