@php
$orders=\App\Models\Invoice::orderBy('id','desc')->where('type',1)->take(7)->get();
@endphp
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <!-- title -->
                <div class="d-md-flex align-items-center">
                    <div>
                        <h4 class="card-title">اخر الفواتير</h4>
                    </div>

                </div>
                <!-- title -->
            </div>
            <div class="table-responsive">
                <table class="table v-middle">
                    <thead>
                    <tr class="bg-light">
                        <th class="border-top-0">العضو</th>
                        <th class="border-top-0">الكافتريا</th>
                        <th class="border-top-0">سعر الفاتورة</th>
                        <th class="border-top-0">تاريخ الفاتورة</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $row)
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="m-r-10">
                                    <a onclick="showUser('{{$row->user->id}}')" class="btn btn-circle btn-success text-white">{{$row->id}}</a>
                                </div>
                                <div class="">
                                    <h4 class="m-b-0 font-16">
                                        {{$row->user->name}}
                                    </h4>
                                </div>
                            </div>
                        </td>
                        <td>{{$row->cafeteria ? $row->cafeteria->name :''}}</td>
                        <td>{{$row->cost}}</td>
                        <td>{{$row->created_at}}</td>


                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
