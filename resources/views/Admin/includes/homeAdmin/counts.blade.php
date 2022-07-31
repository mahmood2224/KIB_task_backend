<div class="card-group">
    <!-- Card -->
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="m-r-10">
                                    <span class="btn btn-circle btn-lg bg-danger">
                                        <i class="ti-clipboard text-white"></i>
                                    </span>
                </div>
                <div>
                    عدد فواتير الكافتريات
                </div>
                <div class="ml-auto">
                    <h2 class="m-b-0 font-light">{{\App\Models\Invoice::where('type',1)->count()}}</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Card -->
    <!-- Card -->
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="m-r-10">
                                    <span class="btn btn-circle btn-lg btn-info">
                                        <i class="ti-wallet text-white"></i>
                                    </span>
                </div>
                <div>
                    فواتير اضافة الرصيد

                </div>
                <div class="ml-auto">
                    <h2 class="m-b-0 font-light">{{\App\Models\Invoice::where('type',2)->count()}}</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Card -->
    <!-- Card -->
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="m-r-10">
                                    <span class="btn btn-circle btn-lg bg-success">
                                        <i class=" icon-Find-User text-white"></i>
                                    </span>
                </div>
                <div>
                    عدد الاعضاء

                </div>
                <div class="ml-auto">
                    <h2 class="m-b-0 font-light">{{\App\Models\User::where('type',1)->count()}}</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Card -->
    <!-- Card -->
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="m-r-10">
                                    <span class="btn btn-circle btn-lg bg-warning">
                                        <i class="icon-Clothing-Store text-white"></i>
                                    </span>
                </div>
                <div>
                    عدد الكافتريات

                </div>
                <div class="ml-auto">
                    <h2 class="m-b-0 font-light">{{\App\Models\User::where('type',2)->count()}}</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Card -->
    <!-- Column -->


</div>
