const dummyData = [
    {
        namaResponden: 'John Doe',
        nomorHP: '08123456789',
        Email: 'johndoe@email.com',
        namaInstansi: 'Instansi A',
        tanggalPengisian: '2023-10-01',
    },
    {
        namaResponden: 'Jane Smith',
        nomorHP: '08234567890',
        Email: 'janesmith@email.com',
        namaInstansi: 'Instansi B',
        tanggalPengisian: '2023-10-02',
    },
    {
        namaResponden: 'Alice Johnson',
        nomorHP: '08345678901',
        Email: 'alice@email.com',
        namaInstansi: 'Instansi C',
        tanggalPengisian: '2023-10-03',
    }
];

$(document).ready(function () {
    $('#respondenTable').DataTable({
        ajax: function (data, callback, settings) {
            // Simulate an AJAX request to fetch data
            setTimeout(function () {
                callback({
                    draw: data.draw,
                    recordsTotal: dummyData.length,
                    recordsFiltered: dummyData.length,
                    data: dummyData
                });
            }, 500);
        },
        processing: true,
        // serverSide: true,
        searching: true,
        paging: true,
        ordering: true,
        order: [[5, 'desc']], // Order by the last column (tanggalPengisian) in descending order
        columns: [
            { data: null, render: function (data, type, row, meta) { return meta.row + 1; } },
            { data: 'namaResponden' },
            { data: 'nomorHP' },
            { data: 'Email' },
            { data: 'namaInstansi' },
            { data: 'tanggalPengisian' },
            { data: null, render: () => {return '<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detailDataModal">Lihat</button> <button class="btn btn-danger">Delete</button>'} }
        ],
        dom: 'Bfrtip',
    });
});