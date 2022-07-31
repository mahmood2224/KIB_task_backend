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
                    <h4 class="page-title">الرئيسية</h4>
                    <div class="d-flex align-items-center">

                    </div>
                </div>
                <div class="col-7 align-self-center">
                    <div class="d-flex no-block justify-content-end align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{route('admin.dashboard')}}">الرشيسية</a>
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
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex no-block align-items-center m-b-30">
                                <h4 class="card-title">{{$title}}</h4>
                                <div class="ml-auto">
                                    <div class="btn-group">
                                        <button type="button" id="showmenu" class="btn btn-dark fillterNew">
                                            <i class="fas fa-filter"></i>
                                        </button>
                                        &nbsp;
                                        <button  class="btn btn-danger " data-toggle="modal" onclick="deleteFunction(0,2)">
                                            حذف المحدد
                                        </button>

                                    </div>

                                </div>

                            </div>
                            <h6 class="card-subtitle"></h6>

                            <div class="menuFilter" style="display: none;">
                                <form id="seachForm">
                                    <input type="hidden" name="type" value="1">
                                    <div class="row">

                                        <div class="col-sm-12 col-md-3">
                                            <div class="form-group">
                                                <input name="user_id" placeholder="العضو" class="form-control mr-sm-2" id="c">
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
                                        <th class="sorting_asc" tabindex="0" aria-controls="file_export" rowspan="1" colspan="1" aria-sort="ascending" aria-label=" : activate to sort column descending" style="width: 0px;"> </th>
                                        <th>#</th>
                                        <th>العضو </th>
                                        <th>الموظف </th>
                                        <th>التعديل </th>
                                        <th>الاختيارات</th>

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
    @include('Admin.Log.form')

    <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>

@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $('#showmenu').click(function() {
                $('.menuFilter').toggle("slide");
            });
        });
    </script>
    @include('Admin.Log.script')

@endsection
