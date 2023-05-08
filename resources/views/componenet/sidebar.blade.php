<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar >
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
        <!-- nav bar -->
        <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
                <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                <g>
                    <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                    <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                    <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                </g>
              </svg>
            </a>
        </div>

        @can('اعدادات  المستخدمين')
        <p class="text-muted nav-heading mt-4 mb-1">
            <span>المستخدمين</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">

            <li class=" dropdown">
                <a href="#charts" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-pie-chart fe-16"></i>
                    <span class="ml-3 item-text">اعدادات المستخدمين</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="charts">

                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{'/' .($page='users')}}"><span class="ml-1 item-text">عرض المستخدمين</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{url('/admin/add-city')}}"><span class="ml-1 item-text">اضافة مدينة </span></a>
                    </li>
                </ul>
            </li>
        </ul>
        @endcan

        <p class="text-muted nav-heading mt-4 mb-1">
            <span>الصلاحيات</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">

            <li class="nav-item dropdown">
                <a href="#contact" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-book fe-16"></i>
                    <span class="ml-3 item-text">عرض الصلاحيات</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="contact">
                    <a class="nav-link pl-3" href="{{'/' .($page='roles')}}"><span class="ml-1">صلاحيات المستخدمين</span></a>

                </ul>
            </li>



        </ul>

        <p class="text-muted nav-heading mt-4 mb-1">
            <span>الطلبات</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">

            <li class="nav-item dropdown">
                <a href="#contact" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-book fe-16"></i>
                    <span class="ml-3 item-text">عرض الطلبات</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="contact">
                    <a class="nav-link pl-3" href="{{url('admin/show-order')}}"><span class="ml-1">جميع الطلبات</span></a>

                </ul>
                <ul class="collapse list-unstyled pl-4 w-100" id="contact">
                    <a class="nav-link pl-3" href="{{url('admin/filtersail')}}"><span class="ml-1">  الطلبات حسب مبيعات كل شهر</span></a>

                </ul>
            </li>



        </ul>
        @can('التعديل على المنتجات')
        <p class="text-muted nav-heading mt-4 mb-1">
            <span>المنتجات</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="#pages" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-file fe-16"></i>
                    <span class="ml-3 item-text">الاقسام</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100 w-100" id="pages">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{url('admin/add-category')}}">
                            <span class="ml-1 item-text">اضافة قسم</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{url('/admin/show-category')}}">
                            <span class="ml-1 item-text">عرض الاقسام</span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#auth" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-shield fe-16"></i>
                    <span class="ml-3 item-text">المنتجات</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="auth">
                    <a class="nav-link pl-3" href="{{url('/admin/add-product')}}"><span class="ml-1">اضافة منتجات</span></a>
                    <a class="nav-link pl-3" href="{{url('/admin/show-product')}}"><span class="ml-1">عرض المنتجات جميعها</span></a>

                </ul>
            </li>
            @endcan

        </ul>
        <p class="text-muted nav-heading mt-4 mb-1">
            <span>Documentation</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
                <a class="nav-link" href="../docs/index.html">
                    <i class="fe fe-help-circle fe-16"></i>
                    <span class="ml-3 item-text">Getting Start</span>
                </a>
            </li>
        </ul>
        <div class="btn-box w-100 mt-4 mb-1">
            <a href="https://themeforest.net/item/tinydash-bootstrap-html-admin-dashboard-template/27511269" target="_blank" class="btn mb-2 btn-primary btn-lg btn-block">
                <i class="fe fe-shopping-cart fe-12 mr-2"></i><span class="small">Buy now</span>
            </a>
        </div>
    </nav>

</aside>
