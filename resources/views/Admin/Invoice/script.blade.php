@include('Admin.includes.scripts.dataTableHelper')

<script type="text/javascript">

    var table = $('#datatable').DataTable({
        bLengthChange: false,
        searching: true,
        responsive: true,
        'processing': true,
        'language': {
            'loadingRecords': '&nbsp;',
            'processing': '<div class="spinner"></div>',
            'sSearch' : 'بحث :',
            "paginate": {
                "next": "التالي",
                "previous": "السابق"
            },
            "sInfo": "عرض صفحة _PAGE_ من _PAGES_",
        },
        serverSide: true,

        order: [[0, 'desc']],

        buttons: ['copy', 'excel', 'pdf'],

        ajax: "/Admin/Invoice/allData?type={{$type}}&cafeteria_id={{$cafeteria_id}}&user_id={{$user_id}}",

        columns: [
            {data: 'checkBox', name: 'checkBox'},
            {data: 'id', name: 'id'},
            {data: 'user_id', name: 'user_id'},
            {data: 'cafeteria_id', name: 'cafeteria_id'},
            {data: 'cost', name: 'cost'},
            {data: 'created_at', name: 'created_at'},
            {data: 'admin_id', name: 'admin_id'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });

    $('#formSubmit').submit(function (e) {
        e.preventDefault();
        saveOrUpdate( save_method == 'add' ?"{{ route('Invoice.create') }}" : "{{ route('Invoice.update') }}");
    });


    function editFunction(id) {

        save_method = 'edit';

        $('#err').slideUp(200);

        $('#loadEdit_' + id).css({'display': ''});

        $.ajax({
            url: "{{get_baseUrl()}}/Admin/Invoice/edit/" + id,
            type: "GET",
            dataType: "JSON",

            success: function (data) {

                $('#loadEdit_' + id).css({'display': 'none'});

                $('#save').text('تعديل');

                $('#titleOfModel').text(' تعديل');

                $('#formSubmit')[0].reset();

                $('#formModel').modal();

                $('#name').val(data.name);
                $('#code').val(data.code);
                $('#password').val(data.realPassword);
                $('#type').val(data.type);
                $('#id').val(data.id);
            }
        });
    }

    function deleteFunction(id,type) {
        if (type == 2 && checkArray.length == 0) {
            alert('برجاء تحديد عناصر للحذف');
        } else if (type == 1){
            url =  "{{get_baseUrl()}}/Admin/Invoice/destroy/" + id;
            deleteProccess(url);
        }else{
            url= "{{get_baseUrl()}}/Admin/Invoice/destroy/" + checkArray + '?type=2';
            deleteProccess(url);
            checkArray=[];
        }
    }
</script>

{{-- Search Form --}}
<script>
    $('#seachForm').submit(function (e) {
        e.preventDefault();
        var formData = $('#seachForm').serialize();
        table.ajax.url('{{get_baseUrl()}}/Admin/Invoice/allData?' + formData);
        table.ajax.reload();
        TosetV2('تمت العملية بنجاح', 'success', '', 5000);

    })
</script>

<script>
    function exportExcel() {
        window.open('http://sahel.ahmeds.club/Admin/Invoice/exportExcel?type={{$type}}');
    }
</script>

