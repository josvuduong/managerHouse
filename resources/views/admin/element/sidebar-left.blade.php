<div class="inner-wrapper">
    <!-- start: sidebar -->
    <aside id="sidebar-left" class="sidebar-left">

        <div class="sidebar-header">
            <div class="sidebar-title">
                Menu
            </div>
            <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
            </div>
        </div>

        <div class="nano">
            <div class="nano-content">
                <nav id="menu" class="nav-main" role="navigation">
                    <ul class="nav nav-main">
                        <li>
                            <a href="{{URL::to('/')}}">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                <span>Website</span>
                            </a>
                        </li>
                        <li class="nav-parent">
                            <a>
                                <i class="fa fa-book" aria-hidden="true"></i>
                                <span>Tài khoản</span>
                            </a>
                            <ul class="nav nav-children">
                                <li>
                                    <a href="{{asset('admin/listUser')}}">Danh sách tài khoản</a>
                                </li>
                                <li>
                                    <a href="{{asset('admin/addUser')}}">Thêm tài khoản</a>
                                </li>

                            </ul>
                        </li>                      
                        <li>
                            <a href="merchandise.php">
                                <i class="fa fa-suitcase" aria-hidden="true"></i>
                                <span>Hàng hóa</span>
                            </a>                          
                        </li>                        

                    </ul>
                </nav>
            </div>

        </div>

    </aside>
    <!-- end: sidebar -->