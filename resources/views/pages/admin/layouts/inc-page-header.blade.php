<div class="page-header">
    <div class="breadcrumb-line breadcrumb-line-light content-boxed header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                @if ($maintitle != 'dashboard')
                    <a href="{{ route('a.dashboard') }}" class="breadcrumb-item"><i class="icon-home4 mr-2"></i> Dashboard</a>
                @endif
                
                {{-- @if ($breadcrumb)
                    @foreach ($breadcrumb as $bc)
                        <a href="{{ $bc->route }}" class="breadcrumb-item"> {{ $bc->item }}</a>
                    
                    @endforeach

                @endif --}}

                <span class="breadcrumb-item active">
                    @if ($maintitle == 'dashboard')
                        <i class="icon-home4 mr-2"></i>

                    @endif
                    {{ str($title)->title() }}
                </span>
            </div>
            
            {{-- <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a> --}}
        </div>

        {{-- <div class="header-elements d-none">
            <div class="breadcrumb justify-content-center">
                <a href="#" class="breadcrumb-elements-item">
                    <i class="icon-comment-discussion mr-2"></i>
                    Support
                </a>

                <div class="breadcrumb-elements-item dropdown p-0">
                    <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-gear mr-2"></i>
                        Settings
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
                        <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
                        <a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>

    <div class="page-header-content header-elements-md-inline content-boxed">
        <div class="page-title d-flex">
            <h4>
                @if ($maintitle == 'dashboard')
                    <i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Dashboard</span> - <span class="font-weight-light">Hi, Victoria</span>
                    <small class="d-block text-muted">Top position - placed before page header content</small>      
                    
                @else
                    <i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">{{ str($maintitle)->title() }}</span> - <span class="font-weight-light">{{ str($title)->title() }}</span>
                    <small class="d-block text-muted">Top position - placed before page header content</small>      
                
                @endif
            </h4>
            {{-- <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a> --}}
        </div>

        {{-- <div class="header-elements d-none mb-3 mb-md-0">
            <div class="d-flex justify-content-center">
                <a href="#" class="btn btn-link btn-float text-default"><i class="icon-bars-alt text-indigo-400"></i> <span>Statistics</span></a>
                <a href="#" class="btn btn-link btn-float text-default"><i class="icon-calculator text-indigo-400"></i> <span>Invoices</span></a>
                <a href="#" class="btn btn-link btn-float text-default"><i class="icon-calendar5 text-indigo-400"></i> <span>Schedule</span></a>
            </div>
        </div> --}}
    </div>
</div>