$(document).ready(function () {
    $('#tableProductList').DataTable({
        dom: 'frtip',
        ordering: false,
        serverSide: true,
        processing: true,
        paging: true,
        responsive: true,
        pageLength: 20,
        ajax: {
            'url': $('#searchTableProduct').val(),
        },
        columns: [
            {
                data: 'DT_RowIndex',
                name: 'DT_RowIndex',
                orderable: false,
                searchable: false,
                className: 'text-hijau font-paragraph text-md text-center'
            },
            {
                orderable: false,
                data: 'nama_produk',
                name: 'nama_produk',
                className: 'text-hijau font-paragraph text-md'
            },
            {
                orderable: false,
                data: 'merek',
                name: 'merek',
                className: 'text-hijau font-paragraph text-md'
            },
            {
                orderable: false,
                data: 'berat',
                name: 'berat',
                className: 'text-hijau font-paragraph text-md text-start'
            },
            {
                orderable: false,
                data: 'harga_jual',
                name: 'harga_jual',
                className: 'text-hijau font-paragraph text-md',
            },
            {
                orderable: false,
                data: 'status',
                name: 'status',
                render: function(data, type, row, meta) {
                    if (data === 'tersedia') {
                        return '<div class="bg-hijau px-4 uppercase mx-auto text-center py-2 pointer-events-none rounded-sm text-putih font-paragraph">' + data + '</div>';
                    } else if (data === 'habis') {
                        return '<div class="bg-red-500 px-4 uppercase mx-auto text-center py-2 pointer-events-none rounded-sm text-putih font-paragraph">' + data + '</div>';
                    } else {
                        return data;
                    }
                }
            },
            {
                orderable: false,
                data: 'total_stock',
                name: 'total_stock',
                className: 'text-hijau font-paragraph text-md'
            },
            {
                data: 'opsi',
                name: 'opsi',
                orderable: false,
                searchable: false
            },
        ],
        columnDefs: [],
        "createdRow": function(row, data, dataIndex) {
            $(row).addClass('odd:bg-gray-100 odd:dark:bg-neutral-700 even:bg-gray-200 even:dark:bg-neutral-600 dark:odd:bg-neutral-800 dark:even:bg-neutral-700');
        },
    });
    //custom format of Search boxes
    $('[type=search]').each(function () {
        $(this).attr("placeholder", "Cari...").addClass('mb-4 bg-white border border-abu-800 text-blue-500 text-md focus:ring-primary-800 focus:border-primary-500 p-4 ps-10 dark:bg-neutral-700 dark:border-neutral-700 dark:placeholder:text-neutral-400 dark:text-blue-500 dark:focus:ring-primary-800 dark:focus:border-accent');
    });
    $('.dt-search').each(function () {
        $(this).addClass('flex justify-start');
    });
    $('[for=dt-search-0]').each(function () {
        $(this).addClass('hidden')
    });
    $('.dt-info').each(function () {
        $(this).addClass('flex justify-center text-md text-hijau my-4')
    });
    $('.dt-paging').append(function () {
        $(this).addClass('flex justify-center text-md')
    });
});
