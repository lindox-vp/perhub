<div class="sidebar sidebar-light sidebar-main sidebar-expand-md align-self-start">

    <!-- Sidebar mobile toggler -->
    <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-left8"></i>
        </a>
        <span class="font-weight-semibold">Navigasi Menu</span>
        <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
        </a>
    </div>
    <!-- /sidebar mobile toggler -->


    <!-- Sidebar content -->
    <div class="sidebar-content">
        <div class="card card-sidebar-mobile">

            <!-- Header -->
            {{-- <div class="card-header header-elements-inline">
                <h6 class="card-title">Navigation</h6>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                    </div>
                </div>
            </div> --}}
            
            <!-- User menu -->
            <div class="sidebar-user">
                <div class="card-body">
                    <div class="media">
                        <div class="mr-3">
                            <a href="#"><img src="{{ asset('assets/limitless-assets/global/images/placeholders/placeholder.jpg') }}" width="38" height="38" class="rounded-circle" alt=""></a>
                        </div>

                        <div class="media-body">
                            <div class="media-title font-weight-semibold">Victoria Baker</div>
                            <div class="font-size-xs opacity-50">
                                <i class="icon-pin font-size-sm"></i> &nbsp;Santa Ana, CA
                            </div>
                        </div>

                        <div class="ml-3 align-self-center">
                            <a href="#" class="text-white"><i class="icon-cog3"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /user menu -->

            
            <!-- Main navigation -->
            <div class="card-body p-0">
                <ul class="nav nav-sidebar" data-nav-type="accordion">

                    <!-- Main -->
                    <li class="nav-item-header mt-0"><div class="text-uppercase font-size-xs line-height-xs">UTAMA</div> <i class="icon-menu" title="Main"></i></li>
                    <li class="nav-item">
                        <a href="{{ route('a.dashboard') }}" class="nav-link {{ $maintitle == 'dashboard' ? 'active' : '' }}">
                            <i class="icon-home4"></i>
                            <span>
                                Dashboard
                                <span class="d-block font-weight-normal opacity-50">Dashboard Administrator</span>
                            </span>
                        </a>
                    </li>
                    {{-- <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-copy"></i> <span>Layouts</span></a>

                        <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                            <li class="nav-item"><a href="../../../../layout_1/LTR/default/full/index.html" class="nav-link">Default layout</a></li>
                            <li class="nav-item"><a href="../../../../layout_2/LTR/default/full/index.html" class="nav-link">Layout 2</a></li>
                            <li class="nav-item"><a href="index.html" class="nav-link active">Layout 3</a></li>
                            <li class="nav-item"><a href="../../../../layout_4/LTR/default/full/index.html" class="nav-link">Layout 4</a></li>
                            <li class="nav-item"><a href="../../../../layout_5/LTR/default/full/index.html" class="nav-link">Layout 5</a></li>
                            <li class="nav-item"><a href="../../../../layout_6/LTR/default/full/index.html" class="nav-link disabled">Layout 6 <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
                        </ul>
                    </li> --}}

                    <!-- /main -->
                    
                    <!-- Layout -->
                    <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">LAINNYA</div> <i class="icon-menu" title="Opsi Lainya"></i></li>
                    <li class="nav-item"><a href="{{ route('a.admin') }}" class="nav-link {{ $maintitle == 'administrator' ? 'active' : '' }}"><i class="icon-embed"></i> <span>Administrator</span></a></li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-puzzle4"></i> <span>Komponen</span></a>
                        
                        <ul class="nav nav-group-sub" data-submenu-title="Komponen">
                            <li class="nav-item"><a href="{{ '#' }}" class="nav-link">Data Tipe Kendaraan</a></li>
                            <li class="nav-item"><a href="{{ '#' }}" class="nav-link">Data Tarif</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link"><i class="icon-switch2"></i> <span>Keluar</span></a></li>

                    <!-- /layout -->
                        
                </ul>
            </div>
            <!-- /main navigation -->

        </div>
    </div>
    <!-- /sidebar content -->
    
</div>