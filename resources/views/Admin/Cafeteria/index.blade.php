@extends('Admin.includes.layouts.master')

@section('title')
    {{$title}}

@endsection

@section('content')

    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-5 align-self-center">
                    <h4 class="page-title">{{getNameInIndexPage()}}</h4>
                    <div class="d-flex align-items-center">

                    </div>
                </div>
                <div class="col-7 align-self-center">
                    <div class="d-flex no-block justify-content-end align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{route('admin.dashboard')}}">الرئيسية</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">{{$title}}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <!-- basic table -->
            <div class="row">
                <div class="col-12">
                    <div class="Userd">
                        <div class="Userd-body">
                            <div class="d-flex no-block align-items-center m-b-30">
                                <h4 class="Userd-title">{{$title}} </h4>
                                <div class="ml-auto">
                                    <div class="btn-group">
{{--                                        <button type="button" id="showmenu" class="btn btn-dark fillterNew">--}}
{{--                                            <i class="fas fa-filter"></i>--}}
{{--                                        </button>--}}

                                        <button  class="btn btn-dark" id="titleOfText" data-toggle="modal" onclick="addFunction()">
                                            اضافة كافتريا جديدة
                                        </button>
                                        &nbsp;
                                        <button class="btn btn-danger " data-toggle="modal"
                                                onclick="deleteFunction(0,2)">
                                            حذف المحدد
                                        </button>
                                        &nbsp;
                                        <button class="btn btn-success" data-toggle="modal"
                                                onclick="exportExcel()">
                                            export excel
                                        </button>
                                    </div>

                                </div>
                            </div>
                            <div class="menuFilter" style="display: none;">
                                <form id="seachForm">
                                    <input type="hidden" name="type" value="1">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-3">
                                            <div class="form-group">
                                                <select name="balance" class="custom-select mr-sm-2" id="c">
                                                    <option value="">حالة الرصيد</option>
                                                    <option value="1">دائن</option>
                                                    <option value="2">مدين</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-1">
                                            <div class="form-actions">
                                                <div class="text-right">
                                                    <button type="submit" class="btn btn-info">بحث</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>


                            <div class="table-responsive" style="overflow: hidden;">
                                <table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th class="sorting_asc" tabindex="0" aria-controls="file_export" rowspan="1"
                                            colspan="1" aria-sort="ascending"
                                            aria-label=" : activate to sort column descending" style="width: 0px;"></th>
                                        <th>#</th>
                                        <th>الاسم </th>
                                        <th>الرقم التعريفي</th>
                                        <th>عدد الفواتير</th>
                                        <th>مشاهدة الفواتير</th>
                                        <th>اختيارات</th>

                                    </tr>
                                    </thead>
                                    <tbody>


                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>

        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
    @include('Admin.Cafeteria.form')

    <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    </div>

@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $('#showmenu').click(function () {
                $('.menuFilter').toggle("slide");
            });
        });
    </script>
    @include('Admin.Cafeteria.script')

@endsection
