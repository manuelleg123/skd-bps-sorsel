let responData = {};

$(document).ready(function () {
    $('#respondenTable').DataTable({
        ajax: {
            url: '/allResponsesWithAnswers',
            type: 'GET',
            dataSrc: ''
        },
        processing: true,
        // serverSide: true,
        searching: true,
        paging: true,
        ordering: true,
        order: [[2, 'desc']], // Order by the last column (tanggalPengisian) in descending order
        columns: [
            { data: null, render: function (data, type, row, meta) { return meta.row + 1; } },
            { data: 'full_name' },
            { data: 'created_at' },
            {
                data: null, render: function (data, type, row, meta) {

                    responData[data.id] = data; // Store the data for later use

                    return `
                    <div class="d-flex flex-column gap-2 flex-sm-row flex-md-column">
                        <button onclick="showDetails(${data.id})" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detailDataModal">Lihat</button>
                        <button onclick="confirmDelete(${data.id})" class="btn btn-danger">Delete</button>
                    </div>
                `;
                }
            }
        ],
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'copy',
                exportOptions: {
                    columns: [0, 1, 2]
                }
            },
            {
                extend: 'excel',
                exportOptions: {
                    columns: [0, 1, 2]
                }
            },
            {
                extend: 'csv',
                exportOptions: {
                    columns: [0, 1, 2]
                }
            },
            {
                extend: 'pdf',
                exportOptions: {
                    columns: [0, 1, 2]
                }
            },
        ]
    });
});

function showDetails(id) {
    const data = responData[id]; // Get the data for the selected row

    if (!data) {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Data tidak ditemukan.',
            confirmButtonColor: "#0d6efd"
        });
        return;
    }

    // Blok I
    document.getElementById('modal-full_name').textContent = data.full_name || 'N/A';
    document.getElementById('modal-gender').textContent = data.gender === 'male' ? 'Laki-laki' : 'Perempuan';
    document.getElementById('modal-highest_education').textContent = data.highest_education || 'N/A';
    document.getElementById('modal-has_complaint_history').textContent = (data.has_complaint_history === 'yes' ? 'Ya' : 'Tidak');

    // Blok II
    const TOTAL_QUESTIONS_BLOCK_2 = 17;
    const populateBlock2Answers = (totalQuestions) => {
        for (let i = 1; i <= totalQuestions; i++) {
            const index = i - 1;
            const answer = data['answers_block_2'][index] || {};

            document.getElementById(`modal-${i}-importance_level`).textContent = answer['importance_level'] || 'N/A';
            document.getElementById(`modal-${i}-satisfaction_level`).textContent = answer['satisfaction_level'] || 'N/A';
        }
    };
    populateBlock2Answers(TOTAL_QUESTIONS_BLOCK_2);
}

function confirmDelete(id) {
    // Show a confirmation modal

    Swal.fire({
        title: 'Apakah Anda yakin?',
        text: "Data yang dihapus tidak dapat dikembalikan.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: "#0d6efd",
        cancelButtonColor: '#dc3545',
        confirmButtonText: 'Ya, hapus!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            // Perform the delete action here
            fetch(`/responses/delete/${id}`, {
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json'
                }
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: 'Data berhasil dihapus.',
                            confirmButtonColor: "#0d6efd"
                        }).then(() => {
                            // Reload the DataTable
                            $('#respondenTable').DataTable().ajax.reload();
                        });
                    } else {
                        throw new Error(data.message || 'Gagal menghapus data.');
                    }
                })
                .catch(error => {
                    console.error('Error deleting data:', error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Gagal menghapus data. Silakan coba lagi.',
                        confirmButtonColor: "#0d6efd"
                    });
                });
        }
    })
}

