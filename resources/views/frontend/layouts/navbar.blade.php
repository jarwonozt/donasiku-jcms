<!-- Top Navbar -->
<nav class="hk-navbar navbar navbar-expand-xl navbar-light fixed-top">
    <div class="container-fluid">
        <!-- Start Nav -->
        <div class="nav-start-wrap flex-fill">
            <!-- Brand -->
            <a class="navbar-brand d-xl-flex d-none flex-shrink-0 p-1" href="/">
                <img class="brand-img img-fluid"
                    src="{{ jcms()->logo ?? asset('assets/dist/img/jampack.svg') }}" alt="brand"
                    width="170" height="30" />
            </a>
            <!-- /Brand -->
            <button class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover navbar-toggle d-xl-none"><span class="icon"><span class="feather-icon"><i data-feather="align-left"></i></span></span></button>

            <!-- Navbar Nav -->
            <div class="hk-menu">
                <!-- Brand -->
                <div class="menu-header d-xl-none">
                    <span>
                        <a class="navbar-brand" href="/">
                            <img class="brand-img img-fluid"
                            src="{{ jcms()->logo ?? asset('assets/dist/img/jampack.svg') }}" alt="brand"
                            width="170" height="30" />
                        </a>
                        <button class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover navbar-toggle">
                            <span class="icon">
                                <span class="svg-icon fs-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-bar-to-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <line x1="10" y1="12" x2="20" y2="12"></line>
                                        <line x1="10" y1="12" x2="14" y2="16"></line>
                                        <line x1="10" y1="12" x2="14" y2="8"></line>
                                        <line x1="4" y1="4" x2="4" y2="20"></line>
                                    </svg>
                                </span>
                            </span>
                        </button>
                    </span>
                </div>
                <!-- /Brand -->

                <!-- Main Menu -->
                <div data-simplebar class="nicescroll-bar">
                    <div class="menu-content-wrap">
                        <div class="menu-group">
                            <ul class="navbar-nav flex-column">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/">
                                        <span class="nav-link-text">Home</span>
                                    </a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="/donasi">
                                        <span class="nav-link-text">Donasi</span>
                                    </a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="/blog">
                                        <span class="nav-link-text">Artikel</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_chat"><span class="nav-link-text">Layanan</span>
                                    </a>
                                    <ul id="dash_chat" class="nav flex-column collapse nav-children">
                                        <li class="nav-item">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="/open-donasi"><span class="nav-link-text">Penyaluran Zakat</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="/kurban"><span class="nav-link-text">Kurban</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Main Menu -->
            </div>
            <div id="hk_menu_backdrop" class="hk-menu-backdrop"></div>
            <!-- /Navbar Nav -->

        </div>
        <!-- /Start Nav -->

        <!-- End Nav -->
        <div class="nav-end-wrap">
            <!-- Search -->
            <form class="dropdown navbar-search me-2" action="{{ route('transaction.detail') }}" method="GET">
                <div class="dropdown-toggle no-caret" data-bs-toggle="dropdown" data-dropdown-animation data-bs-auto-close="outside">
                    <a href="#" class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover  d-xl-none"><span class="icon"><span class="feather-icon"><i data-feather="search"></i></span></span></a>
                    <div class="input-group d-xl-flex d-none">
                        <span class="input-affix-wrapper input-search affix-border">
                            <input type="text" name="order_id" id="searchField" class="form-control bg-transparent"  data-navbar-search-close="false" placeholder="Cek Transaksi..." aria-label="Search">
                            <span class="input-suffix"><span>/</span>
                                <span class="btn-input-clear"><i class="bi bi-x-circle-fill"></i></span>
                                <span class="spinner-border spinner-border-sm input-loader text-primary" role="status">
                                    <span class="sr-only">Loading...</span>
                                </span>
                            </span>
                        </span>
                    </div>
                </div>
                <div  class="dropdown-menu p-0">
                    <!-- Mobile Search -->
                    <div class="dropdown-item d-xl-none bg-transparent">
                        <div class="input-group mobile-search">
                            <span class="input-affix-wrapper input-search">
                                <input type="text" name="order_id_mobile" id="searchField" class="form-control" placeholder="Cek Transaksi..." aria-label="Search">
                                <span class="input-suffix">
                                    <span class="btn-input-clear"><i class="bi bi-x-circle-fill"></i></span>
                                    <span class="spinner-border spinner-border-sm input-loader text-primary" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </span>
                                </span>
                            </span>
                        </div>
                    </div>
                    <!--/ Mobile Search -->
                    <div data-simplebar class="dropdown-body p-2">
                        <h6 class="dropdown-header">Silakan masukan ID Transaksi</h6>
                        <div class="dropdown-item bg-transparent">
                            Contoh :
                            <a href="#" class="badge badge-pill badge-soft-secondary">DONATION-124958</a>
                        </div>
                    </div>
                    <div class="dropdown-footer d-xl-flex d-none"><button type="submit" class="btn btn-primary btn-block">CARI</button></div>
                </div>
            </form>
            <!-- /Search -->

            @isset(auth()->user()->id)
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
                                <a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a>
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
            @endisset
        </div>
        <!-- /End Nav -->
    </div>
