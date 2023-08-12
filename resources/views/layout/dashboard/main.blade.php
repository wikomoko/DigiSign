@include('layout.dashboard.header')

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-2 col-md-4 position-fixed d-none d-md-block">
            @include('layout.dashboard.sidebar')
        </div>
        <div class="col-md-12 ">
            <div class="row">
                <div class="col-xl-2 col-md-4"></div>
                <div class="col-xl-10 col-md-8 py-5">
                    <button
                        class="d-md-none btn border border-0 rounded-3 bg-color-scheme5 text-white px-4 py-2 btn-primary-hover "
                        type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                        aria-controls="offcanvasExample">
                        Menu
                    </button>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                        aria-labelledby="offcanvasExampleLabel">
                        <div class="offcanvas-header d-flex justify-content-end">
                            <button type="button" class="btn-close fs-5" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body" data-bs-dismiss="offcanvas">
                            @include('layout.dashboard.sidebar')
                        </div>
                    </div>
                    @yield('content')
                </div>
            </div>

        </div>
    </div>
</div>

@include('layout.dashboard.footer')
