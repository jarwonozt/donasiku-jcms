@props(["title" => "", "create", "url"])
<header class="blog-header">
    <div class="d-flex align-items-center">
        <a class="blogapp-title link-dark" href="#">
            <h1>Data {{ ucwords($title) }}</h1>
        </a>
    </div>
    <div class="blog-options-wrap">
        @isset($create)
            <a href="{{ route($url) }}" class="btn btn-gradient-dark btn-animated ms-3">{{ $create }}</a>
        @endisset

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
