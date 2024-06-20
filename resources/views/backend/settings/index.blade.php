<x-app-layout>
    @section('title'){{ ucwords($title) }}@endsection
    <div class="hk-pg-body py-0">
        <div class="blogapp-wrap">
            <div class="blogapp-content">
                <div class="blogapp-detail-wrap">
                    <header class="blog-header">
                        <div class="d-flex align-items-center">
                            <a class="blogapp-title link-dark" href="#">
                                <h1>{{ ucwords($title) }}</h1>
                            </a>
                        </div>
                        <div class="blog-options-wrap">
                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover hk-navbar-togglable flex-shrink-0  d-lg-inline-block d-none"
                                href="#" data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                data-bs-original-title="Collapse">
                                <span class="icon">
                                    <span class="feather-icon"><i data-feather="chevron-up"></i></span>
                                    <span class="feather-icon d-none"><i data-feather="chevron-down"></i></span>
                                </span>
                            </a>
                        </div>
                    </header>
                    @if (session()->has('message'))
                    <div class="alert alert-success mt-2" role="alert">
                        {{ session('message') }}
                    </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger mt-2" role="alert">
                            @foreach ($errors->all() as $error)
                                <span class="badge badge-danger"><i class="zmdi zmdi-alert-circle-o"></i> {{ $error }}</span>
                            @endforeach
                        </div>
                    @endif
                    <div class="blog-body">
                        <div data-simplebar class="nicescroll-bar">
                            <div class="post-list">
                                @include('backend.settings.form')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