$(document).ready(function () {
    // Initialize DataTable
    $('#adminTable').DataTable({
        ajax: {
            url: '/allUsers',
            type: 'GET',
            dataSrc: ''
        },
        processing: true,
        // serverSide: true,
        searching: true,
        paging: true,
        ordering: true,
        order: [[0, 'asc']], // Order by the first column (id) in ascending order
        columns: [
            { data: null, render: function (data, type, row, meta) { return meta.row + 1; } },
            { data: 'full_name' },
            { data: 'email' },
            {
                data: null, render: function (data, type, row, meta) {
                    return `
                    <div class="d-flex flex-column gap-2 flex-sm-row flex-md-column">
                        <button onclick="confirmDeleteUser(${data.id})" class="btn btn-danger">Delete</button>
                    </div>
                `;
                }
            }
        ],
        dom: 'Bfrtip',
        buttons: [
            { extend: 'copy', exportOptions: { columns: [0, 1, 2] } },
            { extend: 'excel', exportOptions: { columns: [0, 1, 2] } },
            { extend: 'csv', exportOptions: { columns: [0, 1, 2] } },
            { extend: 'pdf', exportOptions: { columns: [0, 1, 2] } },
        ]
    });
});

function confirmDeleteUser(id) {
    // Show a confirmation modal

    Swal.fire({
        title: 'Apakah Anda yakin?',
        text: "Data yang dihapus tidak dapat dikembalikan.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: "#0d6efd",
        cancelButtonColor: '#dc3545',
        confirmButtonText: 'Ya, hapus!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            // Perform the delete action here
            fetch(`/users/delete/${id}`, {
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json'
                }
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: 'Data berhasil dihapus.',
                            confirmButtonColor: "#0d6efd"
                        }).then(() => {
                            // Reload the DataTable
                            $('#adminTable').DataTable().ajax.reload();
                        });
                    } else {
                        throw new Error(data.message || 'Gagal menghapus data.');
                    }
                })
                .catch(error => {
                    console.error('Error deleting data:', error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Gagal menghapus data. Silakan coba lagi.',
                        confirmButtonColor: "#0d6efd"
                    });
                });
        }
    })
}

function showAddAdminModal() {
    const addAdminModal = new bootstrap.Modal(document.getElementById('addAdminModal'));
    addAdminModal.show();
}

function SubmitAddAdmin() {
    const input = document.querySelectorAll('#addAdminForm input[required]');
    let allFilled = true;
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirm_password').value;

    input.forEach((field) => {
        if (!field.value.trim()) {
            allFilled = false;
        }
    });

    if (!allFilled) {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Semua field wajib diisi.',
            confirmButtonColor: "#0d6efd"
        });
        return;
    }

    if (password.length < 6) {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Password minimal 8 karakter.',
            confirmButtonColor: "#0d6efd"
        });
        return;
    }
    
    if (password !== confirmPassword) {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Password dan Konfirmasi Password tidak sesuai.',
            confirmButtonColor: "#0d6efd"
        });
        return;
    }

    Swal.fire({
        title: 'Apakah Anda yakin?',
        text: "Pastikan data yang dimasukkan sudah benar.",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: "#0d6efd",
        allowOutsideClick: false,
    }).then((result) => {

        if (result.isConfirmed) {
            const form = document.getElementById('addAdminForm');
            const formData = new FormData(form);

            fetch('/users/create', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: 'Admin berhasil ditambahkan.',
                            confirmButtonColor: "#0d6efd"
                        }).then(() => {
                            // Close the modal
                            $('#adminTable').DataTable().ajax.reload();
                            form.reset();
                            const addAdminModalEl = document.getElementById('addAdminModal');
                            const addAdminModal = bootstrap.Modal.getInstance(addAdminModalEl);
                            addAdminModal.hide();
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: data.message || 'Gagal menambahkan admin.',
                            confirmButtonColor: "#0d6efd"
                        });
                    }
                })
                .catch(error => {
                    console.error('Error adding admin:', error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Gagal menambahkan admin. Silakan coba lagi.',
                        confirmButtonColor: "#0d6efd"
                    });
                });
        }
    });
}