</nav>
<!-- /Top Navbar -->

<!-- Chat Popup -->
{{-- <div class="hk-chatbot-popup">
    <header>
        <div class="chatbot-head-top">
            <a class="btn btn-sm btn-icon btn-dark btn-rounded" href="javascript:void(0);" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-notifications-active"></i><span>Send push notifications</span></a>
                <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-volume-off"></i><span>Mute Chat</span></a>
            </div>
            <span class="text-white">Chat with Us</span>
            <a id="minimize_chatbot" href="javascript:void(0);" class="btn btn-sm btn-icon btn-dark btn-rounded">
                <span class="icon"><span class="feather-icon"><i data-feather="minus"></i></span></span>
            </a>
        </div>
        <div class="separator-full separator-light mt-0 opacity-10"></div>
        <div class="media-wrap">
            <div class="media">
                <div class="media-head">
                    <div class="avatar avatar-sm avatar-soft-primary avatar-icon avatar-rounded position-relative">
                        <span class="initial-wrap">
                            <i class="ri-customer-service-2-line"></i>
                        </span>
                        <span class="badge badge-success badge-indicator badge-indicator-lg badge-indicator-nobdr position-bottom-end-overflow-1"></span>
                    </div>
                </div>
                <div class="media-body">
                    <div class="user-name">Chat Robot</div>
                    <div class="user-status">Online</div>
                </div>
            </div>
        </div>
    </header>
    <div class="chatbot-popup-body">
        <div data-simplebar class="nicescroll-bar">
            <div>
                <div class="init-content-wrap">
                    <div class="card card-shadow">
                        <div class="card-body">
                            <p class="card-text">Hey I am chat robot 😈<br>Do yo have any question regarding our tools?<br><br>Select the topic or start chatting.</p>
                            <button class="btn btn-block btn-primary text-nonecase start-conversation">Start a conversation</button>
                        </div>
                    </div>
                    <div class="btn-wrap">
                        <button class="btn btn-soft-primary text-nonecase btn-rounded start-conversation"><span><span class="icon"><span class="feather-icon"><i data-feather="eye"></i></span></span><span class="btn-text">Just browsing</span></span></button>
                        <button class="btn btn-soft-danger text-nonecase btn-rounded start-conversation"><span><span class="icon"><span class="feather-icon"><i data-feather="credit-card"></i></span></span><span class="btn-text">I have a question regarding pricing</span></span></button>
                        <button class="btn btn-soft-warning text-nonecase btn-rounded start-conversation"><span><span class="icon"><span class="feather-icon"><i data-feather="cpu"></i></span></span><span class="btn-text">Need help for technical query</span></span></button>
                        <button class="btn btn-soft-success text-nonecase btn-rounded start-conversation"><span><span class="icon"><span class="feather-icon"><i data-feather="zap"></i></span></span><span class="btn-text">I have a pre purchase question</span></span></button>
                    </div>
                </div>
                <ul class="list-unstyled d-none">
                    <li class="media sent">
                        <div class="media-body">
                            <div class="msg-box">
                                <div>
                                    <p>I have a plan regarding pricing</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="media received">
                        <div class="avatar avatar-xs avatar-soft-primary avatar-icon avatar-rounded">
                            <span class="initial-wrap">
                                <i class="ri-customer-service-2-line"></i>
                            </span>
                        </div>
                        <div class="media-body">
                            <div class="msg-box">
                                <div>
                                    <p>Welcome back!<br>Are you looking to upgrade your existing plan?</p>
                                </div>
                            </div>
                            <div class="msg-box typing-wrap">
                                <div>
                                    <div class="typing">
                                      <div class="dot"></div>
                                      <div class="dot"></div>
                                      <div class="dot"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <footer>
        <div class="chatbot-intro-text fs-7">
            <div class="separator-full separator-light"></div>
            <p class="mb-2">This is {{ jcms()->name }}'s beta version please sign up now to get early access to our full version</p>
            <a class="d-block mb-2" href="#"><u>Give Feedback</u></a>
        </div>
        <div class="input-group d-none">
            <div class="input-group-text overflow-show border-0">
                <button class="btn btn-icon btn-flush-dark flush-soft-hover btn-rounded dropdown-toggle no-caret" data-bs-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                    <span class="icon"><span class="feather-icon"><i data-feather="share"></i></span></span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-icon avatar-xs avatar-soft-primary avatar-rounded me-3">
                                <span class="initial-wrap">
                                    <i class="ri-image-line"></i>
                                </span>
                            </div>
                            <div>
                                <span class="h6 mb-0">Photo or Video Library</span>
                            </div>
                        </div>
                    </a>
                    <a class="dropdown-item" href="#">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-icon avatar-xs avatar-soft-info avatar-rounded me-3">
                                <span class="initial-wrap">
                                    <i class="ri-file-4-line"></i>
                                </span>
                            </div>
                            <div>
                                <span class="h6 mb-0">Documents</span>
                            </div>
                        </div>
                    </a>
                    <a class="dropdown-item" href="#">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-icon avatar-xs avatar-soft-success avatar-rounded me-3">
                                <span class="initial-wrap">
                                    <i class="ri-map-pin-line"></i>
                                </span>
                            </div>
                            <div>
                                <span class="h6 mb-0">Location</span>
                            </div>
                        </div>
                    </a>
                    <a class="dropdown-item" href="#">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-icon avatar-xs avatar-soft-blue avatar-rounded me-3">
                                <span class="initial-wrap">
                                    <i class="ri-contacts-line"></i>
                                </span>
                            </div>
                            <div>
                                <span class="h6 mb-0">Contact</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <input type="text" id="input_msg_chat_popup" name="send-msg" class="input-msg-send form-control border-0 shadow-none" placeholder="Type something...">
            <div class="input-group-text overflow-show border-0">
                <button class="btn btn-icon btn-flush-dark flush-soft-hover btn-rounded">
                    <span class="icon"><span class="feather-icon"><i data-feather="smile"></i></span></span>
                </button>
            </div>
        </div>
        <div class="footer-copy-text">Powered by <a class="brand-link" href="#"><img src="{{ asset('assets') }}/dist/img/logo-light.png" alt="logo-brand"></a></div>
    </footer>
</div>
<a href="#" class="btn btn-icon btn-floating btn-primary btn-lg btn-rounded btn-popup-open">
    <span class="icon">
        <span class="feather-icon"><i data-feather="message-circle"></i></span>
    </span>
</a> --}}
{{-- <div class="chat-popover shadow-xl"><p>Try {{ jcms()->name }} Chat for free and connect with your customers now!</p></div> --}}
<!-- /Chat Popup -->
