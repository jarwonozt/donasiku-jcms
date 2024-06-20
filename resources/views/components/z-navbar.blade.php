<!-- Top Navbar -->
<nav class="hk-navbar navbar navbar-expand-xl navbar-light fixed-top">
    <div class="container-fluid">
        <!-- Start Nav -->
        <div class="nav-start-wrap">
            <button class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover navbar-toggle d-xl-none"><span
                    class="icon"><span class="feather-icon"><i data-feather="align-left"></i></span></span></button>

            @if (announcement() != null)
                <div class="d-flex">
                    <div class="badge badge-primary">INFO</div>
                    <div id="marqueeContainer" class="badge badge-light ps-4 w-100"><span id="marqueeText">
                            {{ announcement() }}
                        </span> </div>
                </div>
            @endif
        </div>
        <!-- /Start Nav -->

        <!-- End Nav -->
        <div class="nav-end-wrap">
            <ul class="navbar-nav flex-row">
                <li class="nav-item">
                    <div class="dropdown ps-2">
                        <a class=" dropdown-toggle no-caret" href="#" role="button" data-bs-display="static"
                            data-bs-toggle="dropdown" data-dropdown-animation data-bs-auto-close="outside"
                            aria-expanded="false">
                            <div class="avatar avatar-rounded avatar-xs">
                                <img src="{{ auth()->user()->image ?? auth()->user()->avatar }}" alt="user"
                                    class="avatar-img">
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <div class="p-2">
                                <div class="media">
                                    <div class="media-head me-2">
                                        <div class="avatar avatar-rounded avatar-xs">
                                            <img src="{{ auth()->user()->image ?? auth()->user()->avatar }}"
                                                alt="user" class="avatar-img">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="dropdown">
                                            <a href="#" class="d-block dropdown-toggle link-dark fw-medium"
                                                data-bs-toggle="dropdown" data-dropdown-animation
                                                data-bs-auto-close="inside">{{ auth()->user()->name }}</a>
                                        </div>
                                        <div class="fs-7">{{ auth()->user()->email }}</div>
                                        <div class="fs-7 badge badge-primary badge-sm">
                                            {{ strtoupper(auth()->user()->getRoleNames()[0]) }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('users.edit', auth()->user()->id) }}">Setting</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                            this.closest('form').submit(); "
                                    role="button">
                                    <i data-acorn-icon="logout" class="" data-acorn-size="17"></i>
                                    <span class="align-middle">Logout</span>
                                </a>
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- /End Nav -->
    </div>
</nav>
<!-- /Top Navbar -->
