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
            "search": "بحث :"
        },
        serverSide: true,

         order: [[0, 'desc']],

        buttons: ['copy', 'excel', 'pdf'],


        ajax: "{{ route('Log.allData') }}",

        columns: [
            {data: 'checkBox', name: 'checkBox'},
            {data: 'id', name: 'id'},
            {data: 'user_id', name: 'user_id'},
            {data: 'admin_id', name: 'admin_id'},
            {data: 'updates', name: 'updates'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });


    function deleteFunction(id, type) {
        if (type == 2 && checkArray.length == 0) {
            alert('لم تقم بتحديد اي عناصر للحذف');
        } else if (type == 1) {
            url = "/Admin/Log/destroy/" + id;
            deleteProccess(url);
        } else {
            url = "/Admin/Log/destroy/" + checkArray + '?type=2';
            deleteProccess(url);
            checkArray = [];
        }
    }

</script>


<script>
    $('#seachForm').submit(function(e){
        e.preventDefault();
        var formData=$('#seachForm').serialize();
        table.ajax.url('/Admin/Log/allData?'+formData);
        table.ajax.reload();
        Toset('تمت العملية بنجاح','success','',5000);

    })
</script>
