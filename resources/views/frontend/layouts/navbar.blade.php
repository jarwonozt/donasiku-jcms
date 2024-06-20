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
                        <a class="navbar-brand" href="index.html">
                            <img class="brand-img img-fluid" src="{{ asset('assets') }}/dist/img/brand-sm.svg" alt="brand" />
                            <img class="brand-img img-fluid" src="{{ asset('assets') }}/dist/img/{{ jcms()->name }}.svg" alt="brand" />
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
                                    <a class="nav-link" href="index.html">
                                        <span class="nav-link-text">Dashboard</span>
                                        <span class="badge badge-sm badge-soft-pink ms-xl-2 ms-auto">Hot</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_chat">
                                        <span class="nav-link-text">Chat</span>
                                    </a>
                                    <ul id="dash_chat" class="nav flex-column collapse   nav-children">
                                        <li class="nav-item">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="chats.html"><span class="nav-link-text">Chats</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="chats-group.html"><span class="nav-link-text">Groups</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="chats-contact.html"><span class="nav-link-text">Contacts</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_wizard">
                                                        <span class="nav-link-text">Chat Popup</span>
                                                    </a>
                                                    <ul id="dash_wizard" class="nav flex-column collapse   nav-children">
                                                        <li class="nav-item">
                                                            <ul class="nav flex-column">
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="chatpopup.html"><span class="nav-link-text">Direct Message</span></a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="chatbot.html"><span class="nav-link-text">Chatbot Chat</span></a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="email.html">
                                        <span class="nav-link-text">Email</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_scrumboard">
                                        <span class="nav-link-text">Scrumboard</span>
                                    </a>
                                    <ul id="dash_scrumboard" class="nav flex-column collapse   nav-children">
                                        <li class="nav-item">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="kanban-board.html"><span class="nav-link-text">Kanban</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="projects-board.html"><span class="nav-link-text">Boards</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="pipeline.html"><span class="nav-link-text">Pipeline</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_contact">
                                        <span class="nav-link-text">Contact</span>
                                    </a>
                                    <ul id="dash_contact" class="nav flex-column collapse   nav-children">
                                        <li class="nav-item">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="contact.html"><span class="nav-link-text">Contact List</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="contact-cards.html"><span class="nav-link-text">Contact Cards</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="edit-contact.html"><span class="nav-link-text">Edit Contact</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_task">
                                        <span class="nav-link-text position-relative">Todo
                                            <span class="badge badge-danger badge-indicator position-absolute top-0 start-100"></span>
                                        </span>
                                    </a>
                                    <ul id="dash_task" class="nav flex-column collapse   nav-children">
                                        <li class="nav-item">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="tasklist.html"><span class="nav-link-text">Tasklist</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="gantt.html"><span class="nav-link-text">Gantt</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_invoice">
                                        <span class="nav-link-text">Invoices</span>
                                    </a>
                                    <ul id="dash_invoice" class="nav flex-column collapse   nav-children">
                                        <li class="nav-item">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="invoice-list.html"><span class="nav-link-text">Invoice List</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="invoice-templates.html"><span class="nav-link-text">Invoice Templates</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="create-invoice.html"><span class="nav-link-text">Create Invoice</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="invoice-preview.html"><span class="nav-link-text">Invoice Preview</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="calendar.html">
                                        <span class="nav-link-text">Calendar</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_file">
                                        <span class="nav-link-text">File Manager</span>
                                    </a>
                                    <ul id="dash_file" class="nav flex-column collapse  nav-children">
                                        <li class="nav-item">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="file-manager-list.html"><span class="nav-link-text">List</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="file-manager-grid.html"><span class="nav-link-text">Grid</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="gallery.html">
                                        <span class="nav-link-text">Gallery</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_blog">
                                        <span class="nav-link-text">Blog</span>
                                    </a>
                                    <ul id="dash_blog" class="nav flex-column collapse  nav-children">
                                        <li class="nav-item">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="posts.html"><span class="nav-link-text">Posts</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="add-new-post.html"><span class="nav-link-text">Edit Posts</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="post-detail.html"><span class="nav-link-text">Post Detail</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_integ">
                                        <span class="nav-link-text">Integrations</span>
                                    </a>
                                    <ul id="dash_integ" class="nav flex-column collapse  nav-children">
                                        <li class="nav-item">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="all-apps.html"><span class="nav-link-text">All Apps</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="integrations-detail.html"><span class="nav-link-text">App Detail</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="integrations.html"><span class="nav-link-text">Integrations</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_pages">
                                        <span class="nav-link-text">Authentication</span>
                                    </a>
                                    <ul id="dash_pages" class="nav flex-column collapse  nav-children">
                                        <li class="nav-item">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_log">
                                                        <span class="nav-link-text">Log In</span>
                                                    </a>
                                                    <ul id="dash_log" class="nav flex-column collapse  nav-children">
                                                        <li class="nav-item">
                                                            <ul class="nav flex-column">
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="login.html"><span class="nav-link-text">Login</span></a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="login-simple.html"><span class="nav-link-text">Login Simple</span></a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="login-classic.html"><span class="nav-link-text">Login Classic</span></a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_sign">
                                                        <span class="nav-link-text">Sign Up</span>
                                                    </a>
                                                    <ul id="dash_sign" class="nav flex-column collapse  nav-children">
                                                        <li class="nav-item">
                                                            <ul class="nav flex-column">
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="signup.html"><span class="nav-link-text">Signup</span></a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="signup-simple.html"><span class="nav-link-text">Signup Simple</span></a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="signup-classic.html"><span class="nav-link-text">Signup Classic</span></a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="lock-screen.html"><span class="nav-link-text">Lock Screen</span></a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link" href="reset-password.html"><span class="nav-link-text">Reset Password</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="404.html"><span class="nav-link-text">Error 404</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="503.html"><span class="nav-link-text">Error 503</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_profile">
                                        <span class="nav-link-text">Profile</span>
                                    </a>
                                    <ul id="dash_profile" class="nav flex-column collapse  nav-children">
                                        <li class="nav-item">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="profile.html">
                                                        <span class="nav-link-text">Profile</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="edit-profile.html">
                                                        <span class="nav-link-text">Edit Profile</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="account.html">
                                                        <span class="nav-link-text">Account</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://nubra-ui.hencework.com/" target="_blank">
                                        <span class="nav-link-text">Documentation</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://nubra-ui.hencework.com/avatar.html" target="_blank">
                                        <span class="nav-link-text">Components</span>
                                    </a>
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
            <form class="dropdown navbar-search me-2">
                <div class="dropdown-toggle no-caret" data-bs-toggle="dropdown" data-dropdown-animation data-bs-auto-close="outside">
                    <a href="#" class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover  d-xl-none"><span class="icon"><span class="feather-icon"><i data-feather="search"></i></span></span></a>
                    <div class="input-group d-xl-flex d-none">
                        <span class="input-affix-wrapper input-search affix-border">
                            <input type="text" class="form-control  bg-transparent"  data-navbar-search-close="false" placeholder="Search..." aria-label="Search">
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
                                <input type="text" class="form-control" placeholder="Search..." aria-label="Search">
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
                        <h6 class="dropdown-header">Recent Search
                        </h6>
                        <div class="dropdown-item bg-transparent">
                            <a href="#" class="badge badge-pill badge-soft-secondary">Grunt</a>
                            <a href="#" class="badge badge-pill badge-soft-secondary">Node JS</a>
                            <a href="#" class="badge badge-pill badge-soft-secondary">SCSS</a>
                        </div>
                        <div class="dropdown-divider"></div>
                        <h6 class="dropdown-header">Help
                        </h6>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <div class="media align-items-center">
                                <div class="media-head me-2">
                                    <div class="avatar avatar-icon avatar-xs avatar-soft-light avatar-rounded">
                                        <span class="initial-wrap">
                                            <span class="svg-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path>
                                                 </svg>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="media-body">
                                    How to setup theme?
                                </div>
                            </div>
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <div class="media align-items-center">
                                <div class="media-head me-2">
                                    <div class="avatar avatar-icon avatar-xs avatar-soft-light avatar-rounded">
                                        <span class="initial-wrap">
                                            <span class="svg-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path>
                                                 </svg>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="media-body">
                                    View detail documentation
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <h6 class="dropdown-header">Users
                        </h6>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <div class="media align-items-center">
                                <div class="media-head me-2">
                                    <div class="avatar avatar-xs avatar-rounded">
                                        <img src="{{ asset('assets') }}/dist/img/avatar3.jpg" alt="user" class="avatar-img">
                                    </div>
                                </div>
                                <div class="media-body">
                                    Sarah Jone
                                </div>
                            </div>
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <div class="media align-items-center">
                                <div class="media-head me-2">
                                    <div class="avatar avatar-xs avatar-soft-primary avatar-rounded">
                                        <span class="initial-wrap">J</span>
                                    </div>
                                </div>
                                <div class="media-body">
                                    Joe Jackson
                                </div>
                            </div>
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <div class="media align-items-center">
                                <div class="media-head me-2">
                                    <div class="avatar avatar-xs avatar-rounded">
                                        <img src="{{ asset('assets') }}/dist/img/avatar4.jpg" alt="user" class="avatar-img">
                                    </div>
                                </div>
                                <div class="media-body">
                                    Maria Richard
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="dropdown-footer d-xl-flex d-none"><a href="#"><u>Search all</u></a></div>
                </div>
            </form>
            <!-- /Search -->

            <ul class="navbar-nav flex-row">
                <li class="nav-item">
                    <a href="email.html" class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover"><span class="icon"><span class=" position-relative"><span class="feather-icon"><i data-feather="inbox"></i></span><span class="badge badge-sm badge-soft-primary badge-sm badge-pill position-top-end-overflow-1">4</span></span></span></a>
                </li>
                <li class="nav-item">
                    <div class="dropdown dropdown-notifications">
                        <a href="#" class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover dropdown-toggle no-caret" data-bs-toggle="dropdown" data-dropdown-animation role="button" aria-haspopup="true" aria-expanded="false"><span class="icon"><span class="position-relative"><span class="feather-icon"><i data-feather="bell"></i></span><span class="badge badge-success badge-indicator position-top-end-overflow-1"></span></span></span></a>
                        <div class="dropdown-menu dropdown-menu-end p-0">
                            <h6 class="dropdown-header px-4 fs-6">Notifications<a href="#" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"><span class="icon"><span class="feather-icon"><i data-feather="settings"></i></span></span></a>
                            </h6>
                            <div data-simplebar class="dropdown-body  p-2">
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <div class="media">
                                        <div class="media-head">
                                            <div class="avatar avatar-rounded avatar-sm">
                                                <img src="{{ asset('assets') }}/dist/img/avatar2.jpg" alt="user" class="avatar-img">
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div>
                                                <div class="notifications-text">Morgan Freeman accepted your invitation to join the team</div>
                                                <div class="notifications-info">
                                                    <span class="badge badge-soft-success">Collaboration</span>
                                                    <div class="notifications-time">Today, 10:14 PM</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <div class="media">
                                        <div class="media-head">
                                            <div class="avatar  avatar-icon avatar-sm avatar-success avatar-rounded">
                                                <span class="initial-wrap">
                                                    <span class="feather-icon"><i data-feather="inbox"></i></span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div>
                                                <div class="notifications-text">New message received from Alan Rickman</div>
                                                <div class="notifications-info">
                                                    <div class="notifications-time">Today, 7:51 AM</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <div class="media">
                                        <div class="media-head">
                                            <div class="avatar  avatar-icon avatar-sm avatar-pink avatar-rounded">
                                                <span class="initial-wrap">
                                                    <span class="feather-icon"><i data-feather="clock"></i></span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div>
                                                <div class="notifications-text">You have a follow up with {{ jcms()->name }} Head on Friday, Dec 19 at 9:30 am</div>
                                                <div class="notifications-info">
                                                    <div class="notifications-time">Yesterday, 9:25 PM</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <div class="media">
                                        <div class="media-head">
                                            <div class="avatar avatar-sm avatar-rounded">
                                                <img src="{{ asset('assets') }}/dist/img/avatar3.jpg" alt="user" class="avatar-img">
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div>
                                                <div class="notifications-text">Application of Sarah Williams is waiting for your approval</div>
                                                <div class="notifications-info">
                                                    <div class="notifications-time">Today 10:14 PM</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <div class="media">
                                        <div class="media-head">
                                            <div class="avatar avatar-sm avatar-rounded">
                                                <img src="{{ asset('assets') }}/dist/img/avatar10.jpg" alt="user" class="avatar-img">
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div>
                                                <div class="notifications-text">Winston Churchil shared a document with you</div>
                                                <div class="notifications-info">
                                                    <span class="badge badge-soft-violet">File Manager</span>
                                                    <div class="notifications-time">2 Oct, 2021</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <div class="media">
                                        <div class="media-head">
                                            <div class="avatar  avatar-icon avatar-sm avatar-danger avatar-rounded">
                                                <span class="initial-wrap">
                                                    <span class="feather-icon"><i data-feather="calendar"></i></span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div>
                                                <div class="notifications-text">Last 2 days left for the project to be completed</div>
                                                <div class="notifications-info">
                                                    <span class="badge badge-soft-orange">Updates</span>
                                                    <div class="notifications-time">14 Sep, 2021</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-footer"><a href="#"><u>View all notifications</u></a></div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="dropdown ps-2">
                        <a class=" dropdown-toggle no-caret" href="#" role="button" data-bs-display="static" data-bs-toggle="dropdown" data-dropdown-animation data-bs-auto-close="outside" aria-expanded="false">
                            <div class="avatar avatar-rounded avatar-xs">
                                <img src="{{ asset('assets') }}/dist/img/avatar12.jpg" alt="user" class="avatar-img">
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <div class="p-2">
                                <div class="media">
                                    <div class="media-head me-2">
                                        <div class="avatar avatar-primary avatar-sm avatar-rounded">
                                            <span class="initial-wrap">Hk</span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="dropdown">
                                            <a href="#" class="d-block dropdown-toggle link-dark fw-medium"  data-bs-toggle="dropdown" data-dropdown-animation data-bs-auto-close="inside">Hencework</a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <div class="p-2">
                                                    <div class="media align-items-center active-user mb-3">
                                                        <div class="media-head me-2">
                                                            <div class="avatar avatar-primary avatar-xs avatar-rounded">
                                                                <span class="initial-wrap">Hk</span>
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <a href="#" class="d-flex align-items-center link-dark">Hencework <i class="ri-checkbox-circle-fill fs-7 text-primary ms-1"></i></a>
                                                            <a href="#" class="d-block fs-8 link-secondary"><u>Manage your account</u></a>
                                                        </div>
                                                    </div>
                                                    <div class="media align-items-center mb-3">
                                                        <div class="media-head me-2">
                                                            <div class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{ asset('assets') }}/dist/img/avatar12.jpg" alt="user" class="avatar-img">
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <a href="#" class="d-block link-dark">{{ jcms()->name }} Team</a>
                                                            <a href="#" class="d-block fs-8 link-secondary">contact@hencework.com</a>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-block btn-outline-light btn-sm">
                                                        <span><span class="icon"><span class="feather-icon"><i data-feather="plus"></i></span></span>
                                                        <span>Add Account</span></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fs-7">contact@hencework.com</div>
                                        <a href="#" class="d-block fs-8 link-secondary"><u>Sign Out</u></a>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="profile.html">Profile</a>
                            <a class="dropdown-item" href="#"><span class="me-2">Offers</span><span class="badge badge-sm badge-soft-pink">2</span></a><div class="dropdown-divider"></div>
                            <h6 class="dropdown-header">Manage Account</h6>
                            <a class="dropdown-item" href="#"><span class="dropdown-icon feather-icon"><i data-feather="credit-card"></i></span><span>Payment methods</span></a>
                            <a class="dropdown-item" href="#"><span class="dropdown-icon feather-icon"><i data-feather="check-square"></i></span><span>Subscriptions</span></a>
                            <a class="dropdown-item" href="#"><span class="dropdown-icon feather-icon"><i data-feather="settings"></i></span><span>Settings</span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><span class="dropdown-icon feather-icon"><i data-feather="tag"></i></span><span>Raise a ticket</span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Terms & Conditions</a>
                            <a class="dropdown-item" href="#">Help & Support</a>
                        </div>
                    </div>
                </li>
            </ul>
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
