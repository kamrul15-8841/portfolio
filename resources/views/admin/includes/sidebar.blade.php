<!-- ========== Left Sidebar Start ========== -->
<div class="leftside-menu">

    <!-- LOGO -->
    <a href="{{ route('dashboard') }}" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="{{ asset('/') }}admin/images/logo.png" alt="" height="16">
                    </span>
        <span class="logo-sm">
                        <img src="{{ asset('/') }}admin/images/logo_sm.png" alt="" height="16">
                    </span>
    </a>

    <!-- LOGO -->
    <a href="{{ route('dashboard') }}" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img src="{{ asset('/') }}admin/images/logo-dark.png" alt="" height="16">
                    </span>
        <span class="logo-sm">
                        <img src="{{ asset('/') }}admin/images/logo_sm_dark.png" alt="" height="16">
                    </span>
    </a>

    <div class="h-100" id="leftside-menu-container" data-simplebar>

        <!--- Sidemenu -->
        <ul class="side-nav">


            <li class="side-nav-item">
                <a href="{{ route('dashboard') }}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Dashboards </span>
                </a>
            </li>


            <li class="side-nav-title side-nav-item mt-1">Components</li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#portfolio" aria-expanded="false" aria-controls="sidebarBaseUI" class="side-nav-link">
                    <i class="uil-box"></i>
                    <span> Portfolios </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="portfolio">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('portfolios.create') }}">Add Portfolio</a>
                        </li>
                        <li>
                            <a href="{{ route('portfolios.index') }}">Manage Portfolio</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#services" aria-expanded="false" aria-controls="sidebarExtendedUI" class="side-nav-link">
                    <i class="uil-package"></i>
                    <span> Services </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="services">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('services.create') }}">Add Services</a>
                        </li>
                        <li>
                            <a href="{{ route('services.index') }}">Manage Services</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#contacts" aria-expanded="false" aria-controls="sidebarExtendedUI" class="side-nav-link">
                    <i class="uil-package"></i>
                    <span> Contacts </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="contacts">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('contacts.create') }}">Add Contacts</a>
                        </li>
                        <li>
                            <a href="{{ route('contacts.index') }}">Manage Contacts</a>
                        </li>
                    </ul>
                </div>
            </li>


        </ul>

        <!-- Help Box -->
        <div class="help-box text-white text-center">
            <a href="javascript: void(0);" class="float-end close-btn text-white">
                <i class="mdi mdi-close"></i>
            </a>
            <img src="{{ asset('/') }}admin/images/help-icon.svg" height="90" alt="Helper Icon Image" />
            <h5 class="mt-3">Unlimited Access</h5>
            <p class="mb-3">Upgrade to plan to get access to unlimited reports</p>
            <a href="javascript: void(0);" class="btn btn-secondary btn-sm">Upgrade</a>
        </div>
        <!-- end Help Box -->
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
