let responData = {};

$.ajax({
    url: '/allResponsesWithAnswers',
    type: 'GET', // Pastikan method sesuai dengan yang diharapkan server
    dataType: 'json',
    success: function (data) {
        responData = data; // Simpan data responden
        console.log('Data responden berhasil diambil:', responData); // Debugging: tampilkan data di konsol
    },
    error: function (xhr, status, error) {
        console.error('Error fetching data:', error); // Debugging: tampilkan error di konsol
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Gagal mengambil data responden. Silakan coba lagi.',
            confirmButtonColor: "#0d6efd"
        });
    }
});

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
        order: [[5, 'desc']], // Order by the last column (tanggalPengisian) in descending order
        columns: [
            { data: null, render: function (data, type, row, meta) { return meta.row + 1; } },
            { data: 'full_name' },
            { data: 'phone_number' },
            { data: 'email_address' },
            { data: 'organization_name' },
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
    console.log(data); // Debugging: tampilkan data di konsol

    // Blok I
    document.getElementById('modal-full_name').textContent = data.full_name || 'N/A';
    document.getElementById('modal-email_address').textContent = data.email_address || 'N/A';
    document.getElementById('modal-phone_number').textContent = data.phone_number || 'N/A';
    document.getElementById('modal-gender').textContent = data.gender || 'N/A';
    document.getElementById('modal-highest_education').textContent = data.highest_education || 'N/A';
    document.getElementById('modal-primary_occupation').textContent = data.primary_occupation || 'N/A';
    document.getElementById('modal-organization_category').textContent = data.organization_category || 'N/A';
    document.getElementById('modal-organization_name').textContent = data.organization_name || 'N/A';
    document.getElementById('modal-primary_usage').textContent = data.primary_usage || 'N/A';

    const TYPE_OF_SERVICE_FLAGS = {
        'Perpustakaan': 1,
        'Pembelian Produk Statistik Berbayar: Publikasi BPS': 2,
        'Pembelian Produk Statistik Berbayar: Data Mikro/Peta Wilayah Kerja Statistik': 4,
        'Akses Produk Statistik Pada Website BPS': 8,
        'Konsultasi Statistik': 16,
        'Rekomendasi Kegiatan Statistik': 32,
    }
    function decodeTypeOfServiceFlags(flags) {
        let services = [];
        for (const [key, value] of Object.entries(TYPE_OF_SERVICE_FLAGS)) {
            if (flags & value) {
                services.push(key);
            }
        }
        return services.length > 0 ? services.join(', ') : 'N/A';
    }
    document.getElementById('modal-type_of_service_used').textContent = decodeTypeOfServiceFlags(data.type_of_service_used || 0);

    const FACILITIES_FLAGS = {
        'Pelayanan Statistik Terpadu (PST) datang langsung': 1,
        'Pelayanan Statistik Terpadu online (pst.bps.go.id)': 2,
        'Website BPS (bps.go.id) / AllStats BPS': 4,
        'Surat/Email': 8,
        'Aplikasi chat (WhatsApp, Telegram, ChatUs, dll.)': 16,
        'Lainnya': 32
    }
    function decodeFacilitiesFlags(flags) {
        let facilities = [];
        for (const [key, value] of Object.entries(FACILITIES_FLAGS)) {
            if (flags & value) {
                facilities.push(key);
            }
        }
        return facilities.length > 0 ? facilities.join(', ') : 'N/A';
    }
    document.getElementById('modal-facilities_used').textContent = decodeFacilitiesFlags(data.facilities_used || 0);
    document.getElementById('modal-has_complaint_history').textContent = data.has_complaint_history ? 'Ya' : 'Tidak';

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

    // Blok III
    document.getElementById('modal-suggestion').textContent = data['answers_block_3'][0]['suggestion'] || 'N/A';
}

function confirmDelete() {
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
            Swal.fire(
                'Terhapus!',
                'Data telah dihapus.',
                'success'
            )
        }
    })
}