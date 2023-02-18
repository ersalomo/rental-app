<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Menu</li>
                <li class="mm-active">
                    <a href="#">
                        <i class="metismenu-icon pe-7s-rocket"></i>Dashboards
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="index.html" class="{{-- mm-active --}}">
                                <i class="metismenu-icon"></i>Analytics
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon"></i> Minimal
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="dashboards-minimal-1.html">
                                        <i class="metismenu-icon"></i>Variation 1
                                    </a>
                                </li>
                                <li>
                                    <a href="dashboards-minimal-2.html">
                                        <i class="metismenu-icon"></i>Variation 2
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="dashboards-crm.html">
                                <i class="metismenu-icon"></i> CRM
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-plugin"></i>Data Table
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('admin.chat') }}">
                                <i class="metismenu-icon"></i>Chat
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.data-cars') }}">
                                <i class="metismenu-icon"></i>Cars Data
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.add-car') }}">
                                <i class="metismenu-icon"></i>Add Car
                            </a>
                        </li>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
