<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- User Profile-->
                <li>
                    <!-- User Profile-->
                    <div class="user-profile dropdown m-t-20">
                        <div class="user-pic">

                            <img src="{{getAdminImage(Auth::guard('Admin')->user()->photo)}}" alt="users"
                                 class="rounded-circle img-fluid"/>

                        </div>
                        <div class="user-content hide-menu m-t-10">
                            <h5 class="nameOfUser m-b-10 user-name font-medium">{{ Auth::guard('Admin')->user()->name }}</h5>
                            <a href="javascript:void(0)" class="btn btn-circle btn-sm m-r-5" id="Userdd" role="button"
                               data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                <i class="ti-settings"></i>
                            </a>

                            <div class="dropdown-menu animated flipInY" aria-labelledby="Userdd">
                                <a class="dropdown-item" href="{{route('profile.index')}}">
                                    <a class="dropdown-item" href="{{route('user.logout')}}">
                                        <i class="fa fa-power-off m-r-5 m-l-5"></i> تسجيل الخروج</a>
                            </div>
                        </div>
                    </div>
                    <!-- End User Profile-->
                </li>
                <!-- main routes section-->
                <li class="nav-small-cap">
                    <i class="mdi mdi-dots-horizontal"></i>
                    <span class="hide-menu">الاعدادات الرئيسية</span>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link  waves-effect waves-dark" href="{{route('admin.dashboard')}}"
                       aria-expanded="false">
                        <i class="fa fa-home"></i>
                        <span class="hide-menu">الصفحة الرئيسية</span>
                    </a>
                </li>


                <li class="sidebar-item">
                    <a class="sidebar-link  waves-effect waves-dark" href="{{route('User.index',['type'=>1])}}"
                       aria-expanded="false">
                        <i class="icon-Add-UserStar"></i>
                        <span class="hide-menu">الاعضاء</span>
                    </a>
                </li>
                @if(ifHasPermission())

                    <li class="sidebar-item">
                        <a class="sidebar-link  waves-effect waves-dark" href="{{route('Admin.index')}}"
                           aria-expanded="false">
                            <i class="icon-Add-User"></i>
                            <span class="hide-menu">الموظفين</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link  waves-effect waves-dark" href="{{route('User.index',['type'=>2])}}"
                           aria-expanded="false">
                            <i class="icon-Clothing-Store"></i>
                            <span class="hide-menu">الكافتريات</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link  waves-effect waves-dark" href="{{route('Invoice.index',['type'=>1])}}"
                           aria-expanded="false">
                            <i class="ti-clipboard"></i>
                            <span class="hide-menu">فواتير الكافتريات</span>
                        </a>
                    </li>


                    <li class="sidebar-item">
                        <a class="sidebar-link  waves-effect waves-dark" href="{{route('Invoice.index',['type'=>2])}}"
                           aria-expanded="false">
                            <i class="ti-wallet"></i>
                            <span class="hide-menu">فواتير اضافة الرصيد</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link  waves-effect waves-dark" href="{{route('Log.index')}}"
                           aria-expanded="false">
                            <i class="icon-Speach-BubbleDialog"></i>
                            <span class="hide-menu">السجل</span>
                        </a>
                    </li>
            @endif
            <!--end main routes section-->
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
