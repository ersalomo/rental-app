    <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Cars
                        </h2>
                    </div>
                    <!-- Page title actions -->
                    <div class="col-12 col-md-auto ms-auto d-print-none">
                        <div class="d-flex">
                            <input type="search" class="form-control d-inline-block w-10" placeholder="Search cars..">
                            <a href="{{ route('admin.add-car') }}" class="btn btn-primary">
                                <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>

                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            @forelse($cars as $car)
                <div class="col-sm-12 col-lg-6 col-xl-4">
                    <div class="mb-3 profile-responsive card">
                        <div class="dropdown-menu-header">
                            <div class="menu-header-image opacity-10"
                                style="background-image: url('/landing-page/images/car-1.jpg');"></div>
                            <div class="dropdown-menu-header-inner ">
                                <div class="menu-header-content btn-pane-right">
                                    <div>
                                        <h5 class="menu-header-title">Jeff Walberg</h5>
                                        <h6 class="menu-header-subtitle">Lead UX Developer</h6>
                                    </div>
                                    <div class="menu-header-btn-pane">
                                        <button class="btn btn-success">View Profile</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="p-0 list-group-item">
                                <div class="grid-menu grid-menu-2col">
                                    <div class="no-gutters row">
                                        <div class="col-sm-6">
                                            <button class="btn btn-gradient-primary">
                                                Edit
                                            </button>
                                        </div>
                                        <div class="col-sm-6">
                                            <button class="btn btn-gradient-primary">
                                                Delete
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            @empty
            @endforelse
        </div>
        <div>
            {{ $cars->links('pagination::bootstrap-5') }}
        </div>
    </div>
