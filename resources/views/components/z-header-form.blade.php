@props(["data" => "", "title" => "", "action", "url"])
<header class="blog-header">
    <div class="d-flex align-items-center">
        <a class="blogapp-title link-dark" href="#">
            <h1>{{ ucwords($action) }}</h1>
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

