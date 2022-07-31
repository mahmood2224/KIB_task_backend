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

        ajax: "{{ route('User.allData',['type'=>1])}}",

        columns: [
            {data: 'checkBox', name: 'checkBox'},
            {data: 'name', name: 'name'},
            {data: 'userId', name: 'userId'},
            {data: 'code', name: 'code'},
            {data: 'acceptMinus', name: 'acceptMinus'},
            {data: 'balance', name: 'balance'},
            {data: 'addInvoice', name: 'addInvoice'},
            {data: 'invoiceUserShow', name: 'invoiceUserShow'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });

    $('#formSubmit').submit(function (e) {
        e.preventDefault();
        if(save_method == 'add' ){
            saveUser("{{ route('User.create') }}");
        }else {
            saveOrUpdate("{{ route('User.update') }}");
        }
    });


    function saveUser(url){
        $("#save").attr("disabled", true);
        Toset('الطلب قيد التتنفيد','info','يتم تنفيذ طلبك الان',false);

        var formData = new FormData($('#formSubmit')[0]);

        $.ajax({
            url: url,
            type: "post",
            data: formData,
            contentType: false,
            processData: false,
            success: function (data) {
                if (data.status == 1) {
                    $("#save").attr("disabled", true);

                    $.toast().reset('all');
                    swal(data.message, {
                        icon: "success",
                    });
                    table.ajax.reload();
                    $("#formModel").modal('toggle');
                    $("#save").attr("disabled", false);
                    window.open('http://sahel.ahmeds.club/Admin/User/exportTableUser?data='+data.data);
                }
            },
            error: function (y) {
                var error = y.responseJSON.errors;
                $('#err').empty();
                $.toast().reset('all');
                for (var i in error) {
                    for (var k in error[i]) {
                        var message = error[i][k];
                        $('#err').append("<li style='color:red'>" + message + "</li>");
                    }
                }
                $("#save").attr("disabled", false);
                $('#err').slideDown(200);
            }
        });
    }


    function addFunctionUser() {
        save_method = 'add';

        $('#save').text('حفظ');

        $('#titleOfModel').text($('#titleOfText').text());

        $('#formSubmit')[0].reset();
        $('#userNumDiv').show();
        $('#codeDiv').hide();
        $('#passwordDiv').hide();
        $('#acceptMinusDiv').hide();
        $('#nameDiv').hide();

        $('#formModel').modal();

    }


    function editFunction(id) {

        save_method = 'edit';

        $('#err').slideUp(200);

        $('#loadEdit_' + id).css({'display': ''});

        $.ajax({
            url: "{{get_baseUrl()}}/Admin/User/edit/" + id,
            type: "GET",
            dataType: "JSON",

            success: function (data) {

                $('#loadEdit_' + id).css({'display': 'none'});

                $('#save').text('تعديل');

                $('#titleOfModel').text(' تعديل');

                $('#formSubmit')[0].reset();


                $('#name').val(data.name);
                $('#code').val(data.code);
                $('#password').val(data.realPassword);
                $('#type').val(data.type);
                $('#acceptMinus').val(data.acceptMinus);
                $('#id').val(data.id);
                $('#userNumDiv').hide();
                $('#codeDiv').show();
                $('#passwordDiv').show();
                $('#acceptMinusDiv').show();
                $('#nameDiv').show();
                $('#formModel').modal();
            }
        });
    }

    function deleteFunction(id,type) {
        if (type == 2 && checkArray.length == 0) {
            alert('برجاء تحديد عناصر للحذف');
        } else if (type == 1){
            url =  "{{get_baseUrl()}}/Admin/User/destroy/" + id;
            deleteProccess(url);
        }else{
            url= "{{get_baseUrl()}}/Admin/User/destroy/" + checkArray + '?type=2';
            deleteProccess(url);
            checkArray=[];
        }
    }

    function exportPdf() {
        if (checkArray.length == 0) {
            alert('برجاء تحديد عناصر للحذف');
        }else {
            window.open("{{get_baseUrl()}}/Admin/User/pdf?data=" + checkArray+'&type=1');
        }
    }

    function doExport() {
        if (checkArray.length == 0) {
            alert('برجاء تحديد عناصر للحذف');
        }else {
            window.open('http://sahel.ahmeds.club/Admin/User/exportTableUser?data=' + checkArray);
        }

    }
</script>



{{-- Search Form --}}
<script>
    $('#seachForm').submit(function (e) {
        e.preventDefault();
        var formData = $('#seachForm').serialize();
        table.ajax.url('{{get_baseUrl()}}/Admin/User/allData?' + formData);
        table.ajax.reload();
        TosetV2('تمت العملية بنجاح', 'success', '', 5000);

    })
</script>

<script>
    function addInvoice(id) {
        $('#user_id').val(id)
        $('#invoiceModel').modal();
        $('#formSubmitInvoice')[0].reset();
    }

    $('#formSubmitInvoice').submit(function (e) {
        e.preventDefault();
        saveOrUpdate( );
        $("#saveInvoice").attr("disabled", true);

        var formData = new FormData($('#formSubmitInvoice')[0]);
        $.ajax({
            url: "{{ route('Invoice.create') }}",
            type: "post",
            data: formData,
            contentType: false,
            processData: false,
            success: function (data) {
                if (data.status == 1) {
                    $.toast().reset('all');
                    swal(data.message, {
                        icon: "success",
                    });
                    table.ajax.reload();
                    $("#invoiceModel").modal('toggle');
                    $("#saveInvoice").attr("disabled", false);
                }
            },
            error: function (y) {
                var error = y.responseJSON.errors;
                $.toast().reset('all');
                for (var i in error) {
                    for (var k in error[i]) {
                        var message = error[i][k];
                        $('#err').append("<li style='color:red'>" + message + "</li>");
                    }
                }
                $("#saveInvoice").attr("disabled", false);
                $('#err').slideDown(200);
            }
        });
    });

</script>

<script>
    function exportExcel() {
        window.open('http://sahel.ahmeds.club/Admin/User/exportExcel');
    }
</script>


